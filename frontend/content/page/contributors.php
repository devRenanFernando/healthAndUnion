<?php

if ((!isset($_SESSION['Id'])) and (!isset($_SESSION['Name']))) {
    $_SESSION['msg'] = "<p style=' color: red;'>É preciso realizar o login para acessar a página!</p>";
    header("Location: ../ftontend/content/login.php");
}
?>

<main>
    <div id="perfilPage" class="my-4">
        <div class="container shadow p-5 my-5 bg-body rounded">
            <h1 class="fs-1 text-center mb-2">Meu Perfil</h1>

            <!-- Header Perfil -->
            <div class="row d-flex align-items-center justify-content-center mt-5">
                <div class="col-lg-4 col-12 content d-flex justify-content-center">
                    <img class="perfil-foto mx-auto" src="<?php if ($_SESSION['Photo'] == null) {
                                                                echo '../frontend/assets/svg/user.svg';
                                                            } else {
                                                                echo $_SESSION['Photo'];
                                                            } ?>" alt="Foto de <?= $_SESSION['Name']; ?>">

                    <a id="alterarFoto" href="#">
                        <div class="overlay">
                            <div class="text">Alterar foto de perfil
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-6 col-12 text-center mt-xll-0 mt-4">
                    <h2><?= $_SESSION['Name']; ?></h2>
                </div>
            </div>

            <!-- Footer Perfil -->
            <div class="shadow p-5 bg-body rounded my-5 footerPerfil">
                <p class="fs-4"><strong>Email:</strong> <?= $_SESSION['Email']; ?></p>
                <hr>
                <p class="fs-4"><strong>Telefone:</strong> <?= $_SESSION['Phone']; ?></p>
                <hr>
                <p class="fs-4"><strong>Data de Nascimento:</strong> <?php $d = strtotime($_SESSION['Birth']);
                                                                        echo
                                                                        date("d-m-Y", $d); ?></p>
                <hr>
                <p class="fs-4"><strong>Ocupação:</strong> <?= $_SESSION['Occupation']; ?></p>
                <hr>
            </div>

            <!-- Button Group -->
            <div class="d-flex justify-content-center py-3">
                <a href="index.php?pg=posts">
                    <button type="button" class="btn btn-lg btn-outline-dark fw-bold mx-4" style=" width: 10em" role="button">Editar Perfil</button>
                </a>
                <a href="index.php?pg=posts">
                    <button type="button" class="btn btn-lg btn-outline-dark fw-bold mx-4" style=" width: 10em" role="button">Excluir conta</button>
                </a>
            </div>
        </div>
    </div>
</main>