<?php
interface InterfacePosts
{
    public function registrationPosts($dados);
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

            if (!$empty_input) {
                $sql =  'INSERT INTO posts (Title, Subtitle, Scope, Send_date, Edit_date, Author) VALUES (:title, :subtitle, :scope, NOW(), NOW(), :author)';

                $result_posts = $this->connect->prepare($sql);

                $result_posts->bindParam(':title', $title, PDO::PARAM_STR);
                $result_posts->bindParam(':subtitle', $subtitle, PDO::PARAM_STR);
                $result_posts->bindParam(':scope', $scope, PDO::PARAM_STR);
                $result_posts->bindParam(':author', $author, PDO::PARAM_STR);

                $result_posts->execute();

                if ($result_posts->rowCount()) {
                    $_SESSION['msg'] = '<div class="alert alert-primary d-flex align-items-center" role="alert">
                                            <span><i class="fas fa-info-circle fa-2x"></i></span>
                                            <div class="ms-2">
                                                Post foi enviado  com sucesso!
                                            </div>
                                        </div>';
                    unset($dados);
                    header("Location: ../../app/index.php?pg=myPosts");
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
}