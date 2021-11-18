<?php
require_once 'User.php';
interface InterfaceUsers
{
    public function registrationUser($user);
    public function loginUser($dados);
    public function updateUser($dados, $new_photo);
    public function blockUser($idUser, $blockedUser);
    public function deleteUser($idUser);
    public function becameUserAdm($idUser);
    public function becameUserCol($idUser);
    public function becameUserCommon($idUser);
    public function contact($dados);
}

class UsersMySQL implements InterfaceUsers
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
    public function registrationUser($user)
    {
        if (!empty($user['SendRegistration'])) {
            $empty_input = false;

            $user_st = array_map('strip_tags', $user);
            $user = array_map('trim', $user_st);
            if (in_array('', $user)) {
                $empty_input = true;
                $_SESSION['msg'] = '<div class="alert alert-warning d-flex align-items-center" role="alert">
                                    <span><i class="fas fa-exclamation-triangle fa-2x"></i></span>
                                    <div class="fw-bold ms-3">
                                        Necessário prencher todos os campos!
                                    </div>
                                </div>';
                                return $user;
                header("Location: ../../frontend/content/registration.php");
                exit;
            } else if (strlen($user['inputPassword']) < 6) {
                $empty_input = true;
                $_SESSION['msg'] = '<div class="alert alert-warning d-flex align-items-center" role="alert">
                                    <span><i class="fas fa-exclamation-triangle fa-2x"></i></span>
                                    <div class="fw-bold ms-3">
                                        A senha deve ter no minímo 6 caracteres!
                                    </div>
                                </div>';
                return $user;
                header("Location: ../../frontend/content/registration.php");
                exit;
            } else if (!filter_var($user['inputEmail'], FILTER_VALIDATE_EMAIL)) {
                $empty_input = true;
                $_SESSION['msg'] = '<div class="alert alert-warning d-flex align-items-center" role="alert">
                                    <span><i class="fas fa-exclamation-triangle fa-2x"></i></span>
                                    <div class="fw-bold ms-3">
                                        Endereço de email não é válido! Tente novamente com base nesse formato: <strong>email@email.com</strong>
                                    </div>
                                </div>';
                return $user;
                header("Location: ../../frontend/content/registration.php");
                exit;
            } else {
                $sql = "SELECT Id FROM users WHERE Email ='" . $user['inputEmail'] ."'";
                $result_user = $this->connect->prepare($sql);
                $result_user->execute();

                if (($result_user) AND ($result_user->rowCount() != 0)) {
                    $empty_input = true;
                    $_SESSION['msg'] = '<div class="alert alert-warning d-flex align-items-center" role="alert">
                                    <span><i class="fas fa-exclamation-triangle fa-2x"></i></span>
                                    <div class="fw-bold ms-3">
                                        Endereço de email já existe! Tente novamente com outro.
                                    </div>
                                </div>';
                    return $user;
                    header("Location: ../../frontend/content/registration.php");
                    exit;
                }
            }

            // Novo Usuário
            $receiveUser = new User(
                '',
                $user["inputName"],
                $user['inputEmail'],
                $user['inputPassword'],
                $user['inputGender'],
                2,
                0,
                $user["SendRegistration"]
            );

            $name = ucwords($receiveUser->getName());
            $email = $receiveUser->getEmail();
            $password = md5($receiveUser->getPassword());
            // $password = password_hash($receiveUser->getPassword(), PASSWORD_DEFAULT);
            $phone = $receiveUser->getPhone();
            $gender = $receiveUser->getGender();
            $birth = $receiveUser->getBirth();
            $occupation = $receiveUser->getOccupation();
            $photo = $receiveUser->getPhoto();
            $type = $receiveUser->getType();
            $blocked = $receiveUser->getBlocked();
            $sendRegistration = $receiveUser->getSendRegistration();

            if (!$empty_input) {
                $sql =  "INSERT INTO users (Name, Email, Password, Phone, Gender, Birth, Occupation, Photo, Type, Blocked) VALUES (:name, :email, :password, :phone, :gender, :birth, :occupation, :photo, :type, :blocked)";

                $result_user = $this->connect->prepare($sql);

                $result_user->bindParam(':name', $name, PDO::PARAM_STR);
                $result_user->bindParam(':email', $email, PDO::PARAM_STR);
                $result_user->bindParam(':phone', $phone, PDO::PARAM_INT);
                $result_user->bindParam(':password', $password, PDO::PARAM_STR);
                $result_user->bindParam(':gender', $gender, PDO::PARAM_STR);
                $result_user->bindParam(':birth', $birth, PDO::PARAM_INT);
                $result_user->bindParam(':occupation', $occupation, PDO::PARAM_STR);
                $result_user->bindParam(':photo', $photo, PDO::PARAM_STR);
                $result_user->bindParam(':type', $type, PDO::PARAM_INT);
                $result_user->bindParam(':blocked', $blocked, PDO::PARAM_INT);

                $result_user->execute();

                if ($result_user->rowCount()) {
                    $_SESSION['msg'] = '<div class="alert alert-primary d-flex align-items-center" role="alert">
                                            <span><i class="fas fa-info-circle fa-2x"></i></span>
                                            <div class="ms-2">
                                                Usuário cadastrado com sucesso!
                                            </div>
                                        </div>';
                    unset($user);
                    header("Location: ../../frontend/content/login.php");
                    exit;
                } else {
                    $_SESSION['msg'] = '<div class="alert alert-danger d-flex align-items-center" role="alert">
                                    <span><i class="fas fa-exclamation-triangle fa-2x"></i></span>
                                    <div class="fw-bold ms-3">
                                        Usuário não foi cadastrado!
                                    </div>
                                </div>';
                                return $user;
                    header("Location: ../../frontend/content/registration.php");
                    exit;
                }
            }
        }
    }

    public function loginUser($dados)
    {
        if (empty($dados['Sendlogin'])) {

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
                header("Location: ../../frontend/content/login.php");
                exit;
            }

            $sql = "SELECT * FROM users WHERE Email =:inputEmail  LIMIT 1";
            $result_user = $this->connect->prepare($sql);
            $result_user->bindParam(':inputEmail', $dados['inputEmail'], PDO::PARAM_STR);
            $result_user->execute();

            if (($result_user) and ($result_user->rowCount() != 0)) {
                $row_user = $result_user->fetch(PDO::FETCH_ASSOC);
                // echo '<pre>';
                // var_dump($row_user);
                // echo '</pre>';
                // exit;

                $password = md5($dados['inputPassword']);
                $hash = $row_user['Password'];

                if ($password == $hash) {
                    $_SESSION['Id'] = $row_user['Id'];
                    $_SESSION['Name'] = $row_user['Name'];
                    $_SESSION['Email'] = $row_user['Email'];
                    $_SESSION['Phone'] = $row_user['Phone'];
                    $_SESSION['Gender'] = $row_user['Gender'];
                    $_SESSION['Birth'] = $row_user['Birth'];
                    $_SESSION['Occupation'] = $row_user['Occupation'];
                    $_SESSION['Photo'] = $row_user['Photo'];
                    $_SESSION['Type'] = $row_user['Type'];
                    $_SESSION['Blocked'] = $row_user['Blocked'];

                    // print_r($_SESSION);
                    // exit;

                    // Redireciona para página de perfil
                    if ($_SESSION['Blocked'] == 0) {
                        // echo $_SESSION['Blocked'];
                        header("Location: ../../app/index.php?pg=profile");
                        exit;
                    } else {
                        $_SESSION['msg'] = '<div class="alert alert-danger d-flex align-items-center" role="alert">
                                    <span><i class="fas fa-exclamation-triangle fa-2x"></i></span>
                                    <div class="fw-bold ms-3">
                                        Sua conta foi bloqueada! Em caso de dúvida entre em contato com os administradores.
                                    </div>
                                </div>';
                        return $dados;
                        header("Location: ../../frontend/content/login.php");
                        exit;
                    }
                } else {
                    $_SESSION['msg'] = '<div class="alert alert-warning d-flex align-items-center" role="alert">
                                    <span><i class="fas fa-exclamation-triangle fa-2x"></i></span>
                                    <div class="fw-bold ms-3">
                                        Senha incorreta! Tente novamente ou clique em "Esqueceu a senha?" para redefini-la.
                                    </div>
                                </div>';
                    return $dados;
                    header("Location: ../../frontend/content/login.php");
                    exit;
                }
            } else {
                $_SESSION['msg'] = '<div class="alert alert-danger d-flex align-items-center" role="alert">
                                    <span><i class="fas fa-exclamation-triangle fa-2x"></i></span>
                                    <div class="fw-bold ms-3">
                                        Usuário ou senha incorretos!
                                    </div>
                                </div>';
                return $dados;
                header("Location: ../../frontend/content/login.php");
                exit;
            }
        }
    }

    public function updateUser($dados, $new_photo)
    {
        session_start();
        ob_start();
        if (!empty($dados['inputSendEdit'])) {
            $empty_input = false;

            $user_st = array_map('strip_tags', $dados);
            $user = array_map('trim', $user_st);

            $_SESSION['Name'] = $dados['inputName'];
            $_SESSION['Email'] = $dados['inputEmail'];
            $_SESSION['Phone'] = $dados['inputPhone'];
            $_SESSION['Gender'] = $dados['gridRadios'];
            $_SESSION['Birth'] = $dados['inputBirth'];
            $_SESSION['Occupation'] = $dados['inputOccupation'];

            if (!$empty_input) {
                if (!empty($new_photo)) {
                    $_SESSION['Photo'] = $new_photo;
                    $sql = "UPDATE users SET Name = :name, Email = :email, Phone = :phone, Gender = :gender, Birth = :birth, Occupation = :occupation, Photo = :photo WHERE  Id = {$_SESSION['Id']}";
                } else {
                    $sql = "UPDATE users SET Name = :name, Email = :email, Phone = :phone, Gender = :gender, Birth = :birth, Occupation = :occupation WHERE  Id = {$_SESSION['Id']}";
                }

                $result_user = $this->connect->prepare($sql);

                $result_user->bindParam(':name', $_SESSION['Name'], PDO::PARAM_STR);
                $result_user->bindParam(':email', $_SESSION['Email'], PDO::PARAM_STR);
                $result_user->bindParam(':phone', $_SESSION['Phone'], PDO::PARAM_INT);
                $result_user->bindParam(':gender', $_SESSION['Gender'], PDO::PARAM_STR);
                $result_user->bindParam(':birth', $_SESSION['Birth'], PDO::PARAM_INT);
                $result_user->bindParam(':occupation', $_SESSION['Occupation'], PDO::PARAM_STR);
                if (!empty($new_photo)) {
                    $result_user->bindParam(':photo', $_SESSION['Photo'], PDO::PARAM_STR);
                }

                $result_user->execute();

                $_SESSION['msg'] = '<div class="alert alert-success d-flex align-items-center" role="alert">
                                    <span><i class="fas fa-check-circle fa-2x"></i></span>
                                    <div class="fw-bold ms-3">
                                        Usuário editado com sucesso!
                                    </div>
                                </div>';
                unset($user);
                header("Location: ../../../app/index.php?pg=profile");
                exit;
            }
        }
    }

    public function becameUserAdm($idUser)
    {
        session_start();
        ob_start();

        $sql = "UPDATE users SET Type = 0 WHERE  Id = $idUser";
        $result_user = $this->connect->prepare($sql);
        $result_user->execute();

        $sqlSelect = "SELECT Name FROM users WHERE Id = $idUser";
        $select_user = $this->connect->prepare($sqlSelect);
        $select_user->execute();

        $row_user = $select_user->fetch(PDO::FETCH_ASSOC);
        extract($row_user);

        $_SESSION['msg'] = '<div class="alert alert-success d-flex align-items-center" role="alert">
                                    <span><i class="fas fa-check-circle fa-2x"></i></span>
                                    <div class="fw-bold ms-3">
                                        Usuário ' . $Name . ' promovido a Administrador com sucesso!
                                    </div>
                                </div>';
        header("Location: ../../../app/index.php?pg=usersView");
        exit;
    }

    public function becameUserCol($idUser)
    {
        session_start();
        ob_start();

        $sql = "UPDATE users SET Type = 1 WHERE  Id = $idUser";
        $result_user = $this->connect->prepare($sql);
        $result_user->execute();

        $sqlSelect = "SELECT Name FROM users WHERE Id = $idUser";
        $select_user = $this->connect->prepare($sqlSelect);
        $select_user->execute();

        $row_user = $select_user->fetch(PDO::FETCH_ASSOC);
        extract($row_user);

        $_SESSION['msg'] = '<div class="alert alert-success d-flex align-items-center" role="alert">
                                    <span><i class="fas fa-check-circle fa-2x"></i></span>
                                    <div class="fw-bold ms-3">
                                        Usuário ' . $Name . ' promovido a Colaborador com sucesso!
                                    </div>
                                </div>';
        header("Location: ../../../app/index.php?pg=usersView");
        exit;
    }

    public function becameUserCommon($idUser)
    {
        session_start();
        ob_start();

        $sql = "UPDATE users SET Type = 2 WHERE  Id = $idUser";
        $result_user = $this->connect->prepare($sql);
        $result_user->execute();

        $sqlSelect = "SELECT Name FROM users WHERE Id = $idUser";
        $select_user = $this->connect->prepare($sqlSelect);
        $select_user->execute();

        $row_user = $select_user->fetch(PDO::FETCH_ASSOC);
        extract($row_user);

        $_SESSION['msg'] = '<div class="alert alert-success d-flex align-items-center" role="alert">
                                    <span><i class="fas fa-check-circle fa-2x"></i></span>
                                    <div class="fw-bold ms-3">
                                        Usuário ' . $Name . ' promovido a Usuário comum com sucesso!
                                    </div>
                                </div>';
        header("Location: ../../../app/index.php?pg=usersView");
        exit;
    }

    public function blockUser($idUser, $blockedUser)
    {
        session_start();
        ob_start();

        $sqlSelect = "SELECT Name FROM users WHERE Id = $idUser";
        $select_user = $this->connect->prepare($sqlSelect);
        $select_user->execute();

        $row_user = $select_user->fetch(PDO::FETCH_ASSOC);
        extract($row_user);

        if ($blockedUser == "Bloqueado") {
            $sql = "UPDATE users SET Blocked = 0 WHERE  Id = $idUser";
            $_SESSION['msg'] = '<div class="alert alert-success d-flex align-items-center" role="alert">
                                    <span><i class="fas fa-check-circle fa-2x"></i></span>
                                    <div class="fw-bold ms-3">
                                        Usuário ' . $Name . ' desbloqueado com sucesso!
                                    </div>
                                </div>';
        } else {
            $sql = "UPDATE users SET Blocked = 1 WHERE  Id = $idUser";
            $_SESSION['msg'] = '<div class="alert alert-danger d-flex align-items-center" role="alert">
                                    <span><i class="fas fa-exclamation-triangle fa-2x"></i></span>
                                    <div class="fw-bold ms-3">
                                        Usuário ' . $Name . ' bloqueado com sucesso!
                                    </div>
                                </div>';
        }
        $result_user = $this->connect->prepare($sql);
        $result_user->execute();

        header("Location: ../../../app/index.php?pg=usersView");
        exit;
    }

    public function deleteUser($idUser)
    {
        session_start();
        ob_start();

        $sqlSelect = "SELECT Name FROM users WHERE Id = $idUser";
        $select_user = $this->connect->prepare($sqlSelect);
        $select_user->execute();

        $row_user = $select_user->fetch(PDO::FETCH_ASSOC);
        extract($row_user);

        $sql = "DELETE FROM users WHERE  Id = $idUser";
        $_SESSION['msg'] = '<div class="alert alert-danger d-flex align-items-center" role="alert">
                                    <span><i class="fas fa-exclamation-triangle fa-2x"></i></span>
                                    <div class="fw-bold ms-3">
                                        Usuário ' . $Name . ' foi deletado!
                                    </div>
                                </div>';

        $result_user = $this->connect->prepare($sql);
        $result_user->execute();

        header("Location: ../../../app/index.php?pg=usersView");
        exit;
    }

    public function contact($dados)
    {
        session_start();
        ob_start();

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
                header("Location: ../../../app/index.php?pg=default/#contato");
                exit;
            }

            $name = ucwords($dados['inputName']);
            $email = $dados['inputEmail'];
            $mensage = $dados['inputMensage'];

            if (!$empty_input) {
                $sql =  "INSERT INTO contact (Name, Email, Mensage) VALUES (:name, :email, :mensage)";

                $result_user = $this->connect->prepare($sql);

                $result_user->bindParam(':name', $name, PDO::PARAM_STR);
                $result_user->bindParam(':email', $email, PDO::PARAM_STR);
                $result_user->bindParam(':mensage', $mensage, PDO::PARAM_STR);

                $result_user->execute();

                if ($result_user->rowCount()) {
                    $_SESSION['msg'] = '<div class="alert alert-primary d-flex align-items-center" role="alert">
                                            <span><i class="fas fa-info-circle fa-2x"></i></span>
                                            <div class="ms-2">
                                                Mensagem enviada com sucesso. Iremos responder o mais breve possível!
                                            </div>
                                        </div>';
                    unset($dados);
                    header("Location: ../../../app/index.php?pg=default/#contato");
                    exit;
                } else {
                    $_SESSION['msg'] = '<div class="alert alert-danger d-flex align-items-center" role="alert">
                                    <span><i class="fas fa-exclamation-triangle fa-2x"></i></span>
                                    <div class="fw-bold ms-3">
                                        Não foi possível enviar a mensagem!
                                    </div>
                                </div>';
                    header("Location: ../../../app/index.php?pg=default/#contato");
                    exit;
                }
            }
        }
    }
}
