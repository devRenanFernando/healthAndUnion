<?php
// Post Específico
$queryPostEspecifc = "SELECT * FROM posts WHERE Id = " . $_GET['Id'];
$resultPostEspecifc = $connect->prepare($queryPostEspecifc);
$resultPostEspecifc->execute();

$rowPostEspecifc = $resultPostEspecifc->fetch(PDO::FETCH_ASSOC);
extract($rowPostEspecifc);

// User - Author
$queryAuthor = "SELECT * FROM users WHERE Id = " . $_GET['Author'];
$resultAuthor = $connect->prepare($queryAuthor);
$resultAuthor->execute();

$rowAuthor = $resultAuthor->fetch(PDO::FETCH_ASSOC);
extract($rowAuthor);

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
<main>
    <section id="">
        <div class="container">
            <h2 class="text-center text-uppercase my-4"><?= $Title ?></h2>
            <div class="row align-items-center">
                <div class="col-lg-1 col-2">
                    <img class="perfil-foto w-100 mx-auto" src="<?php if ($Gender == null) {
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
                                                                } ?>" alt="Foto de <?= $Name; ?>">
                </div>
                <div class="col-lg-11 col-10">
                    <p class="card-text mb-1">
                        <small class="text-muted me-2"><?= $Name ?></small>
                        |
                        <small class="text-muted ms-2"><?= $Occupation ?></small>
                    </p>
                    <p class="card-text">
                        <small class="text-muted"></small>
                        <small class="text-muted me-3">
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
                </div>
            </div>
            <p class="fs-4 w-75 mx-auto lh-lg text-justify" style="text-indent: 2em; text-align:justify;"><?= $Scope ?></p>

            <div class="row">
                <div class="col-4">

                </div>
                <div class="col-8"></div>
            </div>
        </div>
    </section>
</main>