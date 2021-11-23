<?php

if ((!isset($_SESSION['Id'])) and (!isset($_SESSION['Name']))) {
    $_SESSION['msg'] = '<div class="alert alert-danger d-flex align-items-center" role="alert">
                                        <span><i class="fas fa-exclamation-triangle fa-2x"></i></span>
                                        <div class="fw-bold ms-3">
                                            É preciso realizar o login para acessar a página!
                                        </div>
                                    </div>';
    header("Location: ./frontend/content/login.php");
    exit;
}
// require "reposidld"

$host = 'localhost';
$user = 'root';
$password = '';
$db = 'tcc_site';

// Aqui foi usado PHP PDO;
try {
    $connect = new PDO("mysql:host=$host;dbname=" . $db, $user, $password);
    // echo "Conexão com o banco de dados realizada com sucesso!";
} catch (PDOException $err) {
    // echo "ERRO: Conexão com o banco de dados não realizada com sucesso. Erro gerado " . $err->getMessage();
}

$queryUsers = "SELECT * FROM users ORDER BY Id ASC LIMIT 0, 10";
$resultUsers = $connect->prepare($queryUsers);
$resultUsers->execute();

?>

<main>
    <section id='usersView'>

        <div class='row d-flex align-items-center pt-4 me-0'>
            <label for='inputSearchUSer' class='col-sm-2 col-form-label text-center text-light fs-4'><strong>Buscar usuário</strong></label>
            <div class="col-sm-10">
                <input type='text' class='form-control' id='inputSearchUSer' onkeyup="searchUser()" name='inputSearchUSer' title="Type in a name" placeholder="Procure por nomes..">
            </div>
        </div>

        <?php

        if (isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }

        ?>
        <div class='container-flex m-4 p-4'>
            <div class="table-responsive-lg">
                <table id="myTable" class='table align-middle'>
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

                        <?php
                        if (($resultUsers) and ($resultUsers->rowCount() != 0)) {

                            while ($row_user = $resultUsers->fetch(PDO::FETCH_ASSOC)) {
                                extract($row_user);

                                // Formtação do Número de Telefone
                                $code = substr($Phone, 0, 2);
                                $part1 = substr($Phone, 2, 5);
                                $part2 = substr($Phone, 7, 10);

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

                        ?>
                                <tr>
                                    <th scope='row' class='fs-3'><?= $Id ?></th>
                                    <td><?= $Name ?></td>
                                    <td><?= $Type ?></td>
                                    <td><?= $Blocked ?></td>
                                    <td>
                                        <div class='dropdown'>
                                            <button class='btn btn-secondary dropdown-toggle' type='button' id='dropdownMenuButton1' data-bs-toggle='dropdown' aria-expanded='false'>
                                                Ações
                                            </button>
                                            <ul class='dropdown-menu dropdown-menu-start text-center px-3' aria-labelledby='dropdownMenuButton1'>
                                                <li>
                                                    <button type='button' data-bs-toggle='modal' data-bs-target='#exampleModal<?= $Id ?>' class='dropdown-item btn btn-primary fw-bold'>
                                                        Ver Detalhes
                                                    </button>
                                                </li>
                                                <li>
                                                    <hr class='dropdown-divider'>
                                                </li>
                                                <li>
                                                    <a href='./backend/class/users/BlockUser.php?Id=<?= $Id ?>&Blocked=<?= $Blocked ?>' class='dropdown-item btn btn-primary fw-bold'>
                                                        <?php
                                                        if ($Blocked == "Bloqueado") {
                                                            echo "Desbloquear";
                                                        } else {
                                                            echo  "Bloquear";
                                                        }
                                                        ?>
                                                    </a>

                                                </li>
                                                <li>
                                                    <hr class='dropdown-divider'>
                                                </li>
                                                <li>
                                                    <a href='./backend/class/users/DeleteUser.php?Id=<?= $Id ?>' class='dropdown-item btn btn-primary fw-bold delete'>Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class='dropdown'>
                                            <button class='btn btn-secondary dropdown-toggle' type='button' id='dropdownMenuButton1' data-bs-toggle='dropdown' aria-expanded='false'>
                                                Torna-se
                                            </button>
                                            <ul class='dropdown-menu dropdown-menu-start text-center px-3' aria-labelledby='dropdownMenuButton1'>
                                                <li>
                                                    <a href='./backend/class/users/BecomeUserAdm.php?Id=<?= $Id ?>' class='dropdown-item btn btn-primary fw-bold'>Administrador</a>
                                                </li>
                                                <li>
                                                    <hr class='dropdown-divider'>
                                                </li>
                                                <li>
                                                    <a href='./backend/class/users/BecomeUserCol.php?Id=<?= $Id ?>' class='dropdown-item btn btn-primary fw-bold'>Colaborador</a>
                                                </li>
                                                <li>
                                                    <hr class='dropdown-divider'>
                                                </li>
                                                <li>
                                                    <a href='./backend/class/users/BecomeUserCommon.php?Id=<?= $Id ?>' class='dropdown-item btn btn-primary fw-bold'>Usuário Comum</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal<?= $Id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3 class="modal-title" id="exampleModalLabel"><?php echo $Name . ' - ' . $age . ' anos'; ?></h3>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row d-flex align-items-center">
                                                    <div class="col-5">
                                                        <img id="output" class="perfil-foto w-100 d-flex mx-auto" src="
                                                <?php
                                                if ($Photo == null) {
                                                    if ($Gender == 'Masculino') {
                                                        echo './frontend/assets/svg/user.svg';
                                                    } else if ($Gender == 'Feminino') {
                                                        $random = random_int(1, 3);
                                                        echo './frontend/assets/svg/userFemale0{$random}.svg';
                                                    } else {
                                                        echo '#';
                                                    }
                                                } else {
                                                    echo "./frontend/assets/upload/$Photo";
                                                }
                                                ?>
                                               " alt="Foto de <?= $Name ?>">
                                                    </div>
                                                    <div class="col-7">
                                                        <p class="fs-5"><strong>Email: </strong><?= $Email ?></p>
                                                        <p class="fs-5"><strong>Telefone: </strong><?php echo '(' . $code . ') ' . $part1 . ' - ' . $part2; ?></p>
                                                        <p class="fs-5"><strong>Gênero: </strong><?= $Gender; ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Fechar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- /Modal -->

                        <?php
                            }
                        } else {
                            echo "<p class='text-danger'>Nenhum usuário encontrado!</p>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <span class="listUsers"></span>
                </div>
            </div>
        </div>
    </section>
</main>