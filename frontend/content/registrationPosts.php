<?php
session_start();
ob_start();
// print_r($_SESSION);

require_once "../../vendor/autoload.php";
require_once "../../helpers/whoops.php";
require_once '../../backend/class/posts/postsMySQL.php';

// Recebe os valores do form registration.php
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if (!empty($dados['SendRegistration'])) {

    $dados['inputAuthor'] = $_SESSION['Id'];

    // Novo Repositório
    $postsMySQL = new PostsMySQL();

    // Método para cadastrar usuário
    $postsMySQL->registrationPosts($dados);
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

<body style="background-color: var(--pink-lace);">

    <section id="registrationPosts" class="d-flex vh-100 align-items-center justify-content-center">
        <div class="container">
            <div class="row">
                <div class="col-12 mt-5">
                    <?php
                    if (isset($_SESSION['msg'])) {
                        echo $_SESSION['msg'];
                        unset($_SESSION['msg']);
                    }
                    ?>
                </div>
                <div class="col-lg-7 col-12">
                    <form action="" method="POST">
                        <!-- Título -->
                        <div class="mb-3">
                            <label for="inputTitle" class="form-label fs-4">Título: </label>
                            <input type="name" class="form-control text-uppercase" id="inputTitle" name="inputTitle" value="<?php
                                                                                                                            if (isset($dados['inputTitle'])) {
                                                                                                                                echo $dados['inputTitle'];
                                                                                                                            } ?>">
                        </div>
                        <!-- Subtítulo -->
                        <div class="mb-3">
                            <label for="inputSubtitle" class="form-label fs-4">Subtítulo: </label>
                            <input type="name" class="form-control" id="inputSubtitle" name="inputSubtitle" value="<?php
                                                                                                                    if (isset($dados['inputSubtitle'])) {
                                                                                                                        echo $dados['inputSubtitle'];
                                                                                                                    } ?>">
                        </div>
                        <!-- Textarea -->
                        <div class="form-group">
                            <div class="mb-3">
                                <label for="inputScope" class="form-label fs-4">Matéria:</label>
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a comment here" id="inputScope" name="inputScope"><?php
                                                                                                                                        if (isset($dados['inputScope'])) {
                                                                                                                                            echo $dados['inputScope'];
                                                                                                                                        } ?></textarea>
                                </div>
                            </div>
                        </div>
                        <!-- Autor -->
                        <div class="mb-3">
                            <label for="inputAuthor" class="form-label fs-4">Autor: </label>
                            <input class="form-control" disabled id="inputAuthor" name="inputAuthor" value="<?= $_SESSION['Name']; ?>">
                        </div>

                        <input type="submit" name="SendRegistration" class="btn btn-primary fw-bold mt-3 px-5" value="Postar">
                    </form>
                    <a href="../../app/index.php">
                        <button id="signin" class="btn btn-primary fw-bold mt-3 px-5">Home</button>
                    </a>
                </div>
                <div class="col-5 d-flex justify-content-center">
                    <img id="Blog-post-bro" src="../assets/svg/Blog post-bro.svg" alt="" class="">
                </div>
            </div>
        </div>
    </section>