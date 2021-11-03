<header>
    <div id="header" class="py-3">
        <div class="container">
            <nav class="navbar navbar-expand-xl navbar-light">

                <a class="navbar-brand" href="#">
                    <img src="../frontend/assets/svg/logo.svg" class="img-fluid" width="60" height="auto" alt="">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between text-center" id="navbarNav">
                    <ul class="navbar-nav">

                        <?php
                        if (isset($_SESSION['Type'])) {

                            if ($_SESSION['Type'] == '0') {
                                echo '
                        <!-- HOME ADM -->
                        <li class="nav-item px-3 mx-auto w-50 dropdown">
                            <a class="nav-link fs-3 text-dark dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Home
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item" href="index.php?pg=default/#posts">Últimos Posts</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="index.php?pg=default/#quemSomos">Quem somos?</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="index.php?pg=default/#depoimentos">Depoimentos</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="index.php?pg=default/#contato">Contato</a>
                                </li>
                                <!-- <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li> -->
                            </ul>
                        </li>

                        <!-- MENU VISUALIZAR ADM -->
                        <li class="nav-item px-3 mx-auto w-50 dropdown">
                            <a class="nav-link fs-3 text-dark dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Visualizar
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item " href="index.php?pg=posts">Todos Posts</a>
                                </li>
                                <li>
                                    <a class="dropdown-item " href="index.php?pg=usersView">Usuários</a>
                                </li>
                                <!-- <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li> -->
                            </ul>
                        </li>
';
                            } elseif ($_SESSION['Type'] == '1') {
                                echo '
                            
                        <!-- MENU HOME -->
                        <li class="nav-item mx-auto w-25">
                            <a class="nav-link fs-3 text-dark" aria-current="page" href="index.php">Home</a>
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
                    ';
                            } else {
                                echo '<!-- MENU HOME -->
                        <li class="nav-item mx-auto w-25">
                            <a class="nav-link fs-3 text-dark" aria-current="page" href="index.php">Home</a>
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
                    </ul>';
                            }
                        } else {
                            echo '<!-- MENU HOME -->
                        <li class="nav-item mx-auto w-25">
                            <a class="nav-link fs-3 text-dark" aria-current="page" href="index.php">Home</a>
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
                    </ul>';
                        }
                        ?>
                    </ul>



                    <div class="row wrapper align-items-center mt-lg-1 mt-sm-4">

                        <!-- Perfil -->
                        <div class="col-xl-<?php if (isset($_SESSION['Type'])) {
                                                echo "4";
                                            } else {
                                                echo '6';
                                            } ?> col-6 px-4 border-end border-3">
                            <?php
                            if (!isset($_SESSION['Type'])) {
                                // SESSION VAZIA
                                echo
                                '
            <a class="icon p-1" href="../frontend/content/login.php">
                <span>
                    <i class="fas fa-user fa-2x" aria-hidden="true"></i>
                </span>
                <div class="tooltip fs-5 mt-1 px-3 py-1">Entrar</div>
            </a>
            ';
                            } else {
                                // SESSION ATIVA
                                $page = 'profile';

                                // REDIRECIONAMENTO PARA PÁGINA DE PERFIL
                                echo
                                "
            <a class='icon p-1' href='index.php?pg={$page}'>
                <span>
                    <i class='fas fa-user fa-2x' aria-hidden='true'></i>
                </span>
                <div class='tooltip fs-5 mt-1 px-3 py-1'>Perfil</div>
            </a>
            ";
                            }
                            ?>
                        </div>

                        <!-- Logout -->
                        <?php
                        if (isset($_SESSION['Type'])) {
                            echo
                            "
    <div id='iconLogout' class='col-xl-4 col-6 px-4'>
        <a class='icon p-1 ' href='../backend/class/users/Logout.php '>
            <span>
                <i class='fas fa-sign-out-alt fa-2x' aria-hidden='true'></i>
             </span>
            <div class='tooltip fs-5 mt-1 px-3 py-1'>Sair</div>
        </a>
    </div>
    ";
                        }
                        ?>

                        <!-- Busca -->
                        <div class="col-xl-<?php if (isset($_SESSION)) {
                                                echo "4";
                                            } else {
                                                echo '6';
                                            }  ?> col-<?php if (isset($_SESSION['Type'])) {
                                                                echo "12";
                                                            } else {
                                                                echo '6';
                                                            }  ?> px-4 mt-xl-0 mt-4 d-flex justify-content-center">
                            <div id="myOverlay" class="overlay">
                                <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
                                <div class="overlay-content">
                                    <form action="/action_page.php">
                                        <input class="p-4" type="text" placeholder="Pesquisar..." name="search">
                                        <button class="ms-3 p-1" type="submit"><i class="fas fa-search fa-2x"></i></button>
                                    </form>
                                </div>
                            </div>

                            <div class="wrapper">
                                <button class="openBtn icon" onclick="openSearch()">
                                    <span>
                                        <i class="fas fa-search fa-2x" aria-hidden="true"></i>
                                    </span>
                                    <div class="tooltip fs-5 mt-1 px-3 py-1">Pesquisar</div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>