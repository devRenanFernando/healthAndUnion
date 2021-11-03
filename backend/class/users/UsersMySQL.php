<?php
require_once 'User.php';
interface InterfaceUsers
{
    public function registrationUser($user);
    public function loginUser($dados);
    public function updateUser($dados, $new_photo);
    public function usersView();
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
        session_start();
        ob_start();
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

    public function loginUser($dados)
    {
        session_start();
        ob_start();
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
                        header("Location: ../../../app/index.php?pg=profile");
                        exit;
                    } else {
                        $_SESSION['msg'] = "<p class='text-danger'>Sua conta foi bloqueada! Em caso de dúvida entre em contato com os administradores.</p>";
                        // echo $_SESSION['msg'];
                        header("Location: ../../../frontend/content/login.php");
                        exit;
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

                $_SESSION['msg'] = "<p class='text-info text-center'>Usuário editado com sucesso!</p>";
                unset($user);
                header("Location: ../../../app/index.php?pg=profile");
                exit;
            }
        }
    }

    public function usersView()
    {

        $queryUsers = "SELECT Id, Name, Email, Phone, Gender, Birth, Occupation, Photo, Type, Blocked FROM users";

        $resultUsers = $this->connect->prepare($queryUsers);
        $resultUsers->execute();

        if (($resultUsers) and ($resultUsers->rowCount() != 0)) {

            echo "
            <main>
                <section id='usersView'>
                    <div class='container-flex m-4 p-4'>
                        <table class='table align-middle'>
                            <thead>
                                <tr>
                                    <th scope='col' class='fs-2 text-center'>#</th>
                                    <th scope='col' class='fs-2 text-center'>Nome</th>
                                    <th scope='col' class='fs-2 text-center'>Tipo de Usuário</th>
                                    <th scope='col' class='fs-2 text-center'>Bloqueado</th>
                                    <th scope='col'></th>
                                    <th scope='col'></th>
                                </tr>
                            </thead>
                            <tbody class='fs-5 text-center'>
        ";

            while ($row_user = $resultUsers->fetch(PDO::FETCH_ASSOC)) {
                extract($row_user);

                // Formtação do Número de Telefone
                $code = substr($Phone, 0, 2);
                $part1 = substr($Phone, 2, 5);
                $part2 = substr($Phone, 7, 10);

                // <td>$Email</td>
                //             <td>({$code}) {$part1}-{$part2}</td>
                //             <td>$Gender</td>
                //             <td>$Birth</td>
                //             <td>$Occupation</td>

                // Formatação da data de Aniversário
                $d = strtotime($Birth);
                $Birth = date("d-m-Y", $d);
                $age = date('Y') - date("Y", $d);
                
                // Formatação do Tipo de Usuário
                switch ($Type) {
                    case '0':
                        $Type = "Administrador";
                        break;

                    case '1':
                        $Type  = "Colaborador";
                        break;

                    default:
                        $Type  = "Usuário";
                        break;
                }

                // Formatação do Bloqueio
                switch ($Blocked) {
                    case '0':
                        $Blocked = "Negativo";
                        break;

                    default:
                        $Blocked = "Bloqueado";
                        break;
                }
                echo "
                                <tr>
                                    <th scope='row'>$Id</th>
                                    <td>$Name</td>
                                    <td>$Type</td>
                                    <td>$Blocked</td>
                                    <td><button type='button' data-bs-toggle='modal' data-bs-target='#exampleModal' class='btn btn-outline-primary fw-bold mt-3 px-5'>Ver Detalhes</button></td>
                                    <td><button id='myBtn' class='btn btn-outline-primary fw-bold mt-3 px-5'>Bloquear</button></td>
                                </tr> ";

                echo '
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="exampleModalLabel">' . $Name . ' - ' . $age . ' anos</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <img id="output" class="perfil-foto d-flex mx-auto" src=" ';

                if ($Photo == null) {
                    if ($Gender == 'Masculino') {
                        echo '../frontend/assets/svg/user.svg';
                    } else if ($Gender == 'Feminino') {
                        $random = random_int(1, 3);
                        echo "../frontend/assets/svg/userFemale0{$random}.svg";
                    } else {
                        echo '#';
                    }
                } else {
                    echo "../frontend/assets/upload/$Photo";
                } ?>" alt="Foto de <?= $Name;
                    echo ' ">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Fechar</button>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                
            ';
                                                                                                        }
                                                                                                        echo '
                            </tbody>
                        </table>
                    </section>
                </main>
            </div>';
                                                                                                    } else {
                                                                                                        echo "<p class='text-danger'>Nenhum usuário encontrado!</p>";
                                                                                                    }
                                                                                                }
                                                                                            }
