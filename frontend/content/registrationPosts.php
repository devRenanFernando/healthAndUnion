<?php
session_start();
ob_start();
// print_r($_SESSION);

require_once "../../vendor/autoload.php";
require_once "../../helpers/whoops.php";
require_once '../../backend/class/posts/PostsMySQL.php';

$host = 'localhost';
$user = 'root';
$password = '';
$db = 'tcc_site';

$mysqli = new mysqli($host, $user, $password, $db);

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}

$queryTags = "SELECT * FROM tags";
$resultTags = $mysqli->query($queryTags);

// Fetch all
$resultTags->fetch_all(MYSQLI_ASSOC);

// Recebe os valores do form registration.php
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if (!empty($dados['SendRegistration'])) {

    $dados['inputAuthor'] = $_SESSION['Id'];

    // Novo Repositório
    $postsMySQL = new PostsMySQL();

    // Método para cadastrar usuário
    $postsMySQL->registrationPosts($dados);
}

$previous = "javascript:history.go(-1)";
if (isset($_SERVER['HTTP_REFERER'])) {
    $previous = $_SERVER['HTTP_REFERER'];
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
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/css/bootstrap-tokenfield.min.css">

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
                <div class="col-lg-6 col-12">
                    <form action="" id="formRegistrationPosts" method="POST" enctype="multipart/form-data">
                        <!-- Título -->
                        <div class="mb-3">
                            <label for="inputTitle" class="form-label fs-4">Título: </label>
                            <input type="text" class="form-control text-uppercase" id="inputTitle" name="inputTitle" value="<?php
                                                                                                                            if (isset($dados['inputTitle'])) {
                                                                                                                                echo $dados['inputTitle'];
                                                                                                                            } ?>">
                        </div>
                        <!-- Subtítulo -->
                        <div class="mb-3">
                            <label for="inputSubtitle" class="form-label fs-4">Subtítulo: </label>
                            <input type="text" class="form-control" id="inputSubtitle" name="inputSubtitle" value="<?php
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

                        <!-- Tags -->
                        <!-- <div class="mb-3">
                            <label for="inputTags" class="form-label fs-4">Tags: </label>
                            <input type="text" class="form-control d-flex" data-role="tagsInput" id="inputTags" name="inputTags" value="<?php
                                                                                                                                        if (isset($dados['inputTags'])) {
                                                                                                                                            echo $dados['inputTags'];
                                                                                                                                        } ?>">
                        </div> -->
                        <!-- 
                        <div class="mb-3">
                            <label for="tagsInput" class="form-label fs-4">Tags: </label>
                            <input type="text" class="form-control" data-role="tagsinput" id="tagsInput" name="tagsInput">
                        </div> -->

                        <!-- Upload de Imagem -->
                        <div class="mb-3 d-flex flex-column">
                            <label for="inputFile" class="form-label fs-4">Imagem da publicação</label>
                            <input class="form-control" name="inputFile" type="file" required accept="image/*" onchange="loadFile(event)" id="inputFile">
                        </div>

                        <!-- Legenda da imagem -->
                        <div class="mb-3">
                            <label for="inputCaption" class="form-label fs-4">Legenda: </label>
                            <input type="text" class="form-control" id="inputCaption" name="inputCaption" value="<?php
                                                                                                                    if (isset($dados['inputCaption'])) {
                                                                                                                        echo $dados['inputCaption'];
                                                                                                                    } ?>">
                        </div>

                        <!-- Autor -->
                        <div class="mb-3 d-none">
                            <label for="inputAuthor" class="form-label fs-4">Autor: </label>
                            <input class="form-control" disabled id="inputAuthor" name="inputAuthor" value="<?= $_SESSION['Name']; ?>">
                        </div>

                        <a href="<?= $previous ?>">
                            <button type="button" class="btn btn-primary fw-bold px-5 me-4" style=" width: 10em" role="button">Cancelar</button>
                        </a>
                        <input type="submit" name="SendRegistration" id="SendRegistration" class="btn btn-primary fw-bold px-5" value="Postar">
                    </form>

                    <a href="../../index.php">
                        <button id="signin" class="btn btn-primary fw-bold my-3 px-5">Home</button>
                    </a>
                </div>
                <div class="col-6 d-flex justify-content-center">
                    <img id="Blog-post-bro" src="../assets/svg/Blog post-bro.svg" alt="Imagem de nova publicação" class="">
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

    <!-- jQueryUi -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

    <!-- Bootstrap Tokenfield -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/bootstrap-tokenfield.js"></script>

    <!-- Bootstrap Tagsinput -->
    <script src="../js/bootstrap-tagsinput.min.js"></script>

    <!-- Main File Js -->
    <script src="../js/main.js"></script>

    <script>
        $(document).ready(function() {
            // TAGS
            $("#inputTags").tokenfield({
                autocomplete: {
                    source: [<?php foreach ($resultTags as $row) { ?> "<?php echo $row['NameTag']; ?>",
                        <?php } ?>
                    ],
                    delay: 100,
                },
                showAutocompleteOnFocus: true,
            });

            $("#formRegistrationPosts").on('subimit', function(event) {
                event.preventDefault();
                if ($.trim($('#inputTags').val()).length == 0) {
                    alert("Por favor selecione uma ou mais tags!");
                    return false;
                } else {
                    var form_data = $(this).serialize();
                    $('#SendRegistration').attr("disabled", "disabled");
                    $.ajax({
                        url: "",
                        method: "POST",
                        data: form_data,
                        beforeSend: function() {
                            $('#SendRegistration').val('Cadastrando...');
                        },
                        success: function(data) {
                            if (data != '') {
                                $('#name').val('');
                                $('#skill').tokenfield('setTokens', []);
                                $('#success_message').html(data);
                                $('#SendRegistration').attr("disabled", false);
                                $('#SendRegistration').val('Submit');
                            }
                        }
                    });
                    setInterval(function() {
                        $('#success_message').html('');
                    }, 5000);
                }
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $("exampleModal").modal("show");
        });
    </script>
</body>

</html>