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

$queryMyPosts = "SELECT * FROM posts WHERE Author = " . $_SESSION['Id'] . " ORDER BY Send_date DESC";
$resultMyPosts = $connect->prepare($queryMyPosts);
$resultMyPosts->execute();

?>

<main>
    <section id="myPosts">
        <div class="container">
            <h1 class="text-center">Meus Posts</h1>
            <?php
            if (isset($_SESSION['msg'])) {
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }
            ?>

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

                        <div class="col-lg-4 col-6 mb-4 element-item doenca pandemia" data-mh="posts">
                            <div class="card mb-3 " style="max-width: 580px;">
                                <a href="./frontend/assets/<?php if (isset($Img)) {
                                                                echo "upload/$Img";
                                                            } else {
                                                                echo "svg/img_posts.svg";
                                                            } ?>" class="popup-link mx-auto my-3">
                                    <img src="./frontend/assets/<?php if (isset($Img)) {
                                                                    echo "upload/$Img";
                                                                } else {
                                                                    echo "svg/img_posts.svg";
                                                                } ?>" class="rounded-start img-fluid" alt="<?= $Caption?>">
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
                                    <a href="http://localhost/www/tcc_site/index.php?pg=post&Id=<?= $IdPost ?>&Author=<?= $Author ?>">
                                        <button class="btn btn-sm btn-outline-dark fw-bold" role="button" style="width: 10em;">Leia mais <i class="fas fa-arrow-alt-circle-right ms-3"></i></button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                } else {
                    ?>
                    <div class="row">
                        <div class="col-5 d-flex flex-column align-items-center justify-content-center">
                            <h1>Você não tem nenhum post</h1>
                            <h4>Adicione uma publicação clicando <a href="./frontend/content/registrationPosts.php">aqui!</a></h4>
                        </div>
                        <div class="col-7 d-flex align-items-center justify-content-center">
                            <svg class="w-75" id="freepik_stories-add-files" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 500" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs">
                                <style>
                                    svg#freepik_stories-add-files:not(.animated) .animable {
                                        opacity: 0;
                                    }

                                    svg#freepik_stories-add-files.animated #freepik--Floor--inject-3 {
                                        animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomOut;
                                        animation-delay: 0s;
                                    }

                                    svg#freepik_stories-add-files.animated #freepik--Shadows--inject-3 {
                                        animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomIn;
                                        animation-delay: 0s;
                                    }

                                    svg#freepik_stories-add-files.animated #freepik--Plants--inject-3 {
                                        animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideRight;
                                        animation-delay: 0s;
                                    }

                                    svg#freepik_stories-add-files.animated #freepik--Folder--inject-3 {
                                        animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideRight;
                                        animation-delay: 0s;
                                    }

                                    svg#freepik_stories-add-files.animated #freepik--Character--inject-3 {
                                        animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideDown;
                                        animation-delay: 0s;
                                    }

                                    svg#freepik_stories-add-files.animated #freepik--Clouds--inject-3 {
                                        animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideRight;
                                        animation-delay: 0s;
                                    }

                                    @keyframes zoomOut {
                                        0% {
                                            opacity: 0;
                                            transform: scale(1.5);
                                        }

                                        100% {
                                            opacity: 1;
                                            transform: scale(1);
                                        }
                                    }

                                    @keyframes zoomIn {
                                        0% {
                                            opacity: 0;
                                            transform: scale(0.5);
                                        }

                                        100% {
                                            opacity: 1;
                                            transform: scale(1);
                                        }
                                    }

                                    @keyframes slideRight {
                                        0% {
                                            opacity: 0;
                                            transform: translateX(30px);
                                        }

                                        100% {
                                            opacity: 1;
                                            transform: translateX(0);
                                        }
                                    }

                                    @keyframes slideDown {
                                        0% {
                                            opacity: 0;
                                            transform: translateY(-30px);
                                        }

                                        100% {
                                            opacity: 1;
                                            transform: translateY(0);
                                        }
                                    }
                                </style>
                                <g id="freepik--Floor--inject-3" class="animable" style="transform-origin: 250.825px 354.354px;">
                                    <path id="freepik--floor--inject-3" d="M101.53,432.38c82.45,43.09,216.14,43.09,298.59,0s82.45-113,0-156.06-216.14-43.1-298.59,0S19.08,389.28,101.53,432.38Z" style="fill: rgb(245, 245, 245); transform-origin: 250.825px 354.354px;" class="animable"></path>
                                </g>
                                <g id="freepik--Shadows--inject-3" class="animable" style="transform-origin: 332.625px 357.495px;">
                                    <path id="freepik--Shadow--inject-3" d="M245.86,386.89l3.8,2.19a4.79,4.79,0,0,0,4.33,0L355.27,330.6a1.32,1.32,0,0,0,0-2.5l-3.79-2.19a4.79,4.79,0,0,0-4.33,0L245.86,384.39A1.32,1.32,0,0,0,245.86,386.89Z" style="fill: rgb(224, 224, 224); transform-origin: 300.565px 357.495px;" class="animable"></path>
                                    <path id="freepik--shadow--inject-3" d="M410.88,378.66c-12.54,6.71-32.88,6.71-45.42,0s-12.54-17.58,0-24.29,32.88-6.71,45.42,0S423.42,372,410.88,378.66Z" style="fill: rgb(224, 224, 224); transform-origin: 388.17px 366.515px;" class="animable"></path>
                                </g>
                                <g id="freepik--Plants--inject-3" class="animable" style="transform-origin: 421.508px 334.507px;">
                                    <g id="freepik--plants--inject-3" class="animable" style="transform-origin: 421.508px 334.507px;">
                                        <path d="M403.11,338.5s1.16-10.17,6.22-18.06,12-12.81,18.48-13.32,11.72,5.45,4.79,9.54-19.26,8.28-24.93,23.6Z" style="fill: rgb(61, 31, 117); transform-origin: 419.494px 323.675px;" id="elkboo6n0wyw" class="animable"></path>
                                        <g id="el4y7ybcfsbyo">
                                            <path d="M403.11,338.5s1.16-10.17,6.22-18.06,12-12.81,18.48-13.32,11.72,5.45,4.79,9.54-19.26,8.28-24.93,23.6Z" style="opacity: 0.1; transform-origin: 419.494px 323.675px;" class="animable"></path>
                                        </g>
                                        <path d="M405,335.86l-.07,0a.34.34,0,0,1-.19-.45c6.84-16.85,19.86-23.89,25.79-25.25a.34.34,0,1,1,.16.67c-5.81,1.34-18.58,8.25-25.31,24.84A.35.35,0,0,1,405,335.86Z" style="fill: rgb(255, 255, 255); transform-origin: 417.834px 323.008px;" id="elpw7v24oxd7" class="animable"></path>
                                        <path d="M439.65,336.06c-.59,1.32-2,2-3.38,2.55s-2.8,1.12-3.53,2.38c-1.46,2.52.94,6.08-.63,8.54a4.56,4.56,0,0,1-3.09,1.79c-1,.19-2,.18-3,.27a13.54,13.54,0,0,1-1.44-.11,6.58,6.58,0,0,0-4.18.44c-2,1.13-2.63,3.67-3.85,5.62a9.52,9.52,0,0,1-6.77,4.25,6.65,6.65,0,0,1-3.5-.23l-.19-.12v0a5.18,5.18,0,0,1-.36-.42l0-.06c-.36-1.31.22-2.68.25-4a1.93,1.93,0,0,0,0-.24c-.05-1.58-.1-3.14-.13-4.71-.08-2.89-.11-5.79-.09-8.68,0-1.87-.21-3.93.59-5.7.88-1.94,3.07-2,3.89-3.89.33-.77.51-1.58.83-2.35a6.72,6.72,0,0,1,5.73-4c3.82-.19,7.24,2.9,11.06,2.62a29.46,29.46,0,0,0,2.92-.56c3.09-.58,6.67.3,8.41,2.92A4,4,0,0,1,439.65,336.06Z" style="fill: rgb(61, 31, 117); transform-origin: 422.759px 344.653px;" id="elt6kapdqa0wk" class="animable"></path>
                                        <path d="M405.33,354.92h0a.32.32,0,0,1-.23-.4c5.27-19.8,26.13-22.66,31-22.31a.32.32,0,0,1,.3.35.31.31,0,0,1-.34.3c-4.78-.34-25.18,2.46-30.34,21.83A.33.33,0,0,1,405.33,354.92Z" style="fill: rgb(255, 255, 255); transform-origin: 420.744px 343.556px;" id="elmqw05sep3n" class="animable"></path>
                                        <path d="M428.51,344.89a.32.32,0,0,1-.17-.09,17.36,17.36,0,0,0-14.2-4,.32.32,0,0,1-.37-.27.33.33,0,0,1,.28-.37,18,18,0,0,1,14.75,4.18.33.33,0,0,1-.29.55Z" style="fill: rgb(255, 255, 255); transform-origin: 421.327px 342.406px;" id="eljbqtyyuk56l" class="animable"></path>
                                    </g>
                                </g>
                                <g id="freepik--Folder--inject-3" class="animable" style="transform-origin: 189.91px 222.3px;">
                                    <g id="freepik--folder--inject-3" class="animable" style="transform-origin: 189.91px 222.3px;">
                                        <path d="M266.32,244.39v10L93.75,354h0L88.44,357a9.28,9.28,0,0,1-4.06-7.34V181.91a1.81,1.81,0,0,1,.25-.85,1.85,1.85,0,0,1,.62-.65l39.33-22.71c.48-.27,3.28.9,3.74,1.18l.3.17a3,3,0,0,1,.69.61,2.45,2.45,0,0,1,.5.83l3.56,10.28,128-76.26a2,2,0,0,1,1.68,0l2.38,1.38a1.79,1.79,0,0,1,.61.64,1.74,1.74,0,0,1,.25.86v147Z" style="fill: rgb(38, 50, 56); transform-origin: 175.35px 225.663px;" id="elb1or6vookt" class="animable"></path>
                                        <path d="M266.32,254.35,88.44,357V183.25l40.87-23.59a2.45,2.45,0,0,1,.5.83l3.56,10.28.68,1.95,132-76.22a1.74,1.74,0,0,1,.25.86Z" style="fill: rgb(55, 71, 79); transform-origin: 177.38px 226.75px;" id="eln0tyt0x658i" class="animable"></path>
                                        <path d="M129.31,159.66,88.44,183.25l-3.81-2.19a1.85,1.85,0,0,1,.62-.65l39.33-22.71a1.87,1.87,0,0,1,1.71,0l2.33,1.34A3,3,0,0,1,129.31,159.66Z" style="fill: rgb(69, 90, 100); transform-origin: 106.97px 170.372px;" id="el4p0h0e5f2s6" class="animable"></path>
                                        <path d="M266.06,96.5l-132,76.22-.68-1.95,128-76.26a2,2,0,0,1,1.68,0l2.38,1.38A1.79,1.79,0,0,1,266.06,96.5Z" style="fill: rgb(69, 90, 100); transform-origin: 199.72px 133.523px;" id="eli7w7xy3ib9r" class="animable"></path>
                                        <g id="freepik--Document--inject-3" class="animable" style="transform-origin: 193.88px 172.187px;">
                                            <path d="M143.09,286.37a4.2,4.2,0,0,1-1.85-3.33V117.78a4.32,4.32,0,0,1,2-3.4l97.62-56.3a3.69,3.69,0,0,1,5.65,3.26V226.6a4.34,4.34,0,0,1-2,3.4L146.9,286.3A4.2,4.2,0,0,1,143.09,286.37Z" style="fill: rgb(250, 250, 250); transform-origin: 193.876px 172.154px;" id="el3nt10ecp1ce" class="animable"></path>
                                            <path d="M146.9,286.3,244.52,230a4.34,4.34,0,0,0,2-3.4V61.34c0-1.25-.88-1.76-2-1.14l-97.63,56.31a4.34,4.34,0,0,0-2,3.4V285.17C144.93,286.42,145.81,286.93,146.9,286.3Z" style="fill: rgb(240, 240, 240); transform-origin: 195.705px 173.253px;" id="elwtzsn79t36" class="animable"></path>
                                            <path d="M157.59,123.07l73.72-42.56c.95-.55,1.73-.11,1.73,1v.69a3.85,3.85,0,0,1-1.73,3l-73.72,42.56c-1,.55-1.73.1-1.73-1v-.69A3.83,3.83,0,0,1,157.59,123.07Z" style="fill: rgb(224, 224, 224); transform-origin: 194.45px 104.134px;" id="elgen2gngeu59" class="animable"></path>
                                            <path d="M157.59,134.78l73.72-42.56c.95-.55,1.73-.1,1.73,1v.69a3.83,3.83,0,0,1-1.73,3l-73.72,42.56c-1,.55-1.73.1-1.73-1v-.69A3.85,3.85,0,0,1,157.59,134.78Z" style="fill: rgb(224, 224, 224); transform-origin: 194.45px 115.845px;" id="el7gyt36q6z88" class="animable"></path>
                                            <path d="M157.59,146.49l73.72-42.56c.95-.55,1.73-.1,1.73,1v.69a3.83,3.83,0,0,1-1.73,3l-73.72,42.56c-1,.56-1.73.11-1.73-1v-.69A3.85,3.85,0,0,1,157.59,146.49Z" style="fill: rgb(224, 224, 224); transform-origin: 194.45px 127.558px;" id="el2hum76q95a5" class="animable"></path>
                                            <path d="M157.59,158.2l73.72-42.55c.95-.56,1.73-.11,1.73,1v.69a3.86,3.86,0,0,1-1.73,3L157.59,162.9c-1,.55-1.73.1-1.73-1v-.7A3.86,3.86,0,0,1,157.59,158.2Z" style="fill: rgb(224, 224, 224); transform-origin: 194.45px 139.272px;" id="elcxgpojpzttr" class="animable"></path>
                                            <path d="M157.59,169.92l73.72-42.56c.95-.55,1.73-.11,1.73,1v.69a3.85,3.85,0,0,1-1.73,3l-73.72,42.56c-1,.55-1.73.1-1.73-1v-.69A3.83,3.83,0,0,1,157.59,169.92Z" style="fill: rgb(224, 224, 224); transform-origin: 194.45px 150.984px;" id="eldk8aajlhm5u" class="animable"></path>
                                            <path d="M157.59,181.72l73.72-42.56c.95-.56,1.73-.11,1.73,1v.69a3.86,3.86,0,0,1-1.73,3l-73.72,42.56c-1,.55-1.73.1-1.73-1v-.69A3.83,3.83,0,0,1,157.59,181.72Z" style="fill: rgb(224, 224, 224); transform-origin: 194.45px 162.782px;" id="ells8cgk7yrnj" class="animable"></path>
                                            <path d="M157.59,193.43l73.72-42.56c.95-.55,1.73-.11,1.73,1v.69a3.85,3.85,0,0,1-1.73,3l-73.72,42.56c-1,.55-1.73.1-1.73-1v-.69A3.83,3.83,0,0,1,157.59,193.43Z" style="fill: rgb(224, 224, 224); transform-origin: 194.45px 174.494px;" id="elkp2aka3y2q" class="animable"></path>
                                            <path d="M157.59,205.14l73.72-42.56c.95-.55,1.73-.1,1.73,1v.69a3.83,3.83,0,0,1-1.73,3l-73.72,42.56c-1,.55-1.73.11-1.73-1v-.69A3.85,3.85,0,0,1,157.59,205.14Z" style="fill: rgb(224, 224, 224); transform-origin: 194.45px 186.206px;" id="elw8z20h1jn0s" class="animable"></path>
                                            <path d="M157.59,216.85l73.72-42.56c.95-.55,1.73-.1,1.73,1V176a3.83,3.83,0,0,1-1.73,3l-73.72,42.56c-1,.56-1.73.11-1.73-1v-.69A3.86,3.86,0,0,1,157.59,216.85Z" style="fill: rgb(224, 224, 224); transform-origin: 194.45px 197.928px;" id="elle2beswd0hg" class="animable"></path>
                                            <path d="M157.59,228.57,231.31,186c.95-.56,1.73-.11,1.73,1v.69a3.86,3.86,0,0,1-1.73,3l-73.72,42.56c-1,.55-1.73.1-1.73-1v-.69A3.83,3.83,0,0,1,157.59,228.57Z" style="fill: rgb(224, 224, 224); transform-origin: 194.45px 209.622px;" id="elzbocy8fa0ci" class="animable"></path>
                                            <path d="M157.59,240.33l73.72-42.56c.95-.55,1.73-.1,1.73,1v.69a3.85,3.85,0,0,1-1.73,3L157.59,245c-1,.55-1.73.1-1.73-1v-.69A3.83,3.83,0,0,1,157.59,240.33Z" style="fill: rgb(224, 224, 224); transform-origin: 194.45px 221.385px;" id="ell6yu8rn0emn" class="animable"></path>
                                            <path d="M157.59,252l73.72-42.56c.95-.55,1.73-.1,1.73,1v.69a3.83,3.83,0,0,1-1.73,3l-73.72,42.56c-1,.55-1.73.11-1.73-1V255A3.85,3.85,0,0,1,157.59,252Z" style="fill: rgb(224, 224, 224); transform-origin: 194.45px 233.066px;" id="el1kkzl7m7hez" class="animable"></path>
                                            <path d="M157.59,263.75l73.72-42.56c.95-.55,1.73-.1,1.73,1v.7a3.86,3.86,0,0,1-1.73,3l-73.72,42.55c-1,.56-1.73.11-1.73-1v-.69A3.86,3.86,0,0,1,157.59,263.75Z" style="fill: rgb(224, 224, 224); transform-origin: 194.45px 244.818px;" id="elu1hbvzh96q" class="animable"></path>
                                            <path d="M146.64,286.43a3.67,3.67,0,0,1-5.39-3.39V117.79a4.08,4.08,0,0,1,.57-1.94l3.69,2.13a4,4,0,0,0-.58,1.93V285.17C144.93,286.32,145.68,286.84,146.64,286.43Z" style="fill: rgb(224, 224, 224); transform-origin: 143.943px 201.355px;" id="elmwck2kb02np" class="animable"></path>
                                        </g>
                                        <g id="freepik--document--inject-3" class="animable" style="transform-origin: 207.7px 180.027px;">
                                            <path d="M156.91,294.21a4.2,4.2,0,0,1-1.85-3.33V125.62a4.32,4.32,0,0,1,2-3.4l97.62-56.3a3.69,3.69,0,0,1,5.65,3.26V234.44a4.34,4.34,0,0,1-2,3.4l-97.62,56.3A4.2,4.2,0,0,1,156.91,294.21Z" style="fill: rgb(250, 250, 250); transform-origin: 207.696px 179.993px;" id="elw8t6wk7i6r" class="animable"></path>
                                            <path d="M160.72,294.14l97.62-56.3a4.34,4.34,0,0,0,2-3.4V69.18c0-1.25-.88-1.76-2-1.14l-97.63,56.31a4.34,4.34,0,0,0-2,3.4V293C158.75,294.26,159.63,294.77,160.72,294.14Z" style="fill: rgb(240, 240, 240); transform-origin: 209.525px 181.093px;" id="elta44cidzhi9" class="animable"></path>
                                            <path d="M171.41,130.91l73.72-42.56c1-.55,1.73-.11,1.73,1V90a3.85,3.85,0,0,1-1.73,3L171.41,135.6c-1,.55-1.73.1-1.73-1v-.69A3.83,3.83,0,0,1,171.41,130.91Z" style="fill: rgb(224, 224, 224); transform-origin: 208.27px 111.974px;" id="elyqazyjz07nb" class="animable"></path>
                                            <path d="M171.41,142.62l73.72-42.56c1-.55,1.73-.1,1.73,1v.69a3.83,3.83,0,0,1-1.73,3l-73.72,42.56c-1,.55-1.73.11-1.73-1v-.69A3.85,3.85,0,0,1,171.41,142.62Z" style="fill: rgb(224, 224, 224); transform-origin: 208.27px 123.686px;" id="elal8rrdab8gc" class="animable"></path>
                                            <path d="M171.41,154.33l73.72-42.56c1-.55,1.73-.1,1.73,1v.69a3.83,3.83,0,0,1-1.73,3L171.41,159c-1,.56-1.73.11-1.73-1v-.69A3.85,3.85,0,0,1,171.41,154.33Z" style="fill: rgb(224, 224, 224); transform-origin: 208.27px 135.388px;" id="elsxgk7w68fa" class="animable"></path>
                                            <path d="M171.41,166.05l73.72-42.56c1-.56,1.73-.11,1.73,1v.69a3.86,3.86,0,0,1-1.73,3l-73.72,42.56c-1,.55-1.73.1-1.73-1v-.69A3.83,3.83,0,0,1,171.41,166.05Z" style="fill: rgb(224, 224, 224); transform-origin: 208.27px 147.112px;" id="elcj3syvqn3of" class="animable"></path>
                                            <path d="M171.41,177.76l73.72-42.56c1-.55,1.73-.11,1.73,1v.69a3.85,3.85,0,0,1-1.73,3l-73.72,42.56c-1,.55-1.73.1-1.73-1v-.69A3.83,3.83,0,0,1,171.41,177.76Z" style="fill: rgb(224, 224, 224); transform-origin: 208.27px 158.824px;" id="elqbaq4nyc6m9" class="animable"></path>
                                            <path d="M171.41,189.56,245.13,147c1-.56,1.73-.11,1.73,1v.69a3.86,3.86,0,0,1-1.73,3l-73.72,42.56c-1,.55-1.73.1-1.73-1v-.69A3.83,3.83,0,0,1,171.41,189.56Z" style="fill: rgb(224, 224, 224); transform-origin: 208.27px 170.622px;" id="el7gck7yq7q9p" class="animable"></path>
                                            <path d="M171.41,201.27l73.72-42.56c1-.55,1.73-.11,1.73,1v.69a3.85,3.85,0,0,1-1.73,3L171.41,206c-1,.55-1.73.1-1.73-1v-.69A3.83,3.83,0,0,1,171.41,201.27Z" style="fill: rgb(224, 224, 224); transform-origin: 208.27px 182.354px;" id="elxdnp6blyhn" class="animable"></path>
                                            <path d="M171.41,213l73.72-42.56c1-.55,1.73-.1,1.73,1v.69a3.83,3.83,0,0,1-1.73,3l-73.72,42.56c-1,.55-1.73.11-1.73-1V216A3.85,3.85,0,0,1,171.41,213Z" style="fill: rgb(224, 224, 224); transform-origin: 208.27px 194.066px;" id="el2w5vf209d5d" class="animable"></path>
                                            <path d="M171.41,224.69l73.72-42.56c1-.55,1.73-.1,1.73,1v.69a3.83,3.83,0,0,1-1.73,3l-73.72,42.56c-1,.56-1.73.11-1.73-1v-.69A3.86,3.86,0,0,1,171.41,224.69Z" style="fill: rgb(224, 224, 224); transform-origin: 208.27px 205.758px;" id="el3d65ayzs4t" class="animable"></path>
                                            <path d="M171.41,236.41l73.72-42.56c1-.56,1.73-.11,1.73,1v.69a3.86,3.86,0,0,1-1.73,3L171.41,241.1c-1,.55-1.73.1-1.73-1v-.69A3.83,3.83,0,0,1,171.41,236.41Z" style="fill: rgb(224, 224, 224); transform-origin: 208.27px 217.472px;" id="elwfwu5e9g49c" class="animable"></path>
                                            <path d="M171.41,248.17l73.72-42.56c1-.55,1.73-.1,1.73,1v.69a3.83,3.83,0,0,1-1.73,3l-73.72,42.56c-1,.55-1.73.1-1.73-1v-.69A3.83,3.83,0,0,1,171.41,248.17Z" style="fill: rgb(224, 224, 224); transform-origin: 208.27px 229.235px;" id="elc5vc6f4ar88" class="animable"></path>
                                            <path d="M171.41,259.88l73.72-42.56c1-.55,1.73-.1,1.73,1V219a3.83,3.83,0,0,1-1.73,3l-73.72,42.56c-1,.55-1.73.11-1.73-1v-.69A3.85,3.85,0,0,1,171.41,259.88Z" style="fill: rgb(224, 224, 224); transform-origin: 208.27px 240.941px;" id="elvp26du2698b" class="animable"></path>
                                            <path d="M171.41,271.59,245.13,229c1-.55,1.73-.1,1.73,1v.7a3.86,3.86,0,0,1-1.73,3l-73.72,42.55c-1,.56-1.73.11-1.73-1v-.69A3.86,3.86,0,0,1,171.41,271.59Z" style="fill: rgb(224, 224, 224); transform-origin: 208.27px 252.628px;" id="elrf8mrm7izil" class="animable"></path>
                                            <path d="M160.46,294.27a3.67,3.67,0,0,1-5.39-3.39V125.63a4.08,4.08,0,0,1,.57-1.94l3.69,2.13a4,4,0,0,0-.58,1.93V293C158.75,294.16,159.5,294.68,160.46,294.27Z" style="fill: rgb(224, 224, 224); transform-origin: 157.763px 209.195px;" id="elpk7i0h0m0t8" class="animable"></path>
                                        </g>
                                        <path d="M302.65,117l-28.52,123.5-2.63,11.36a13.13,13.13,0,0,1-5.45,7.37L96.83,356.89a8.87,8.87,0,0,1-4,1.07,8.22,8.22,0,0,1-4.39-.92l.87-3.77.09-.37.95-4.13,4.14-17.92,26.22-113.54a1.81,1.81,0,0,1,.16-.42c.07-.13.15-.26.23-.38l0-.06a2.54,2.54,0,0,1,.66-.62L266.31,132.4l31.63-18.26a1.91,1.91,0,0,1,1.74,0l2.33,1.34A1.47,1.47,0,0,1,302.65,117Z" style="fill: rgb(55, 71, 79); transform-origin: 195.559px 235.955px;" id="elg25g3qv8n5v" class="animable"></path>
                                        <path d="M302.68,116.71c0-.35-.28-.46-.67-.23L125.86,218.18a2.26,2.26,0,0,0-.66.62l-4.06-2.35a2.54,2.54,0,0,1,.66-.62L297.94,114.14a1.91,1.91,0,0,1,1.74,0l2.33,1.34A1.49,1.49,0,0,1,302.68,116.71Z" style="fill: rgb(69, 90, 100); transform-origin: 211.91px 166.365px;" id="elleknn75mc2o" class="animable"></path>
                                        <path d="M125.2,218.8a3.23,3.23,0,0,0-.3.49,2.28,2.28,0,0,0-.13.36L99.7,328.23h0l-5.28,22.88L93.75,354h0l-.92,4a8.22,8.22,0,0,1-4.39-.92l.87-3.77.09-.37.95-4.13,4.14-17.92,26.22-113.54a1.81,1.81,0,0,1,.16-.42c.07-.13.15-.26.23-.38l0-.06Z" style="fill: rgb(38, 50, 56); transform-origin: 106.82px 287.255px;" id="elry4y4uh5imm" class="animable"></path>
                                        <path d="M94.64,346.56a1.13,1.13,0,0,1,.54,1.23L93.75,354h0L93,357.09a1.13,1.13,0,0,1-1.16.87,7.49,7.49,0,0,1-3.43-.92,9.28,9.28,0,0,1-4.06-7.34v-7.12a1.12,1.12,0,0,1,1.69-1l1.81,1a1.15,1.15,0,0,1,.56,1v3.54a1.12,1.12,0,0,0,2.22.25l.3-1.31a1.13,1.13,0,0,1,1.66-.72Z" style="fill: rgb(38, 50, 56); transform-origin: 89.7787px 349.693px;" id="eleh97z8q7pw" class="animable"></path>
                                        <path d="M132,320.17l-9.63-5.56h0l-.1-.06v0c-4.79-2.71-11.36-2.31-18.63,1.89-6.81,3.92-13,10.47-17.69,18-5.41,8.72-8.81,18.82-8.81,27.87,0,8.44,3,14.37,7.73,17.14h0l9.78,5.58c4.83,3.08,11.65,2.81,19.21-1.56,14.64-8.45,26.51-29,26.51-45.91C140.37,328.84,137.15,322.78,132,320.17Z" style="fill: rgb(61, 31, 117); transform-origin: 108.755px 349.959px;" id="elhc3ak1xo8uv" class="animable"></path>
                                        <g id="el6bwn6bwip16">
                                            <path d="M94.46,385l-9.59-5.48h0c-4.78-2.77-7.73-8.7-7.73-17.14,0-9.05,3.4-19.14,8.81-27.86l10.23,5.9c-5.41,8.72-8.8,18.8-8.8,27.84C87.35,376.32,90.05,382.09,94.46,385Z" style="opacity: 0.1; transform-origin: 86.66px 359.76px;" class="animable"></path>
                                        </g>
                                        <g id="elbtmbqqspzad">
                                            <path d="M131.8,320.06c-4.72-2.29-11-1.71-17.94,2.28s-13,10.49-17.71,18.07l-10.23-5.9c4.68-7.58,10.89-14.12,17.69-18,7.27-4.2,13.84-4.6,18.63-1.9v0l.1.06h0Z" style="fill: rgb(255, 255, 255); opacity: 0.4; transform-origin: 108.86px 326.655px;" class="animable"></path>
                                        </g>
                                        <path d="M117.52,355.67V365a3.09,3.09,0,0,1-.32,1.37,2.06,2.06,0,0,1-.77,1l-5.11,2.95a.59.59,0,0,1-.77-.06,1.36,1.36,0,0,1-.32-1v-9.29l-6.29,3.62a.58.58,0,0,1-.77-.05,1.36,1.36,0,0,1-.32-1v-6.3a3.31,3.31,0,0,1,.32-1.38,2.15,2.15,0,0,1,.77-.94l6.29-3.63v-9.29a3.31,3.31,0,0,1,.32-1.38,2.08,2.08,0,0,1,.77-.94l5.11-3a.6.6,0,0,1,.77.05,1.34,1.34,0,0,1,.32,1V346l6.25-3.6a.58.58,0,0,1,.77.05,1.36,1.36,0,0,1,.32,1v6.3a3.31,3.31,0,0,1-.32,1.38,2.15,2.15,0,0,1-.77.94Z" style="fill: rgb(255, 255, 255); transform-origin: 113.855px 352.999px;" id="el7ifvdcmxdj" class="animable"></path>
                                    </g>
                                </g>
                                <g id="freepik--Character--inject-3" class="animable" style="transform-origin: 330.174px 277.437px;">
                                    <g id="freepik--character--inject-3" class="animable" style="transform-origin: 330.174px 277.437px;">
                                        <path d="M374.56,211.19l-11.69-.33c-.78-.67-13.05-14.52-13.05-14.52s-4.42,7-4.49,7.41,12,13.39,13.23,14.7a3.62,3.62,0,0,0,2.85,1.4c3.17.19,15,1,15,1Z" style="fill: rgb(177, 102, 104); transform-origin: 360.87px 208.595px;" id="elv1xh9alhgm" class="animable"></path>
                                        <g id="freepik--document--inject-3" class="animable" style="transform-origin: 300.585px 277.437px;">
                                            <path d="M249.79,386.71a4.21,4.21,0,0,1-1.84-3.33V228a4.34,4.34,0,0,1,2-3.4l97.62-56.31a4.26,4.26,0,0,1,3.81-.07,4.21,4.21,0,0,1,1.84,3.34V326.93a4.34,4.34,0,0,1-2,3.41l-97.62,56.3A4.23,4.23,0,0,1,249.79,386.71Z" style="fill: rgb(61, 31, 117); transform-origin: 300.585px 277.467px;" id="el3u39n2sgvoe" class="animable"></path>
                                            <g id="elqu3cgkg4bw">
                                                <path d="M253.05,386.86l.2-.06a.35.35,0,0,1-.14.06,3,3,0,0,1-.36.12l-.2,0a3.5,3.5,0,0,1-.45.07,4.53,4.53,0,0,1-.52,0,3.67,3.67,0,0,1-1.79-.42,3.33,3.33,0,0,1-1-1,4.21,4.21,0,0,1-.81-2.34V228a3.32,3.32,0,0,1,.15-1,4.09,4.09,0,0,1,.18-.49,4.3,4.3,0,0,1,.24-.48l3.68,2.13h0l-.09.15a4,4,0,0,0-.49,1.78V385.51a2.1,2.1,0,0,0,.08.59,1.22,1.22,0,0,0,.38.6,1.14,1.14,0,0,0,.4.19l.23,0a.84.84,0,0,0,.27,0A.07.07,0,0,0,253.05,386.86Z" style="opacity: 0.15; transform-origin: 250.615px 306.544px;" class="animable"></path>
                                            </g>
                                            <g id="elg8fkg6e87wh">
                                                <path d="M353.15,171.14c-.16-1-1-1.33-1.93-.77l-97.63,56.3a4.19,4.19,0,0,0-1.39,1.47L248.52,226a3.91,3.91,0,0,1,1.39-1.46l97.62-56.31a4.26,4.26,0,0,1,3.81-.07A4.19,4.19,0,0,1,353.15,171.14Z" style="fill: rgb(255, 255, 255); opacity: 0.3; transform-origin: 300.835px 197.942px;" class="animable"></path>
                                            </g>
                                            <path d="M264.3,233.24,338,190.68c1-.56,1.73-.11,1.73,1v.69a3.84,3.84,0,0,1-1.73,3l-73.72,42.56c-1,.55-1.73.1-1.73-1v-.69A3.82,3.82,0,0,1,264.3,233.24Z" style="fill: rgb(250, 250, 250); transform-origin: 301.14px 214.302px;" id="elletkzyww37f" class="animable"></path>
                                            <path d="M264.3,247.57,338,205c1-.56,1.73-.11,1.73,1v.69a3.82,3.82,0,0,1-1.73,3l-73.72,42.56c-1,.55-1.73.1-1.73-1v-.69A3.82,3.82,0,0,1,264.3,247.57Z" style="fill: rgb(250, 250, 250); transform-origin: 301.14px 228.622px;" id="eldei6mrmxa55" class="animable"></path>
                                            <path d="M264.3,261.9,338,219.34c1-.55,1.73-.11,1.73,1V221a3.82,3.82,0,0,1-1.73,3l-73.72,42.56c-1,.55-1.73.1-1.73-1v-.69A3.82,3.82,0,0,1,264.3,261.9Z" style="fill: rgb(250, 250, 250); transform-origin: 301.14px 242.949px;" id="elk2xb6eqymgg" class="animable"></path>
                                            <path d="M264.3,276.23,338,233.67c1-.55,1.73-.11,1.73,1v.69a3.82,3.82,0,0,1-1.73,3l-73.72,42.56c-1,.55-1.73.1-1.73-1v-.69A3.82,3.82,0,0,1,264.3,276.23Z" style="fill: rgb(250, 250, 250); transform-origin: 301.14px 257.294px;" id="elz94fchgm15" class="animable"></path>
                                            <path d="M264.3,290.56,338,248c1-.55,1.73-.11,1.73,1v.69a3.82,3.82,0,0,1-1.73,3l-73.72,42.56c-1,.55-1.73.1-1.73-1v-.69A3.82,3.82,0,0,1,264.3,290.56Z" style="fill: rgb(250, 250, 250); transform-origin: 301.14px 271.624px;" id="eld4olkei9glu" class="animable"></path>
                                            <path d="M264.3,304.89,338,262.33c1-.55,1.73-.11,1.73,1V264a3.82,3.82,0,0,1-1.73,3l-73.72,42.56c-1,.55-1.73.1-1.73-1v-.69A3.82,3.82,0,0,1,264.3,304.89Z" style="fill: rgb(250, 250, 250); transform-origin: 301.14px 285.944px;" id="elke1km5pmkg" class="animable"></path>
                                            <path d="M264.3,319.22,338,276.66c1-.55,1.73-.11,1.73,1v.69a3.82,3.82,0,0,1-1.73,3l-73.72,42.56c-1,.55-1.73.1-1.73-1v-.69A3.82,3.82,0,0,1,264.3,319.22Z" style="fill: rgb(250, 250, 250); transform-origin: 301.14px 300.284px;" id="elyjrwaz6h85d" class="animable"></path>
                                            <path d="M264.3,333.55,338,291c1-.55,1.73-.1,1.73,1v.69a3.82,3.82,0,0,1-1.73,3l-73.72,42.56c-1,.55-1.73.1-1.73-1v-.69A3.82,3.82,0,0,1,264.3,333.55Z" style="fill: rgb(250, 250, 250); transform-origin: 301.14px 314.625px;" id="elpo72af0paar" class="animable"></path>
                                            <path d="M264.3,347.88,338,305.32c1-.55,1.73-.1,1.73,1V307a3.81,3.81,0,0,1-1.73,3l-73.72,42.56c-1,.55-1.73.1-1.73-1v-.69A3.82,3.82,0,0,1,264.3,347.88Z" style="fill: rgb(250, 250, 250); transform-origin: 301.14px 328.94px;" id="elhxwv72zml8k" class="animable"></path>
                                            <path d="M264.3,362.21,338,319.65c1-.55,1.73-.1,1.73,1v.69a3.81,3.81,0,0,1-1.73,3L264.29,366.9c-1,.55-1.73.1-1.73-1v-.69A3.83,3.83,0,0,1,264.3,362.21Z" style="fill: rgb(250, 250, 250); transform-origin: 301.145px 343.275px;" id="el89lteqx8up9" class="animable"></path>
                                        </g>
                                        <path d="M376.73,209.16h13.88a17.94,17.94,0,0,0,17.94-17.94h0a15.91,15.91,0,0,0-15.91-15.91h0a15.91,15.91,0,0,0-15.91,15.91Z" style="fill: rgb(38, 50, 56); transform-origin: 392.64px 192.235px;" id="eliutytk9lp8f" class="animable"></path>
                                        <path d="M405,181.58l3.85-2.07a2.12,2.12,0,0,0-2.91-1A2.29,2.29,0,0,0,405,181.58Z" style="fill: rgb(38, 50, 56); transform-origin: 406.796px 179.925px;" id="elb6eselpqtxj" class="animable"></path>
                                        <path d="M404.73,182l4.1,1.53a2.13,2.13,0,0,0-1.2-2.83A2.31,2.31,0,0,0,404.73,182Z" style="fill: rgb(38, 50, 56); transform-origin: 406.866px 182.05px;" id="elwnaqe4vhpi" class="animable"></path>
                                        <path d="M391,222.39l-19.33-.83C370,219.21,370,213,371.76,211l21.39.58Z" style="fill: rgb(61, 31, 117); transform-origin: 381.789px 216.695px;" id="elgtc6lq3x6cl" class="animable"></path>
                                        <path d="M379.25,342.31a38.55,38.55,0,0,1,.16,3.89v7.61H386v-4.46a36.89,36.89,0,0,1,.5-6Z" style="fill: rgb(177, 102, 104); transform-origin: 382.875px 348.06px;" id="elf23lldyz0hd" class="animable"></path>
                                        <path d="M379.4,350.55v-.95c-.18,1.44-4.3,6.86-6.92,9.25-2.09,1.91-4.94,4.11-5.67,6.24s3.37,3.08,6.07,2.81a10.93,10.93,0,0,0,6.8-3.56,32.71,32.71,0,0,0,2.93-4.36c.8-1.08,4.4-3.3,4.84-4.56a8.17,8.17,0,0,0-.38-3.47c-.31-1.17-.64-2.46-1-2.35v.72a5.26,5.26,0,0,1-3.31,1.12C381.75,351.48,379.4,351.29,379.4,350.55Z" style="fill: rgb(38, 50, 56); transform-origin: 377.11px 358.769px;" id="elmn7052u0dw" class="animable"></path>
                                        <path d="M386,350.32a5.26,5.26,0,0,1-3.31,1.12c-1,0-3.32-.15-3.32-.89v-.95c-.18,1.44-4.3,6.86-6.92,9.25-.5.46-1.05.93-1.6,1.42-1.11,1.24-.79,2.32,1.82,2.54s4.91-1.35,6.89-3.78S386,350.32,386,350.32Z" style="fill: rgb(177, 102, 104); transform-origin: 378.123px 356.215px;" id="elypzmlcjo96" class="animable"></path>
                                        <path d="M399.48,353.53c.13,1.6.13,3.27.16,4v7.61h6.62v-4.46a36.88,36.88,0,0,1,.49-6Z" style="fill: rgb(177, 102, 104); transform-origin: 403.115px 359.335px;" id="elt9pn5avu44i" class="animable"></path>
                                        <path d="M399.63,361.87v-.95c-.19,1.44-4.3,6.86-6.93,9.25-2.09,1.91-4.94,4.11-5.66,6.23s3.36,3.09,6.07,2.82a10.9,10.9,0,0,0,6.79-3.56,33,33,0,0,0,2.94-4.36c.8-1.08,4.4-3.3,4.83-4.56a7.86,7.86,0,0,0-.38-3.47c-.3-1.17-.64-2.46-1-2.35v.72a5.26,5.26,0,0,1-3.31,1.12C402,362.8,399.62,362.61,399.63,361.87Z" style="fill: rgb(38, 50, 56); transform-origin: 397.339px 370.089px;" id="elzd71n0tp3uk" class="animable"></path>
                                        <path d="M406.25,361.64a5.26,5.26,0,0,1-3.31,1.12c-1,0-3.32-.15-3.31-.89v-.95c-.19,1.44-4.3,6.86-6.93,9.25-.5.46-1,.93-1.59,1.42-1.11,1.24-.79,2.32,1.82,2.54s4.9-1.35,6.88-3.78S406.25,361.64,406.25,361.64Z" style="fill: rgb(177, 102, 104); transform-origin: 398.378px 367.535px;" id="el5fv1b3ahfov" class="animable"></path>
                                        <path d="M379.25,345.45c-1.42-11.67-3.74-31.85-4.42-36.26-.63-4.08.95-39,1.92-50.12l34.5-1.85c2.62,11.24.06,26.4-.83,35.87-.88,9.21-2,20-2,20s2.69,9.39,2,16.86c-.46,4.71-2.57,18.92-3.57,25a8.16,8.16,0,0,1-7.57-.1c.11,1.29-1.23-15.74-2-22.62-1.1-9.55-1.52-16.51-2.5-22.09-1.23-7-1.65-34.22-1.65-34.22l-4,30.93a74.92,74.92,0,0,1,.63,10c0,6.91-2.55,22.61-3.35,28.48C384.68,346.56,381.16,346.93,379.25,345.45Z" style="fill: rgb(69, 90, 100); transform-origin: 393.542px 306.526px;" id="elj3gz60i6wff" class="animable"></path>
                                        <path d="M393.12,275.9s-6.31-2.21-9.9-5.51a17.75,17.75,0,0,0,7.39,6.47l.06,18.1,2.45-19.06" style="fill: rgb(55, 71, 79); transform-origin: 388.17px 282.675px;" id="elahinevhh8r" class="animable"></path>
                                        <path d="M398.14,211.74s9.37,1.08,10.49,1.58c-5.71,6.25.37,11.43.37,11.43l-4.35,19.14c3.75,4.79,5.89,8.49,6.79,14.2-4,7.08-26.57,8.06-34.84,2.79.72-9.87,2.33-16.94,1.79-19.91-3.93-12.12-2.71-14.66-2.34-17.43.72-5.41,6.09-10.12,9.16-12.1h2.86Z" style="fill: rgb(240, 240, 240); transform-origin: 393.509px 237.832px;" id="el4yybrmj7p9h" class="animable"></path>
                                        <path d="M382,183.1c-1.68,1-3.76,5.22-3.55,14.08.17,7.51,2.61,9.36,3.83,9.9s3.58.21,5.87-.18v4.51s-3.17,3.68-3,5.75,4.57,2.55,7.54.53a24.05,24.05,0,0,0,5.46-5.95l-.05-10.36s1.34,1.31,3.63-.69c1.89-1.65,2.52-4.44,1-5.93a3.29,3.29,0,0,0-5.23,1s-1.27-3.53-6.55-5.26C386.22,189,383.63,187.19,382,183.1Z" style="fill: rgb(177, 102, 104); transform-origin: 391.008px 201.041px;" id="elwd119ne129q" class="animable"></path>
                                        <path d="M387.3,195.29a1,1,0,0,0,.89,1,1,1,0,0,0,1-.94.95.95,0,1,0-1.89-.09Z" style="fill: rgb(38, 50, 56); transform-origin: 388.249px 195.279px;" id="el4u7e7z3jsf8" class="animable"></path>
                                        <path d="M387.05,201.66l-2.19.7a1.12,1.12,0,0,0,1.42.78A1.2,1.2,0,0,0,387.05,201.66Z" style="fill: rgb(154, 74, 77); transform-origin: 385.98px 202.426px;" id="el388191s4kdk" class="animable"></path>
                                        <path d="M379.56,192.39l1.91-1.32a1.12,1.12,0,0,0-1.59-.33A1.23,1.23,0,0,0,379.56,192.39Z" style="fill: rgb(38, 50, 56); transform-origin: 380.421px 191.465px;" id="elsf9hj5y3n2q" class="animable"></path>
                                        <path d="M390.05,193.09l-1.91-1.32a1.12,1.12,0,0,1,1.59-.33A1.23,1.23,0,0,1,390.05,193.09Z" style="fill: rgb(38, 50, 56); transform-origin: 389.189px 192.165px;" id="el02g2y5pg9fo2" class="animable"></path>
                                        <path d="M380,194.61a1,1,0,0,0,.89,1,1,1,0,0,0,1-.93.95.95,0,1,0-1.89-.09Z" style="fill: rgb(38, 50, 56); transform-origin: 380.949px 194.604px;" id="elwtjzqnr436" class="animable"></path>
                                        <polygon points="384.45 194.07 384.3 199.75 381.31 198.83 384.45 194.07" style="fill: rgb(154, 74, 77); transform-origin: 382.88px 196.91px;" id="el8icjkcchc0o" class="animable"></polygon>
                                        <path d="M388.11,206.9c2.41-.31,7.38-1.74,8.16-3.7a5.08,5.08,0,0,1-1.75,2.5c-1.48,1.27-6.41,2.71-6.41,2.71Z" style="fill: rgb(154, 74, 77); transform-origin: 392.19px 205.805px;" id="eltdtyo12498" class="animable"></path>
                                        <polygon points="406.59 235.34 398.6 247.01 404.65 243.89 406.59 235.34" style="fill: rgb(224, 224, 224); transform-origin: 402.595px 241.175px;" id="elu3dk1q6v42a" class="animable"></polygon>
                                        <path d="M402.89,215.87l-18.75,19.39s-18.41-1.81-24.66-3.6c-2-.57-3.56-3.27-4-5.54a2.85,2.85,0,0,0-2.19-2.51v4.55c-.16,1.15-.72,1.74-2.36,1.78-6.32.14-9.25-1.78-10,1.65-.49,2.19.46,4.68,4.63,5.83,5.86,1.6,9.1.8,12.66,1.69,2.75.68,21.94,4.33,25.71,5.15,2,.44,3.51.3,5.68-1.84S408,225.08,408,225.08c5-5,3.52-10.13.74-11.66C407,212.47,405.1,213.59,402.89,215.87Z" style="fill: rgb(177, 102, 104); transform-origin: 376.053px 228.772px;" id="elkvdqmp2kas" class="animable"></path>
                                        <path d="M408.63,213.32c1.21.49,2.69,1.78,2.81,5.12s-2.35,6.38-5.26,9.86-3.79,4.4-3.79,4.4-7.36-2.68-8.61-8.15c0,0,5.55-5.88,7.21-7.76S405.71,212,408.63,213.32Z" style="fill: rgb(61, 31, 117); transform-origin: 402.612px 222.844px;" id="el2f2exlv33s4" class="animable"></path>
                                    </g>
                                </g>
                                <g id="freepik--Clouds--inject-3" class="animable" style="transform-origin: 374.989px 106.069px;">
                                    <path d="M370.63,86.78l6.95,4a7.22,7.22,0,0,1-.06-.92v-2c0-3.58,2.52-5,5.62-3.24a11,11,0,0,1,3.35,3.22c.51-4.51,4-6.18,8.34-3.71,4.64,2.69,8.41,9.21,8.41,14.57v3a7.85,7.85,0,0,1-.72,3.49l5.78,3.33a6.92,6.92,0,0,1,3.12,5.4c0,2-1.4,2.8-3.12,1.8L370.63,94a6.89,6.89,0,0,1-3.12-5.4C367.51,86.59,368.91,85.78,370.63,86.78Z" style="fill: rgb(235, 235, 235); transform-origin: 389.465px 99.569px;" id="elt3ykahag4d" class="animable"></path>
                                    <path d="M340.88,107l5.24,3c0-.24,0-.47,0-.7v-1.52c0-2.7,1.9-3.8,4.24-2.44a8.09,8.09,0,0,1,2.53,2.43c.38-3.4,3-4.67,6.29-2.8a14,14,0,0,1,6.35,11v2.27a6,6,0,0,1-.54,2.64l4.36,2.51a5.21,5.21,0,0,1,2.35,4.08c0,1.5-1.05,2.11-2.35,1.36l-28.43-16.42a5.2,5.2,0,0,1-2.36-4.07C338.52,106.89,339.58,106.28,340.88,107Z" style="fill: rgb(235, 235, 235); transform-origin: 355.129px 116.628px;" id="elpsxyjmg2wy" class="animable"></path>
                                </g>
                                <defs>
                                    <filter id="active" height="200%">
                                        <feMorphology in="SourceAlpha" result="DILATED" operator="dilate" radius="2"></feMorphology>
                                        <feFlood flood-color="#32DFEC" flood-opacity="1" result="PINK"></feFlood>
                                        <feComposite in="PINK" in2="DILATED" operator="in" result="OUTLINE"></feComposite>
                                        <feMerge>
                                            <feMergeNode in="OUTLINE"></feMergeNode>
                                            <feMergeNode in="SourceGraphic"></feMergeNode>
                                        </feMerge>
                                    </filter>
                                    <filter id="hover" height="200%">
                                        <feMorphology in="SourceAlpha" result="DILATED" operator="dilate" radius="2"></feMorphology>
                                        <feFlood flood-color="#ff0000" flood-opacity="0.5" result="PINK"></feFlood>
                                        <feComposite in="PINK" in2="DILATED" operator="in" result="OUTLINE"></feComposite>
                                        <feMerge>
                                            <feMergeNode in="OUTLINE"></feMergeNode>
                                            <feMergeNode in="SourceGraphic"></feMergeNode>
                                        </feMerge>
                                        <feColorMatrix type="matrix" values="0   0   0   0   0                0   1   0   0   0                0   0   0   0   0                0   0   0   1   0 "></feColorMatrix>
                                    </filter>
                                </defs>
                            </svg>
                        </div>
                    </div>

                <?php
                }
                ?>
            </div>
        </div>
    </section>
</main>