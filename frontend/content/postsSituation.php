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

$queryPostsSituation = "SELECT * FROM posts ORDER BY BlockedPost DESC";
$resultPostsSituation = $connect->prepare($queryPostsSituation);
$resultPostsSituation->execute();

?>

<main>
    <section id='postsSituation' style="background-color: var(--blue-violet);">

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
                            <th scope='col' class='fs-2 text-center'>Título</th>
                            <th scope='col' class='fs-2 text-center'>Autor</th>
                            <th scope='col' class='fs-2 text-center'>Estado</th>
                            <th scope='col'></th>
                        </tr>
                    </thead>
                    <tbody class='fs-5 text-center'>

                        <?php
                        if (($resultPostsSituation) and ($resultPostsSituation->rowCount() != 0)) {

                            while ($rowPostsSituation = $resultPostsSituation->fetch(PDO::FETCH_ASSOC)) {
                                extract($rowPostsSituation);

                                // User - Author
                                $queryAuthor = "SELECT Name FROM users WHERE Id = $Author";
                                $resultAuthor = $connect->prepare($queryAuthor);
                                $resultAuthor->execute();

                                $rowAuthor = $resultAuthor->fetch(PDO::FETCH_ASSOC);
                                extract($rowAuthor);

                                // Formatação do Bloqueio
                                switch ($BlockedPost) {
                                    case '0':
                                        $BlockedPost = "Visível";
                                        break;

                                    default:
                                        $BlockedPost = "Bloqueado";
                                        break;
                                }

                        ?>
                                <tr>
                                    <th scope='row' class='fs-3'><?= $IdPost ?></th>
                                    <td><?= $Title ?></td>
                                    <td><?= $Name ?></td>
                                    <td><?= $BlockedPost ?></td>
                                    <td>
                                        <div class='dropdown'>
                                            <button class='btn btn-secondary dropdown-toggle' type='button' id='dropdownMenuButton1' data-bs-toggle='dropdown' aria-expanded='false'>
                                                Ações
                                            </button>
                                            <ul class='dropdown-menu dropdown-menu-start text-center px-3' aria-labelledby='dropdownMenuButton1'>
                                                <li>
                                                    <button type='button' data-bs-toggle='modal' data-bs-target='#exampleModal<?= $IdPost ?>' class='dropdown-item btn btn-primary fw-bold'>
                                                        Ver Detalhes
                                                    </button>
                                                </li>
                                                <li>
                                                    <hr class='dropdown-divider'>
                                                </li>
                                                <li>
                                                    <a href='./backend/class/posts/BlockPost.php?IdPost=<?= $IdPost ?>&BlockedPost=<?= $BlockedPost ?>' class='dropdown-item btn btn-primary fw-bold'>
                                                        <?php
                                                        if ($BlockedPost == "Bloqueado") {
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
                                                    <a href='./backend/class/posts/DeletePost.php?Id=<?= $IdPost ?>' class='dropdown-item btn btn-primary fw-bold delete'>Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal<?= $IdPost ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-fullscreen modal-dialog-centered modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header text-center flex-column">
                                                <h3 class="modal-title" id="exampleModalLabel">
                                                    <?= $Title; ?>
                                                </h3>
                                                <h5 class="modal-title" id="exampleModalLabel">
                                                    <?php echo $Subtitle; ?>
                                                </h5>
                                                <button type="button" class="btn-close me-4" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <img id="output" class="w-50 d-flex mx-auto" src="./frontend/assets/upload/<?= $Img ?>" alt="<?= $Caption ?>">
                                                <p class="fs-4 w-75 mx-auto lh-lg text-center form-text fs-6 fst-italic"><?= $Caption; ?></p>
                                                <p class="fs-4 w-75 mx-auto lh-lg" style="text-indent: 2em; text-align:justify;"><?= $Scope ?></p>
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
                            echo "<p class='text-danger'>Nenhum post encontrado!</p>";
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