<footer>
    <div id="footer" class="container-fluid">
        <div class="row mt-4 align-items-center me-0">
            <!-- Logo com Frase -->
            <div class="col-lg-3 col-12 mx-auto">
                <img id="logo_footer" src="../frontend/assets/png/Fibromialgia.png" class="rounded mx-auto d-block w-50 mx-4" alt="">
                <p class="text-center fst-italic fs-5 mx-auto">"Quanto mais grave é uma doença, maior tem de ser a esperança. Porque a função da esperança é preencher o que nos falta."</p>
                <h5 class="text-end fs-6">VERGÍLIO FERREIRA</h5>
            </div>

            <!-- Links -->
            <div class="col-lg-3 col-6 text-center">
                <h3 class="fs-3 mb-4">Links</h3>
                <a href="index.php">
                    <h2 class="fs-6 mb-3 mx-auto w-25">Home</h2>
                </a>
                <a href="index.php?pg=posts">
                    <h2 class="fs-6 mb-3 mx-auto w-25">Posts</h2>
                </a>
                <a href="index.php?pg=default/#quemSomos">
                    <h2 class="fs-6 mb-3 mx-auto w-50">Quem somos?</h2>
                </a>
                <a href="index.php?pg=default/#depoimentos">
                    <h2 class="fs-6 mb-3 mx-auto w-50">Depoimentos</h2>
                </a>
                <a href="index.php?pg=default/#contato">
                    <h2 class="fs-6 mb-3 mx-auto w-25">Contato</h2>
                </a>
                <?php
                if (!isset($_SESSION['Type'])) {
                    // SESSION VAZIA

                    echo '
                                    <a href="../frontend/content/login.php">
                                    <h2 class="fs-6 mb-3 mx-auto w-25">Perfil</h2>
                                    </a>';
                } else {
                    // SESSION ATIVA

                    $page = 'profile';

                    // REDIRECIONAMENTO PARA PÁGINA PERFIL
                    echo "
                        <a href='index.php?pg={$page}'>
                        <h2 class='fs-6 mb-3 mx-auto w-25'>Perfil</h2>
                        </a>
                    ";
                }
                ?>
            </div>

            <!-- Suporte -->
            <div class="col-lg-2 col-6 text-center">
                <h3 class="fs-3 mb-4">Suporte</h3>
                <a href="../frontend/content/faq.php">
                    <h2 class="fs-6 mb-3 mx-auto w-50">Perguntas Frequentes</h2>
                </a>
                <a href="#">
                    <h2 class="fs-6 mb-3 mx-auto w-50">Reporte um Erro</h2>
                </a>
                <a href="#">
                    <h2 class="fs-6 mb-3 mx-auto w-25">Ajuda</h2>
                </a>
            </div>

            <!-- Mantenha-se Conectado -->
            <div class="col-lg-4 col-12 text-center">
                <h3 class="fs-3 mb-4">Mantenha-se Conectado</h3>
                <div class="row wrapper my-sm-2 me-0">
                    <div class="col-3">
                        <a class="icon" href="#">
                            <span>
                                <i class="fab fa-facebook fa-2x" aria-hidden="true"></i>
                            </span>
                            <div class="tooltip fs-5 mt-1 px-3 py-1">Facebook</div>
                        </a>
                    </div>
                    <div class="col-3">
                        <a class="icon discord" href="#">
                            <span>
                                <i class="fab fa-discord fa-2x" aria-hidden="true"></i>
                            </span>
                            <div class="tooltip fs-5 mt-1 px-3 py-1">Discord</div>
                        </a>
                    </div>
                    <div class="col-3">
                        <a class="icon twitter" href="#">
                            <span>
                                <i class="fab fa-twitter fa-2x" aria-hidden="true"></i>
                            </span>
                            <div class="tooltip fs-5 mt-1 px-3 py-1">Twitter</div>
                        </a>
                    </div>
                    <div class="col-3">
                        <a class="icon instagram" href="https://www.instagram.com/health_union_/tagged/" target="_blank">
                            <span>
                                <i class="fab fa-instagram fa-2x" aria-hidden="true"></i>
                            </span>
                            <div class="tooltip fs-5 mt-1 px-3 py-1">Instagram</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <h3 class="text-center fs-5 mt-5 pt-3">Todos os direitos reservados à Health & Union</h2>
    </div>
</footer>