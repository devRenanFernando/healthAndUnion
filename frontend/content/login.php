<?php
session_start();
ob_start();

require_once "../../vendor/autoload.php";
require_once "../../helpers/whoops.php";
require_once '../../backend/class/users/UsersMySQL.php';


// Recebe os valores do form login.php
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if (isset($dados['SendLogin'])) {

    // Novo Repositório
    $usersMySQL = new UsersMySQL();

    // Método para logar/entrar
    $usersMySQL->loginUser($dados);
}
?>

<!DOCTYPE html>
<html dir="ltr" lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Links -->
    <link rel="shortcut icon" href="../assets/svg/logo_preenchida.svg" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,700;1,400;1,600&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/6827d460af.js" crossorigin="anonymous"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="../css/main.css">

    <title>Entrar - Health & Union - Seu site especializado em Fibromialgia</title>
</head>

<body>

    <section id="registration" class="container-flex min-vh-100 d-flex align-items-center justify-content-center">
        <div id="larger">
            <div id="second-content" class="row content py-5 w-75 d-flex align-items-center mx-auto my-lg-0 my-5">

                <div class="first-column col-lg-4 col-12 text-center text-light order-lg-last order-first mb-lg-0 mb-5">
                    <h2 class="fs-2 text-capitalize">Olá, Amigo!</h2>
                    <p class="fw-light">Para poder se cadastrar</p>
                    <p class="fw-light">Digite seus dados pessoais na tela de cadastro</p>
                    <div class="btn-group-vertical d-flex align-items-center">
                        <a href="registration.php">
                            <button id="signin" class="btn btn-outline-primary fw-bold px-5">Cadastrar</button>
                        </a>

                        <a href="../../app/index.php">
                            <button id="signin" class="btn btn-outline-primary fw-bold mt-3 px-5">Voltar</button>
                        </a>
                    </div>
                </div>

                <div class="second-column col-lg-8 col-12 text-center text-dark order-first">

                    <h2 class="fs-2 text-capitalize">Faça login pelo</h2>

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

                    <?php
                    if (isset($_SESSION['msg'])) {
                        echo $_SESSION['msg'];
                        unset($_SESSION['msg']);
                    }
                    ?>
                    <form id="form_login" action="" method="post" class="form d-flex flex-column">

                        <label class="label-input" for="inputEmail">
                            <i class="far fa-envelope icones"></i>
                            <input id="inputEmail" name="inputEmail" type="email" placeholder="Email" class="w-50 mx-auto ps-3" value="<?php
                                                                                                                                        if (isset($dados['inputEmail'])) {
                                                                                                                                            echo $dados['inputEmail'];
                                                                                                                                        } ?>">
                        </label>

                        <label class="label-input" for="inputPassword">
                            <i class="fas fa-lock icones"></i>
                            <input id="inputPassword" type="password" name="inputPassword" autocomplete="off" placeholder="Senha" class="w-50 mx-auto ps-3" value="<?php
                                                                                                                                                                    if (isset($dados['inputPassword'])) {
                                                                                                                                                                        echo $dados['inputPassword'];
                                                                                                                                                                    } ?>">
                            <span id="eyeSlash" onclick="ShowPassword()" style="cursor: pointer;">
                                <i class="fas fa-eye-slash icones"></i>
                            </span>
                            <span id="eye" onclick="ShowPassword()" class="d-none" style="cursor: pointer;">
                                <i class="fas fa-eye icones"></i>
                            </span>
                        </label>

                        <a style="color: var(--blue-violet);" href="#" class="mt-2">Esqueceu a senha?</a>

                        <input type="submit" value="Entrar" name="SendLogin" class="btn btn-outline-secondary fw-bold w-50 mx-auto mt-4">
                    </form>
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

    <!-- Show Password -->
    <script>
        function ShowPassword() {
            var type = document.querySelector("#inputPassword");
            var eye = document.querySelector("#eye");
            var eyeSlash = document.querySelector("#eyeSlash");

            if (type.type == "password") {
                type.type = "text";
                eye.classList.remove("d-none");
                eyeSlash.classList.add("d-none");

            } else {
                type.type = "password";
                eye.classList.add("d-none");
                eyeSlash.classList.remove("d-none");
            }
        }
    </script>

</body>

</html>