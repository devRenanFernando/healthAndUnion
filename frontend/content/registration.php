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

    <!-- CSS -->
    <link rel="stylesheet" href="../css/main.css">

    <title>Bem-vindo à Health & Union - Seu site especializado em Fibromialgia</title>
</head>

<body>

    <section id="login" class="container-flex min-vh-100 d-flex align-items-center justify-content-center ">
        <div class="w-75">
            <div id="first-content" class="row content py-5 w-75 d-flex align-items-center mx-auto">

                <div class="first-column col-lg-4 col-12 text-center text-light">
                    <h2 class="fs-2 text-capitalize">Bem vindo de volta!</h2>
                    <p class="fw-light">Para manter conectado conosco</p>
                    <p class="fw-light">Por favor, faça o login com suas informações pessoais </p>
                    <a href="login.php">
                        <button id="signin" class="btn btn-outline-primary fw-bold px-5">Sign in</button>
                    </a>

                    <a href="../../app/index.php">
                        <button id="signin" class="btn btn-outline-primary fw-bold mt-3 px-5">Voltar</button>
                    </a>
                </div>

                <div class="second-column col-lg-8 col-12 text-center text-dark">
                    <h2 class="fs-2 text-capitalize">Criar conta</h2>
                    <div class="my-lg-2 d-flex justify-content-center">
                        <ul class="d-flex flex-row px-0">
                            <a href="#">
                                <li class="d-flex align-items-center justify-content-center">
                                    <i class="fab fa-facebook-f"></i>
                                </li>
                            </a>
                            <a href="#">
                                <li class="mx-3 d-flex align-items-center justify-content-center">
                                    <i class="fab fa-google"></i>
                                </li>
                            </a>
                            <a href="#">
                                <li class="d-flex align-items-center justify-content-center">
                                    <i class="fab fa-linkedin-in"></i>
                                </li>
                            </a>
                        </ul>
                    </div>
                    <p class="fw-light">Ou use seu e-mail para entrar:</p>
                    <form class="form d-flex flex-column">
                        <label class="label-input" for="">
                            <i class="far fa-user color_icon"></i>
                            <input type="text" placeholder="Nome" class="w-50 mx-auto ps-3">
                        </label>

                        <label class="label-input" for="">
                            <i class="far fa-envelope color_icon"></i>
                            <input type="email" placeholder="Email" class="w-50 mx-auto ps-3">
                        </label>

                        <label class="label-input" for="">
                            <i class="fas fa-lock color_icon"></i>
                            <input type="password" placeholder="Senha" class="w-50 mx-auto ps-3">
                        </label>

                        <button class="btn btn-outline-secondary fw-bold w-50 mx-auto mt-4">Sign up</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="../frontend/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="../frontend/js/profile.js"></script>

</body>

</html>