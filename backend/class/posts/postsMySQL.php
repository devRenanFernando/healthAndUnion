<?php
interface InterfacePosts
{
    public function registrationPosts($dados);
    public function updatePost($dados, $new_photo, $IdPost);
    public function blockPost($idPost, $blockedPost);
}

class PostsMySQL implements InterfacePosts
{
    // Attributes
    private $connect;

    // Construct
    public function __construct()
    {
        $host = 'localhost';
        $user = 'root';
        $password = '';
        $db = 'tcc_site';

        // Aqui foi usando PHP PDO; Vi num vídeo para conseguir fazer a página de login...
        try {
            $this->connect = new PDO("mysql:host=$host;dbname=" . $db, $user, $password);
            // echo "Conexão com o banco de dados realizada com sucesso!";
        } catch (PDOException $err) {
            // echo "ERRO: Conexão com o banco de dados não realizada com sucesso. Erro gerado " . $err->getMessage();
        }
    }

    // Methods
    public function registrationPosts($dados)
    {
        if (!empty($dados['SendRegistration'])) {
            $empty_input = false;

            $dados_st = array_map('strip_tags', $dados);
            $dados = array_map('trim', $dados_st);
            if (in_array('', $dados)) {
                $empty_input = true;
                $_SESSION['msg'] = '<div class="alert alert-warning d-flex align-items-center" role="alert">
                                    <span><i class="fas fa-exclamation-triangle fa-2x"></i></span>
                                    <div class="fw-bold ms-3">
                                        Necessário prencher todos os campos!
                                    </div>
                                </div>';
                return $dados;
                header("Location: registrationPosts.php");
                exit;
            }

            $title = strtoupper($dados['inputTitle']);
            $subtitle = $dados['inputSubtitle'];
            $scope = $dados['inputScope'];
            $author = $dados['inputAuthor'];
            $caption = $dados['inputCaption'];

            if (!empty($_FILES['inputFile']['name'])) {
                $img = $_FILES['inputFile']['name'];

                $extension = strtolower(pathinfo($img, PATHINFO_EXTENSION));

                $new_img = md5(time()) . "." . $extension;

                $directory = "../../frontend/assets/upload/";

                move_uploaded_file($_FILES['inputFile']['tmp_name'], $directory . $new_img);
            }


            if (!$empty_input) {
                $sql =  'INSERT INTO posts (Title, Subtitle, Scope, Send_date, Edit_date, Author, Img, Caption, BlockedPost) VALUES (:title, :subtitle, :scope, NOW(), NOW(), :author, :new_img, :caption, 1)';

                $result_posts = $this->connect->prepare($sql);

                $result_posts->bindParam(':title', $title, PDO::PARAM_STR);
                $result_posts->bindParam(':subtitle', $subtitle, PDO::PARAM_STR);
                $result_posts->bindParam(':scope', $scope, PDO::PARAM_STR);
                $result_posts->bindParam(':author', $author, PDO::PARAM_STR);
                $result_posts->bindParam(':new_img', $new_img, PDO::PARAM_STR);
                $result_posts->bindParam(':caption', $caption, PDO::PARAM_STR);

                $result_posts->execute();

                if ($result_posts->rowCount()) {
                    $_SESSION['msg'] = '<div class="alert alert-primary d-flex align-items-center" role="alert">
                                            <span><i class="fas fa-info-circle fa-2x"></i></span>
                                            <div class="ms-2">
                                                Post foi enviado para os Administradores para confirmação de publicação!
                                            </div>
                                        </div>';
                    unset($dados);
                    header("Location: ../../index.php?pg=myPosts");
                    exit;
                } else {
                    $_SESSION['msg'] = '<div class="alert alert-danger d-flex align-items-center" role="alert">
                                    <span><i class="fas fa-exclamation-triangle fa-2x"></i></span>
                                    <div class="fw-bold ms-3">
                                        Post não cadastrado!
                                    </div>
                                </div>';
                    return $dados;
                    header("Location: registrationPosts.php");
                    exit;
                }
            }
        }
    }

    public function updatePost($dados, $new_photo, $IdPost)
    {
        if (!empty($dados['inputSendEdit'])) {
            $empty_input = false;

            $post_st = array_map('strip_tags', $dados);
            $post = array_map('trim', $post_st);

            $title = strtoupper($dados['inputTitle']);
            $subtitle = $dados['inputSubtitle'];
            $scope = $dados['inputScope'];
            $caption = $dados['inputCaption'];

            if (!$empty_input) {
                if (!empty($new_photo)) {
                    $sql = "UPDATE posts SET Title = :title, Subtitle = :subtitle, Scope = :scope, Edit_date = NOW(), Img = :img, Caption = :caption WHERE  IdPost = $IdPost";
                } else {
                    $sql = "UPDATE posts SET Title = :title, Subtitle = :subtitle, Scope = :scope, Edit_date = NOW(), Caption = :caption WHERE  IdPost = $IdPost";
                }

                $result_post = $this->connect->prepare($sql);

                $result_post->bindParam(':title', $title, PDO::PARAM_STR);
                $result_post->bindParam(':subtitle', $subtitle, PDO::PARAM_STR);
                $result_post->bindParam(':scope', $scope, PDO::PARAM_STR);
                $result_post->bindParam(':caption', $caption, PDO::PARAM_STR);
                if (!empty($new_photo)) {
                    $result_post->bindParam(':img', $new_photo, PDO::PARAM_STR);
                }

                $result_post->execute();

                $_SESSION['msg'] = '<div class="alert alert-success d-flex align-items-center" role="alert">
                                    <span><i class="fas fa-check-circle fa-2x"></i></span>
                                    <div class="fw-bold ms-3">
                                        Post editado com sucesso!
                                    </div>
                                </div>';
                unset($post);
                header("Location: ../../../index.php?pg=myPosts");
                exit;
            }
        }
    }

    public function blockPost($idPost, $blockedPost)
    {
        session_start();
        ob_start();

        if ($blockedPost == "Bloqueado") {
            $sql = "UPDATE posts SET BlockedPost = 0 WHERE  IdPost = $idPost";
            $_SESSION['msg'] = '<div class="alert alert-success d-flex align-items-center" role="alert">
                                    <span><i class="fas fa-check-circle fa-2x"></i></span>
                                    <div class="fw-bold ms-3">
                                        Publicação ' . $idPost . ' está visível com sucesso!
                                    </div>
                                </div>';
        } else {
            $sql = "UPDATE post SET BlockedPost = 1 WHERE  Id = $idPost";
            $_SESSION['msg'] = '<div class="alert alert-danger d-flex align-items-center" role="alert">
                                    <span><i class="fas fa-exclamation-triangle fa-2x"></i></span>
                                    <div class="fw-bold ms-3">
                                        Publicação ' . $idPost . ' foi bloqueada com sucesso!
                                    </div>
                                </div>';
        }
        $resultPostBlocked = $this->connect->prepare($sql);
        $resultPostBlocked->execute();

        header("Location: ../../../index.php?pg=postsSituation");
        exit;
    }
}
