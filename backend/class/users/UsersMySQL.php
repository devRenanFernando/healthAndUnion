<?php
session_start();
require_once '../Connection.php';
require_once './User.php';
interface InterfaceUsers
{
    public function registrationUser($user);
    public function deleteUser($Id);
    public function updateUser($user);
    public function searchUser($Id);
    public function loginUser($dados);
    public function validationEmail($email);
    public function getTableUsers();
}

class UsersMySQL implements InterfaceUsers
{
    // Attributes
    private $connection;

    // Construct
    public function __construct()
    {
        $host = 'localhost';
        $user = 'root';
        $password = '';
        $db = 'tcc_site';

        // Aqui foi o jeito de conectar com o banco de dados que meu professor ensinou
        $this->connection = new Connection($host, $user, $password, $db);
        $this->connection->connect();
        if ($this->connection->connect() == false) {
            echo "Erro: "; //. mysqli_error();
        } else {
            // echo 'Conectado ao servidor!!! ' . '<b>' . $db . '</b>';
        }

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
                $_SESSION['msg'] = "<p class='text-danger'>Erro: Necessário prencher todos os campos!</p>";
                header("Location: ../../../frontend/content/registration.php");
                exit;
            } else if (strlen($user['inputPassword']) < 6) {
                $empty_input = true;
                $_SESSION['msg'] = "<p class='text-danger'>A senha deve ter no minímo 6 caracteres!</p>";
                header("Location: ../../../frontend/content/registration.php");
                exit;
            }

