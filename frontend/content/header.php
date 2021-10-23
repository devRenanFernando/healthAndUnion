<header>
    <div id="header" class="py-3">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">

                <a class="navbar-brand" href="#">
                    <img src="../frontend/assets/svg/logo.svg" class="img-fluid" width="60" height="auto" alt="">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between text-center" id="navbarNav">
                    <ul class="navbar-nav">

                        <!-- MENU HOME -->
                        <li class="nav-item mx-auto w-25">
                            <a class="nav-link fs-3 text-dark active_a" aria-current="page" href="index.php">Home</a>
                        </li>

                        <!-- MENU POSTS -->
                        <li class="nav-item px-3 mx-auto w-25 dropdown">
                            <a class="nav-link fs-3 text-dark dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Posts
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item " href="index.php?pg=default/#posts">Últimos Posts</a></li>
                                <li><a class="dropdown-item " href="index.php?pg=posts">Todos Posts</a></li>
                                <!-- <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li> -->
                            </ul>
                        </li>

                        <!-- MENU QUEM SOMOS -->
                        <li class="nav-item pe-3 mx-auto w-50">
                            <a class="nav-link fs-3 text-dark" href="index.php?pg=default/#quemSomos">Quem somos?</a>
                        </li>

                        <!-- MENU DEPOIMENTOS -->
                        <li class="nav-item pe-3 mx-auto w-50">
                            <a class="nav-link fs-3 text-dark" href="index.php?pg=default/#depoimentos">Depoimentos</a>
                        </li>

                        <!-- MENU CONTATO -->
                        <li class="nav-item mx-auto w-25">
                            <a class="nav-link fs-3 text-dark" href="index.php?pg=default/#contato">Contato</a>
                        </li>
                    </ul>

                    <div class="row align-items-center mt-lg-1 mt-sm-4">

                        <!-- Perfil -->
                        <div class="col-lg-<?php if (isset($_SESSION['Type'])) {
                                                echo "4";
                                            } else {
                                                echo '6';
                                            } ?> col-6 px-4 border-end border-3">
                            <span class="p-1">
                                <?php
                                if (!isset($_SESSION['Type'])) {
                                    // SESSION VAZIA

                                    echo '
                                    <a href="../frontend/content/login.php">
                                    <i class="fas fa-user fa-2x icones" aria-hidden="true"></i>
                                    </a>';
                                } else {
                                    // SESSION ATIVA

                                    // VERIFICAÇÃO DO TIPO DE USER
                                    switch ($_SESSION['Type']) {
                                            // ADM
                                        case '0':
                                            $page = 'adm';
                                            break;
                                            // CONTRIBUTORS
                                        case '1':
                                            $page = 'contributors';
                                            break;
                                            // USER
                                        default:
                                            $page = 'user';
                                    }

                                    // REDIRECIONAMENTO PARA PÁGINA DE ACORDO COM O TYPE USER
                                    echo "
                                        <a href='index.php?pg={$page}'>
                                        <i class='fas fa-user fa-2x icones' aria-hidden='true'></i>
                                        </a>";
                                }
                                ?>
                            </span>
                        </div>

                        <!-- Logout -->
                        <?php
                        if (isset($_SESSION['Type'])) {
                            echo '<div id="iconLogout" class="col-lg-4 col-6 px-4">
                                <a href="../backend/class/users/Logout.php">
                                    <i class="fas fa-sign-out-alt fa-2x icones" aria-hidden="true"></i>
                                </a>
                            </div>';
                        }
                        ?>

                        <!-- Busca -->
                        <div class="col-lg-<?php if (isset($_SESSION['Type'])) {
                                                echo "4";
                                            } else {
                                                echo '6';
                                            }  ?> px-4 mt-lg-0 mt-4 d-flex justify-content-center">
                            <div id="myOverlay" class="overlay">
                                <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
                                <div class="overlay-content">
                                    <form action="/action_page.php">
                                        <input type="text" placeholder="Pesquisar..." name="search">
                                        <button class="icones" type="submit"><i class="fas fa-search fa-2x"></i></button>
                                    </form>
                                </div>
                            </div>

                            <button class="openBtn" onclick="openSearch()"><i class="fas fa-search fa-2x icones" aria-hidden="true"></i></button>
                        </div>


                    </div>

                </div>
            </nav>
        </div>
    </div>
</header>