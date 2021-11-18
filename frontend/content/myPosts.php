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

$queryMyPosts = "SELECT * FROM posts WHERE Author = " . $_SESSION['Id'];
$resultMyPosts = $connect->prepare($queryMyPosts);
$resultMyPosts->execute();

?>

<main>
    <section id="myPosts">
        <div class="container">
            <h1 class="text-center">Meus Posts</h1>

            <div class="row grid mx-0">
                <?php
                if (($resultMyPosts) and ($resultMyPosts->rowCount() != 0)) {

                    while ($rowMyPosts = $resultMyPosts->fetch(PDO::FETCH_ASSOC)) {
                        extract($rowMyPosts);

                        date_default_timezone_set('America/Sao_Paulo');
                        $today = new DateTime();
                        $formato = 'Y-m-d H:i:s';
                        $Edit_date = DateTime::createFromFormat($formato, $Edit_date);
                        $intervalo = $Edit_date->diff($today);

                        $date = DateTime::createFromFormat('Y-m-d H:i:s', $Send_date);
                        $d = $date->format('d');
                        $Y = $date->format('Y');
                        $m = $date->format('m');
                ?>

                        <div class="col-lg-4 col-6 mb-4 element-item doenca pandemia">
                            <div class="card mb-3 " style="max-width: 580px;">
                                <a href="../frontend/assets/svg/img_posts.svg" class="popup-link mx-auto my-3">
                                    <img src="../frontend/assets/svg/img_posts.svg" class="rounded-start img-fluid" alt="...">
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title text-uppercase text-center"><?= $Title ?></h5>
                                    <p class="card-text"><?= $Scope ?></p>
                                    <p class="card-text">
                                        <small class="text-muted">
                                            Publicado <?= $d; ?> de
                                            <?php
                                            switch ($m) {
                                                case '1':
                                                    echo $m = 'Janeiro';
                                                    break;
                                                case '2':
                                                    echo $m = 'Fevereiro';
                                                    break;
                                                case '3':
                                                    echo $m = 'Março';
                                                    break;
                                                case '4':
                                                    echo $m = 'Abril';
                                                    break;
                                                case '5':
                                                    echo $m = 'Maio';
                                                    break;
                                                case '6':
                                                    echo $m = 'Junho';
                                                    break;
                                                case '7':
                                                    echo $m = 'Julho';
                                                    break;
                                                case '8':
                                                    echo $m = 'Agosto';
                                                    break;
                                                case '9':
                                                    echo $m = 'Setembro';
                                                    break;
                                                case '10':
                                                    echo $m = 'Outubro';
                                                    break;
                                                case '11':
                                                    echo $m = 'Novembro';
                                                    break;
                                                case '12':
                                                    echo $m = 'Dezembro';
                                                    break;
                                                default:
                                                    echo "ERRO";
                                            }
                                            ?>
                                            <?= $Y ?>
                                        </small>
                                    </p>
                                    <p class="card-text">
                                        <small class="text-muted">
                                            <?php
                                            if ($intervalo->d == 0 && $intervalo->h < 1) {
                                                echo "Última atualização $intervalo->i minutos atrás";
                                            } elseif ($intervalo->d == 0) {
                                                echo "Última atualização $intervalo->h horas atrás";
                                            } elseif ($intervalo->d == 1) {
                                                echo "Última atualização 1 dia e $intervalo->h horas atrás";
                                            } elseif ($intervalo->m == 0 && $intervalo->d > 1) {
                                                echo "Última atualização $intervalo->d dias atrás";
                                            } elseif ($intervalo->m == 1) {
                                                echo "Última atualização 1 mês atrás";
                                            } elseif ($intervalo->m > 1 && $intervalo->y == 0) {
                                                echo "Última atualização $intervalo->m mêses atrás";
                                            } elseif ($intervalo->y == 1) {
                                                echo "Última atualização 1 ano atrás";
                                            } else {
                                                echo "Última atualização $intervalo->y anos atrás";
                                            }
                                            ?>
                                        </small>
                                    </p>
                                    <p class="mb-0">
                                        <span class="badge bg-light text-dark">Doença</span>
                                        <span class="badge bg-light text-dark">Pandemia</span>
                                    </p>
                                </div>
                                <div class="d-flex justify-content-start ms-3 mb-2">
                                    <a href="http://localhost/www/tcc_site/app/index.php?pg=post&Id=<?= $Id ?>&Author=<?= $Author?>">
                                        <button class="btn btn-sm btn-outline-dark fw-bold" role="button" style="width: 10em;">Leia mais <i class="fas fa-arrow-alt-circle-right ms-3"></i></button>
                                    </a>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                } else {
                    echo "<p class='text-danger'>Nenhum usuário encontrado!</p>";
                }
                ?>
            </div>
        </div>
    </section>
</main>