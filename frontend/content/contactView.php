<?php

if ((!isset($_SESSION['Id'])) and (!isset($_SESSION['Name']))) {
    $_SESSION['msg'] = '<div class="alert alert-danger d-flex align-items-center" role="alert">
                                        <span><i class="fas fa-exclamation-triangle fa-2x"></i></span>
                                        <div class="fw-bold ms-3">
                                            É preciso realizar o login para acessar a página!
                                        </div>
                                    </div>';
    header("Location: ../frontend/content/login.php");
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

$queryContact = "SELECT Id, Name, Email, Mensage FROM contact";
$resultContact = $connect->prepare($queryContact);
$resultContact->execute();

?>

<main>
    <section id='contactView'>
        <!-- <div class='row d-flex align-items-center pt-4 me-0'>
            <label for='inputSearchUSer' class='col-sm-2 col-form-label text-center text-light fs-4'><strong>Buscar usuário</strong></label>
            <div class="col-sm-10">
                <input type='text' class='form-control' id='inputSearchUSer' onkeyup="searchUser()" name='inputSearchUSer' title="Type in a name" placeholder="Procure por nomes..">
            </div>
        </div> -->

        <?php

        if (isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }

        ?>
        <div class='container-flex m-4 p-4'>
            <table id="myTable" class='table align-middle'>
                <thead>
                    <tr>
                        <th scope='col' class='fs-2 text-center'>#</th>
                        <th scope='col' class='fs-2 text-center'>Nome</th>
                        <th scope='col' class='fs-2 text-center'>Email</th>
                        <th scope='col'></th>
                    </tr>
                </thead>
                <tbody class='fs-5 text-center'>

                    <?php
                    if (($resultContact) and ($resultContact->rowCount() != 0)) {

                        while ($row_user = $resultContact->fetch(PDO::FETCH_ASSOC)) {
                            extract($row_user);
                    ?>
                            <tr>
                                <th scope='row' class='fs-3'><?= $Id ?></th>
                                <td><?= $Name ?></td>
                                <td><?= $Email ?></td>
                                <td class="d-flex justify-content-center">
                                    <button type='button' data-bs-toggle='modal' data-bs-target='#exampleModal<?= $Id ?>' class='dropdown-item btn btn-primary fw-bold text-center' style='width: 14em;'>
                                        Ver Detalhes
                                    </button>
                                </td>
                            </tr>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal<?= $Id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-fullscreen-md-down">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel"><?= $Name ?> - <?= $Email ?></h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p class="fst-italic">
                                                <span class="pe-2"><i class="fas fa-quote-left" style="color: var(--blue-violet);"></i></span>
                                                <?= $Mensage ?>
                                                <span class="ps-2"><i class="fas fa-quote-right" style="color: var(--blue-violet);"></i></span>
                                            </p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary">Responder</button>
                                            <button type="button" class="btn btn-primary">Deletar</button>
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
    </section>
</main>