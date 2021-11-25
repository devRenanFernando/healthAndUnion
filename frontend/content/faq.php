<?php
$previous = "javascript:history.go(-1)";
if (isset($_SERVER['HTTP_REFERER'])) {
    $previous = $_SERVER['HTTP_REFERER'];
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Links -->
    <link rel="shortcut icon" href="../assets/svg/logo_preenchida.svg" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,700;1,400;1,600&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/6827d460af.js" crossorigin="anonymous"></script>
    <script defer src="../js/faq.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="../css/main.css">

    <title>Bem-vindo à Health & Union - Seu site especializado em Fibromialgia</title>
</head>

<body>
    <section id="faq" class="container-flex min-vh-100 d-flex align-items-center justify-content-center">

        <div class="row d-flex align-items-center justify-content-center my-4">
            <div class="col-lg-7 text-center order-2">
                <div class="btn-group-vertical w-75 my-3">

                    <button type="button" class="btn border-4 button mb-3" type="button" data-bs-toggle="collapse" data-bs-target="#quest01" aria-expanded="false" aria-controls="quest01">
                        Perdi minha conta, como posso recupera - lá?
                    </button>
                    <div class="collapse mb-3 w-100" id="quest01">
                        <div class="card card-body">
                            Entre em contato com a administração do site dentro de sete dias depois do desaparecimento ou da exclusão da conta. Caso tenha passado um período de tempo maior, não será possível recuperar os dados.
                        </div>
                    </div>

                    <button type="button" class="btn border-4 button mb-3" type="button" data-bs-toggle="collapse" data-bs-target="#quest02" aria-expanded="false" aria-controls="quest02">
                        Como faço para me tornar um Colaborador?
                    </button>
                    <div class="collapse mb-3 w-100" id="quest02">
                        <div class="card card-body">
                            Entre em contato com os administradores pelo Email e esclareça sua dúvida no título da mensagem de texto.
                        </div>
                    </div>

                    <button type="button" class="btn border-4 button mb-3" type="button" data-bs-toggle="collapse" data-bs-target="#quest03" aria-expanded="false" aria-controls="quest03">
                        Gostaria de ajudar com novas notícias sobre a patologia, entretanto não tenho acesso aos posts. Vocês poderiam me ajudar?
                    </button>
                    <div class="collapse mb-3 w-100" id="quest03">
                        <div class="card card-body">
                            Para que um usuário possa publicar posts ele tem que se tornar um Colaborador. Para isso entre em contato conosco pelo Email.
                        </div>
                    </div>

                    <button type="button" class="btn border-4 button mb-3" type="button" data-bs-toggle="collapse" data-bs-target="#quest04" aria-expanded="false" aria-controls="quest04">
                        Vocês possuem indicações de especialistas da saúde?
                    </button>
                    <div class="collapse mb-3 w-100" id="quest04">
                        <div class="card card-body">
                            O objetivo do site é promover a transferência de informações sobre a Fibromialgia, no entanto não possuímos nenhuma parceria com profissionais da saúde.
                        </div>
                    </div>

                    <button type="button" class="btn border-4 button mb-3" type="button" data-bs-toggle="collapse" data-bs-target="#quest05" aria-expanded="false" aria-controls="quest05">
                        Como alterar minhas informações de perfil?
                    </button>
                    <div class="collapse mb-3 w-100" id="quest05">
                        <div class="card card-body">
                            Para isso é necessário acessar sua página de usuário clicando no ícone de perfil. Lá você encontrará todos os seus dados.
                        </div>
                    </div>

                    <a class="btn btn-primary fw-bold my-3 w-50 mx-auto border-4" href="<?= $previous ?>">
                        Voltar
                    </a>
                    <a class="btn btn-primary fw-bold my-3 w-50 mx-auto border-4" href="../../index.php">
                        Home
                    </a>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="mx-auto">
                    <svg id="freepik_stories-faq" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 750 500" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs">
                        <style>
                            svg#freepik_stories-faq:not(.animated) .animable {
                                opacity: 0;
                            }

                            svg#freepik_stories-faq.animated #freepik--background-complete--inject-70 {
                                animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) lightSpeedLeft;
                                animation-delay: 0s;
                            }

                            svg#freepik_stories-faq.animated #freepik--Floor--inject-70 {
                                animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomOut;
                                animation-delay: 0s;
                            }

                            svg#freepik_stories-faq.animated #freepik--Letters--inject-70 {
                                animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) fadeIn;
                                animation-delay: 0s;
                            }

                            svg#freepik_stories-faq.animated #freepik--search-engine--inject-70 {
                                animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) lightSpeedLeft;
                                animation-delay: 0s;
                            }

                            svg#freepik_stories-faq.animated #freepik--speech-bubble--inject-70 {
                                animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideUp;
                                animation-delay: 0s;
                            }

                            svg#freepik_stories-faq.animated #freepik--Plants--inject-70 {
                                animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideLeft;
                                animation-delay: 0s;
                            }

                            svg#freepik_stories-faq.animated #freepik--character-3--inject-70 {
                                animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideDown;
                                animation-delay: 0s;
                            }

                            svg#freepik_stories-faq.animated #freepik--character-2--inject-70 {
                                animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideLeft;
                                animation-delay: 0s;
                            }

                            svg#freepik_stories-faq.animated #freepik--character-1--inject-70 {
                                animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomIn;
                                animation-delay: 0s;
                            }

                            @keyframes lightSpeedLeft {
                                from {
                                    transform: translate3d(-50%, 0, 0) skewX(20deg);
                                    opacity: 0;
                                }

                                60% {
                                    transform: skewX(-10deg);
                                    opacity: 1;
                                }

                                80% {
                                    transform: skewX(2deg);
                                }

                                to {
                                    opacity: 1;
                                    transform: translate3d(0, 0, 0);
                                }
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

                            @keyframes fadeIn {
                                0% {
                                    opacity: 0;
                                }

                                100% {
                                    opacity: 1;
                                }
                            }

                            @keyframes slideUp {
                                0% {
                                    opacity: 0;
                                    transform: translateY(30px);
                                }

                                100% {
                                    opacity: 1;
                                    transform: inherit;
                                }
                            }

                            @keyframes slideLeft {
                                0% {
                                    opacity: 0;
                                    transform: translateX(-30px);
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
                        </style>
                        <g id="freepik--background-complete--inject-70" class="animable" style="transform-origin: 382.096px 253.778px;">
                            <path d="M444.41,437.23a1024,1024,0,0,0-120-.89l-1.83.77c16.82,10.19,38,7.48,57.53,10.08,11.75,1.57,23.19,5.17,35,6.12s24.64-1.18,33.15-9.42a4.65,4.65,0,0,0,1.77-3.2C450,438.26,446.84,437.39,444.41,437.23Z" style="fill: rgb(245, 245, 245); transform-origin: 386.305px 444.259px;" id="el7k3z6ksb4ii" class="animable"></path>
                            <path d="M659.43,448.61c-3.75-2.18-8.25-2.53-12.58-2.83l-23.74-1.63c-6.48-.45-13.12-.88-19.35.92s-12.11,6.34-13.63,12.65l0,.21c11.25,2.3,22.55,4.62,34,5.22s23.21-.58,33.79-5c2.23-.94,4.71-2.46,4.81-4.88C662.78,451.25,661.15,449.6,659.43,448.61Z" style="fill: rgb(245, 245, 245); transform-origin: 626.431px 453.526px;" id="el1vrhhzzs523h" class="animable"></path>
                            <path d="M202,435.88c-3.76-2.18-8.26-2.53-12.59-2.83l-23.74-1.63c-6.47-.45-13.11-.88-19.35.93s-12.1,6.33-13.63,12.64l0,.21c11.25,2.31,22.55,4.62,34,5.22s23.2-.58,33.78-5c2.23-.94,4.71-2.47,4.81-4.88C205.35,438.52,203.71,436.88,202,435.88Z" style="fill: rgb(245, 245, 245); transform-origin: 168.986px 440.796px;" id="elep3cupsckj" class="animable"></path>
                            <path d="M81.77,204.46l-8.51,2.61s2.19,7.15-5.2,9.55a7.19,7.19,0,0,1-8-2.35,8,8,0,0,1-1.51-7.07c.72-2.82,3.21-6,9.26-6.71l-5.89-19.18-8.41,2.58L57,195.13s-10.87,6.67-6.88,19.67c3.82,12.44,15.86,11.91,20.64,10.44C74.36,224.12,86.53,219.43,81.77,204.46Z" style="fill: rgb(224, 224, 224); transform-origin: 66.0494px 203.65px;" id="elz8q1gbs8xb" class="animable"></path>
                            <g id="el1vvyyi8x11r">
                                <rect x="50.77" y="170.5" width="8.93" height="8.34" style="fill: rgb(224, 224, 224); transform-origin: 55.235px 174.67px; transform: rotate(162.95deg);" class="animable"></rect>
                            </g>
                            <path d="M253,348.56l-4.8,1.47a4.25,4.25,0,0,1-2.93,5.38,4.06,4.06,0,0,1-4.52-1.32,4.51,4.51,0,0,1-.85-4c.41-1.6,1.82-3.36,5.22-3.78l-3.31-10.82L237,337l2,6.34a9.68,9.68,0,0,0-3.88,11.09c2.15,7,8.94,6.72,11.63,5.89C248.8,359.64,255.67,357,253,348.56Z" style="fill: rgb(224, 224, 224); transform-origin: 244.125px 348.115px;" id="el8h8oc6ujb6s" class="animable"></path>
                            <g id="ele5mztj1vgfg">
                                <rect x="235.5" y="329.4" width="5.04" height="4.7" style="fill: rgb(224, 224, 224); transform-origin: 238.02px 331.75px; transform: rotate(162.95deg);" class="animable"></rect>
                            </g>
                            <path d="M645.73,54.11l5-.26a4.27,4.27,0,0,1,4.16-4.5A4.07,4.07,0,0,1,659,51.74a4.49,4.49,0,0,1-.16,4.08c-.78,1.44-2.57,2.81-6,2.38l.57,11.31,5-.25L658,62.64a9.69,9.69,0,0,0,6.47-9.81c-.37-7.33-7-8.7-9.84-8.56C652.49,44.38,645.19,45.27,645.73,54.11Z" style="fill: rgb(224, 224, 224); transform-origin: 655.097px 56.8853px;" id="elwn9qv4nlq7m" class="animable"></path>
                            <g id="elckrdzalf4yp">
                                <rect x="653.6" y="71.7" width="5.04" height="4.7" style="fill: rgb(224, 224, 224); transform-origin: 656.12px 74.05px; transform: rotate(-2.88deg);" class="animable"></rect>
                            </g>
                            <path d="M227.69,57.62l5-.25a4.27,4.27,0,0,1,4.15-4.51,4.07,4.07,0,0,1,4.06,2.39,4.52,4.52,0,0,1-.15,4.08c-.78,1.45-2.58,2.81-6,2.39l.57,11.3,5-.25L240,66.15a9.69,9.69,0,0,0,6.47-9.81c-.37-7.33-7-8.7-9.84-8.56C234.45,47.89,227.15,48.78,227.69,57.62Z" style="fill: rgb(224, 224, 224); transform-origin: 237.077px 60.3953px;" id="el3mum76laako" class="animable"></path>
                            <g id="el7ahe63d5npv">
                                <rect x="235.56" y="75.22" width="5.04" height="4.7" style="fill: rgb(224, 224, 224); transform-origin: 238.08px 77.57px; transform: rotate(-2.88deg);" class="animable"></rect>
                            </g>
                            <path d="M711.78,137.28,704.21,142s3.93,6.35-2.6,10.55a7.19,7.19,0,0,1-8.35-.25A8,8,0,0,1,690,145.8c0-2.91,1.6-6.57,7.26-8.83L686.72,119.9l-7.49,4.63,6.18,10s-8.82,9.2-1.67,20.77c6.84,11.07,18.36,7.51,22.61,4.88C709.6,158.17,720.18,150.54,711.78,137.28Z" style="fill: rgb(235, 235, 235); transform-origin: 697.091px 141.395px;" id="el76j1x37eysw" class="animable"></path>
                            <g id="el84h4kbtdw2a">
                                <rect x="674.11" y="111" width="8.93" height="8.34" style="fill: rgb(235, 235, 235); transform-origin: 678.575px 115.17px; transform: rotate(148.28deg);" class="animable"></rect>
                            </g>
                            <path d="M250.23,204.94l5.44,4s3.36-4.57,8.17-1.16a5.46,5.46,0,0,1,2.19,5.94,6.05,6.05,0,0,1-3.62,4.12c-2,.84-5.08.74-8.27-2.6l-9,12.26,5.38,3.95,5.28-7.18s9,3.6,15.09-4.72c5.85-8,.07-15-3-17.28C265.55,200.55,257.19,195.27,250.23,204.94Z" style="fill: rgb(250, 250, 250); transform-origin: 259.272px 215.365px;" id="el4fnm6us4bvt" class="animable"></path>
                            <g id="eluie6yb6y4sr">
                                <rect x="240.72" y="231.41" width="6.77" height="6.33" style="fill: rgb(250, 250, 250); transform-origin: 244.105px 234.575px; transform: rotate(36.32deg);" class="animable"></rect>
                            </g>
                            <path d="M539.3,65.36l5.44,4s3.35-4.57,8.16-1.16a5.45,5.45,0,0,1,2.2,5.94,6.07,6.07,0,0,1-3.63,4.12c-2,.85-5.08.74-8.27-2.6l-9,12.26,5.37,4,5.28-7.19s9,3.6,15.09-4.71c5.85-8,.08-15-3-17.29C554.62,61,546.25,55.69,539.3,65.36Z" style="fill: rgb(250, 250, 250); transform-origin: 548.328px 75.8171px;" id="el61hmhv6by1g" class="animable"></path>
                            <g id="el930zt1nrwh5">
                                <rect x="529.78" y="91.83" width="6.77" height="6.33" style="fill: rgb(250, 250, 250); transform-origin: 533.165px 94.995px; transform: rotate(36.32deg);" class="animable"></rect>
                            </g>
                        </g>
                        <g id="freepik--Floor--inject-70" class="animable" style="transform-origin: 371.46px 424.91px;">
                            <path d="M707.54,424.91c0,.15-150.48.26-336.07.26s-336.09-.11-336.09-.26,150.44-.26,336.09-.26S707.54,424.77,707.54,424.91Z" style="fill: rgb(38, 50, 56); transform-origin: 371.46px 424.91px;" id="elqvh00d5bqnn" class="animable"></path>
                        </g>
                        <g id="freepik--Letters--inject-70" class="animable" style="transform-origin: 378.02px 290.07px;">
                            <path d="M276.91,275.87v28.3H212.74V424.94H181.65v-279H292.46v28.29H212.74V275.87Z" style="fill: rgb(61, 31, 117); transform-origin: 237.055px 285.44px;" id="el6y5aepfhha6" class="animable"></path>
                            <path d="M322.84,368.74l-10.76,56.2H283.39l53.4-279h45l53.41,279H404.15l-10.76-56.2Zm4-26.7H389L357.52,181Z" style="fill: rgb(61, 31, 117); transform-origin: 359.295px 285.44px;" id="elws1gza5dvc" class="animable"></path>
                            <path d="M576.59,213.3V357.58c0,17.14-3.58,32.28-10.76,43.44,3.19,6.78,8.37,8.77,17.14,8.77h4v27.5h-5.18c-17.54,0-29.1-6.37-35.48-17.93-8.77,5.18-20.32,8.37-33.88,8.37-42.64,0-63.77-27.9-63.77-70.15V213.3c0-42.65,21.13-70.15,63.77-70.15C555.47,143.15,576.59,170.65,576.59,213.3Zm-97.25-1.6V359.17c0,25.51,10.76,40.26,33.08,40.26,22.72,0,33.09-14.75,33.09-40.26V211.7c0-25.11-10.37-40.25-33.09-40.25C490.1,171.45,479.34,186.59,479.34,211.7Z" style="fill: rgb(61, 31, 117); transform-origin: 517.815px 290.22px;" id="elnc2mgfjljem" class="animable"></path>
                            <g id="el5zminz5fvo4">
                                <g style="opacity: 0.3; transform-origin: 384.31px 290.22px;" class="animable">
                                    <path d="M276.91,275.87v28.3H212.74V424.94H181.65v-279H292.46v28.29H212.74V275.87Z" id="elqkoa8ld2fr9" class="animable" style="transform-origin: 237.055px 285.44px;"></path>
                                    <path d="M322.84,368.74l-10.76,56.2H283.39l53.4-279h45l53.41,279H404.15l-10.76-56.2Zm4-26.7H389L357.52,181Z" id="elzz92l7m1tse" class="animable" style="transform-origin: 359.295px 285.44px;"></path>
                                    <path d="M576.59,213.3V357.58c0,17.14-3.58,32.28-10.76,43.44,3.19,6.78,8.37,8.77,17.14,8.77h4v27.5h-5.18c-17.54,0-29.1-6.37-35.48-17.93-8.77,5.18-20.32,8.37-33.88,8.37-42.64,0-63.77-27.9-63.77-70.15V213.3c0-42.65,21.13-70.15,63.77-70.15C555.47,143.15,576.59,170.65,576.59,213.3Zm-97.25-1.6V359.17c0,25.51,10.76,40.26,33.08,40.26,22.72,0,33.09-14.75,33.09-40.26V211.7c0-25.11-10.37-40.25-33.09-40.25C490.1,171.45,479.34,186.59,479.34,211.7Z" id="el0gurvyawfk3v" class="animable" style="transform-origin: 517.815px 290.22px;"></path>
                                </g>
                            </g>
                            <path d="M303.53,368.74l-10.76,56.2h-28.7l53.41-279h45l53.41,279H384.84l-10.76-56.2Zm4-26.7h62.18L338.21,181Z" style="fill: rgb(61, 31, 117); transform-origin: 339.98px 285.44px;" id="el1dv4ohqlvzr" class="animable"></path>
                            <path d="M264.33,276v28.3H200.16V425.1H169.07v-279h110.8v28.3H200.16V276Z" style="fill: rgb(61, 31, 117); transform-origin: 224.47px 285.6px;" id="el5xh9h33556b" class="animable"></path>
                            <path d="M557.28,213V357.31c0,17.14-3.59,32.29-10.76,43.45,3.19,6.77,8.37,8.77,17.14,8.77h4V437h-5.18c-17.54,0-29.1-6.38-35.47-17.94-8.77,5.18-20.33,8.37-33.88,8.37-42.65,0-63.77-27.9-63.77-70.15V213c0-42.65,21.12-70.15,63.77-70.15C536.15,142.88,557.28,170.38,557.28,213ZM460,211.44V358.91c0,25.51,10.76,40.25,33.08,40.25,22.72,0,33.08-14.74,33.08-40.25V211.44c0-25.11-10.36-40.26-33.08-40.26C470.79,171.18,460,186.33,460,211.44Z" style="fill: rgb(61, 31, 117); transform-origin: 498.51px 289.925px;" id="eln6ve9fbw5g9" class="animable"></path>
                        </g>
                        <g id="freepik--search-engine--inject-70" class="animable" style="transform-origin: 376.38px 99.155px;">
                            <path d="M453.78,115.28H299.09a15.86,15.86,0,0,1-15.86-15.86h0a15.86,15.86,0,0,1,15.86-15.85H453.78a15.86,15.86,0,0,1,15.86,15.85h0A15.86,15.86,0,0,1,453.78,115.28Z" style="fill: rgb(245, 245, 245); transform-origin: 376.435px 99.425px;" id="el9u1eo1dpuj" class="animable"></path>
                            <path d="M299.09,83.57a15.86,15.86,0,0,0-15.86,15.85h0a15.86,15.86,0,0,0,15.86,15.86H326.4V83.57Z" style="fill: rgb(61, 31, 117); transform-origin: 304.815px 99.425px;" id="elxugjo5dxax" class="animable"></path>
                            <path d="M302.7,105.69a7,7,0,1,1,7-7A7,7,0,0,1,302.7,105.69Zm0-13.26A6.26,6.26,0,1,0,309,98.68,6.27,6.27,0,0,0,302.7,92.43Z" style="fill: rgb(255, 255, 255); transform-origin: 302.7px 98.69px;" id="elvnk2zn0k8qt" class="animable"></path>
                            <g id="el6ubna80n8zr">
                                <rect x="310.5" y="101.1" width="0.75" height="6.86" style="fill: rgb(255, 255, 255); transform-origin: 310.875px 104.53px; transform: rotate(-51.71deg);" class="animable"></rect>
                            </g>
                            <path d="M453.78,115.28l1.06-.08a6.72,6.72,0,0,0,1.28-.15l.83-.13.93-.24a15.4,15.4,0,0,0,4.55-2.06,15.64,15.64,0,0,0,4.72-4.87,16,16,0,0,0,1.68-3.69,16.89,16.89,0,0,0,.68-4.42,16.6,16.6,0,0,0-.69-4.81,16,16,0,0,0-2.37-4.68A15.74,15.74,0,0,0,456.84,84a33.3,33.3,0,0,0-6.37-.29h-6.78l-144.59.08a15.59,15.59,0,0,0-8.05,29,15.18,15.18,0,0,0,4.5,1.83,19.1,19.1,0,0,0,4.84.42h28.49l65,.06,43.82.08,11.92,0,3.1,0,1,0-1,0-3.1,0-11.92,0-43.82.08-65,0H300.39a20.77,20.77,0,0,1-4.95-.43,15.36,15.36,0,0,1-4.66-1.9,16.11,16.11,0,0,1,8.32-29.9l144.59.07h6.78a33.51,33.51,0,0,1,6.44.32A16,16,0,0,1,466.68,90a16.46,16.46,0,0,1,2.4,4.77,16.84,16.84,0,0,1,.68,4.9,17.35,17.35,0,0,1-.71,4.48,16.61,16.61,0,0,1-1.73,3.73,15.71,15.71,0,0,1-4.81,4.89,15,15,0,0,1-4.61,2L457,115l-.83.12a7.76,7.76,0,0,1-1.3.13Z" style="fill: rgb(38, 50, 56); transform-origin: 376.38px 99.155px;" id="elv24o0fz7s6r" class="animable"></path>
                        </g>
                        <g id="freepik--speech-bubble--inject-70" class="animable" style="transform-origin: 94.9px 97.46px;">
                            <polygon points="123.78 63.91 66.12 63.91 66.12 119.78 85.9 119.78 95.87 130.88 104.1 119.78 123.78 119.78 123.78 63.91" style="fill: rgb(255, 255, 255); transform-origin: 94.95px 97.395px;" id="elx5u42jk0tvf" class="animable"></polygon>
                            <path d="M123.78,63.91s0,.33,0,1,0,1.67,0,3c0,2.61,0,6.42.05,11.28,0,9.78.06,23.77.1,40.64v.2H104.1l.17-.08L96.05,131l-.16.22-.19-.2c-3.17-3.54-6.54-7.28-10-11.1l.17.08h-20v-.23c0-20.48,0-39.58,0-55.87v-.2h.2l41.89.1,11.67,0,3.06,0,1,0-1.08,0-3.1,0L107.88,64l-41.76.1.2-.2c0,16.29,0,35.39,0,55.87l-.23-.23H86l.06.08,10,11.1-.35,0,8.24-11.1.06-.08h19.79l-.2.2c0-16.82.08-30.76.1-40.51,0-4.88,0-8.71,0-11.33,0-1.3,0-2.3,0-3S123.78,63.91,123.78,63.91Z" style="fill: rgb(38, 50, 56); transform-origin: 94.9px 97.46px;" id="el3pq23q0qm2v" class="animable"></path>
                            <path d="M85.47,84.85H90.6a4.36,4.36,0,0,1,4.47-4.38,4.14,4.14,0,0,1,4,2.65,4.59,4.59,0,0,1-.36,4.15c-.87,1.43-2.78,2.73-6.23,2.13V101h5.07V94.18a9.9,9.9,0,0,0,7.1-9.67c0-7.49-6.72-9.23-9.59-9.23C92.87,75.28,85.37,75.81,85.47,84.85Z" style="fill: rgb(61, 31, 117); transform-origin: 95.0603px 88.14px;" id="elm2yjas9hr6" class="animable"></path>
                            <rect x="92.48" y="103.33" width="5.14" height="4.8" style="fill: rgb(61, 31, 117); transform-origin: 95.05px 105.73px;" id="eldg1kpk57029" class="animable"></rect>
                        </g>
                        <g id="freepik--Plants--inject-70" class="animable" style="transform-origin: 373.985px 335.585px;">
                            <path d="M636.74,249.5c9.17,4.75,16.2,12.92,21.25,21.93s8.32,18.88,11.54,28.69l2.83,50.58c-10.67-18.15-19.23-39.48-21.55-60.41l7.1-.63c-4.76-.73-8.75-4.18-11.3-8.26s-3.85-8.81-5.12-13.45l8.66,1.29A32.13,32.13,0,0,1,636.74,249.5Z" style="fill: rgb(69, 90, 100); transform-origin: 654.55px 300.1px;" id="eltw4tms4ish" class="animable"></path>
                            <g id="elg19leg8p72g">
                                <g style="opacity: 0.3; transform-origin: 654.55px 300.1px;" class="animable">
                                    <path d="M636.74,249.5c9.17,4.75,16.2,12.92,21.25,21.93s8.32,18.88,11.54,28.69l2.83,50.58c-10.67-18.15-19.23-39.48-21.55-60.41l7.1-.63c-4.76-.73-8.75-4.18-11.3-8.26s-3.85-8.81-5.12-13.45l8.66,1.29A32.13,32.13,0,0,1,636.74,249.5Z" id="el9v3p1ertigu" class="animable" style="transform-origin: 654.55px 300.1px;"></path>
                                </g>
                            </g>
                            <path d="M673.94,362.55s23.15-27.71,22.88-54.17h-9.35s10.16-6.68,9.36-10.42-1.08-17.91-1.08-17.91l-8.55,2.14s6.42-3.21,7.22-8.28-1.87-28.6-1.87-28.6-10.42,11-13.63,22.18-11.63,24.32-9.15,58.53S673.94,362.55,673.94,362.55Z" style="fill: rgb(69, 90, 100); transform-origin: 683.097px 303.93px;" id="elqdrkt8ql6q" class="animable"></path>
                            <path d="M662.2,365.17s-25.09-16.71-30.66-38l7.52-2.05s-9.63-3.15-9.8-6.33-3.06-14.63-3.06-14.63l7.34-.15s-5.86-1.18-7.61-5.09-4.75-23.4-4.75-23.4S632,282,637,290.34s14.66,17,20.16,45.05S662.2,365.17,662.2,365.17Z" style="fill: rgb(69, 90, 100); transform-origin: 641.695px 320.345px;" id="elwdrqv16tjvb" class="animable"></path>
                            <path d="M686.22,269.47a1.1,1.1,0,0,1,0,.3c0,.22-.09.51-.16.86l-.65,3.31c-.29,1.43-.63,3.19-1,5.23s-.85,4.37-1.3,6.94c-.94,5.15-2,11.29-3,18.12s-2,14.37-3,22.3-1.63,15.5-2.19,22.39-1,13.11-1.21,18.33c-.15,2.62-.23,5-.32,7.06s-.16,3.86-.2,5.32-.1,2.56-.13,3.37l0,.87a1.4,1.4,0,0,1,0,.3,1.71,1.71,0,0,1,0-.3V383c0-.81,0-1.94,0-3.37s0-3.26.12-5.33.12-4.45.25-7.06c.2-5.23.58-11.45,1.09-18.36s1.24-14.47,2.15-22.41,2-15.47,3-22.31,2.13-13,3.12-18.12c.47-2.57,1-4.89,1.37-6.92s.78-3.79,1.11-5.22.56-2.5.74-3.29l.2-.85A1.32,1.32,0,0,1,686.22,269.47Z" style="fill: rgb(38, 50, 56); transform-origin: 679.642px 326.82px;" id="elj5evi2kzia" class="animable"></path>
                            <path d="M677.15,379.52s21.19-24,27.77-38.57l-5-2.13c3.6.6,7.29-.95,10.08-3.3s4.84-5.44,6.85-8.48l-6.54-1.11a24.36,24.36,0,0,0,14.3-11.07c-7.73,1.27-14.71,5.51-20.47,10.81A101.79,101.79,0,0,0,691.77,340,49.19,49.19,0,0,0,687,348C683.4,355.31,677.14,370.69,677.15,379.52Z" style="fill: rgb(69, 90, 100); transform-origin: 700.88px 347.19px;" id="elm1djous4da9" class="animable"></path>
                            <path d="M631.2,289.48s.06.07.15.22l.36.68c.34.64.79,1.51,1.37,2.63,1.19,2.28,2.85,5.62,4.84,9.77,4,8.3,9.16,19.92,14.24,33s9,25.2,11.68,34c1.32,4.41,2.34,8,3,10.48l.76,2.86c.07.31.13.55.18.75a1,1,0,0,1,.05.26,1.13,1.13,0,0,1-.1-.24c-.06-.2-.14-.44-.23-.74-.21-.69-.49-1.64-.85-2.84-.72-2.47-1.79-6-3.16-10.42-2.72-8.79-6.75-20.85-11.81-33.94s-10.2-24.72-14.09-33.05c-1.94-4.17-3.55-7.53-4.68-9.84l-1.28-2.67-.32-.7C631.23,289.57,631.2,289.48,631.2,289.48Z" style="fill: rgb(38, 50, 56); transform-origin: 649.515px 336.805px;" id="elv2cav9i1v6o" class="animable"></path>
                            <path d="M675.35,389.83a10.76,10.76,0,0,1,.12-1.75c.11-1.12.34-2.73.68-4.71A85.34,85.34,0,0,1,687.2,354.1c1-1.71,1.95-3.07,2.61-4a10.18,10.18,0,0,1,1.06-1.39,11.59,11.59,0,0,1-.89,1.5c-.61.94-1.46,2.33-2.46,4.06a94.87,94.87,0,0,0-11,29.15c-.39,2-.67,3.56-.83,4.67A11,11,0,0,1,675.35,389.83Z" style="fill: rgb(38, 50, 56); transform-origin: 683.11px 369.27px;" id="elq9v26uk2ce" class="animable"></path>
                            <rect x="647.39" y="384.17" width="46.38" height="9.46" style="fill: rgb(61, 31, 117); transform-origin: 670.58px 388.9px;" id="elwukcp99og7" class="animable"></rect>
                            <polygon points="689.35 393.63 684.33 425.45 656.31 425.45 651.63 393.63 689.35 393.63" style="fill: rgb(61, 31, 117); transform-origin: 670.49px 409.54px;" id="eljp5srwwca0c" class="animable"></polygon>
                            <path d="M650.23,393.63c0-.14,8.78-.26,19.6-.26s19.59.12,19.59.26-8.77.26-19.59.26S650.23,393.77,650.23,393.63Z" style="fill: rgb(38, 50, 56); transform-origin: 669.825px 393.63px;" id="elxv7nvhnnsa" class="animable"></path>
                            <path d="M77.67,343a43.63,43.63,0,0,1,41.6-11.42,75.72,75.72,0,0,1-42.09,13.15" style="fill: rgb(69, 90, 100); transform-origin: 98.225px 337.481px;" id="el91pwk6wbxn6" class="animable"></path>
                            <path d="M91.78,293c-1.73-12.26,3-26,12.21-35,.31,12.15-4.82,25.82-12.21,35" style="fill: rgb(69, 90, 100); transform-origin: 97.7155px 275.5px;" id="eltlxb64540wn" class="animable"></path>
                            <path d="M84.44,316.19a65.48,65.48,0,0,1,30.07-28.73,41.34,41.34,0,0,1-30.18,28.86" style="fill: rgb(69, 90, 100); transform-origin: 99.42px 301.89px;" id="elyqxz0p5ksrd" class="animable"></path>
                            <path d="M82.92,320.66c7.41.2,14.9-.06,22.06-2s14-5.54,18.78-11.21A73.77,73.77,0,0,0,83,319.94" style="fill: rgb(69, 90, 100); transform-origin: 103.34px 314.083px;" id="elo1x71yg9pb" class="animable"></path>
                            <path d="M86.68,305.94c-3.76-14.09-10-23.83-21-31.72a29.29,29.29,0,0,0,21,31.72" style="fill: rgb(69, 90, 100); transform-origin: 76.0712px 290.08px;" id="elqe4j7gerkq" class="animable"></path>
                            <path d="M58.73,330.23A20.86,20.86,0,0,1,71.4,310.92c-.62,7.27-6.33,15.69-12.67,19.31" style="fill: rgb(69, 90, 100); transform-origin: 65.0648px 320.575px;" id="elmrugbwhx66" class="animable"></path>
                            <path d="M55.19,318.36a31.07,31.07,0,0,0-20.35-26.51c2.56,11.77,9.37,21.57,20.35,26.51" style="fill: rgb(69, 90, 100); transform-origin: 45.015px 305.105px;" id="elgevz7dgfggj" class="animable"></path>
                            <path d="M60.53,339.43c-2.62-3.73-6.88-6.06-11.29-7.21s-9-1.26-13.57-1.35a31.75,31.75,0,0,0,24.51,10.21" style="fill: rgb(69, 90, 100); transform-origin: 48.1px 335.986px;" id="elj51cnpno6u" class="animable"></path>
                            <path d="M65.82,369.46a34.77,34.77,0,0,0-42.46,20.11c15.43-2.93,30.64-9.78,42.46-20.11" style="fill: rgb(69, 90, 100); transform-origin: 44.59px 378.741px;" id="el4g30z64x8rb" class="animable"></path>
                            <path d="M82.74,359c-2.56,7.57-2.07,16.73,3.63,23.25A27.74,27.74,0,0,0,82.74,359" style="fill: rgb(69, 90, 100); transform-origin: 84.3675px 370.625px;" id="el04qeu5kso4wp" class="animable"></path>
                            <path d="M92.75,354.82a28.46,28.46,0,0,0,15.73,23.11,1.78,1.78,0,0,0,1.39.23c.7-.28.76-1.23.67-2-1.11-9.71-8.3-19.09-17.79-21.37" style="fill: rgb(69, 90, 100); transform-origin: 101.661px 366.501px;" id="elfw5707l544" class="animable"></path>
                            <path d="M99.28,353.83a23.38,23.38,0,0,0,34.13.18c-10.85-1.19-23.37-2-34.13-.18" style="fill: rgb(69, 90, 100); transform-origin: 116.345px 357.04px;" id="elnko6w8digv" class="animable"></path>
                            <path d="M100.91,267.11s0,.11-.1.31-.2.53-.33.92l-1.31,3.51c-.59,1.52-1.26,3.4-2,5.57-.39,1.09-.81,2.26-1.26,3.49l-1.35,3.92c-1.92,5.49-4.06,12.09-6.36,19.43s-4.64,15.47-7,24-4.35,16.79-6.09,24.28-3.14,14.29-4.19,20c-.27,1.43-.53,2.79-.77,4.08s-.43,2.51-.62,3.65c-.4,2.28-.73,4.24-1,5.85s-.43,2.84-.57,3.71c-.06.4-.12.72-.16,1a2.92,2.92,0,0,1-.06.32,1.64,1.64,0,0,1,0-.33l.12-1c.12-.87.28-2.12.49-3.71s.52-3.59.89-5.87c.18-1.14.38-2.36.59-3.66s.48-2.65.74-4.08c1-5.74,2.44-12.53,4.11-20s3.75-15.73,6.06-24.31,4.73-16.69,7-24,4.49-13.93,6.45-19.42c.49-1.37,1-2.67,1.38-3.91s.89-2.39,1.29-3.48c.8-2.16,1.5-4,2.11-5.54s1-2.67,1.38-3.49c.15-.38.28-.68.37-.9A1.09,1.09,0,0,1,100.91,267.11Z" style="fill: rgb(38, 50, 56); transform-origin: 84.3208px 329.13px;" id="elz89xwr1toz" class="animable"></path>
                            <path d="M41.32,298.14s.07.05.18.17l.52.55c.46.48,1.11,1.2,1.93,2.16a75.77,75.77,0,0,1,6.39,8.51A57.32,57.32,0,0,1,57,323.82a138.9,138.9,0,0,1,4,18.91c2.21,13.53,4.92,25.64,6.88,34.41,1,4.36,1.78,7.89,2.34,10.37l.63,2.83.15.73a.72.72,0,0,1,0,.26,1.26,1.26,0,0,1-.08-.25l-.19-.73c-.17-.66-.4-1.6-.7-2.8L67.61,377.2c-2-8.74-4.79-20.86-7-34.4a142.45,142.45,0,0,0-4-18.87,57.8,57.8,0,0,0-6.56-14.24,80.27,80.27,0,0,0-6.26-8.57c-.8-1-1.44-1.7-1.87-2.2l-.49-.58C41.36,298.21,41.31,298.14,41.32,298.14Z" style="fill: rgb(38, 50, 56); transform-origin: 56.1653px 344.735px;" id="elkozx58gdk8" class="animable"></path>
                            <path d="M102.52,353.37a1.52,1.52,0,0,1-.39.07l-1.12.13-.81.08-1,.14c-.69.1-1.48.2-2.33.39l-1.35.27-1.44.37c-1,.22-2,.59-3.15.92a46.76,46.76,0,0,0-6.87,3,39.48,39.48,0,0,0-6.16,4.28,30.33,30.33,0,0,0-2.36,2.27,24.68,24.68,0,0,0-1.87,2.15,21.13,21.13,0,0,0-1.38,1.91,12.68,12.68,0,0,0-1,1.51l-.58,1a1.45,1.45,0,0,1-.22.33s0-.13.15-.37l.51-1a12.8,12.8,0,0,1,.89-1.55,19.39,19.39,0,0,1,1.35-2,24.41,24.41,0,0,1,1.85-2.22,30.66,30.66,0,0,1,2.36-2.32,37.58,37.58,0,0,1,6.21-4.35,44.48,44.48,0,0,1,6.95-3c1.12-.33,2.17-.68,3.18-.9l1.46-.34,1.37-.25c.86-.17,1.65-.25,2.35-.33l1-.11.81,0,1.14-.05A1.44,1.44,0,0,1,102.52,353.37Z" style="fill: rgb(38, 50, 56); transform-origin: 86.505px 362.777px;" id="elvew3lknjypn" class="animable"></path>
                            <path d="M105.61,298.4a5.27,5.27,0,0,1-.78.75l-2.23,1.94c-1.9,1.62-4.54,3.84-7.47,6.27s-5.6,4.61-7.55,6.18l-2.31,1.83a5.52,5.52,0,0,1-.89.63,5.27,5.27,0,0,1,.78-.75l2.24-1.94c1.9-1.62,4.53-3.84,7.46-6.27s5.6-4.61,7.55-6.18l2.31-1.83A5.52,5.52,0,0,1,105.61,298.4Z" style="fill: rgb(38, 50, 56); transform-origin: 94.995px 307.2px;" id="el28z1m3w0cfz" class="animable"></path>
                            <path d="M108.28,312.75c0,.11-5.67,1.89-12.72,4s-12.81,3.69-12.84,3.58,5.66-1.89,12.72-4S108.25,312.64,108.28,312.75Z" style="fill: rgb(38, 50, 56); transform-origin: 95.4999px 316.54px;" id="elgdviysczj6o" class="animable"></path>
                            <path d="M87.25,307a3.65,3.65,0,0,1-.59-.81l-1.5-2.29c-1.28-1.93-3.09-4.56-5.22-7.36s-4.2-5.23-5.72-7l-1.81-2.06a6.3,6.3,0,0,1-.63-.78,4.11,4.11,0,0,1,.75.67c.47.45,1.12,1.13,1.91,2,1.57,1.7,3.68,4.11,5.83,6.92s3.92,5.48,5.13,7.45c.61,1,1.09,1.79,1.4,2.36A5.8,5.8,0,0,1,87.25,307Z" style="fill: rgb(38, 50, 56); transform-origin: 79.515px 296.85px;" id="ellch2ookp9i8" class="animable"></path>
                            <path d="M67.46,315a18.75,18.75,0,0,1-1.33,2.2c-.85,1.33-2,3.19-3.2,5.3s-2.21,4-2.92,5.46a19.33,19.33,0,0,1-1.21,2.27,13.41,13.41,0,0,1,.94-2.4c.65-1.45,1.63-3.43,2.83-5.54s2.4-4,3.31-5.26A14.18,14.18,0,0,1,67.46,315Z" style="fill: rgb(38, 50, 56); transform-origin: 63.13px 322.615px;" id="elrx85liognf" class="animable"></path>
                            <path d="M60.7,339.82a30.69,30.69,0,0,1-2.9-1.27c-1.78-.8-4.26-1.85-7.07-2.83s-5.4-1.71-7.29-2.2a29.33,29.33,0,0,1-3.06-.81,4.35,4.35,0,0,1,.85.09c.54.08,1.32.23,2.28.44a62.49,62.49,0,0,1,7.36,2.09,64.89,64.89,0,0,1,7.06,2.95c.87.44,1.57.81,2,1.08A4.79,4.79,0,0,1,60.7,339.82Z" style="fill: rgb(38, 50, 56); transform-origin: 50.54px 336.265px;" id="el5tkmfkk8x7a" class="animable"></path>
                            <path d="M66,369.5s-.11.06-.35.12l-1,.26-3.79.88A125.82,125.82,0,0,0,48.49,374a54.39,54.39,0,0,0-11.55,5.43c-1.38.87-2.45,1.65-3.18,2.21a10.49,10.49,0,0,1-1.15.85s.08-.11.26-.27.43-.42.79-.71a34.32,34.32,0,0,1,3.12-2.33,50.63,50.63,0,0,1,11.57-5.57,103.31,103.31,0,0,1,12.45-3.16l3.81-.75A10.92,10.92,0,0,1,66,369.5Z" style="fill: rgb(38, 50, 56); transform-origin: 49.305px 375.995px;" id="elzeu2a0sgqhj" class="animable"></path>
                            <path d="M85.29,376.82c-.11,0-.79-4-1.51-8.93s-1.22-9-1.11-9,.79,4,1.52,8.92S85.41,376.8,85.29,376.82Z" style="fill: rgb(38, 50, 56); transform-origin: 83.9814px 367.855px;" id="el4fb40ynzvwu" class="animable"></path>
                            <path d="M105.35,369.53a21.24,21.24,0,0,1-1.81-2.14c-1.08-1.35-2.58-3.21-4.28-5.23S96,358.33,94.84,357a21.54,21.54,0,0,1-1.8-2.15,2.66,2.66,0,0,1,.58.5c.35.33.84.83,1.44,1.46,1.2,1.25,2.81,3,4.52,5.05s3.17,3.92,4.2,5.32c.51.7.92,1.27,1.19,1.67A2.73,2.73,0,0,1,105.35,369.53Z" style="fill: rgb(38, 50, 56); transform-origin: 99.195px 362.19px;" id="el68sfqlahnxp" class="animable"></path>
                            <polygon points="52.27 388.14 52.27 398.05 54.74 398.05 63.55 425.86 83.09 425.86 91.63 398.32 94.93 398.05 94.93 388.14 52.27 388.14" style="fill: rgb(61, 31, 117); transform-origin: 73.6px 407px;" id="elj60ukn75h5i" class="animable"></polygon>
                            <path d="M93.28,398.32c0,.12-8.63.21-19.27.21s-19.27-.09-19.27-.21,8.63-.2,19.27-.2S93.28,398.21,93.28,398.32Z" style="fill: rgb(38, 50, 56); transform-origin: 74.01px 398.325px;" id="el8mouv50ts5y" class="animable"></path>
                            <path d="M107.33,334.57a8.39,8.39,0,0,1-1.25.34l-3.43.82c-2.89.72-6.86,1.8-11.16,3.25s-8.13,3-10.86,4.16l-3.24,1.41a7.3,7.3,0,0,1-1.2.49,7.25,7.25,0,0,1,1.13-.63c.74-.39,1.83-.92,3.19-1.54a110.66,110.66,0,0,1,10.84-4.28,112.11,112.11,0,0,1,11.23-3.14c1.46-.33,2.64-.56,3.47-.7A6.66,6.66,0,0,1,107.33,334.57Z" style="fill: rgb(38, 50, 56); transform-origin: 91.76px 339.805px;" id="elg67c6fic53v" class="animable"></path>
                            <path d="M86.79,413.77c0,.11-6.05.2-13.51.2s-13.52-.09-13.52-.2,6.05-.21,13.52-.21S86.79,413.65,86.79,413.77Z" style="fill: rgb(250, 250, 250); transform-origin: 73.275px 413.765px;" id="ela3sdytv5vhk" class="animable"></path>
                            <path d="M87.55,411.47c0,.11-6.41.21-14.32.21s-14.33-.1-14.33-.21,6.41-.21,14.33-.21S87.55,411.35,87.55,411.47Z" style="fill: rgb(250, 250, 250); transform-origin: 73.225px 411.47px;" id="eluvfjsr01o7o" class="animable"></path>
                        </g>
                        <g id="freepik--character-3--inject-70" class="animable" style="transform-origin: 614.282px 272.971px;">
                            <polygon points="613.69 435.13 614.12 424.07 633.38 423.35 633.09 436.87 626.09 441.1 613.69 435.13" style="fill: rgb(179, 107, 96); transform-origin: 623.535px 432.225px;" id="eludzkkellgpk" class="animable"></polygon>
                            <path d="M633.51,434.36v1.26s21.38,8.83,21.57,12.91l-42.63-.63.79-14.17A24.43,24.43,0,0,0,633.51,434.36Z" style="fill: rgb(69, 90, 100); transform-origin: 633.765px 441.13px;" id="el69rqngzkwkq" class="animable"></path>
                            <g id="el8bxjs4l7qcp">
                                <g style="opacity: 0.6; transform-origin: 617.875px 439.955px;" class="animable">
                                    <path d="M617.49,438.32a1.75,1.75,0,0,0-1.23,2,1.67,1.67,0,0,0,1.94,1.24,1.83,1.83,0,0,0,1.29-2.09,1.74,1.74,0,0,0-2.16-1.07" style="fill: rgb(255, 255, 255); transform-origin: 617.875px 439.955px;" id="elntefoyhdrq" class="animable"></path>
                                </g>
                            </g>
                            <g id="el9lh894ld3bl">
                                <g style="opacity: 0.6; transform-origin: 633.775px 446.51px;" class="animable">
                                    <path d="M612.45,447.9l.19-3.41,40.79,1.85s1.88.85,1.65,2.19Z" style="fill: rgb(255, 255, 255); transform-origin: 633.775px 446.51px;" id="elav52o0cb7sh" class="animable"></path>
                                </g>
                            </g>
                            <path d="M633.65,435.75c0,.2-1,.28-2.08.94s-1.6,1.52-1.79,1.43.14-1.28,1.41-2.05S633.7,435.56,633.65,435.75Z" style="fill: rgb(38, 50, 56); transform-origin: 631.691px 436.838px;" id="elu39l0h793o8" class="animable"></path>
                            <path d="M638.1,437.66c0,.2-.87.54-1.59,1.41s-.93,1.8-1.14,1.79-.32-1.19.59-2.26S638.09,437.46,638.1,437.66Z" style="fill: rgb(38, 50, 56); transform-origin: 636.662px 439.216px;" id="elvo6h4m714nj" class="animable"></path>
                            <path d="M640.56,443.05c-.19,0-.47-1,.08-2.14s1.54-1.57,1.62-1.39-.53.77-1,1.71S640.76,443,640.56,443.05Z" style="fill: rgb(38, 50, 56); transform-origin: 641.292px 441.265px;" id="eliuezst89r3l" class="animable"></path>
                            <polygon points="587.93 410.45 588.23 443.53 603.48 442.43 606.83 410.21 587.93 410.45" style="fill: rgb(179, 107, 96); transform-origin: 597.38px 426.87px;" id="eln2ymsk15ban" class="animable"></polygon>
                            <path d="M604,435.94s-10.72,7.44-15.93,1l-1.35,3.11-6.05,22.19a3,3,0,0,0,1.72,3.56,3,3,0,0,0,3.12-.59c4.41-4.1,20.54-19.26,20.38-21.31l-.07-5.45a2.77,2.77,0,0,0-1.82-2.54Z" style="fill: rgb(69, 90, 100); transform-origin: 593.227px 450.957px;" id="el1y3bajrmtfs" class="animable"></path>
                            <g id="el8rwywgffavg">
                                <g style="opacity: 0.6; transform-origin: 594.428px 454.009px;" class="animable">
                                    <path d="M582.92,466l23-24v1.19c.12,1.29-.45,1.8-1.08,2.63-1.86,2.45-7,7.94-19.21,19.39a3,3,0,0,1-2.68.74Z" style="fill: rgb(255, 255, 255); transform-origin: 594.428px 454.009px;" id="eljchpmlc21i" class="animable"></path>
                                </g>
                            </g>
                            <g id="elqd2w3v9uuo">
                                <g style="opacity: 0.6; transform-origin: 603.39px 439.886px;" class="animable">
                                    <path d="M602.52,438.5a1.7,1.7,0,0,0-.5,2.27,1.76,1.76,0,0,0,2.31.5,1.66,1.66,0,1,0-2-2.67" style="fill: rgb(255, 255, 255); transform-origin: 603.39px 439.886px;" id="elonmfl4yolts" class="animable"></path>
                                </g>
                            </g>
                            <path d="M589.53,453.73a8.67,8.67,0,0,0-2.52-2.19c-1.69-.85-3.28-.45-3.32-.63s.34-.28,1-.37a4.7,4.7,0,0,1,4.51,2.17C589.56,453.29,589.6,453.7,589.53,453.73Z" style="fill: rgb(38, 50, 56); transform-origin: 586.623px 452.12px;" id="elypyka212v5" class="animable"></path>
                            <path d="M587.47,457.48a24.9,24.9,0,0,0-2.55-1.21c-1.48-.45-2.77-.18-2.81-.36s1.3-.74,3-.23S587.62,457.41,587.47,457.48Z" style="fill: rgb(38, 50, 56); transform-origin: 584.798px 456.475px;" id="el9swpvmx0b6m" class="animable"></path>
                            <path d="M593.36,448.91c-.13.14-1.55-1.28-3.8-2.12a28.14,28.14,0,0,0-4.28-1c0-.15,2.1-.54,4.51.4S593.5,448.84,593.36,448.91Z" style="fill: rgb(38, 50, 56); transform-origin: 589.325px 447.25px;" id="elkzvj450qvlq" class="animable"></path>
                            <path d="M593.86,442.16c-.08.17-1.67-.48-3.74-.56s-3.72.41-3.78.23a5.88,5.88,0,0,1,3.81-.84C592.37,441.08,594,442,593.86,442.16Z" style="fill: rgb(38, 50, 56); transform-origin: 590.104px 441.568px;" id="elotmqx7jp79" class="animable"></path>
                            <path d="M588.94,441.55a2.32,2.32,0,0,1,.16-1.06,7.49,7.49,0,0,1,1.37-2.58,3.37,3.37,0,0,1,1.71-1.28,1.22,1.22,0,0,1,1.27.49,1.9,1.9,0,0,1,.21,1.33,4.17,4.17,0,0,1-4.3,3.05,4.82,4.82,0,0,1-4.22-3.27,1.6,1.6,0,0,1,.18-1.35,1.17,1.17,0,0,1,1.31-.37,4.09,4.09,0,0,1,1.69,1.28,8.07,8.07,0,0,1,1.52,2.49,2.5,2.5,0,0,1,.26,1,13.45,13.45,0,0,0-2.12-3.23,3.79,3.79,0,0,0-1.49-1.08.63.63,0,0,0-.72.2,1.07,1.07,0,0,0-.06.89,4.28,4.28,0,0,0,3.69,2.79,3.59,3.59,0,0,0,3.68-2.53,1.39,1.39,0,0,0-.1-.94.67.67,0,0,0-.7-.28,3.09,3.09,0,0,0-1.47,1.06A10.89,10.89,0,0,0,588.94,441.55Z" style="fill: rgb(38, 50, 56); transform-origin: 589.383px 438.995px;" id="elna95stnjjhn" class="animable"></path>
                            <path d="M638.65,241.86l.33,3.65,8.9,15.95s4,24,1.87,40c-2.62,19.82-6,48.5-7.19,62.24-.71,8.12-7.88,68.11-7.88,68.11L613,431.55s1.15-65.26,1.43-77.52c.22-9.63-.56-51.12-.56-51.12l-.92-55.08L640.22,241" style="fill: rgb(38, 50, 56); transform-origin: 631.662px 336.405px;" id="el3fbh9oqqs9u" class="animable"></path>
                            <path d="M606.89,432.6,613.77,299l4.06-51.54-30.65-8.11-1.1,6.37s-11.2,27.62-10.82,35.72c1.06,22.71,3.88,81,3.88,81l7.05,69.8Z" style="fill: rgb(38, 50, 56); transform-origin: 596.54px 335.975px;" id="elk5qkgywvss8" class="animable"></path>
                            <path d="M615,252a1.71,1.71,0,0,0-.09.5c0,.4-.07.88-.13,1.46-.09,1.26-.2,3.1-.3,5.36-.19,4.53-.33,10.8-.43,17.71s-.21,13.1-.28,17.71c0,2.2-.1,4-.13,5.36,0,.59,0,1.07,0,1.46a1.81,1.81,0,0,0,0,.52,2.19,2.19,0,0,0,.08-.51c0-.39.08-.87.13-1.45.1-1.27.2-3.1.3-5.37.2-4.53.33-10.79.44-17.71s.2-13.1.28-17.71c0-2.2.09-4,.12-5.36,0-.58,0-1.07,0-1.46A2.81,2.81,0,0,0,615,252Z" style="fill: rgb(69, 90, 100); transform-origin: 614.314px 277.04px;" id="elakd8kdwc62w" class="animable"></path>
                            <path d="M580,264.45a2.92,2.92,0,0,0,.81.31,5.54,5.54,0,0,0,1,.25,10.6,10.6,0,0,0,1.34.23,16.77,16.77,0,0,0,3.52.06,18,18,0,0,0,8.12-2.72,16.93,16.93,0,0,0,2.78-2.17,11.71,11.71,0,0,0,.93-1,7,7,0,0,0,.63-.79c.33-.46.49-.72.46-.74s-.81.93-2.28,2.23a18.94,18.94,0,0,1-2.78,2,21,21,0,0,1-3.81,1.75,21.55,21.55,0,0,1-4.1.9,19.15,19.15,0,0,1-3.44.05C581.17,264.71,580,264.35,580,264.45Z" style="fill: rgb(69, 90, 100); transform-origin: 589.797px 261.622px;" id="elzv2rum6uglr" class="animable"></path>
                            <path d="M636,254.12a6,6,0,0,0,1,2,16.21,16.21,0,0,0,8.29,6.44,6.09,6.09,0,0,0,2.16.46,26.37,26.37,0,0,1-6.51-3.42A25.93,25.93,0,0,1,636,254.12Z" style="fill: rgb(69, 90, 100); transform-origin: 641.725px 258.57px;" id="el6jcmxu2kus4" class="animable"></path>
                            <path d="M622.16,372.68a14.43,14.43,0,0,0,2.68-1.2c1.62-.82,3.8-2,6.13-3.53s4.35-3,5.76-4.11a12.79,12.79,0,0,0,2.2-1.94,18.79,18.79,0,0,0-2.43,1.64c-1.47,1-3.51,2.46-5.82,3.95s-4.46,2.75-6,3.66A18.58,18.58,0,0,0,622.16,372.68Z" style="fill: rgb(69, 90, 100); transform-origin: 630.545px 367.29px;" id="elb0pk08c89ot" class="animable"></path>
                            <polygon points="598.97 159.22 623.45 157.31 632.9 164.12 626.99 220.47 634.81 248.09 591 248.09 585.36 197.31 598.97 159.22" style="fill: rgb(250, 250, 250); transform-origin: 610.085px 202.7px;" id="els6r07xxsxne" class="animable"></polygon>
                            <path d="M571,252.65c-6.29-4.41-17-13.07-18-18-1.34-6.43,17.68-57.6,21.43-61.88s21.46-12.58,21.46-12.58l1-1.61c1.07-1.74,2.68-5.25,4.72-5.25l.29,2.45.38,5.32c.47,2.76,2.54,15.45,4.87,22A57.82,57.82,0,0,1,610.44,202c.19,19.84.52,63.11-.1,68.87-.8,7.5-4.14,22-4.14,22h0s-26.39-8.69-32.49-22.36c-2.65-6-2.69-17.89-2.69-17.89" style="fill: rgb(69, 90, 100); transform-origin: 581.816px 223.1px;" id="el7kqp0ixtxin" class="animable"></path>
                            <path d="M673.76,223s-12.22-34.33-16-45.06c-3.32-9.42-10.39-11.65-10.39-11.65L630.68,160c-.67-2.56-3.84-4.71-6.3-5.4l-1.58-.7-1.82,2.4s3.79,3.44,4.33,6.92c.3,2,1.42,9.76-.23,14.88a62.15,62.15,0,0,0-2.91,16.39c-.48,11.47-1,30.48.45,37.22,2.14,9.92,8.67,57.91,8.67,57.91s15-9.94,18.69-15c4.44-6,2.92-17.39-1.29-28.95-.4-1.1.2,1.13,0,0a7.3,7.3,0,0,0,1.31.46c8.78,2,11.75,4.14,20.67-3.47S673.76,223,673.76,223Z" style="fill: rgb(69, 90, 100); transform-origin: 648.306px 221.76px;" id="elw8r0bk2z8ch" class="animable"></path>
                            <path d="M595.77,167.89c0,.07-1.19.4-3.1,1a57.36,57.36,0,0,0-14.08,6.85c-1.68,1.11-2.68,1.86-2.73,1.8a3.52,3.52,0,0,1,.64-.61c.43-.37,1.08-.87,1.9-1.46a45.68,45.68,0,0,1,6.79-4.06,46.81,46.81,0,0,1,7.38-2.84c1-.28,1.77-.47,2.33-.58A3.43,3.43,0,0,1,595.77,167.89Z" style="fill: rgb(38, 50, 56); transform-origin: 585.815px 172.717px;" id="elw5pjwbx4di" class="animable"></path>
                            <path d="M648.57,175.2a14.91,14.91,0,0,1-2-1.31,57.06,57.06,0,0,0-4.88-3c-2-1.08-3.81-1.92-5.16-2.5a14.88,14.88,0,0,1-2.19-1,9.93,9.93,0,0,1,2.31.67,38.2,38.2,0,0,1,5.27,2.39,37.8,37.8,0,0,1,4.84,3.16A10,10,0,0,1,648.57,175.2Z" style="fill: rgb(38, 50, 56); transform-origin: 641.455px 171.295px;" id="elorwso50voae" class="animable"></path>
                            <path d="M597.91,247.38a4.13,4.13,0,0,1,0,1,6.78,6.78,0,0,1-.16,1.13,11.24,11.24,0,0,1-.34,1.47,12.14,12.14,0,0,1-.62,1.73,16.43,16.43,0,0,1-.93,1.89,19.15,19.15,0,0,1-3,3.81,19.43,19.43,0,0,1-3.87,2.87,14.08,14.08,0,0,1-1.91.89,15.39,15.39,0,0,1-3.22.9,6.42,6.42,0,0,1-1.13.13,4,4,0,0,1-1,0c0-.1,1.38-.13,3.49-.77a11.64,11.64,0,0,0,1.68-.62,16.45,16.45,0,0,0,1.85-.9,18.63,18.63,0,0,0,6.67-6.53,18.91,18.91,0,0,0,.95-1.83,13.15,13.15,0,0,0,.65-1.66C597.75,248.75,597.81,247.36,597.91,247.38Z" style="fill: rgb(38, 50, 56); transform-origin: 589.835px 255.306px;" id="eldbtrzgk1xtg" class="animable"></path>
                            <path d="M577,186.44a38.13,38.13,0,0,1-1.48-5.79,37.58,37.58,0,0,1-1-5.89,39.59,39.59,0,0,1,1.48,5.79A39,39,0,0,1,577,186.44Z" style="fill: rgb(38, 50, 56); transform-origin: 575.76px 180.6px;" id="eljfd1ctqct4d" class="animable"></path>
                            <path d="M652.78,173.48a49.59,49.59,0,0,0-3.29,4.74,52.33,52.33,0,0,0-2.32,5.29,4.83,4.83,0,0,1,.31-1.69,17.76,17.76,0,0,1,1.6-3.82,18,18,0,0,1,2.42-3.37A5.05,5.05,0,0,1,652.78,173.48Z" style="fill: rgb(38, 50, 56); transform-origin: 649.975px 178.495px;" id="elyf4ri01expl" class="animable"></path>
                            <path d="M666.88,223.21a7.33,7.33,0,0,1-.94-1c-.29-.33-.65-.73-1.08-1.17s-.91-1-1.48-1.49a49.79,49.79,0,0,0-4.12-3.58,52.1,52.1,0,0,0-5.53-3.73,53.17,53.17,0,0,0-6-2.94,49.53,49.53,0,0,0-5.15-1.79c-.74-.23-1.43-.38-2-.53s-1.12-.27-1.55-.36a7.23,7.23,0,0,1-1.31-.33,7.47,7.47,0,0,1,1.35.15c.43.06,1,.14,1.57.28s1.3.26,2,.48a43.46,43.46,0,0,1,5.24,1.7,48.28,48.28,0,0,1,6.06,2.93,49.55,49.55,0,0,1,5.57,3.8,43.8,43.8,0,0,1,4.08,3.69c.56.54,1,1.09,1.44,1.55s.76.87,1,1.22A8.14,8.14,0,0,1,666.88,223.21Z" style="fill: rgb(38, 50, 56); transform-origin: 652.3px 214.75px;" id="el8x8q7xpja2b" class="animable"></path>
                            <path d="M645.9,190.69a92.21,92.21,0,0,1,1.32,9.21,91.32,91.32,0,0,1,.85,9.26,91.63,91.63,0,0,1-1.32-9.21A91.08,91.08,0,0,1,645.9,190.69Z" style="fill: rgb(38, 50, 56); transform-origin: 646.985px 199.925px;" id="ely12nyyild7p" class="animable"></path>
                            <path d="M648.86,245.82a8.71,8.71,0,0,1-1.12-.66,30,30,0,0,1-2.83-2.13,21.8,21.8,0,0,1-3.59-3.84,22.9,22.9,0,0,1-3-5.73,32.12,32.12,0,0,1-1-3.2c-.25-1.06-.38-2.09-.58-3a8.89,8.89,0,0,0-2.07-4.61,9.55,9.55,0,0,0-2.81-2,7.31,7.31,0,0,1-1.17-.53,6,6,0,0,1,1.24.37,8.52,8.52,0,0,1,3,1.94,9.12,9.12,0,0,1,2.26,4.75c.21,1,.35,2,.59,3s.58,2.09,1,3.15a22.07,22.07,0,0,0,6.33,9.49c1.1,1,2.06,1.71,2.72,2.22A5.94,5.94,0,0,1,648.86,245.82Z" style="fill: rgb(38, 50, 56); transform-origin: 639.775px 232.97px;" id="el8i6djcpievf" class="animable"></path>
                            <path d="M587,245.61s-9.75,4.19-6.57,9.33c2.18,3.54,6.7,6.72,6.7,6.72,4.55-2.62,7.76-5.36,10-10.41Z" style="fill: rgb(179, 107, 96); transform-origin: 588.461px 253.635px;" id="elxmzqdanl5rb" class="animable"></path>
                            <path d="M571,252.65s.63.44,1.9,1a16,16,0,0,0,5.82,1.43l-.14.12a11,11,0,0,1,2.53-5.42,17.05,17.05,0,0,1,5.81-4.41h0a4.69,4.69,0,0,0,1.42-1.45,3.14,3.14,0,0,0,.58-1.95,4.22,4.22,0,0,0-1.06-1.89,11.19,11.19,0,0,0-1.73-1.56l0,0,0,0a24.85,24.85,0,0,1-2.55-3.51,33.09,33.09,0,0,0-2.39-3.76c-.39-.51-.79-1-1.2-1.49s-.78-1-1.14-1.55c-.72-1-1.4-2.09-2.06-3.12l0-.05V225a56.88,56.88,0,0,1-.2-6.6c.12-2.1.24-4.12.35-6,.23-3.81.44-7.21.62-10.06s.33-5.07.44-6.67c.06-.75.1-1.35.14-1.79a3.77,3.77,0,0,1,.07-.62,2.65,2.65,0,0,1,0,.62q0,.68-.06,1.8c-.07,1.6-.18,3.87-.3,6.67s-.32,6.26-.52,10.08c-.1,1.91-.21,3.93-.32,6a58.47,58.47,0,0,0,.23,6.54l0-.1c.65,1,1.33,2.06,2.05,3.09.36.52.72,1,1.12,1.52s.82,1,1.22,1.51a31.69,31.69,0,0,1,2.4,3.8,25.2,25.2,0,0,0,2.51,3.45l0,0a11.18,11.18,0,0,1,1.79,1.64,4.57,4.57,0,0,1,1.16,2.11,2.27,2.27,0,0,1-.15,1.22,5.45,5.45,0,0,1-.5,1,4.87,4.87,0,0,1-1.58,1.58h0a17.12,17.12,0,0,0-5.7,4.26,11,11,0,0,0-2.52,5.23l0,.13h-.12a15.53,15.53,0,0,1-5.89-1.57,11.22,11.22,0,0,1-1.39-.84A2.78,2.78,0,0,1,571,252.65Z" style="fill: rgb(38, 50, 56); transform-origin: 580.258px 224.335px;" id="el95l3h9in0bl" class="animable"></path>
                            <path d="M576.92,225.49c0,.07-.64-.06-1.64-.08a10.59,10.59,0,0,0-3.81.66,10.46,10.46,0,0,0-3.3,2c-.74.68-1.11,1.19-1.18,1.15a3.77,3.77,0,0,1,1-1.38,9.11,9.11,0,0,1,7.36-2.79A3.66,3.66,0,0,1,576.92,225.49Z" style="fill: rgb(38, 50, 56); transform-origin: 571.955px 227.12px;" id="elsb5czzpcod" class="animable"></path>
                            <path d="M605.07,262.84a2.47,2.47,0,0,0-1.17,1.06,1.93,1.93,0,0,0-.09,1.62,1.8,1.8,0,0,0,3.19-.15,1.94,1.94,0,0,0-.23-1.6,2.51,2.51,0,0,0-1.27-.95s.17-.07.48,0a2,2,0,0,1,1.06.75,2.26,2.26,0,0,1,.37,1.92,2.2,2.2,0,0,1-4,.19,2.22,2.22,0,0,1,.2-1.95,2,2,0,0,1,1-.85C604.89,262.79,605.07,262.82,605.07,262.84Z" style="fill: rgb(38, 50, 56); transform-origin: 605.378px 264.832px;" id="eliaty8p1fcjm" class="animable"></path>
                            <path d="M606.59,249.86a2.53,2.53,0,0,0-1.17,1.07,1.94,1.94,0,0,0-.09,1.61,1.79,1.79,0,0,0,3.19-.15,1.94,1.94,0,0,0-.23-1.6,2.47,2.47,0,0,0-1.27-.95s.17-.06.48,0a2,2,0,0,1,1.06.76,2.18,2.18,0,0,1,.37,1.92,2.2,2.2,0,0,1-4,.18,2.19,2.19,0,0,1,.19-1.94,2,2,0,0,1,1-.86C606.41,249.81,606.59,249.84,606.59,249.86Z" style="fill: rgb(38, 50, 56); transform-origin: 606.899px 251.856px;" id="el4ulnpa3168j" class="animable"></path>
                            <g id="el06o5odi9lopi">
                                <g style="opacity: 0.3; transform-origin: 569.865px 227.027px;" class="animable">
                                    <path d="M576.17,224.59l.37.22a9,9,0,0,0-13.37,3.08c-.45.86-.71,2,0,2.71a1.85,1.85,0,0,0,2.09.19,6.87,6.87,0,0,0,1.74-1.4,14.88,14.88,0,0,1,10-4" id="eli2a2uz0mdyi" class="animable" style="transform-origin: 569.865px 227.027px;"></path>
                                </g>
                            </g>
                            <g id="elo6use0a3xbd">
                                <g style="opacity: 0.3; transform-origin: 635.2px 233.682px;" class="animable">
                                    <path d="M621.81,219.9a4.92,4.92,0,0,0,4.31,4c1.9,0,4-.36,5.61.6,2.2,1.28,2.54,4.24,2.9,6.76.84,5.86,3.34,11.82,8.23,15.15a5.74,5.74,0,0,0,3.15,1.18,2.62,2.62,0,0,0,2.58-1.83,51.89,51.89,0,0,0-4.09-3.22c-3.22-2.1-4.66-6.19-5.75-9.89-.78-2.61-1.28-5.41-2.51-7.85-2.4-4.78-5.94-5.37-14.43-4.89" id="elrza4jz60qua" class="animable" style="transform-origin: 635.2px 233.682px;"></path>
                                </g>
                            </g>
                            <path d="M623.11,230a3.33,3.33,0,0,1,.25-.69l.82-1.92c.39-.82.72-1.88,1.18-3.08s.88-2.6,1.37-4.15a145.27,145.27,0,0,0,5.06-24.75c1.11-9.82,1.25-18.82.49-25.24-.2-1.61-.32-3.07-.61-4.32s-.39-2.37-.68-3.23l-.56-2a4.87,4.87,0,0,1-.16-.71,3.14,3.14,0,0,1,.26.68c.17.5.38,1.17.65,2a29.47,29.47,0,0,1,.78,3.22c.31,1.26.46,2.72.69,4.33.85,6.46.77,15.49-.35,25.35a133.77,133.77,0,0,1-5.22,24.8c-.51,1.55-1,2.95-1.45,4.14s-.85,2.25-1.26,3.06l-.91,1.89A4,4,0,0,1,623.11,230Z" style="fill: rgb(38, 50, 56); transform-origin: 628.166px 194.955px;" id="eliz79n1fma7b" class="animable"></path>
                            <path d="M635.72,209.15a14.89,14.89,0,0,1-1-5.36,9.79,9.79,0,0,0-.4-3.28,2.52,2.52,0,0,0-2.62-1.75l-.38,8.1Z" style="fill: rgb(179, 107, 96); transform-origin: 633.52px 203.95px;" id="elqjdcouj1k1n" class="animable"></path>
                            <path d="M632.07,190.51l-1.33,28a1.22,1.22,0,0,1-1.08,1.15l-14.17,1.47a1.21,1.21,0,0,1-1.33-1.22l.48-27a1.21,1.21,0,0,1,1-1.18l15-2.4A1.21,1.21,0,0,1,632.07,190.51Z" style="fill: rgb(38, 50, 56); transform-origin: 623.115px 205.223px;" id="elopqjo5wvja" class="animable"></path>
                            <path d="M622.22,196.19a.93.93,0,0,1,1-.72.91.91,0,0,1,.78.63,1.06,1.06,0,0,1-.36,1,1,1,0,0,1-1.08.06A.89.89,0,0,1,622.22,196.19Z" style="fill: rgb(250, 250, 250); transform-origin: 623.101px 196.378px;" id="elenk01ewgntq" class="animable"></path>
                            <path d="M625.89,201.59c.33,0,8.13,2.61,8.13,2.61l4.4,3.37a7.76,7.76,0,0,1,1.18,5.84c-.53,3.76-2.13,5.31-6.11,7h-8L621,217.78a2.5,2.5,0,0,1-1.21-2.53l0-.18-.56-.67a1.37,1.37,0,0,1-.17-1.52h0a1.38,1.38,0,0,1,1.85-.6l5,2.56,3.13-.08.3-1.08-4.87-1.62L618,208.53a1.71,1.71,0,0,1-.64-2.38h0a1.71,1.71,0,0,1,2.08-.7l5.82,2.29,5.94,1.57L630,207.24l-7.3-3.8S621.83,201.21,625.89,201.59Z" style="fill: rgb(179, 107, 96); transform-origin: 628.431px 210.978px;" id="eloenc87zsjqb" class="animable"></path>
                            <path d="M638.42,207.57a33.74,33.74,0,0,1-4.54-3.19l.07,0-.3-.1a35.52,35.52,0,0,1-5.49-2,38,38,0,0,1,5.64,1.6l.3.1h0l0,0A35.44,35.44,0,0,1,638.42,207.57Z" style="fill: rgb(131, 72, 63); transform-origin: 633.29px 204.925px;" id="elwoo8t9fhooo" class="animable"></path>
                            <path d="M631.16,217.61a5.37,5.37,0,0,1-1.66.65,6.76,6.76,0,0,1-4.31,0,16.93,16.93,0,0,1-2.13-1l-1.67-.94a7,7,0,0,1-1.49-1,6.34,6.34,0,0,1,1.64.67l1.72.85a22.58,22.58,0,0,0,2.09,1,7.12,7.12,0,0,0,4.07.12A10.22,10.22,0,0,1,631.16,217.61Z" style="fill: rgb(131, 72, 63); transform-origin: 625.53px 216.966px;" id="elbrtyjmdh6ij" class="animable"></path>
                            <path d="M610.09,229.25a3.5,3.5,0,0,1-.33-.65c-.21-.49-.49-1.12-.85-1.92-.71-1.67-1.72-4.1-2.86-7.14a194.59,194.59,0,0,1-7.46-24.26,136.47,136.47,0,0,1-2.52-13.76c-.23-2.14-.5-4.17-.57-6.08-.06-1-.11-1.88-.17-2.77s0-1.74,0-2.55a42.54,42.54,0,0,1,.14-4.39c0-.64.07-1.24.11-1.8s.14-1.05.2-1.5l.31-2.07a3,3,0,0,1,.14-.71,5.7,5.7,0,0,1,0,.73c0,.52-.12,1.21-.21,2.08-.05.45-.1.95-.15,1.49s-.05,1.16-.07,1.8c-.06,1.28-.13,2.75-.06,4.37,0,.81,0,1.66,0,2.54s.13,1.8.2,2.75c.09,1.9.38,3.92.62,6.05.6,4.24,1.38,8.89,2.55,13.7a218.92,218.92,0,0,0,7.29,24.26c1.1,3.05,2.06,5.5,2.71,7.19.31.81.57,1.45.76,1.95A3.26,3.26,0,0,1,610.09,229.25Z" style="fill: rgb(38, 50, 56); transform-origin: 602.697px 194.45px;" id="elt4ubew6kc3" class="animable"></path>
                            <path d="M653.14,265.33a4.77,4.77,0,0,1-.62,1c-.42.62-1.08,1.49-1.93,2.53a57.47,57.47,0,0,1-7.4,7.48,56.78,56.78,0,0,1-8.64,6c-1.18.65-2.15,1.15-2.83,1.46a4.83,4.83,0,0,1-1.09.44,5.69,5.69,0,0,1,1-.62c.66-.36,1.6-.91,2.74-1.6a68.35,68.35,0,0,0,8.5-6.08,69.58,69.58,0,0,0,7.45-7.32c.88-1,1.58-1.83,2.05-2.42A5.37,5.37,0,0,1,653.14,265.33Z" style="fill: rgb(38, 50, 56); transform-origin: 641.885px 274.785px;" id="el4srn36ua3xs" class="animable"></path>
                            <path d="M607,288.67a9.84,9.84,0,0,1-1.54-.46c-1-.33-2.39-.86-4.11-1.56a92.64,92.64,0,0,1-24.7-15c-1.42-1.2-2.53-2.21-3.27-2.94a9.31,9.31,0,0,1-1.12-1.15,9.14,9.14,0,0,1,1.25,1c.78.68,1.93,1.65,3.37,2.81a107.28,107.28,0,0,0,24.61,15c1.7.75,3.08,1.32,4,1.71A9.83,9.83,0,0,1,607,288.67Z" style="fill: rgb(38, 50, 56); transform-origin: 589.63px 278.115px;" id="elfzfqgdtfopq" class="animable"></path>
                            <path d="M627.44,94.92a4.41,4.41,0,0,0,2.11-3.19,4.36,4.36,0,0,0-1.24-3.61c-.72-.73-1.7-1.19-2.38-2A14.63,14.63,0,0,1,624.61,84a8.75,8.75,0,0,0-6.79-4.06,11.35,11.35,0,0,0-7.66,2.44,8.41,8.41,0,0,1-2.73,1.76,11.82,11.82,0,0,1-3.15.08A7.17,7.17,0,0,0,598.16,95a6.17,6.17,0,0,0,2.25,12,13.18,13.18,0,0,0,5.07-1.53A94.18,94.18,0,0,1,626.06,99" style="fill: rgb(38, 50, 56); transform-origin: 611.789px 93.4643px;" id="ell7veq7wag9" class="animable"></path>
                            <path d="M599,139.09a22,22,0,0,1-5.63-14c-.16-5.12.69-11.52,3.89-15.53-2.2-2.41-1.26-5.07.34-7.91S602,96.88,605,95.46A34.88,34.88,0,0,1,619,92c4-.15,9.23.55,9.75,3.41a4.18,4.18,0,0,1-1.4,4.29,19.6,19.6,0,0,1,7.34,4.45c4.92,4.77,6.82,9.57,6.13,14.91s-1.86,9.49-5.08,12.85" style="fill: rgb(61, 31, 117); transform-origin: 617.154px 115.535px;" id="elw0ehwj27myn" class="animable"></path>
                            <path d="M632.53,138.14a5,5,0,0,1,2-1.21h-.14a2.83,2.83,0,0,1,.42-.06,2,2,0,0,1,1.52.25h0a3.65,3.65,0,0,1,1.91,1.8,4.31,4.31,0,0,1-.68,4.39,3.28,3.28,0,0,1-6-1.37A4.05,4.05,0,0,1,632.53,138.14Z" style="fill: rgb(69, 90, 100); transform-origin: 634.994px 140.807px;" id="elfowlrchvggt" class="animable"></path>
                            <path d="M602.24,161.14l-3.17-45.75a4,4,0,0,1,3.62-4l21.24-5.1c6.78-.63,11.19,7.77,11.54,14.58.38,7.57.55,16.82-.41,22.45C633.12,154.64,624.51,156,624.51,156s.07,6.83.07,6.83l-7.83,21.28h0Z" style="fill: rgb(179, 107, 96); transform-origin: 617.421px 145.183px;" id="eln41k93you97" class="animable"></path>
                            <path d="M631.48,130.31a1.46,1.46,0,0,1-1.42,1.45,1.4,1.4,0,0,1-1.49-1.33A1.45,1.45,0,0,1,630,129,1.39,1.39,0,0,1,631.48,130.31Z" style="fill: rgb(38, 50, 56); transform-origin: 630.025px 130.38px;" id="elz7lqj4j10hl" class="animable"></path>
                            <path d="M633.4,125.66c-.18.19-1.27-.64-2.84-.66s-2.72.76-2.89.56.11-.42.61-.78a4,4,0,0,1,2.32-.69,3.9,3.9,0,0,1,2.26.76C633.33,125.23,633.49,125.57,633.4,125.66Z" style="fill: rgb(38, 50, 56); transform-origin: 630.522px 124.889px;" id="elabhs8p4fjzt" class="animable"></path>
                            <path d="M616.82,130.31a1.46,1.46,0,0,1-1.42,1.45,1.4,1.4,0,0,1-1.49-1.33,1.45,1.45,0,0,1,1.42-1.45A1.39,1.39,0,0,1,616.82,130.31Z" style="fill: rgb(38, 50, 56); transform-origin: 615.365px 130.37px;" id="elav01c3cushu" class="animable"></path>
                            <path d="M618,125.76c-.18.19-1.27-.64-2.84-.65s-2.72.75-2.89.56.11-.43.61-.79a4,4,0,0,1,2.32-.68,3.9,3.9,0,0,1,2.26.76C617.94,125.33,618.1,125.68,618,125.76Z" style="fill: rgb(38, 50, 56); transform-origin: 615.124px 124.994px;" id="el1ecr7qpeuj2" class="animable"></path>
                            <path d="M623.55,137.44a10.2,10.2,0,0,1,2.55-.43c.4,0,.78-.11.85-.38a2,2,0,0,0-.25-1.19c-.37-1-.75-2-1.15-3.06-1.59-4.35-2.73-7.93-2.55-8s1.6,3.42,3.19,7.77l1.1,3.07a2.3,2.3,0,0,1,.18,1.57,1,1,0,0,1-.66.58,2.55,2.55,0,0,1-.68.09A10.46,10.46,0,0,1,623.55,137.44Z" style="fill: rgb(38, 50, 56); transform-origin: 625.258px 130.955px;" id="el4ulqpc30x59" class="animable"></path>
                            <path d="M624.57,156a28.89,28.89,0,0,1-15.14-4.23s3.79,8.1,15.15,7.17Z" style="fill: rgb(131, 72, 63); transform-origin: 617.005px 155.392px;" id="elg84fwddh8h9" class="animable"></path>
                            <path d="M623.28,141.16a3.87,3.87,0,0,0-3.15-1.72,2.53,2.53,0,0,0-2.08,1.09,2.3,2.3,0,0,0,2.54,3.48,5.74,5.74,0,0,0,2.32-1.4,1.75,1.75,0,0,0,.5-.58.77.77,0,0,0,0-.79" style="fill: rgb(131, 72, 63); transform-origin: 620.595px 141.767px;" id="eluxpan0it1zn" class="animable"></path>
                            <path d="M618.93,138.47c.26,0,.24,1.68,1.68,2.91s3.25,1.06,3.26,1.29-.41.33-1.17.34a4.2,4.2,0,0,1-2.72-1,3.68,3.68,0,0,1-1.3-2.44C618.62,138.87,618.82,138.46,618.93,138.47Z" style="fill: rgb(38, 50, 56); transform-origin: 621.27px 140.74px;" id="elrnmvn5ldm2" class="animable"></path>
                            <path d="M618.69,121.53c-.16.42-1.72.2-3.55.4s-3.33.68-3.57.3c-.11-.19.15-.59.76-1a6,6,0,0,1,2.65-.89,6,6,0,0,1,2.78.36C618.43,121,618.76,121.33,618.69,121.53Z" style="fill: rgb(38, 50, 56); transform-origin: 615.122px 121.339px;" id="elvb9ugsxf7ec" class="animable"></path>
                            <path d="M632.88,121.12c-.28.35-1.35,0-2.65-.06s-2.4.21-2.64-.17c-.11-.18.07-.53.55-.86a3.65,3.65,0,0,1,2.16-.56,3.7,3.7,0,0,1,2.11.74C632.86,120.58,633,121,632.88,121.12Z" style="fill: rgb(38, 50, 56); transform-origin: 630.24px 120.369px;" id="el6h6qp3gtnom" class="animable"></path>
                            <path d="M625.41,109.55s-10.64-.36-18.93,11.5c-5.46,7.82-6.76,17.74-6.76,17.74l-3.75-19,3.24-8.57,7.43-4,14-.52,5.22,2.7" style="fill: rgb(61, 31, 117); transform-origin: 610.915px 122.745px;" id="el6vohe31ivu8" class="animable"></path>
                            <path d="M604.53,110.14c17-3.76,30.47,2.11,32.71,15.45l3.61-8.68-8.62-10.79-9.6-2.69L603.14,106Z" style="fill: rgb(61, 31, 117); transform-origin: 621.995px 114.51px;" id="ele0quwdtqcs" class="animable"></path>
                            <path d="M597.15,137.51a5.29,5.29,0,0,1,2.16-1.3h-.16a2.32,2.32,0,0,1,.45-.06,2.08,2.08,0,0,1,1.64.27h0a3.87,3.87,0,0,1,2,1.93,4.59,4.59,0,0,1-.73,4.72,3.52,3.52,0,0,1-6.41-1.47A4.38,4.38,0,0,1,597.15,137.51Z" style="fill: rgb(69, 90, 100); transform-origin: 599.777px 140.358px;" id="el5jd942b32gb" class="animable"></path>
                            <path d="M601.27,131.53a1.68,1.68,0,0,1-.74-.29,4.39,4.39,0,0,1-2-4.81c.15-.61.39-1.2.5-1.81a1.85,1.85,0,0,0-.42-1.69,6.36,6.36,0,0,0-1.63-1.06,4.89,4.89,0,0,1-1.53-1.23,5.4,5.4,0,0,1-1.16-3.06,4.61,4.61,0,0,1,.37-2.16,1.73,1.73,0,0,1,.42-.68,6.31,6.31,0,0,0-.47,2.82,5.24,5.24,0,0,0,1.17,2.8,4.53,4.53,0,0,0,1.42,1.11,6.47,6.47,0,0,1,1.75,1.14,2.31,2.31,0,0,1,.53,2.09c-.14.68-.39,1.27-.54,1.83a4.07,4.07,0,0,0,.32,3,4.54,4.54,0,0,0,1.33,1.59C601,131.38,601.29,131.49,601.27,131.53Z" style="fill: rgb(255, 255, 255); transform-origin: 597.775px 123.135px;" id="el2gwaer5p8t2" class="animable"></path>
                            <path d="M598.75,108.4a7.34,7.34,0,0,0-.55,2.64,5.33,5.33,0,0,0,.81,2.75,10.1,10.1,0,0,0,2.65,2.41,4.67,4.67,0,0,1,1.31,1.49,3.28,3.28,0,0,1,.33,1.84,23.28,23.28,0,0,0-.44,3,2.6,2.6,0,0,0,.64,1.77c.33.33.61.37.59.42s-.07,0-.2,0a1.35,1.35,0,0,1-.51-.26,2.71,2.71,0,0,1-.85-1.89,20.42,20.42,0,0,1,.34-3,2.89,2.89,0,0,0-.3-1.6,4.32,4.32,0,0,0-1.2-1.34,10,10,0,0,1-2.73-2.55,5.52,5.52,0,0,1-.77-3,4.94,4.94,0,0,1,.47-2A1.87,1.87,0,0,1,598.75,108.4Z" style="fill: rgb(255, 255, 255); transform-origin: 600.979px 116.571px;" id="elmigwlr9wuxf" class="animable"></path>
                            <path d="M610.53,116.69s-.14.17-.47.1a1,1,0,0,1-.48-.32,1.16,1.16,0,0,1-.24-.73c0-.58.31-1.17.35-1.76s-.46-1.13-1.12-1.47a4.81,4.81,0,0,1-1.81-1.38,3.84,3.84,0,0,1-.73-1.72,2.37,2.37,0,0,1,.2-1.68,8.93,8.93,0,0,0,.12,1.62,4,4,0,0,0,.74,1.52,4.88,4.88,0,0,0,1.7,1.23,3.36,3.36,0,0,1,1,.76,1.62,1.62,0,0,1,.36,1.14c-.09.76-.44,1.27-.44,1.74a.85.85,0,0,0,.45.88C610.36,116.73,610.51,116.65,610.53,116.69Z" style="fill: rgb(255, 255, 255); transform-origin: 608.244px 112.268px;" id="ely1aub64wd6g" class="animable"></path>
                            <path d="M613.93,107.53s.12,0,.24.09a.8.8,0,0,1,.2.66,4.81,4.81,0,0,1-.3.88,1.82,1.82,0,0,0,0,1,3.94,3.94,0,0,0,.91,1.61c.33.39.53.64.48.69s-.31-.12-.71-.46a3.35,3.35,0,0,1-1.14-1.74,2.14,2.14,0,0,1,.08-1.21,7,7,0,0,0,.37-.79A.84.84,0,0,0,613.93,107.53Z" style="fill: rgb(255, 255, 255); transform-origin: 614.513px 109.999px;" id="elcaw8spfb7mj" class="animable"></path>
                            <path d="M631,101.66s0,.18-.19.45-.43.64-.68,1.11A2.34,2.34,0,0,0,630,105a9.67,9.67,0,0,1,.5,2.38,4.33,4.33,0,0,1-.74,2.38,4.12,4.12,0,0,1-1.53,1.32,2.62,2.62,0,0,1-1.8.35,8.64,8.64,0,0,0,1.64-.64,3.94,3.94,0,0,0,2-3.41,9.88,9.88,0,0,0-.45-2.29,2.63,2.63,0,0,1,.31-2,9.93,9.93,0,0,1,.81-1C630.87,101.77,631,101.64,631,101.66Z" style="fill: rgb(255, 255, 255); transform-origin: 628.715px 106.562px;" id="elnhp9l6h6k6i" class="animable"></path>
                            <path d="M638.93,109.74c.06.08-.51.33-.74,1.16-.11.43-.33.95-.5,1.49a9.81,9.81,0,0,1-.65,1.85,3.69,3.69,0,0,1-3,1.88,2.08,2.08,0,0,1-1.45-.34,9.67,9.67,0,0,0,1.42,0,3.54,3.54,0,0,0,2.64-1.77,13.08,13.08,0,0,0,.66-1.76c.2-.59.44-1,.59-1.47a1.83,1.83,0,0,1,.67-.89C638.77,109.76,638.91,109.72,638.93,109.74Z" style="fill: rgb(255, 255, 255); transform-origin: 635.762px 112.937px;" id="eloceoxyz3zt" class="animable"></path>
                            <path d="M640.25,121.12s0,.29-.24.64a2.45,2.45,0,0,1-3,.74c-.38-.2-.54-.42-.51-.46a4.89,4.89,0,0,0,2,.18C639.63,122,640.14,121.05,640.25,121.12Z" style="fill: rgb(255, 255, 255); transform-origin: 638.373px 121.925px;" id="elys2tzvwwp1" class="animable"></path>
                            <path d="M621,99.78c0,.07-.48.33-1,1.07a3.49,3.49,0,0,0-.35,3.2,4.33,4.33,0,0,1,.61,2,2.8,2.8,0,0,1-.66,1.56c-.62.73-1.15,1-1.17.94s.4-.41.91-1.14a2.52,2.52,0,0,0,.49-1.38,4.27,4.27,0,0,0-.61-1.75,3.45,3.45,0,0,1-.19-2.06,3.83,3.83,0,0,1,.71-1.52C620.34,99.9,621,99.73,621,99.78Z" style="fill: rgb(255, 255, 255); transform-origin: 619.715px 104.165px;" id="elpcdyndrxlg" class="animable"></path>
                            <path d="M610.13,107.75c-.13-.06.24-1.06.27-2.34s-.26-2.31-.13-2.35a4.5,4.5,0,0,1-.14,4.69Z" style="fill: rgb(255, 255, 255); transform-origin: 610.482px 105.405px;" id="el5qjqeg7r4rf" class="animable"></path>
                            <path d="M602.27,106.51s.1-.11.2-.34a1.64,1.64,0,0,0,.11-1c-.15-.89-1-1.89-1.74-3.17a5.54,5.54,0,0,1-.66-2,3,3,0,0,1,.3-1.72,1.83,1.83,0,0,1,.83-.85c.26-.11.42-.08.43,0s-.14.07-.35.21a2.07,2.07,0,0,0-.61.83,4,4,0,0,0,.47,3.36c.68,1.21,1.56,2.29,1.65,3.34a1.65,1.65,0,0,1-.27,1.16C602.45,106.5,602.28,106.54,602.27,106.51Z" style="fill: rgb(255, 255, 255); transform-origin: 601.537px 101.939px;" id="elhtbzmqike49" class="animable"></path>
                            <path d="M613.16,101.61s.07-.15.25-.35a1.62,1.62,0,0,0,.51-.87,2.35,2.35,0,0,0-.73-1.3c-.41-.45-1-.87-1.5-1.38a3.21,3.21,0,0,1-1.17-1.82,2.91,2.91,0,0,1,.45-1.71,3.71,3.71,0,0,1,1-1.24,8.35,8.35,0,0,1-.67,1.39,2.85,2.85,0,0,0-.32,1.51A3.08,3.08,0,0,0,612,97.37c1,.94,2.24,1.86,2.25,3.06a1.63,1.63,0,0,1-.72,1C613.31,101.56,613.18,101.63,613.16,101.61Z" style="fill: rgb(255, 255, 255); transform-origin: 612.383px 97.2767px;" id="eltierglh1bje" class="animable"></path>
                            <path d="M623.7,99.94a2.08,2.08,0,0,0,.63-1,2.2,2.2,0,0,0-.13-1.26,9.54,9.54,0,0,0-.81-1.46,4.27,4.27,0,0,1-.67-1.65,2.2,2.2,0,0,1,.35-1.46c.42-.75,1-.88,1-.8a2.75,2.75,0,0,0-.75,1,2,2,0,0,0-.22,1.23,4.41,4.41,0,0,0,.65,1.48,8,8,0,0,1,.81,1.56,2.33,2.33,0,0,1,0,1.49,1.49,1.49,0,0,1-.6.81C623.84,100,623.71,100,623.7,99.94Z" style="fill: rgb(255, 255, 255); transform-origin: 623.694px 96.1344px;" id="elyyrbmript09" class="animable"></path>
                            <path d="M627.34,99.66a7.67,7.67,0,0,1-1.29,0c-.83,0-2,0-3.52.06a38.47,38.47,0,0,0-11.28,2.37,57.11,57.11,0,0,0-10.3,5.29l-3,1.9a6.14,6.14,0,0,1-1.12.67,6.61,6.61,0,0,1,1-.81c.67-.51,1.65-1.21,2.89-2a51.87,51.87,0,0,1,10.31-5.45,36.21,36.21,0,0,1,11.44-2.26c1.49,0,2.7,0,3.54.08A7.28,7.28,0,0,1,627.34,99.66Z" style="fill: rgb(38, 50, 56); transform-origin: 612.085px 104.69px;" id="el6sl0c1gcq4p" class="animable"></path>
                            <path d="M600.39,109.62l.12,0,.32-.12.51-.22.72-.26a21.11,21.11,0,0,1,4.72-1,29.23,29.23,0,0,1,7.16.17c1.34.18,2.74.46,4.18.79s2.91.71,4.39,1.2c6,1.86,10.55,5.73,12.58,9.27a16.39,16.39,0,0,1,1.78,4.48c.14.55.22,1,.27,1.29,0,.13.05.24.07.34s0,.11,0,.11a1.09,1.09,0,0,0,0-.12l0-.34a12.48,12.48,0,0,0-.22-1.3,15.94,15.94,0,0,0-1.72-4.56c-2-3.6-6.62-7.55-12.65-9.42a43.72,43.72,0,0,0-4.43-1.2c-1.44-.33-2.84-.6-4.19-.78a28,28,0,0,0-7.22-.11,19.48,19.48,0,0,0-4.74,1.13l-.71.28-.51.24-.3.15Z" style="fill: rgb(38, 50, 56); transform-origin: 618.804px 116.664px;" id="elyc2l1r8j1mh" class="animable"></path>
                            <path d="M622.57,110.07h-.37a10.48,10.48,0,0,0-1.05.12,15.17,15.17,0,0,0-3.71,1.16,26.92,26.92,0,0,0-9.8,8.15,41,41,0,0,0-3.7,6,52.43,52.43,0,0,0-2.4,5.24,27,27,0,0,0-1.15,3.72c-.1.44-.17.8-.2,1s0,.36,0,.36a1.39,1.39,0,0,0,.1-.36c0-.23.13-.58.24-1a30.62,30.62,0,0,1,1.23-3.67,51.05,51.05,0,0,1,2.44-5.2,42.28,42.28,0,0,1,3.69-6,27.39,27.39,0,0,1,9.67-8.14,15.83,15.83,0,0,1,3.65-1.23c.45-.08.8-.14,1-.16Z" style="fill: rgb(38, 50, 56); transform-origin: 611.373px 122.94px;" id="elili0oevd0k8" class="animable"></path>
                        </g>
                        <g id="freepik--character-2--inject-70" class="animable" style="transform-origin: 375.196px 350.815px;">
                            <path d="M460.87,318.33c-4.06-2.05-6.1-6.83-6.4-11.38s.8-9,1.39-13.56.59-9.36-1.67-13.32-7.43-6.53-11.55-4.59l-11.56,8.22a56.21,56.21,0,0,1,3.21,15.85c.23,4.05.06,8.31,1.87,11.94,2.56,5.12,8.45,7.69,14.1,8.62l-2.13-2.95A13.75,13.75,0,0,0,460.87,318.33Z" style="fill: rgb(38, 50, 56); transform-origin: 445.975px 297.464px;" id="elkkeq951xtt" class="animable"></path>
                            <path d="M422.48,261.71c5-.52,9.25,1.67,13.25,4.74A25.62,25.62,0,0,1,444,294.4a19.72,19.72,0,0,1-10.47,11.41c-6.67,2.85-14.84,1.17-20.32-3.57s-8.32-12.17-8.12-19.42a24,24,0,0,1,4.71-14,18.26,18.26,0,0,1,12.68-7.15" style="fill: rgb(38, 50, 56); transform-origin: 425.18px 284.419px;" id="elr2z3x0avxb" class="animable"></path>
                            <path d="M435.48,279.49c-.6-1.95-.18-4-.34-6.07-.34-4.47-3.68-8.26-7.69-10.25-3.73-1.86-8.44-1.82-13.16-.62a17.58,17.58,0,0,0-8.62,4.84,13.92,13.92,0,0,0-3.37,12.32l22.86-1.81a25.27,25.27,0,0,0,6.57,5,4.62,4.62,0,0,0,2.34.53,2.1,2.1,0,0,0,1.86-1.34A4.49,4.49,0,0,0,435.48,279.49Z" style="fill: rgb(38, 50, 56); transform-origin: 418.981px 272.568px;" id="elrit6t5lhmpe" class="animable"></path>
                            <path d="M413.39,268.77l19.5,5.48a3.72,3.72,0,0,1,3.22,3.84l-3,42.79a13.33,13.33,0,0,1-3.32,7.88l-2,2.31a9.78,9.78,0,0,1-16.22-2.28,4.49,4.49,0,0,1-.38-1.15c0-.39-.13-.65-.13-1a31.13,31.13,0,0,1,.09-6.5c.05-3.82.09-5.39.09-5.36s-8-1.55-9.42-12.11c-.69-5.25-.2-13.82.43-20.82C402.74,275.57,407.12,267.94,413.39,268.77Z" style="fill: rgb(255, 190, 157); transform-origin: 418.799px 301.562px;" id="el40dv2r5f6if" class="animable"></path>
                            <path d="M404.65,290.1a1.35,1.35,0,0,0,1.27,1.39,1.29,1.29,0,0,0,1.42-1.18,1.34,1.34,0,0,0-1.26-1.39A1.3,1.3,0,0,0,404.65,290.1Z" style="fill: rgb(38, 50, 56); transform-origin: 405.995px 290.205px;" id="eletdtekkwy69" class="animable"></path>
                            <path d="M403.91,286.38c.17.18,1.21-.55,2.66-.51s2.5.8,2.66.63-.08-.4-.54-.75a3.7,3.7,0,0,0-2.12-.72,3.52,3.52,0,0,0-2.12.62C404,286,403.83,286.3,403.91,286.38Z" style="fill: rgb(38, 50, 56); transform-origin: 406.585px 285.776px;" id="elvja4sfw6zsq" class="animable"></path>
                            <path d="M417.65,290.62a1.36,1.36,0,0,0,1.27,1.4,1.29,1.29,0,0,0,1.42-1.18,1.35,1.35,0,0,0-1.26-1.4A1.3,1.3,0,0,0,417.65,290.62Z" style="fill: rgb(38, 50, 56); transform-origin: 418.995px 290.73px;" id="eln7jbd12oafg" class="animable"></path>
                            <path d="M417.69,286.93c.16.18,1.2-.55,2.65-.51s2.5.8,2.66.62-.08-.4-.54-.75a3.65,3.65,0,0,0-2.12-.71,3.56,3.56,0,0,0-2.12.62C417.77,286.53,417.61,286.84,417.69,286.93Z" style="fill: rgb(38, 50, 56); transform-origin: 420.36px 286.323px;" id="el40tw680ccob" class="animable"></path>
                            <path d="M412.62,297.65a9.68,9.68,0,0,0-2.35-.48c-.37-.05-.71-.14-.77-.39a1.89,1.89,0,0,1,.28-1.09l1.17-2.8c1.63-4,2.82-7.25,2.66-7.31s-1.62,3.11-3.24,7.08c-.4,1-.77,1.92-1.13,2.81a2.13,2.13,0,0,0-.23,1.45.93.93,0,0,0,.59.56,2.79,2.79,0,0,0,.63.11A8.72,8.72,0,0,0,412.62,297.65Z" style="fill: rgb(38, 50, 56); transform-origin: 411.297px 291.642px;" id="eljo5u6hi5mkr" class="animable"></path>
                            <path d="M411.16,314.8a26.73,26.73,0,0,0,14.19-3.38s-3.74,7.19-14.24,5.92Z" style="fill: rgb(235, 153, 110); transform-origin: 418.23px 314.455px;" id="elyyr1ftro5r" class="animable"></path>
                            <path d="M413.14,301.17a2.62,2.62,0,0,1,2.37-.91,2.36,2.36,0,0,1,1.63.93,1.51,1.51,0,0,1,.07,1.73,1.76,1.76,0,0,1-1.92.43,5.33,5.33,0,0,1-1.82-1.16,1.44,1.44,0,0,1-.41-.44.48.48,0,0,1,0-.54" style="fill: rgb(235, 153, 110); transform-origin: 415.213px 301.853px;" id="elnunnal5dov" class="animable"></path>
                            <path d="M416.87,298.77c-.24,0-.28,1.56-1.66,2.64s-3,.86-3.07,1.08.36.32,1.07.36a3.94,3.94,0,0,0,2.56-.82,3.41,3.41,0,0,0,1.29-2.21C417.14,299.16,417,298.77,416.87,298.77Z" style="fill: rgb(38, 50, 56); transform-origin: 414.608px 300.811px;" id="el5pp5kjmbbea" class="animable"></path>
                            <path d="M418.05,282.63c.13.4,1.59.25,3.28.5s3.07.75,3.3.41c.11-.17-.12-.55-.67-.94a5.47,5.47,0,0,0-2.43-.93,5.41,5.41,0,0,0-2.58.24C418.31,282.14,418,282.44,418.05,282.63Z" style="fill: rgb(38, 50, 56); transform-origin: 421.351px 282.632px;" id="ely6mibuh9e7e" class="animable"></path>
                            <path d="M404.5,280c.25.34,1.26,0,2.46,0s2.22.28,2.46-.06c.11-.16,0-.5-.48-.82a3.37,3.37,0,0,0-2-.6,3.47,3.47,0,0,0-2,.61C404.54,279.54,404.4,279.88,404.5,280Z" style="fill: rgb(38, 50, 56); transform-origin: 406.964px 279.335px;" id="el1x3uzeaqmga" class="animable"></path>
                            <path d="M439.3,276.67c-1.65-6.15-10.07-14.94-16.44-14.79l-10.42,5.62a9.8,9.8,0,0,0,6.3,7.8c1.77.62,3.92.87,4.92,2.46s.27,3.89,1.21,5.56c1.31,2.32,5.15,2.39,6.09,4.87.42,1.08.12,2.34.55,3.42.57,1.44,4.05,3.38,5.55,3s1.61-2.9,2.15-4.2a6.94,6.94,0,0,0,.43-4.65C439.13,282.74,440.09,279.61,439.3,276.67Z" style="fill: rgb(38, 50, 56); transform-origin: 426.149px 278.268px;" id="ell8nuet0o3w" class="animable"></path>
                            <path d="M432.66,295.64c0-.79,1-2.61,1.75-2.71,2.07-.27,5.79,0,5.69,5.25-.14,7.17-7.32,5.54-7.32,5.34S432.58,298.34,432.66,295.64Z" style="fill: rgb(255, 190, 157); transform-origin: 436.372px 298.339px;" id="elpkzdv3hn20i" class="animable"></path>
                            <path d="M435,300.84s.12.09.33.2a1.28,1.28,0,0,0,.94,0,3.08,3.08,0,0,0,1.48-2.74,4.19,4.19,0,0,0-.31-1.8,1.46,1.46,0,0,0-.92-1,.66.66,0,0,0-.75.33c-.1.2-.05.35-.09.36s-.15-.13-.09-.42a.83.83,0,0,1,.29-.45,1,1,0,0,1,.7-.16,1.72,1.72,0,0,1,1.28,1.13,4.26,4.26,0,0,1,.39,2c-.07,1.45-.84,2.78-1.88,3.06a1.35,1.35,0,0,1-1.14-.21C435,301,435,300.86,435,300.84Z" style="fill: rgb(235, 153, 110); transform-origin: 436.628px 298.273px;" id="el4ixl5z37wzx" class="animable"></path>
                            <path d="M445.18,286.62a6.52,6.52,0,0,0,.4-2.13,15.71,15.71,0,0,0-2.65-10,6.27,6.27,0,0,0-1.41-1.64,23.82,23.82,0,0,1,3.12,6.54A24.52,24.52,0,0,1,445.18,286.62Z" style="fill: rgb(61, 31, 117); transform-origin: 443.573px 279.735px;" id="elq2u8d3c88y" class="animable"></path>
                            <path d="M414.66,265.48c-.85,2.87-5.52,6.31-7.61,8.45-4,4.08-4.82,5.47-5.41,15.14-1.54-3.45-2.66-6.81-2.28-10.57a15.65,15.65,0,0,1,4.81-10,12.17,12.17,0,0,1,10.49-3" style="fill: rgb(38, 50, 56); transform-origin: 406.973px 277.18px;" id="elhkz3eyr680r" class="animable"></path>
                            <path d="M443,276.82a7.36,7.36,0,0,1-1.23.22c-.4.06-.89.13-1.46.16s-1.23.11-1.95.1a35.12,35.12,0,0,1-5.08-.28,39.92,39.92,0,0,1-6.08-1.34,38.37,38.37,0,0,1-5.76-2.38,33.85,33.85,0,0,1-4.32-2.67,19,19,0,0,1-1.54-1.19,14,14,0,0,1-1.12-1,7,7,0,0,1-.88-.88,6.34,6.34,0,0,1,1,.76c.31.26.69.57,1.15.9s1,.75,1.57,1.14a38.2,38.2,0,0,0,4.33,2.56,37.81,37.81,0,0,0,11.71,3.68,37,37,0,0,0,5,.36c.72,0,1.37,0,1.94,0s1.06,0,1.46-.09A6.93,6.93,0,0,1,443,276.82Z" style="fill: rgb(69, 90, 100); transform-origin: 428.29px 272.433px;" id="elueauzs7iyu" class="animable"></path>
                            <path d="M443.37,282a3.84,3.84,0,0,1-.85.14,20,20,0,0,1-2.32.15,28.76,28.76,0,0,1-14.72-3.9,20.4,20.4,0,0,1-2-1.27,3.37,3.37,0,0,1-.66-.55c0-.06,1,.63,2.75,1.56a33.93,33.93,0,0,0,7.06,2.79A33.31,33.31,0,0,0,440.2,282C442.15,282,443.36,281.92,443.37,282Z" style="fill: rgb(69, 90, 100); transform-origin: 433.095px 279.429px;" id="el67vurko9eui" class="animable"></path>
                            <path d="M440.53,300.43c-.06-.06.72-.85,1.58-2.38a26.79,26.79,0,0,0,2.51-6.4,33.89,33.89,0,0,0,1.06-6.81c.08-1.76-.07-2.85,0-2.87a2.65,2.65,0,0,1,.19.76,13.69,13.69,0,0,1,.15,2.12,26.91,26.91,0,0,1-.92,6.93,23,23,0,0,1-2.69,6.46,10.58,10.58,0,0,1-1.3,1.69C440.77,300.28,440.56,300.46,440.53,300.43Z" style="fill: rgb(69, 90, 100); transform-origin: 443.274px 291.202px;" id="elly5zou7553" class="animable"></path>
                            <path d="M431.83,395.39l-46,6.68c-17.29,4.9-35.5,6.33-54.55,4.68l69.28,32.32,27.82.43s8.47,0,10-7.39,3.12-29.89,3.12-29.89S435.92,397.44,431.83,395.39Z" style="fill: rgb(69, 90, 100); transform-origin: 386.39px 417.445px;" id="el4af599vjbrj" class="animable"></path>
                            <g id="elznvlkvh9b5d">
                                <g style="opacity: 0.3; transform-origin: 434.54px 417.285px;" class="animable">
                                    <path d="M431.7,414.77a67.85,67.85,0,0,1,.81,14,13.86,13.86,0,0,0,3.41-11.63c-.4-2.28-1.35-4.78-.16-6.76.8-1.33,2.91-2.85,2.6-4.37,0,0-1.85,0-3.53-.07l-4.14-.14a14.87,14.87,0,0,1,.74,9.15" id="elkx9xktldytc" class="animable" style="transform-origin: 434.54px 417.285px;"></path>
                                </g>
                            </g>
                            <polygon points="410.38 322.6 433.36 320.66 436.68 321 422.02 333.05 414.52 335.66 407.94 332.58 406.35 328.16 410.38 322.6" style="fill: rgb(255, 190, 157); transform-origin: 421.515px 328.16px;" id="elkj6d9sso9y" class="animable"></polygon>
                            <polygon points="383.19 348.55 374.54 375.99 355.99 402.19 367.71 410.64 387.99 385.62 394.78 354.61 383.19 348.55" style="fill: rgb(255, 190, 157); transform-origin: 375.385px 379.595px;" id="el8vnohxklgso" class="animable"></polygon>
                            <path d="M379.44,343.64s8.43-12.72,11-15c3.08-2.73,8.65-4.84,8.65-4.84l11.31-1.21s-7,8,1,9S436.68,321,436.68,321s12.09,2.26,15.08,4.06,10.59,6.39,10.19,18.58l0,9.79H439l-4.8,36.76-11.59,7s-31.25,6-33.25,6.37-.51-50.73-.51-50.73S380.83,349,379.44,343.64Z" style="fill: rgb(38, 50, 56); transform-origin: 420.703px 362.281px;" id="elh67am1shfbc" class="animable"></path>
                            <path d="M391.9,393.48l42.68-6.41,4.4-33.64h21.37s-5.07,23.7-6.19,29.77c-1.61,8.72-7.59,20.38-10.79,22.58s-54-2.22-54-2.22Z" style="fill: rgb(255, 190, 157); transform-origin: 424.86px 379.912px;" id="el1qche37vs7f" class="animable"></path>
                            <path d="M367.66,397.37a1.63,1.63,0,0,0,1.51,1,2,2,0,0,0,.41-.05c.95-.24,1-2.14,1-2.14l4.5-.44s5.56,4.12,7.46,6.73,7.29.95,7.29.95l2.45-9.38-7.72-8s.47.47,0-.95-3.09-1.07-3.09-1.07c-.36-.71-2-1.07-2-1.07l-7.26.36a4.93,4.93,0,0,0-3.75,2L365.07,390s-1.84,3.36-1.63,4.19a1.43,1.43,0,0,0,1.61,1.05s.21,2.31.8,2.43a4.93,4.93,0,0,0,1.81-.31Z" style="fill: rgb(255, 190, 157); transform-origin: 377.852px 393.445px;" id="el0in4jiplf98e" class="animable"></path>
                            <path d="M383.43,391.54c0,.08-1-.07-2.51-.11a22.08,22.08,0,0,0-5.94.72,21,21,0,0,0-3.12,1.09c-.9.44-1.83.78-2.15,1.4a.87.87,0,0,0,0,.86,1.18,1.18,0,0,0,.51.49c.37.18.62.09.63.14s-.24.18-.7,0a1.39,1.39,0,0,1-.66-.53,1.16,1.16,0,0,1-.1-1.14,2.4,2.4,0,0,1,1-.95,13.29,13.29,0,0,1,1.31-.68,18.36,18.36,0,0,1,3.17-1.16,19,19,0,0,1,6.08-.59A8.5,8.5,0,0,1,383.43,391.54Z" style="fill: rgb(235, 153, 110); transform-origin: 376.358px 393.631px;" id="elreddd85gvr" class="animable"></path>
                            <path d="M383.63,396.17c0,.13-2.94-.18-6.55-.21s-6.54.23-6.55.09a7.17,7.17,0,0,1,1.9-.33,41.8,41.8,0,0,1,9.31.08A7,7,0,0,1,383.63,396.17Z" style="fill: rgb(235, 153, 110); transform-origin: 377.08px 395.85px;" id="elbszpqjrsqk" class="animable"></path>
                            <path d="M367.71,397.19a4.53,4.53,0,0,1,0-.78,17.54,17.54,0,0,1,.14-2.11,9.66,9.66,0,0,1,.29-1.44,4.62,4.62,0,0,1,.81-1.53,10.2,10.2,0,0,1,2.88-2.58,13.78,13.78,0,0,1,3.56-1.52,13,13,0,0,1,3.14-.27c.89,0,1.61.1,2.1.15s.77.09.77.13a23.93,23.93,0,0,1-2.87.05,13,13,0,0,0-3,.36,14.16,14.16,0,0,0-3.42,1.49,9.82,9.82,0,0,0-2.78,2.46,5.38,5.38,0,0,0-1.12,2.75C367.84,396.09,367.81,397.19,367.71,397.19Z" style="fill: rgb(235, 153, 110); transform-origin: 374.547px 392.071px;" id="eljh83me9su8h" class="animable"></path>
                            <path d="M379,384.81c0,.06-1.09,0-2.82.11s-4.33.09-6,2.28a24.4,24.4,0,0,0-4,5.41,14.08,14.08,0,0,0-.86,2.65,1.85,1.85,0,0,1,0-.77,7.1,7.1,0,0,1,.55-2,21.36,21.36,0,0,1,4-5.58,7.81,7.81,0,0,1,1.49-1.33,5.13,5.13,0,0,1,1.75-.68,15.76,15.76,0,0,1,3.08-.29A10.82,10.82,0,0,1,379,384.81Z" style="fill: rgb(235, 153, 110); transform-origin: 372.14px 389.925px;" id="elttvsxph09sa" class="animable"></path>
                            <path d="M381.06,400.85a2.61,2.61,0,0,1-.41-.36l-1.14-1.05a51.06,51.06,0,0,0-4.52-3.56l.1,0-4.5.47.16-.18a5,5,0,0,1-.15,1.08,2,2,0,0,1-.58,1,1.11,1.11,0,0,1-.61.24,1.67,1.67,0,0,1-.63,0,1.86,1.86,0,0,1-1.07-.68,1.61,1.61,0,0,1-.17-.28l0-.07,0,0v0h0l.26.11h0l-.14.05a5.72,5.72,0,0,1-.59.17,4.23,4.23,0,0,1-.62.11l-.34,0a.83.83,0,0,1-.4-.11,1.32,1.32,0,0,1-.4-.62,3.73,3.73,0,0,1-.18-.63,10.68,10.68,0,0,1-.21-1.28l.25.2a1.7,1.7,0,0,1-1.62-.68,1.35,1.35,0,0,1-.25-.91,3.78,3.78,0,0,1,.22-.85,23.77,23.77,0,0,1,1.43-3.13h0v0l1.79-2.46q.57-.8,1.14-1.56a8.66,8.66,0,0,1,1.23-1.51,4.82,4.82,0,0,1,1.69-1,6.39,6.39,0,0,1,1.86-.27l6.84-.31h.05a6.69,6.69,0,0,1,1.17.39,2,2,0,0,1,1,.79l-.24-.09a2.46,2.46,0,0,1,2.3.28,2.88,2.88,0,0,1,1,1.9l-.05-.1,5.32,5.46,1.44,1.5a4.43,4.43,0,0,1,.47.55,4.87,4.87,0,0,1-.54-.48l-1.5-1.44-5.43-5.35,0,0v-.06a2.57,2.57,0,0,0-.9-1.65,2.15,2.15,0,0,0-2-.21l-.16.06-.08-.15a1.74,1.74,0,0,0-.81-.61,6.31,6.31,0,0,0-1.09-.35h.06l-6.84.36a5.91,5.91,0,0,0-1.74.25,4.4,4.4,0,0,0-1.53.87,8.9,8.9,0,0,0-1.16,1.44c-.38.51-.75,1-1.14,1.56l-1.79,2.46,0,0a23.85,23.85,0,0,0-1.42,3.05,3.3,3.3,0,0,0-.19.75.93.93,0,0,0,.17.63A1.27,1.27,0,0,0,365,395l.23,0,0,.22a9.85,9.85,0,0,0,.19,1.23,2.11,2.11,0,0,0,.4,1,.31.31,0,0,0,.18,0,1.34,1.34,0,0,0,.28,0,3.89,3.89,0,0,0,.56-.1,5.12,5.12,0,0,0,.56-.15l.14,0h0l.26.12h0v0l0,.06a1,1,0,0,0,.14.22,1.38,1.38,0,0,0,.82.54,1.2,1.2,0,0,0,.5,0,.72.72,0,0,0,.41-.15,2.74,2.74,0,0,0,.61-1.83l0-.16.15,0,4.51-.4h.06l0,0a43.87,43.87,0,0,1,4.46,3.69c.49.47.85.85,1.09,1.11A2.4,2.4,0,0,1,381.06,400.85Z" style="fill: rgb(235, 153, 110); transform-origin: 377.627px 391.815px;" id="elm2kf6ylib3" class="animable"></path>
                            <path d="M388.49,339.32a12.66,12.66,0,0,1,0,2.35c0,1.45,0,3.44,0,5.65s.2,4.2.31,5.64a11.32,11.32,0,0,1,.1,2.35,10,10,0,0,1-.46-2.31,52.19,52.19,0,0,1-.47-5.66,54.81,54.81,0,0,1,.11-5.69A9.39,9.39,0,0,1,388.49,339.32Z" style="fill: rgb(69, 90, 100); transform-origin: 388.431px 347.315px;" id="eljnhipemvwps" class="animable"></path>
                            <path d="M461.62,342.06a3.58,3.58,0,0,1-.74.09l-2.12.16-7.82.51-25.8,1.47-25.81,1.31-7.83.34-2.13.07a5.27,5.27,0,0,1-.74,0,3.94,3.94,0,0,1,.74-.1l2.12-.16,7.82-.5,25.8-1.47,25.81-1.32,7.82-.34,2.13-.06A3.91,3.91,0,0,1,461.62,342.06Z" style="fill: rgb(255, 255, 255); transform-origin: 425.125px 344.033px;" id="elenptofkwhs6" class="animable"></path>
                            <path d="M437.41,364c0,.15-10.91.73-24.38,1.3s-24.4.91-24.41.77,10.91-.73,24.39-1.3S437.41,363.9,437.41,364Z" style="fill: rgb(255, 255, 255); transform-origin: 413.015px 365.041px;" id="elbl5dhx2i98f" class="animable"></path>
                            <path d="M434.5,383.37a1.8,1.8,0,0,1-.47.08l-1.33.14-4.93.44c-4.15.36-9.89.87-16.23,1.51s-12.06,1.31-16.2,1.8l-4.91.57-1.34.13a1.31,1.31,0,0,1-.47,0,2.72,2.72,0,0,1,.46-.11l1.32-.23c1.16-.19,2.83-.45,4.89-.74,4.14-.58,9.86-1.3,16.2-2s12.09-1.1,16.25-1.36c2.09-.14,3.77-.23,4.94-.27l1.35,0A1.35,1.35,0,0,1,434.5,383.37Z" style="fill: rgb(255, 255, 255); transform-origin: 411.56px 385.693px;" id="eleqts6tzhr1b" class="animable"></path>
                            <path d="M387.77,341.06a5.72,5.72,0,0,1-2.32-.53c-1.23-.43-2.19-.88-2.14-1a5.72,5.72,0,0,1,2.32.53A5.34,5.34,0,0,1,387.77,341.06Z" style="fill: rgb(255, 255, 255); transform-origin: 385.539px 340.295px;" id="elwlhwi9i9nra" class="animable"></path>
                            <path d="M406.57,327.73a106.89,106.89,0,0,1-14.75.51,50.64,50.64,0,0,1,7.36-.52A51.23,51.23,0,0,1,406.57,327.73Z" style="fill: rgb(255, 255, 255); transform-origin: 399.195px 327.948px;" id="el95931dxpe4" class="animable"></path>
                            <path d="M453,325.94c0,.15-5.26.23-11.74.2s-11.73-.18-11.73-.33,5.25-.23,11.73-.19S453,325.8,453,325.94Z" style="fill: rgb(255, 255, 255); transform-origin: 441.265px 325.878px;" id="el1glhtfit27j" class="animable"></path>
                            <path d="M438.84,337.6a6,6,0,0,1,0,1.21c0,.78-.06,1.91-.16,3.33-.17,2.83-.62,6.79-1,11.31l-.27-.27h4.3c5.58,0,10.63,0,14.29.08l4.33.08a8.9,8.9,0,0,1,1.6.1,8.64,8.64,0,0,1-1.58.1l-4.32.08c-3.65.05-8.7.08-14.28.08h-4.6l0-.27c.38-4.54.9-8.48,1.15-11.3.13-1.34.23-2.45.32-3.31A6.57,6.57,0,0,1,438.84,337.6Z" style="fill: rgb(69, 90, 100); transform-origin: 449.54px 345.65px;" id="eln5v5gzqxxu" class="animable"></path>
                            <path d="M357.12,409.82s-29.16-9.17-38.33-12.14c-15.77-5.11-26.09.06-29.35,5.7-4.23,7.32,5.91,21.6,9.81,24.88,11.56,9.73,31.39,11,31.39,11h0l71.28-.14L381.11,411Z" style="fill: rgb(69, 90, 100); transform-origin: 345.173px 417.424px;" id="el241t7kurzvb" class="animable"></path>
                            <path d="M360.2,421.2a71.14,71.14,0,0,1-35-4.76,46.16,46.16,0,0,0-5.84-2.18,17.19,17.19,0,0,0-6-.42,6,6,0,0,0-4.25,1.92c-1.43,1.88-.69,4.54.1,6.76.92,2.6,1.88,5.26,3.69,7.34,2.12,2.44,5.19,3.83,8.27,4.8,6,1.9,12.37,2.44,18.68,2.69l21.66-1.19Z" style="fill: rgb(224, 224, 224); transform-origin: 334.905px 425.547px;" id="elzcd6wljdvph" class="animable"></path>
                            <path d="M357,436.05a6.56,6.56,0,0,1-1.54-1.64,13.83,13.83,0,0,1-2.39-10.36,6.48,6.48,0,0,1,.65-2.14c.08,0-.17.84-.33,2.19a15.25,15.25,0,0,0,2.34,10.13C356.46,435.37,357.05,436,357,436.05Z" style="fill: rgb(38, 50, 56); transform-origin: 354.939px 428.98px;" id="el4t490oqm8o9" class="animable"></path>
                            <path d="M318.37,414.27s.15.19.33.59a9.26,9.26,0,0,1,.58,1.73,11.22,11.22,0,0,1-3.54,11,10,10,0,0,1-1.47,1.08c-.37.21-.6.3-.61.27s.78-.54,1.86-1.58A11.75,11.75,0,0,0,319,416.65C318.69,415.17,318.3,414.3,318.37,414.27Z" style="fill: rgb(38, 50, 56); transform-origin: 316.617px 421.608px;" id="el94o45995nhb" class="animable"></path>
                            <path d="M356.76,424.8c0,.13-.76.27-1.71.31a3.52,3.52,0,0,1-1.72-.15c0-.13.76-.27,1.7-.31A3.55,3.55,0,0,1,356.76,424.8Z" style="fill: rgb(38, 50, 56); transform-origin: 355.045px 424.88px;" id="el64evub463bp" class="animable"></path>
                            <path d="M356.11,430.72c.05.11-.38.4-1,.39s-1-.28-1-.39.47-.06,1-.06S356.06,430.6,356.11,430.72Z" style="fill: rgb(38, 50, 56); transform-origin: 355.112px 430.878px;" id="el795yf7hmxwf" class="animable"></path>
                            <path d="M431.56,408c-1.69-4.8-2-11.85-12.42-15.24s-18.34,3.11-23.7,5.36-34.71,18.35-34.71,18.35-5.52,9.85-4,14.2,8.72,8.65,8.72,8.65h32.81c8.47,0,24.22-.28,24.22-.28a97.19,97.19,0,0,0,5.64-10.72l.29-1.41C428.46,425.81,433.25,412.83,431.56,408Z" style="fill: rgb(69, 90, 100); transform-origin: 394.193px 415.56px;" id="elk7p6m8crw8q" class="animable"></path>
                            <path d="M413.38,433a.94.94,0,0,1-.24.45,5.81,5.81,0,0,1-1.08,1,27.15,27.15,0,0,1-4.64,2.6,28.7,28.7,0,0,1-3.42,1.35,25,25,0,0,1-4.14.89,78.13,78.13,0,0,1-9.64.38c-6.82.11-13,.37-17.49.32-2.24,0-4.06-.11-5.31-.24a13.58,13.58,0,0,1-1.43-.2,1.77,1.77,0,0,1-.49-.12c0-.05.69.08,1.94.14s3.05.12,5.29.09c4.47,0,10.65-.34,17.49-.45a83.58,83.58,0,0,0,9.59-.33,26.34,26.34,0,0,0,4.07-.84,30.19,30.19,0,0,0,3.41-1.28,31.68,31.68,0,0,0,4.67-2.45,6.48,6.48,0,0,0,1.11-.89C413.3,433.11,413.35,432.94,413.38,433Z" style="fill: rgb(38, 50, 56); transform-origin: 389.44px 436.492px;" id="elb8n62hzzs3" class="animable"></path>
                            <path d="M365.5,439.35s-.15-.07-.43-.23-.7-.41-1.22-.76a28.94,28.94,0,0,1-4.32-3.43,13.47,13.47,0,0,1-2.44-3.15,7.25,7.25,0,0,1-.48-4.67,39.07,39.07,0,0,1,4-10.7l0,0,0,0c5.37-3,11.53-6.32,18.27-9.94,3.37-1.8,6.88-3.67,10.53-5.56,1.83-.93,3.67-1.89,5.6-2.76s3.77-1.89,5.7-2.87a32.06,32.06,0,0,1,8.48-3.19,20.57,20.57,0,0,1,4.41-.4,19.74,19.74,0,0,1,4.3.62,20.39,20.39,0,0,1,7.52,3.59,15.21,15.21,0,0,1,2.73,2.95,17.17,17.17,0,0,1,1.76,3.47c.46,1.19.8,2.4,1.13,3.57a27.78,27.78,0,0,1,.94,3.47,22.91,22.91,0,0,1-.56,6.71c-.42,2.09-.94,4.05-1.46,5.87-.26.91-.52,1.79-.77,2.64a22.59,22.59,0,0,0-.64,2.43v0l-.29,1.41h0a34.45,34.45,0,0,1-3.77,8.18,14.31,14.31,0,0,1-2,2.51l.12-.17.39-.47a20.86,20.86,0,0,0,1.37-1.94,35.27,35.27,0,0,0,3.64-8.18h0c.54-.44.43-.88.28-1.41v0a22.53,22.53,0,0,1,.64-2.51l.75-2.64c.5-1.83,1-3.77,1.41-5.85a22.78,22.78,0,0,0,.53-6.6,28.3,28.3,0,0,0-.95-3.41c-.33-1.17-.67-2.36-1.12-3.53a17.12,17.12,0,0,0-1.73-3.38,14.37,14.37,0,0,0-2.66-2.86,20,20,0,0,0-7.36-3.49,18.32,18.32,0,0,0-8.51-.2,31.34,31.34,0,0,0-8.36,3.15c-1.92,1-3.77,2.05-5.73,2.88s-3.75,1.81-5.58,2.74c-3.64,1.88-7.15,3.74-10.53,5.54l-18.3,9.87.07-.07a39.46,39.46,0,0,0-4,10.58,7,7,0,0,0,.42,4.51,13.43,13.43,0,0,0,2.36,3.12,31.77,31.77,0,0,0,4.23,3.48l1.2.81C365.37,439.25,365.5,439.35,365.5,439.35Z" style="fill: rgb(38, 50, 56); transform-origin: 394.225px 415.518px;" id="eluvt3zf7zlh" class="animable"></path>
                            <path d="M418.9,427.18s9.78,1.17,8.91,5.95-4.06,6.4-4.06,6.4l-26.57.05S413,438.48,418.9,427.18Z" style="fill: rgb(224, 224, 224); transform-origin: 412.522px 433.38px;" id="elnb9im5jsdl" class="animable"></path>
                            <path d="M419.85,424.86a3.21,3.21,0,0,1-.3,1.35,10.45,10.45,0,0,1-1.58,3,7.93,7.93,0,0,1-3.74,2.86,22.08,22.08,0,0,0,3.38-3.14A28.19,28.19,0,0,0,419.85,424.86Z" style="fill: rgb(38, 50, 56); transform-origin: 417.04px 428.465px;" id="el4h2rq64ygsz" class="animable"></path>
                            <path d="M416.46,426.73a6.51,6.51,0,0,1-.95,3.41,7.26,7.26,0,0,1-2.13,2.81c-.1-.08.86-1.32,1.73-3S416.33,426.71,416.46,426.73Z" style="fill: rgb(38, 50, 56); transform-origin: 414.916px 429.84px;" id="elslnfcwfsdzn" class="animable"></path>
                            <path d="M428.93,438.19c-.07,0,.55-1.25,1.32-3.3a35.13,35.13,0,0,0,1.92-16.83c-.28-2.17-.62-3.49-.54-3.51a3.69,3.69,0,0,1,.31.91,20.92,20.92,0,0,1,.55,2.56,31.37,31.37,0,0,1-1.94,17,21,21,0,0,1-1.12,2.36A3.73,3.73,0,0,1,428.93,438.19Z" style="fill: rgb(38, 50, 56); transform-origin: 430.914px 426.37px;" id="elp1icn4sidk" class="animable"></path>
                            <g id="elwvm9n3xi27k">
                                <g style="opacity: 0.3; transform-origin: 410.651px 431.113px;" class="animable">
                                    <path d="M423.4,424.6c-.07-.64-.33-1.4-1-1.53s-1.3.73-1.62,1.45c-3.37,7.8-14.45,13.86-22.9,14.65a77.61,77.61,0,0,0,12.27-1,18.77,18.77,0,0,0,9.36-4.28A11.35,11.35,0,0,0,423.4,424.6Z" id="elc6xs0oo8a7" class="animable" style="transform-origin: 410.651px 431.113px;"></path>
                                </g>
                            </g>
                            <path d="M358.67,414a55.48,55.48,0,0,1-9.22-4,27.74,27.74,0,0,1,4.7,1.78A28.77,28.77,0,0,1,358.67,414Z" style="fill: rgb(38, 50, 56); transform-origin: 354.06px 412px;" id="elhhb0ts40sse" class="animable"></path>
                            <g id="el1ex11x1f3qu">
                                <g style="opacity: 0.2; transform-origin: 344.967px 410.109px;" class="animable">
                                    <path d="M368.14,409.89q-19-3.63-38.09-6.45l-9.49,3c2.66,4.95,7.91,8.1,13.38,9.41s11.17,1,16.77.48c6.16-.57,12.48-1.43,17.84-4.52.41-.24.87-.59.82-1.06S368.67,410,368.14,409.89Z" id="elthsfkv2w6" class="animable" style="transform-origin: 344.967px 410.109px;"></path>
                                </g>
                            </g>
                            <path d="M305.85,372.2l15.94,35.27a4.11,4.11,0,0,0,3.71,2.42l46.49.61,5.86-3.16-9.18-.67-14.28-34.29a3,3,0,0,0-2.71-1.82l-44.55-.33A1.39,1.39,0,0,0,305.85,372.2Z" style="fill: rgb(224, 224, 224); transform-origin: 341.787px 390.365px;" id="elylw8724ciw" class="animable"></path>
                            <path d="M305.85,372.2a1,1,0,0,1-.14-.42,1.41,1.41,0,0,1,.43-1.22,1.47,1.47,0,0,1,.91-.39h4.08l18.66.06,13,.07,7.25,0,1.9,0a3.23,3.23,0,0,1,1.86.78,4.12,4.12,0,0,1,1.07,1.72c.25.6.5,1.21.76,1.82l13.32,31.9-.22-.16,8.87.65.31,0,.89.07-.79.42-5.86,3.16-.06,0H372l-35.27-.49-7.87-.11c-1.28,0-2.51,0-3.78-.08a4.32,4.32,0,0,1-3.15-1.95c-2.08-4.36-3.81-8.4-5.49-12.1-3.3-7.37-6-13.31-7.8-17.44l-2.09-4.73-.53-1.23c-.11-.28-.16-.43-.16-.43s.08.14.21.41.33.69.57,1.21l2.18,4.69c1.88,4.11,4.58,10,7.94,17.38,1.69,3.66,3.49,7.77,5.52,12a3.9,3.9,0,0,0,2.85,1.74c1.19.06,2.48,0,3.74.07l7.87.09,35.26.43-.12,0,5.86-3.16.1.49-.31,0-8.87-.65h-.16l-.06-.15c-4.74-11.4-9.22-22.17-13.27-31.93-.25-.61-.51-1.21-.76-1.81a3.47,3.47,0,0,0-.94-1.55,2.66,2.66,0,0,0-1.6-.68l-1.87,0-7.24-.07-13-.12-18.65-.23-2.92,0-1.16,0a1.36,1.36,0,0,0-.84.34,1.4,1.4,0,0,0-.45,1.14A2.39,2.39,0,0,0,305.85,372.2Z" style="fill: rgb(38, 50, 56); transform-origin: 342.248px 390.415px;" id="elg09v81yx1pk" class="animable"></path>
                            <path d="M367.3,410.44a2.85,2.85,0,0,1-.21-.39l-.53-1.14-1.87-4.22c-1.55-3.58-3.66-8.53-5.94-14s-4.27-10.51-5.66-14.15c-.69-1.83-1.25-3.3-1.6-4.34-.16-.47-.3-.86-.41-1.19a1.68,1.68,0,0,1-.11-.42s.08.13.2.39l.48,1.16c.44,1.08,1,2.52,1.74,4.28l5.79,14.09c2.25,5.47,4.3,10.42,5.81,14.08l1.73,4.28c.18.47.33.86.46,1.18S367.32,410.43,367.3,410.44Z" style="fill: rgb(38, 50, 56); transform-origin: 359.139px 390.515px;" id="elf40olcfrpe9" class="animable"></path>
                            <path d="M338.46,389.3a2.28,2.28,0,1,1-2.28-2.28A2.28,2.28,0,0,1,338.46,389.3Z" style="fill: rgb(255, 255, 255); transform-origin: 336.18px 389.3px;" id="elvploib5tdu" class="animable"></path>
                        </g>
                        <g id="freepik--character-1--inject-70" class="animable" style="transform-origin: 172.624px 253.245px;">
                            <path d="M160.14,404.68l-5.35,20.13s18.67,12.2,18,16l-39.41-9,7.05-31.72Z" style="fill: rgb(69, 90, 100); transform-origin: 153.094px 420.45px;" id="elutdgo0x070g" class="animable"></path>
                            <path d="M143,420.33a1.64,1.64,0,0,0-1.53,1.58,1.58,1.58,0,0,0,1.55,1.53,1.75,1.75,0,0,0,1.62-1.68,1.65,1.65,0,0,0-1.8-1.41" style="fill: rgb(224, 224, 224); transform-origin: 143.055px 421.885px;" id="el0co1ylu3likj" class="animable"></path>
                            <path d="M133.42,431.86l.83-3.17,37.48,9.79s1.58,1.16,1.1,2.35Z" style="fill: rgb(38, 50, 56); transform-origin: 153.17px 434.76px;" id="elyfegwk8odg" class="animable"></path>
                            <path d="M155.47,424.76c-.05.19-1,.06-2.12.46s-1.78,1.1-1.93,1,.38-1.16,1.7-1.63S155.55,424.59,155.47,424.76Z" style="fill: rgb(38, 50, 56); transform-origin: 153.435px 425.308px;" id="elrczemayogjp" class="animable"></path>
                            <path d="M159.22,427.41c0,.19-.91.33-1.75,1s-1.22,1.48-1.41,1.43-.07-1.17,1-2S159.25,427.22,159.22,427.41Z" style="fill: rgb(38, 50, 56); transform-origin: 157.603px 428.54px;" id="elj66kt3el2f" class="animable"></path>
                            <path d="M160.44,432.89c-.19,0-.24-1,.5-2s1.73-1.16,1.77-1-.64.61-1.23,1.4S160.63,432.91,160.44,432.89Z" style="fill: rgb(38, 50, 56); transform-origin: 161.516px 431.363px;" id="el8ww5jtjrfq" class="animable"></path>
                            <path d="M156.18,420c-.12.16-.94-.31-2.05-.48s-2,0-2.09-.21.91-.69,2.21-.47S156.31,419.9,156.18,420Z" style="fill: rgb(38, 50, 56); transform-origin: 154.114px 419.408px;" id="elwbggx9119v" class="animable"></path>
                            <g id="el54h3ng9hpli">
                                <g style="opacity: 0.3; transform-origin: 153.094px 420.45px;" class="animable">
                                    <path d="M160.14,404.68l-5.35,20.13s18.67,12.2,18,16l-39.41-9,7.05-31.72Z" id="el82ab4454qj4" class="animable" style="transform-origin: 153.094px 420.45px;"></path>
                                </g>
                            </g>
                            <path d="M146.37,408.59,146,429.42s21.05,7.37,21.35,11.23l-40.41.73-.76-32.48Z" style="fill: rgb(69, 90, 100); transform-origin: 146.765px 424.985px;" id="elix8h3p8lg6h" class="animable"></path>
                            <path d="M133.47,427.9a1.65,1.65,0,0,0-1.11,1.9,1.58,1.58,0,0,0,1.88,1.11,1.74,1.74,0,0,0,1.16-2,1.64,1.64,0,0,0-2.08-.94" style="fill: rgb(224, 224, 224); transform-origin: 133.881px 429.412px;" id="el3zfkl51lc06" class="animable"></path>
                            <path d="M126.94,441.38l0-3.27,38.73.51s1.81.75,1.63,2Z" style="fill: rgb(38, 50, 56); transform-origin: 147.126px 439.745px;" id="el0eh0vh2p2bh6" class="animable"></path>
                            <path d="M146.65,429.2c0,.2-1,.31-2,1s-1.46,1.49-1.64,1.41.09-1.22,1.26-2S146.69,429,146.65,429.2Z" style="fill: rgb(38, 50, 56); transform-origin: 144.805px 430.324px;" id="elhwae922fzql" class="animable"></path>
                            <path d="M150.92,430.88c.05.19-.8.54-1.46,1.39s-.83,1.73-1,1.72-.35-1.11.49-2.15S150.91,430.69,150.92,430.88Z" style="fill: rgb(38, 50, 56); transform-origin: 149.619px 432.397px;" id="el8x0vi3g3dhb" class="animable"></path>
                            <path d="M153.42,435.91c-.18,0-.47-.94,0-2s1.4-1.54,1.48-1.37-.47.75-.86,1.65S153.62,435.88,153.42,435.91Z" style="fill: rgb(38, 50, 56); transform-origin: 154.036px 434.208px;" id="elrus2hvdgh5h" class="animable"></path>
                            <path d="M146.21,424.44c-.08.19-1-.07-2.11,0s-2,.46-2.08.29.72-.88,2-1S146.3,424.29,146.21,424.44Z" style="fill: rgb(38, 50, 56); transform-origin: 144.115px 424.244px;" id="elo6mch49x9ok" class="animable"></path>
                            <path d="M122.18,233.21l-4.64,28.85,3.38,23.83.15,5.19,3.43,25.43c-.19,4.83-1.17,25-1.91,29.17-.91,5.16,1.62,78.46,1.62,78.46l23.31-1s8.81-108.69,8.78-109.88,12.12-81.31,12.12-81.31Z" style="fill: rgb(38, 50, 56); transform-origin: 142.98px 328.045px;" id="elefufa4eipji" class="animable"></path>
                            <path d="M181.1,237.66s3.69,80.44,2.47,90.37c-1,8-25.43,94.46-25.43,94.46l-21.38-3.67,8.41-93.31,3-93Z" style="fill: rgb(38, 50, 56); transform-origin: 160.289px 327.5px;" id="el6lfx1xs9f7w" class="animable"></path>
                            <path d="M164.84,269.54c.14,0-2.76,23.69-6.47,52.87s-10.72,100.72-10.85,100.7,6.67-71.57,10.38-100.76S164.71,269.53,164.84,269.54Z" style="fill: rgb(69, 90, 100); transform-origin: 156.182px 346.325px;" id="el18oa5hl2mbei" class="animable"></path>
                            <path d="M158.42,99.58A37,37,0,0,1,155.26,92a12.33,12.33,0,0,1,.42-8c.66-1.46,1.7-2.74,2.22-4.25.72-2.09.43-4.54,1.72-6.33,2-2.79,6.33-2.14,9.45-3.6,2.42-1.14,4.12-3.6,6.67-4.42,2.24-.71,4.67,0,6.82.9s4.26,2.09,6.58,2.4a49.24,49.24,0,0,0,5,0,6.62,6.62,0,0,1,4.61,1.59c1.18,1.19,1.43,3.38.15,4.46,2.93-.49,5.68,2.42,5.64,5.39s-2.27,5.57-5,6.8A17.65,17.65,0,0,1,190.86,88c-8.37-.65-16.77-3.83-22.46-10" style="fill: rgb(38, 50, 56); transform-origin: 179.663px 82.3452px;" id="el1zcuqhvhlyh" class="animable"></path>
                            <path d="M160.22,89.11l-5.7,41.42c-1,7,7.8,20,14.88,20.58h0c6.61.58,8.87-4.18,9.76-10.75.43-3.12.79-12.18.86-12.5,0,0,10.68.46,12.87-9.87,1.06-5,2.41-15.45,3.53-24.93a19.68,19.68,0,0,0-15.7-21.57l-1-.2C168.83,69.77,161.44,78.17,160.22,89.11Z" style="fill: rgb(255, 190, 157); transform-origin: 175.497px 111.135px;" id="eljgqtt4j8qda" class="animable"></path>
                            <path d="M180,127.86a25.49,25.49,0,0,1-12.69-6.68s2,8.68,12.51,9.81Z" style="fill: rgb(235, 153, 110); transform-origin: 173.655px 126.085px;" id="elaylocwp1gkn" class="animable"></path>
                            <path d="M191.77,101.87a1.51,1.51,0,0,1-1.72,1.2,1.44,1.44,0,0,1-1.26-1.63,1.51,1.51,0,0,1,1.72-1.21A1.44,1.44,0,0,1,191.77,101.87Z" style="fill: rgb(38, 50, 56); transform-origin: 190.281px 101.65px;" id="eltl0kkwxlhf" class="animable"></path>
                            <path d="M193.18,97.7c-.23.16-1.18-.9-2.77-1.21s-2.92.25-3,0,.18-.41.77-.68a4.14,4.14,0,0,1,2.49-.26,4,4,0,0,1,2.15,1.21C193.19,97.25,193.28,97.63,193.18,97.7Z" style="fill: rgb(38, 50, 56); transform-origin: 190.307px 96.5906px;" id="eltn5mcpcnxhg" class="animable"></path>
                            <path d="M176.93,99.3a1.51,1.51,0,0,1-1.72,1.21A1.44,1.44,0,0,1,174,98.87a1.51,1.51,0,0,1,1.72-1.2A1.44,1.44,0,0,1,176.93,99.3Z" style="fill: rgb(38, 50, 56); transform-origin: 175.464px 99.0899px;" id="elsni0bycv0rf" class="animable"></path>
                            <path d="M177.47,94.87c-.22.16-1.17-.9-2.77-1.21s-2.91.25-3,0,.19-.41.77-.68a4.15,4.15,0,0,1,2.49-.26A4,4,0,0,1,177.07,94C177.48,94.42,177.58,94.8,177.47,94.87Z" style="fill: rgb(38, 50, 56); transform-origin: 174.598px 93.7608px;" id="elp3ea1ymku8g" class="animable"></path>
                            <path d="M180.89,107.83a10.58,10.58,0,0,1,2.68,0c.41,0,.81,0,.94-.23a2.17,2.17,0,0,0,0-1.26c-.19-1.06-.38-2.17-.59-3.33-.78-4.74-1.27-8.61-1.08-8.64s1,3.79,1.78,8.53c.18,1.17.36,2.28.53,3.34a2.41,2.41,0,0,1-.11,1.64,1,1,0,0,1-.79.46,2.61,2.61,0,0,1-.71,0A10.94,10.94,0,0,1,180.89,107.83Z" style="fill: rgb(38, 50, 56); transform-origin: 183.067px 101.367px;" id="elyn6953lrckr" class="animable"></path>
                            <path d="M176,108c.26,0-.08,1.77,1.15,3.29s3.11,1.7,3.08,1.94-.48.26-1.26.12a4.42,4.42,0,0,1-2.59-1.52,3.87,3.87,0,0,1-.86-2.74C175.59,108.35,175.87,108,176,108Z" style="fill: rgb(38, 50, 56); transform-origin: 177.87px 110.719px;" id="eltb6wbhwlt9k" class="animable"></path>
                            <path d="M179.13,88.72c-.24.4-1.79-.12-3.7-.27s-3.53.06-3.7-.38c-.07-.21.27-.56,1-.86a6.49,6.49,0,0,1,5.63.49C179,88.12,179.24,88.53,179.13,88.72Z" style="fill: rgb(38, 50, 56); transform-origin: 175.438px 87.8269px;" id="elidiphnxwi4" class="animable"></path>
                            <path d="M193.51,93c-.35.3-1.37-.29-2.69-.57s-2.48-.25-2.66-.68c-.08-.2.17-.53.73-.77a3.71,3.71,0,0,1,2.3-.16,3.86,3.86,0,0,1,2,1.16C193.59,92.42,193.67,92.83,193.51,93Z" style="fill: rgb(38, 50, 56); transform-origin: 190.866px 91.8954px;" id="eloeyqlve594" class="animable"></path>
                            <path d="M159.54,97c-.17-.11-6.7-3.53-7.89,3.6s6.21,6.85,6.26,6.64S159.54,97,159.54,97Z" style="fill: rgb(255, 190, 157); transform-origin: 155.53px 101.701px;" id="elnbdg8tcgyhm" class="animable"></path>
                            <path d="M156.18,104.13s-.14.07-.36.13a1.26,1.26,0,0,1-.93-.14,3.1,3.1,0,0,1-1-3,4.08,4.08,0,0,1,.64-1.72,1.47,1.47,0,0,1,1.09-.8.66.66,0,0,1,.68.47c.06.21,0,.35,0,.37s.17-.1.16-.4a.8.8,0,0,0-.2-.5,1,1,0,0,0-.66-.29,1.74,1.74,0,0,0-1.48.89,4.18,4.18,0,0,0-.76,1.91c-.2,1.44.31,2.91,1.29,3.38a1.38,1.38,0,0,0,1.17,0C156.14,104.3,156.2,104.15,156.18,104.13Z" style="fill: rgb(235, 153, 110); transform-origin: 154.889px 101.405px;" id="elohqil7wmvo" class="animable"></path>
                            <path d="M198.47,83.44c-1.23,2.64-7.51,3.65-12.12,2.26-4.25-1.28-5.79-4-8.49-6.33-1.71-1.49-1.71-1.49-4.5-1.77-2.26-.24-4.07,2-5.78,3.5.95,5.67-1.56,11.27-4,16.46A2.84,2.84,0,0,1,162.41,99c-1,.48-2.12-.27-2.7-1.18a8.91,8.91,0,0,1-1-5,29.46,29.46,0,0,1,2.36-11.47,20.1,20.1,0,0,1,7.45-8.92,19.1,19.1,0,0,1,14.17-2.35,23.53,23.53,0,0,1,12.42,7.46,13.83,13.83,0,0,1,3.35,5.87" style="fill: rgb(38, 50, 56); transform-origin: 178.571px 84.3823px;" id="el7wv98nhcenu" class="animable"></path>
                            <path d="M184,100.67c.06,0,0-.62.33-1.66a6.88,6.88,0,0,1,2.52-3.66,6.71,6.71,0,0,1,6.3-.91,6.54,6.54,0,0,1,3.07,2.32,6.6,6.6,0,0,1,0,7.81,6.54,6.54,0,0,1-3.07,2.32,6.68,6.68,0,0,1-6.3-.91,6.85,6.85,0,0,1-2.52-3.66c-.29-1-.27-1.66-.33-1.65a1.25,1.25,0,0,0,0,.44,5.28,5.28,0,0,0,.14,1.27,6.85,6.85,0,0,0,2.49,3.93,7.12,7.12,0,0,0,10.08-1.4,7.21,7.21,0,0,0,1.4-4.24,7.31,7.31,0,0,0-1.4-4.25,7.17,7.17,0,0,0-3.35-2.48A7.07,7.07,0,0,0,186.57,95,6.85,6.85,0,0,0,184.08,99a5.17,5.17,0,0,0-.14,1.26A1.29,1.29,0,0,0,184,100.67Z" style="fill: rgb(38, 50, 56); transform-origin: 191.025px 100.651px;" id="elw1fuwppm6t" class="animable"></path>
                            <path d="M167.07,97.72c.06,0,0-.62.33-1.66a6.85,6.85,0,0,1,2.52-3.66,6.71,6.71,0,0,1,6.3-.91,6.54,6.54,0,0,1,3.07,2.32,6.6,6.6,0,0,1,0,7.81,6.54,6.54,0,0,1-3.07,2.32,6.68,6.68,0,0,1-6.3-.91,6.85,6.85,0,0,1-2.52-3.66c-.29-1-.27-1.66-.33-1.65a1.25,1.25,0,0,0,0,.44,5.28,5.28,0,0,0,.14,1.27,6.85,6.85,0,0,0,2.49,3.93,7.11,7.11,0,0,0,10.08-1.4,7.14,7.14,0,0,0,0-8.49,7.11,7.11,0,0,0-10.08-1.4A6.84,6.84,0,0,0,167.18,96a5.17,5.17,0,0,0-.14,1.26A1.34,1.34,0,0,0,167.07,97.72Z" style="fill: rgb(38, 50, 56); transform-origin: 174.106px 97.715px;" id="elch7zcc1dkxq" class="animable"></path>
                            <path d="M181,98c.07.14,1-.28,2,0s1.58,1.16,1.71,1.08,0-.3-.2-.66a2.5,2.5,0,0,0-1.35-1,2.46,2.46,0,0,0-1.66.07C181.13,97.68,181,97.89,181,98Z" style="fill: rgb(38, 50, 56); transform-origin: 182.881px 98.1968px;" id="el89ac1yhivgp" class="animable"></path>
                            <path d="M157.5,95.89a22.27,22.27,0,0,0,5.07.22,22.59,22.59,0,0,0,5.07-.36,22.39,22.39,0,0,0-5.08-.22A22.46,22.46,0,0,0,157.5,95.89Z" style="fill: rgb(38, 50, 56); transform-origin: 162.57px 95.8201px;" id="elpjf4ie7rvd7" class="animable"></path>
                            <path d="M202.56,182.81l-17.77,11.74.27,4.65,4.63,9.78s2.14,2,8.44-4.34,14.25-19,14.25-19Z" style="fill: rgb(255, 190, 157); transform-origin: 198.585px 196.045px;" id="eltq7ifcpb1ej" class="animable"></path>
                            <path d="M232.48,158.36a1.47,1.47,0,0,0-1.16-.86l-8.7-1.16a2.75,2.75,0,0,0-2.12.64l-24.93,21.41,1.13,1.09,9.35,2.26,26.6-23Z" style="fill: rgb(38, 50, 56); transform-origin: 214.11px 169.03px;" id="elcudsxdmk844" class="animable"></path>
                            <path d="M225.57,160.14a.55.55,0,0,0,.74.05.53.53,0,0,0,.26-.69.55.55,0,0,0-.74-.05C225.55,159.63,225.43,159.94,225.57,160.14Z" style="fill: rgb(255, 255, 255); transform-origin: 226.063px 159.82px;" id="elku7ftj1n32" class="animable"></path>
                            <path d="M232.65,158.75a9.87,9.87,0,0,1-1.71-.13l-4.63-.54-3.2-.4a1.83,1.83,0,0,0-1.51.39l-1.43,1.24-6.37,5.48c-4.53,3.89-8.65,7.38-11.65,9.89l-3.57,2.95a9.51,9.51,0,0,1-1.36,1,10,10,0,0,1,1.22-1.18l3.47-3.07c2.93-2.58,7-6.12,11.55-10l6.4-5.46,1.44-1.22a2.29,2.29,0,0,1,1.86-.47l3.19.46,4.62.71A10.93,10.93,0,0,1,232.65,158.75Z" style="fill: rgb(69, 90, 100); transform-origin: 214.935px 167.911px;" id="elugfrb9hyypj" class="animable"></path>
                            <path d="M223.6,163.23s-.79-.39-1.89,1.77-4.41,8.3-4.41,8.3l-3.73-3.55-5.67-.83s-1.51.77-.8,1.62,4,2.43,4,2.43l1.52,4.39-6.33-5.59s-2.63-.05-2.33,1.64,3.93,7.75,3.93,7.75l-3.6-1.31L200.67,176s-1.35-.32-1.17,1,3.56,6.68,3.56,6.68l4.75,4.22s3.08.6,3.61-.2a10.33,10.33,0,0,0,1-2s1.72,0,2.23-.67a4.94,4.94,0,0,0,.67-2s2.38,1.14,3.08-.17a16.3,16.3,0,0,0,1.27-5.27c0-1.15,4.16-10.76,4.15-11.09S225.36,163,223.6,163.23Z" style="fill: rgb(255, 190, 157); transform-origin: 211.962px 175.659px;" id="ele6cstzc4n2" class="animable"></path>
                            <path d="M211.61,187.71a3.19,3.19,0,0,1-1.56,0,10.07,10.07,0,0,1-6.48-3.6c-.6-.76-.85-1.31-.79-1.35s1.47,1.89,4,3.25S211.63,187.52,211.61,187.71Z" style="fill: rgb(235, 153, 110); transform-origin: 207.191px 185.283px;" id="el7ld0nvrd55o" class="animable"></path>
                            <path d="M210.86,185.37c-.12.1-1-.69-1.75-1.83s-1.26-2.2-1.12-2.28.81.82,1.6,1.94S211,185.26,210.86,185.37Z" style="fill: rgb(235, 153, 110); transform-origin: 209.423px 183.317px;" id="ely5gpqmbqqi" class="animable"></path>
                            <path d="M215.09,181.43c-.12.1-1-.67-1.67-1.85a4.31,4.31,0,0,1-.9-2.32c.16-.06.7.88,1.4,2S215.22,181.32,215.09,181.43Z" style="fill: rgb(235, 153, 110); transform-origin: 213.814px 179.348px;" id="eljc7ojb1d4wg" class="animable"></path>
                            <path d="M219.21,178.46a14.82,14.82,0,0,1-1-2.54,13.74,13.74,0,0,1-1-2.51c.12-.1,1,.84,1.58,2.29A4.47,4.47,0,0,1,219.21,178.46Z" style="fill: rgb(235, 153, 110); transform-origin: 218.241px 175.931px;" id="elsji6veqixk" class="animable"></path>
                            <path d="M195,185.59l11.71,10.53s-18.32,20-24,24.44,1.81-30.2,1.81-30.2Z" style="fill: rgb(69, 90, 100); transform-origin: 193.646px 203.272px;" id="elqq0rm0zv3u" class="animable"></path>
                            <path d="M155.27,123l-4.87,6.74-18.94,7-8.59,64.42-7,57.61s13.21,2.35,16.48-2.45c3.82-5.59,33.66-.55,35.64,1l3.88-13L175,259.34s5.51,1.25,8.39-7l-1.22-28.58s3.88-51.54,3.66-59.31-5.47-29.36-5.47-29.36l-2,6.37-17.06-14.55Z" style="fill: rgb(69, 90, 100); transform-origin: 150.855px 191.204px;" id="ellbhtnakonbd" class="animable"></path>
                            <path d="M136.93,134.8s-12.44,0-16.47,23-9.81,47.79-6.83,57,14.67,35.9,14.67,35.9l16-5.78-6.58-41.85,7.61-41S146.31,136.48,136.93,134.8Z" style="fill: rgb(69, 90, 100); transform-origin: 129.084px 192.75px;" id="el7x65nmt6ptu" class="animable"></path>
                            <path d="M150.92,253.92,144.34,245l-13.63,4.9a50.83,50.83,0,0,0,.09,9.46c.48,4.53,1.26,9.39,1.26,9.39l16.12-8.6a28.87,28.87,0,0,0,1.58,5.23c.9,1.88,4-.11,4-.11Z" style="fill: rgb(255, 190, 157); transform-origin: 142.146px 256.875px;" id="elutbj0kx4ots" class="animable"></path>
                            <path d="M145.37,162.17s0,.25-.11.73-.21,1.21-.37,2.14c-.34,1.9-.83,4.66-1.47,8.2-1.3,7.12-3.18,17.36-5.48,29.92v-.07c1.89,11.92,4.15,26.2,6.63,41.84l0,.19-.19.07-16,5.79-.21.07-.09-.2c-1.62-3.78-3.35-7.77-5.09-11.82-3.06-7.25-6-14.33-8.61-21.3-.33-.87-.62-1.75-.91-2.63-.15-.44-.23-.9-.35-1.35a7.93,7.93,0,0,1-.25-1.36,22.87,22.87,0,0,1-.24-2.73c0-.9-.07-1.81,0-2.7a95.13,95.13,0,0,1,.89-10.45c.88-6.77,2.08-13.14,3.17-19.1s2.15-11.51,3.09-16.58c.43-2.54.94-5,1.44-7.22.33-1.12.64-2.21.94-3.26s.76-2,1.11-3a25,25,0,0,1,5.75-8.75,14.7,14.7,0,0,1,5.66-3.42,9.63,9.63,0,0,1,1.69-.37l.44,0h.15l-.58.07a11.44,11.44,0,0,0-1.67.41,15.05,15.05,0,0,0-5.56,3.46,25,25,0,0,0-5.63,8.73c-.35,1-.73,1.94-1.08,3s-.61,2.13-.92,3.24c-.49,2.27-1,4.66-1.4,7.21-.93,5.07-2,10.63-3,16.59s-2.25,12.33-3.12,19.09a94.47,94.47,0,0,0-.87,10.4c0,.89,0,1.78,0,2.67a24,24,0,0,0,.24,2.68,7.6,7.6,0,0,0,.25,1.33c.11.43.19.87.33,1.31.3.87.59,1.74.91,2.61,2.57,6.94,5.55,14,8.61,21.27,1.74,4,3.46,8,5.09,11.81l-.3-.12,16-5.78-.15.26c-2.45-15.66-4.67-29.94-6.53-41.86v-.06c2.36-12.55,4.29-22.78,5.63-29.89.68-3.53,1.21-6.29,1.58-8.18l.42-2.13C145.31,162.41,145.37,162.17,145.37,162.17Z" style="fill: rgb(38, 50, 56); transform-origin: 128.984px 192.93px;" id="elj3y29osgls" class="animable"></path>
                            <path d="M178.42,141.46a4.87,4.87,0,0,1-.37.85c-.31.61-.69,1.39-1.17,2.33l-4.18,8.1-.17.32-.21-.29c-1.49-2.05-3.2-4.26-5.08-6.51a128,128,0,0,0-10.08-10.79c-1.36-1.31-2.49-2.34-3.27-3.06a10.33,10.33,0,0,1-1.18-1.14,10.24,10.24,0,0,1,1.3,1c.82.67,2,1.67,3.39,2.95A109,109,0,0,1,167.61,146c1.89,2.26,3.6,4.49,5.07,6.56l-.37,0,4.34-8,1.27-2.27A4.28,4.28,0,0,1,178.42,141.46Z" style="fill: rgb(38, 50, 56); transform-origin: 165.565px 142.165px;" id="elu6ydxvy4ypb" class="animable"></path>
                            <path d="M182.62,144.89c.16,0,1,2.87.39,6.77l-.1.69-.34-.63c-.18-.33-.36-.69-.53-1.06-.91-2-1.39-3.95-1.89-5.29s-.87-2.13-.81-2.17a7.2,7.2,0,0,1,1.13,2.05c.58,1.32,1.13,3.24,2,5.21.16.36.33.71.51,1l-.44.06a21.77,21.77,0,0,0,.22-4.73C182.73,145.61,182.57,144.91,182.62,144.89Z" style="fill: rgb(38, 50, 56); transform-origin: 181.281px 147.775px;" id="elcz1fhu4npc8" class="animable"></path>
                            <path d="M179.24,144.78s0,.09,0,.26,0,.45,0,.76c0,.66,0,1.64,0,2.9,0,2.53-.15,6.18-.4,10.69-.47,9-1.57,21.45-2.7,35.18s-2.24,26.12-3,35.15c-.4,4.47-.73,8.09-1,10.64-.12,1.23-.21,2.2-.28,2.9,0,.31-.07.55-.09.75a.7.7,0,0,1-.05.25V244c0-.2,0-.45,0-.76,0-.7.11-1.67.2-2.9.19-2.55.47-6.19.81-10.66.74-9,1.75-21.45,2.87-35.16s2.28-26.15,2.84-35.16c.29-4.5.45-8.15.55-10.67,0-1.23.08-2.21.1-2.91,0-.31,0-.55,0-.75A.9.9,0,0,1,179.24,144.78Z" style="fill: rgb(38, 50, 56); transform-origin: 175.48px 194.52px;" id="elbef9p7re3v" class="animable"></path>
                            <path d="M186,167.18c.13,0-.58,12.75-1.6,28.45s-1.94,28.42-2.08,28.41.59-12.74,1.6-28.45S185.82,167.17,186,167.18Z" style="fill: rgb(38, 50, 56); transform-origin: 184.159px 195.61px;" id="elcsz5w1u0t49" class="animable"></path>
                            <path d="M148.48,151.77c-.08,0-.08-1.15-.54-2.92a14.3,14.3,0,0,0-9.23-10c-1.72-.61-2.87-.71-2.86-.79a2.3,2.3,0,0,1,.81,0,11.56,11.56,0,0,1,2.16.45,13.72,13.72,0,0,1,9.45,10.29,12.28,12.28,0,0,1,.27,2.19A2.51,2.51,0,0,1,148.48,151.77Z" style="fill: rgb(38, 50, 56); transform-origin: 142.199px 144.897px;" id="elatymvgzk0ck" class="animable"></path>
                            <g id="elppgaaa6ec7i">
                                <g style="opacity: 0.3; transform-origin: 184.49px 205.36px;" class="animable">
                                    <path d="M182.93,220.16a52.12,52.12,0,0,0,1.76-29.8c-.63,10-1.16,20-1.79,30" id="eloe8rmd4whz" class="animable" style="transform-origin: 184.49px 205.36px;"></path>
                                </g>
                            </g>
                            <g id="el5xt5yyjuc4m">
                                <g style="opacity: 0.3; transform-origin: 142.955px 208.255px;" class="animable">
                                    <path d="M144.71,165.73c-4.11,21.34-7.45,41.59-7,38.79L144.34,245l3.9,5.78C144.84,223.6,142,192.77,144.71,165.73Z" id="el76isfgxgo7i" class="animable" style="transform-origin: 142.955px 208.255px;"></path>
                                </g>
                            </g>
                            <path d="M148.14,260.29c.07.11-4.12,2.46-9.34,5.24s-9.5,4.94-9.57,4.82,4.12-2.47,9.35-5.24S148.08,260.17,148.14,260.29Z" style="fill: rgb(69, 90, 100); transform-origin: 138.685px 265.32px;" id="el4jv9dj65iaf" class="animable"></path>
                            <path d="M141.12,186.46c0,.08-1.34-.54-3.5-1.42a76.36,76.36,0,0,0-8.59-3,79.38,79.38,0,0,0-8.89-1.88c-2.31-.35-3.75-.49-3.74-.58a4.77,4.77,0,0,1,1,0c.65,0,1.6.1,2.76.22a60.07,60.07,0,0,1,9,1.75,59,59,0,0,1,8.6,3.12c1.06.49,1.91.91,2.49,1.23A3.69,3.69,0,0,1,141.12,186.46Z" style="fill: rgb(255, 255, 255); transform-origin: 128.76px 183.01px;" id="elqai9gw308j" class="animable"></path>
                            <path d="M139.5,218.94a3.07,3.07,0,0,1-.79.4c-.52.23-1.3.53-2.26.87a55.8,55.8,0,0,1-7.7,2.1,57.46,57.46,0,0,1-7.93,1c-1,.05-1.84.07-2.42.05a2.68,2.68,0,0,1-.88-.07,29.33,29.33,0,0,1,3.28-.35c2-.19,4.81-.54,7.85-1.14s5.74-1.35,7.69-1.94A26,26,0,0,1,139.5,218.94Z" style="fill: rgb(255, 255, 255); transform-origin: 128.51px 221.155px;" id="elwq1o9u1bpw" class="animable"></path>
                            <path d="M148,155.57c-.09.06-.89-1.2-2.55-2.91a25.11,25.11,0,0,0-3.14-2.75,28.22,28.22,0,0,0-4.4-2.6,27.08,27.08,0,0,0-4.82-1.66A25.72,25.72,0,0,0,129,145c-2.38-.15-3.86,0-3.87-.05a3.92,3.92,0,0,1,1-.19,9.66,9.66,0,0,1,1.23-.11,14.55,14.55,0,0,1,1.63,0,22.8,22.8,0,0,1,4.22.52,23.93,23.93,0,0,1,9.39,4.35,22.54,22.54,0,0,1,3.13,2.87,16.33,16.33,0,0,1,1,1.26,8.56,8.56,0,0,1,.72,1A4.31,4.31,0,0,1,148,155.57Z" style="fill: rgb(255, 255, 255); transform-origin: 136.565px 150.1px;" id="el7b25zyjcl9q" class="animable"></path>
                            <path d="M172.7,231.24a5.64,5.64,0,0,1-1.26-.12c-.81-.12-2-.3-3.41-.55-2.88-.49-6.84-1.23-11.2-2.13s-8.29-1.79-11.12-2.48c-1.42-.35-2.57-.64-3.35-.85a5.61,5.61,0,0,1-1.21-.39,7,7,0,0,1,1.25.19l3.39.69,11.15,2.33,11.16,2.28,3.38.71A6.05,6.05,0,0,1,172.7,231.24Z" style="fill: rgb(255, 255, 255); transform-origin: 156.925px 227.98px;" id="el87fhtc3sk43" class="animable"></path>
                            <path d="M175.41,195.4c0,.14-8-.34-17.92-1.08s-17.9-1.46-17.89-1.6,8,.34,17.93,1.08S175.42,195.25,175.41,195.4Z" style="fill: rgb(255, 255, 255); transform-origin: 157.505px 194.06px;" id="eldrhyysw96js" class="animable"></path>
                            <path d="M178,163.84a5.57,5.57,0,0,1-1.29.17c-.83.07-2,.15-3.53.22-3,.16-7.11.27-11.66.25s-8.68-.2-11.66-.39c-1.49-.09-2.7-.18-3.53-.26a6.72,6.72,0,0,1-1.29-.18,5.58,5.58,0,0,1,1.3,0l3.53.11c3,.09,7.1.2,11.65.23s8.66,0,11.65-.09l3.53-.07A8,8,0,0,1,178,163.84Z" style="fill: rgb(255, 255, 255); transform-origin: 161.52px 164.047px;" id="eltvo51tgulyh" class="animable"></path>
                            <path d="M156.75,134.38a13.7,13.7,0,0,1-2.39.56,55.22,55.22,0,0,0-11.18,3.6,14,14,0,0,1-2.26.94,10,10,0,0,1,2.1-1.27,36.35,36.35,0,0,1,5.5-2.26,37,37,0,0,1,5.78-1.37A9.51,9.51,0,0,1,156.75,134.38Z" style="fill: rgb(255, 255, 255); transform-origin: 148.835px 136.924px;" id="elumpsk1c0rr" class="animable"></path>
                            <path d="M176.77,145.68a5.82,5.82,0,0,1-.92-.79l-2.4-2.26c-2-1.91-4.83-4.53-8-7.33s-6.13-5.27-8.28-7l-2.55-2.09a5.46,5.46,0,0,1-.9-.82,6.05,6.05,0,0,1,1,.66c.64.45,1.55,1.12,2.65,2,2.22,1.69,5.22,4.12,8.41,6.93s6,5.47,7.93,7.46c1,1,1.76,1.8,2.28,2.38A5.14,5.14,0,0,1,176.77,145.68Z" style="fill: rgb(255, 255, 255); transform-origin: 165.245px 135.535px;" id="elsk3ejt5ob3n" class="animable"></path>
                            <path d="M185.93,164.42a20.94,20.94,0,0,1-3.68-.11,21.63,21.63,0,0,1-3.67-.21,9.59,9.59,0,0,1,3.7-.31A9.74,9.74,0,0,1,185.93,164.42Z" style="fill: rgb(255, 255, 255); transform-origin: 182.255px 164.093px;" id="eleisxadv3589" class="animable"></path>
                            <path d="M183.57,197.77a13.32,13.32,0,0,1-3.74.17,13.66,13.66,0,0,1-3.73-.34,13.53,13.53,0,0,1,3.74-.18A13.74,13.74,0,0,1,183.57,197.77Z" style="fill: rgb(255, 255, 255); transform-origin: 179.835px 197.683px;" id="elvs7fdojul6" class="animable"></path>
                            <path d="M182.41,231.1a22.67,22.67,0,0,1-4.71,1.13,22.42,22.42,0,0,1-4.81.62,22.45,22.45,0,0,1,4.71-1.13A23.14,23.14,0,0,1,182.41,231.1Z" style="fill: rgb(255, 255, 255); transform-origin: 177.65px 231.975px;" id="elcfsqqd9s6xu" class="animable"></path>
                            <path d="M198,205a14.85,14.85,0,0,1-1.39-2.29c-.81-1.43-2-3.41-3.28-5.54s-2.61-4-3.54-5.39a15.42,15.42,0,0,1-1.45-2.25,12.11,12.11,0,0,1,1.75,2c1,1.31,2.34,3.18,3.68,5.32s2.43,4.16,3.17,5.65A12.47,12.47,0,0,1,198,205Z" style="fill: rgb(255, 255, 255); transform-origin: 193.17px 197.265px;" id="elgoua0ycsweu" class="animable"></path>
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
        </div>


    </section>

    <!-- JavaScript: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="../js/bootstrap.min.js" crossorigin="anonymous"></script>

    <!--  jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Owl Carousel -->
    <script src="../js/owl.carousel.min.js"></script>

    <!-- Isotope -->
    <script src="../js/isotope.pkgd.min.js"></script>

    <!-- Masks -->
    <script src="https://cdn.jsdelivr.net/npm/cleave.js@1.6.0/dist/cleave.min.js"></script>

    <!-- Magnific -->
    <script src="../js/jquery.magnific-popup.min.js"></script>

    <!-- Main File Js -->
    <script src="../js/main.js"></script>

    <script type='text/javascript'>
        document.addEventListener('DOMContentLoaded', function() {
            window.setTimeout(document.querySelector('svg').classList.add('animated'), 1000);
        })
    </script>
</body>

</html>