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

// echo "<pre>";
// print_r($_SESSION);
// echo "</pre>";
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

    <title>Entrar - Health & Union - Seu site especializado em Fibromialgia</title>
</head>

<body style="background-color: var(--blue-violet);">

    <section id="editProfile" class="container-flex min-vh-100 d-flex align-items-center justify-content-center">
        <div id="larger">
            <div class="container shadow p-5 my-5 bg-body rounded">
                <h1 class="fs-1 text-center mb-2">Editar Perfil</h1>

                <form action="../../backend/class/users/UpdateUser.php" method="post" enctype="multipart/form-data">
                    <div class="row align-items-center justify-content-center mb-3">
                        <div class="col-xl-6 col-12 content">
                            <img id="output" class="perfil-foto d-flex mx-auto" src="<?php if ($_SESSION['Photo'] == null) {
                                                                                            if ($_SESSION['Gender'] == 'Masculino') {
                                                                                                echo '../assets/svg/user.svg';
                                                                                            } else if ($_SESSION['Gender'] == 'Feminino') {
                                                                                                $random = random_int(1, 3);
                                                                                                echo "../assets/svg/userFemale0{$random}.svg";
                                                                                            } else {
                                                                                                echo '#';
                                                                                            }
                                                                                        } else {
                                                                                            echo "../assets/upload/{$_SESSION['Photo']}";
                                                                                        } ?>" alt="Foto de <?= $_SESSION['Name']; ?>">

                            <div id="alterarFoto">
                                <div class="overlay">
                                    <div class="text">
                                        <div class="mb-3 d-flex flex-column">
                                            <label for="inputFile" class="col-form-label mb-3">Alterar foto de perfil</label>
                                            <input class="form-control" name="inputFile" type="file" accept="image/*" onchange="loadFile(event)" id="inputFile">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 col-12 mt-xl-0 mt-3">
                            <div class="row mt-lg-0 align-items-center mt-3">
                                <label for="inputName" class="col-sm-2 col-form-label fs-5">Nome:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputName" name="inputName" value="<?= $_SESSION['Name']; ?>">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="row mb-3">
                                <label for="inputEmail" class="col-sm-2 col-form-label">Email:</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="inputEmail" name="inputEmail" value="<?= $_SESSION['Email']; ?>">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="row mb-3">
                                <label for="inputPhone" class="col-lg-3 col-sm-2 col-form-label">Telefone:</label>
                                <div class="col-lg-9 col-sm-10">
                                    <input type='tel' class='form-control' id='inputPhone' name="inputPhone" value='<?= $_SESSION['Phone']; ?>'>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-6 col-12">
                            <div class="row mb-3">
                                <label for="inputOccupation" class="col-sm-3 col-form-label">Ocupação:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputOccupation" name="inputOccupation" value="<?= $_SESSION['Occupation']; ?>">
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 col-12">
                            <div class="row mb-3">
                                <label for="inputBirth" class="col-sm-3 col-form-label">Nascimento:</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control" id="inputBirth" name="inputBirth" value="<?=$_SESSION['Birth']; ?>">
                                </div>
                            </div>
                        </div>
                    </div>

                    <fieldset class="row mb-3">
                        <legend class="col-form-label col-sm-2 pt-0">Gênero</legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="<?= $_SESSION['Gender']; ?>" checked>
                                <label class="form-check-label" for="gridRadios1">
                                    <?php echo $_SESSION['Gender']; ?>
                                </label>
                            </div>

                            <div class="form-check">
                                <?php
                                if ($_SESSION['Gender'] == 'Masculino') {
                                    echo "
                                    <input class='form-check-input' type='radio' name='gridRadios' id='gridRadios2' value='Feminino'>
                                    <label class='form-check-label' for='gridRadios2'> Feminino </label>";
                                } else if ($_SESSION['Gender'] == 'Feminino') {
                                    echo "
                                    <input class='form-check-input' type='radio' name='gridRadios' id='gridRadios2' value='Masculino'>
                                    <label class='form-check-label' for='gridRadios2'> Masculino </label>";
                                } else if ($_SESSION['Gender'] == 'Outro' && $_SESSION['Gender'] != 'Feminino')
                                    echo "
                                    <input class='form-check-input' type='radio' name='gridRadios' id='gridRadios2' value='Masculino'>
                                    <label class='form-check-label' for='gridRadios2'> Masculino </label>";
                                ?>
                            </div>

                            <div class="form-check">
                                <?php
                                if ($_SESSION['Gender'] == 'Masculino') {
                                    echo "
                                    <input class='form-check-input' type='radio' name='gridRadios' id='gridRadios3' value='Outro'>
                                    <label class='form-check-label' for='gridRadios3'> Outro </label>";
                                } else if ($_SESSION['Gender'] == 'Feminino') {
                                    echo "
                                    <input class='form-check-input' type='radio' name='gridRadios' id='gridRadios3' value='Outro'>
                                    <label class='form-check-label' for='gridRadios3'> Outro </label>";
                                } else if ($_SESSION['Gender'] == 'Outro' && $_SESSION['Gender'] != 'Masculino')
                                    echo "
                                    <input class='form-check-input' type='radio' name='gridRadios' id='gridRadios3' value='Feminino'>
                                    <label class='form-check-label' for='gridRadios3'> Feminino </label>";
                                ?>
                            </div>
                        </div>
                    </fieldset>

                    <!-- Button Group -->
                    <div class="d-flex justify-content-center mt-3">
                        <a href="../../app/index.php?pg=profile">
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
        var cleave = new Cleave('#inputPhone', {
            delimiters: ['(', ')', ' ', '-'],
            blocks: [0, 2, 0, 5, 4],
            numericOnly: true
        });
    </script>

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