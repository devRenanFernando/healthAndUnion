<?php
session_start();
ob_start();

if ((!isset($_SESSION['Id'])) and (!isset($_SESSION['Name']))) {
    $_SESSION['msg'] = '<div class="alert alert-danger d-flex align-items-center" role="alert">
                                    <span><i class="fas fa-exclamation-triangle fa-2x"></i></span>
                                    <div class="fw-bold ms-3">
                                        É preciso realizar o login para acessar a página!
                                    </div>
                                </div>';
    header("Location: ../content/login.php");
    exit;
}

$previous = "javascript:history.go(-1)";
if (isset($_SERVER['HTTP_REFERER'])) {
    $previous = $_SERVER['HTTP_REFERER'];
}

require_once "../../vendor/autoload.php";
require_once "../../helpers/whoops.php";

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

// Post Específico
$queryPostEspecifc = "SELECT * FROM posts WHERE IdPost = " . $_GET['IdPost'];
$resultPostEspecifc = $connect->prepare($queryPostEspecifc);
$resultPostEspecifc->execute();

$rowPostEspecifc = $resultPostEspecifc->fetch(PDO::FETCH_ASSOC);
extract($rowPostEspecifc);

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

    <!--  jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/6827d460af.js" crossorigin="anonymous"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="../css/test.css">
    <link rel="stylesheet" href="../css/main.css">

    <title>Editar Post - Health & Union - Seu site especializado em Fibromialgia</title>
</head>

<body style="background-color: var(--blue-violet);">

    <section id="editPost" class="container-flex min-vh-100 d-flex align-items-center justify-content-center">
        <div id="larger">
            <div class="container shadow p-5 my-5 bg-body rounded">
                <h1 class="fs-1 text-center mb-2">Editar Post</h1>

                <form action="../../backend/class/posts/UpdatePost.php?Id=<?= $IdPost ?>" method="post" enctype="multipart/form-data">

                    <!-- Título -->
                    <div class="mb-3">
                        <label for="inputTitle" class="form-label fs-4">Título: </label>
                        <input type="name" class="form-control text-uppercase" id="inputTitle" name="inputTitle" value="<?= $Title; ?>">
                    </div>

                    <!-- Subtítulo -->
                    <div class="mb-3">
                        <label for="inputSubtitle" class="form-label fs-4">Subtítulo: </label>
                        <input type="name" class="form-control" id="inputSubtitle" name="inputSubtitle" value="<?= $Subtitle; ?>">
                    </div>

                    <!-- Textarea -->
                    <div class="form-group">
                        <div class="mb-3">
                            <label for="inputScope" class="form-label fs-4">Matéria:</label>
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here" id="inputScope" name="inputScope"><?= $Scope; ?></textarea>
                            </div>
                        </div>
                    </div>

                    <!-- Upload de Imagem -->

                    <div class="content">
                        <img id="output" class="d-flex mx-auto w-25" src="../assets/<?php if (isset($Img)) {
                                                                                        echo "upload/$Img";
                                                                                    } else {
                                                                                        echo "svg/img_posts.svg";
                                                                                    } ?>" alt="<?php if (isset($Caption)) {
                                                                                                echo $Caption;
                                                                                            } else {
                                                                                                echo "Imagem padrão";
                                                                                            } ?>">

                        <div id="alterarFoto">
                            <div class="overlay">
                                <div class="text">
                                    <div class="mb-3 d-flex flex-column">
                                        <label for="inputFile" class="form-label fs-4">Alterar imagem do post</label>
                                        <input class="form-control inputFile" name="inputFile" type="file" accept="image/*" onchange="loadFile(event)">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Legenda da imagem -->
                    <div class="mb-3">
                        <label for="inputCaption" class="form-label fs-4">Legenda: </label>
                        <input type="name" class="form-control" id="inputCaption" name="inputCaption" value="<?= $Caption; ?>">
                    </div>

                    <!-- Button Group -->
                    <div class="d-flex justify-content-center mt-3">
                        <a href="<?= $previous ?>">
                            <button type="button" class="btn btn-lg btn-outline-dark fw-bold mx-4" style=" width: 10em" role="button">Cancelar</button>
                        </a>
                        <input type="submit" class="btn btn-lg btn-outline-dark fw-bold mx-4" name="inputSendEdit" style=" width: 10em" role="button" value="Salvar"></input>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- JavaScript: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="../js/bootstrap.min.js" crossorigin="anonymous"></script>

    <!-- Owl Carousel -->
    <script src="../frontend/js/owl.carousel.min.js"></script>

    <!-- Isotope -->
    <script src="../frontend/js/isotope.pkgd.min.js"></script>

    <!-- Masks -->
    <script src="https://cdn.jsdelivr.net/npm/cleave.js@1.6.0/dist/cleave.min.js"></script>

    <!-- Magnific -->
    <script src="../frontend/js/jquery.magnific-popup.min.js"></script>

    <!-- Main File Js -->
    <script src="../frontend/js/main.js"></script>

    <script>
        var loadFile = function(event) {
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src) // free memory
            }
        };
    </script>

</body>

</html>