            // Novo Usuário
            $receiveUser = new User(
                '',
                $user["inputName"],
                $user['inputEmail'],
                $user['inputPassword'],
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
                    $_SESSION['msg'] = "<p class='text-info'>Usuário cadastrado com sucesso!</p>";
                    unset($user);
                    header("Location: ../../../frontend/content/login.php");
                    exit;
                } else {
                    $_SESSION['msg'] = "<p class='text-danger'>Erro: Usuário não foi cadastrado!</p>";
                    header("Location: ../../../frontend/content/registration.php");
                    exit;
                }
            }
        }
    }

    public function deleteUser($Id)
    {
        $sql = "DELETE FROM users WHERE Id = '$Id'";

        $this->connection->executeQuery($sql);
    }

    public function updateUser($user)
    {
        $name = $user->getName();
        $email = $user->getEmail();
        $password = md5($user->getPassword());
        $phone = $user->getPhone();
        $gender = $user->getGender();
        $birth = $user->getBirth();
        $occupation = $user->getOccupation();
        $photo = $user->getPhoto();
        $type = $user->getType();
        $blocked = $user->getBlocked();

        $sql =  "UPDATE users SET Name = '$name', Email = '$email', Password = '$password', Phone = '$phone', Gender = '$gender', Birth = '$birth', Occupation = '$occupation', Photo = '$photo',  Type = '$type', Blocked = '$blocked'";

        $this->connection->executeQuery($sql);
    }

    public function searchUser($Id)
    {
        $query = "SELECT * FROM users WHERE Id = '$Id'";
        $lines = $this->connection->FirstRegister($query);
        $user = new User(
            $lines['Id'],
            $lines['Name'],
            $lines['Email'],
            $lines['Password'],
            $lines['Phone'],
            $lines['Gender'],
            $lines['Birth'],
            $lines['Occupation'],
            $lines['Photo'],
            $lines['Type'],
            $lines['Blocked']
        );

        return $user;
    }

    public function loginUser($dados)
    {
        if (empty($dados['Sendlogin'])) {
            // echo '<pre>';
            // echo 'Seus dados:';
            // print_r($dados);
            // echo '</pre>';
            // exit;

            $sql = "SELECT * FROM users WHERE Email =:inputEmail  LIMIT 1";
            $result_user = $this->connect->prepare($sql);
            $result_user->bindParam(':inputEmail', $dados['inputEmail'], PDO::PARAM_STR);
            $result_user->execute();

            if (($result_user) and ($result_user->rowCount() != 0)) {
                $row_user = $result_user->fetch(PDO::FETCH_ASSOC);
                // echo '<pre>';
                // var_dump($row_user);
                // echo '</pre>';

                $password = md5($dados['inputPassword']);
                $hash = $row_user['Password'];

                if ($password == $hash) {
                    $_SESSION['Id'] = $row_user['Id'];
                    $_SESSION['Name'] = $row_user['Name'];
                    $_SESSION['Email'] = $row_user['Email'];
                    $_SESSION['Phone'] = $row_user['Phone'];
                    $_SESSION['Birth'] = $row_user['Birth'];
                    $_SESSION['Occupation'] = $row_user['Occupation'];
                    $_SESSION['Photo'] = $row_user['Photo'];
                    $_SESSION['Type'] = $row_user['Type'];
                    $_SESSION['Blocked'] = $row_user['Blocked'];

                    // print_r($_SESSION);
                    // echo $_SESSION['Blocked'];
                    // exit;

                    // Redireciona para determinada página com base no Type User
                    switch ($_SESSION['Type']) {
                            // ADM
                        case '0':
                            if ($_SESSION['Blocked'] == 0) {
                                // echo $_SESSION['Blocked'];
                                header("Location: ../../../app/index.php?pg=adm");
                                exit;
                            } else {
                                $_SESSION['msg'] = "<p class='text-danger'>Sua conta foi bloqueada! Em caso de dúvida entre em contato com os administradores.</p>";
                                // echo $_SESSION['msg'];
                                header("Location: ../../../frontend/content/login.php");
                                exit;
                            }
                            break;
                            // Contributors
                        case '1':
                            if ($_SESSION['Blocked'] == 0) {
                                // echo $_SESSION['Blocked'];
                                header("Location: ../../../app/index.php?pg=contributors");
                                exit;
                            } else {
                                $_SESSION['msg'] = "<p class='text-danger'>Sua conta foi bloqueada! Em caso de dúvida entre em contato com os administradores.</p>";
                                // echo $_SESSION['msg'];
                                header("Location: ../../../frontend/content/login.php");
                                exit;
                            }
                            break;
                            // User
                        default:
                            if ($_SESSION['Blocked'] == 0) {
                                // echo $_SESSION['Blocked'];
                                header("Location: ../../../app/index.php?pg=user");
                                exit;
                            } else {
                                $_SESSION['msg'] = "<p class='text-danger'>Sua conta foi bloqueada! Em caso de dúvida entre em contato com os administradores.</p>";
                                // echo $_SESSION['msg'];
                                header("Location: ../../../frontend/content/login.php");
                                exit;
                            }
                    }
                } else {
                    $_SESSION['msg'] = "<p class='text-danger'>Senha inválida!</p>";
                    // echo $_SESSION['msg'];
                    header("Location: ../../../frontend/content/login.php");
                    exit;
                }
            } else {
                $_SESSION['msg'] = "<p class='text-danger'>Usuário ou senha inválido!</p>";
                // echo $_SESSION['msg'];
                header("Location: ../../../frontend/content/login.php");
                exit;
            }
        }
    }

    public function validationEmail($email)
    {
        $query = "SELECT * FROM tbl_users WHERE email_user = '$email'";
        $lines = $this->connection->validationUser($query);

        return $lines;
    }

    public function getTableUsers()
    {
        $sql = "SELECT * FROM users";
        $list = $this->connection->executeQuery($sql);
        $arrayUsers = array();
        while ($lines = mysqli_fetch_array($list)) {
            $user = new User(
                $lines['Id'],
                $lines['Name'],
                $lines['Email'],
                $lines['Password'],
                $lines['Phone'],
                $lines['Gender'],
                $lines['Birth'],
                $lines['Occupation'],
                $lines['Photo'],
                $lines['Type'],
                $lines['Blocked']
            );
            array_push($arrayUsers, $user);
        }
        return $arrayUsers;
    }
}
