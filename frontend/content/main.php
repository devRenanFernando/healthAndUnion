<main>
    <section id="carousel" class="mb-4">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../frontend/assets/svg/img_carrousel01.svg" class="d-block w-75 mx-auto" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../frontend/assets/svg/img_carrousel02.svg" class="d-block w-75 mx-auto" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../frontend/assets/svg/img_carrousel03.svg" class="d-block w-75 mx-auto" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <section id="posts" class="pt-lg-5 ">
        <div class="container">
            <!-- Recentes -->
            <div id="recentes" class="my-3">
                <h2 class="fs-1 text-center mb-2">Posts</h2>
                <h4 class="fs-4 text-center mb-4">Veja algumas das nossas publicações</h4>
            </div>

            <div class="button-group mb-3">
                <button type="button" data-filter="*" class="active btn btn-sm fw-bold text-uppercase">Todos</button>
                <button type="button" data-filter=".posts_recentes" class="btn btn-sm fw-bold text-uppercase">Últimos Posts</button>
                <button type="button" data-filter=".principais_posts" class="btn btn-sm fw-bold text-uppercase">Principais Posts</button>
                <button type="button" data-filter=".pandemia" class="btn btn-sm fw-bold text-uppercase">Pandemia</button>
                <button type="button" data-filter=".vacinacao" class="btn btn-sm fw-bold text-uppercase">Vacinação</button>
                <button type="button" data-filter=".doenca" class="btn btn-sm fw-bold text-uppercase">Doença</button>
            </div>

            <!-- //Recentes -->
            <div class="row grid mx-0">
                <?php
                if (($resultPosts) and ($resultPosts->rowCount() != 0)) {

                    while ($row_user = $resultPosts->fetch(PDO::FETCH_ASSOC)) {
                        extract($row_user);

                        date_default_timezone_set('America/Sao_Paulo');
                        $today = new DateTime();
                        $formato = 'Y-m-d H:i:s';
                        $Edit_date = DateTime::createFromFormat($formato, $Edit_date);
                        $intervalo = $Edit_date->diff($today);

                        $date = DateTime::createFromFormat('Y-m-d H:i:s', $Send_date);
                        $d = $date->format('d');
                        $Y = $date->format('Y');
                        $m = $date->format('m');
                ?>

                        <div class="col-lg-4 col-6 mb-4 element-item doenca pandemia">
                            <div class="card mb-3 " style="max-width: 580px;">
                                <a href="../frontend/assets/svg/img_posts.svg" class="popup-link mx-auto my-3">
                                    <img src="../frontend/assets/svg/img_posts.svg" class="rounded-start img-fluid" alt="...">
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title text-uppercase text-center"><?= $Title ?></h5>
                                    <p class="card-text"><?= $Scope ?></p>
                                    <p class="card-text mb-0">
                                        <small class="text-muted">
                                            Publicado <?= $d; ?> de
                                            <?php
                                            switch ($m) {
                                                case '1':
                                                    echo $m = 'Janeiro';
                                                    break;
                                                case '2':
                                                    echo $m = 'Fevereiro';
                                                    break;
                                                case '3':
                                                    echo $m = 'Março';
                                                    break;
                                                case '4':
                                                    echo $m = 'Abril';
                                                    break;
                                                case '5':
                                                    echo $m = 'Maio';
                                                    break;
                                                case '6':
                                                    echo $m = 'Junho';
                                                    break;
                                                case '7':
                                                    echo $m = 'Julho';
                                                    break;
                                                case '8':
                                                    echo $m = 'Agosto';
                                                    break;
                                                case '9':
                                                    echo $m = 'Setembro';
                                                    break;
                                                case '10':
                                                    echo $m = 'Outubro';
                                                    break;
                                                case '11':
                                                    echo $m = 'Novembro';
                                                    break;
                                                case '12':
                                                    echo $m = 'Dezembro';
                                                    break;
                                                default:
                                                    echo "ERRO";
                                            }
                                            ?>
                                            <?= $Y ?>
                                        </small>
                                    </p>
                                    <p class="card-text">
                                        <small class="text-muted">
                                            <?php
                                            if ($intervalo->d == 0 && $intervalo->h < 1) {
                                                echo "Última atualização $intervalo->i minutos atrás";
                                            } elseif ($intervalo->d == 0) {
                                                echo "Última atualização $intervalo->h horas atrás";
                                            } elseif ($intervalo->d == 1) {
                                                echo "Última atualização 1 dia e $intervalo->h horas atrás";
                                            } elseif ($intervalo->m == 0 && $intervalo->d > 1) {
                                                echo "Última atualização $intervalo->d dias atrás";
                                            } elseif ($intervalo->m == 1) {
                                                echo "Última atualização 1 mês atrás";
                                            } elseif ($intervalo->m > 1 && $intervalo->y == 0) {
                                                echo "Última atualização $intervalo->m mêses atrás";
                                            } elseif ($intervalo->y == 1) {
                                                echo "Última atualização 1 ano atrás";
                                            } else {
                                                echo "Última atualização $intervalo->y anos atrás";
                                            }
                                            ?>
                                        </small>
                                    </p>
                                    <p class="mb-0">
                                        <span class="badge bg-light text-dark">Doença</span>
                                        <span class="badge bg-light text-dark">Pandemia</span>
                                    </p>
                                </div>
                                <div class="d-flex justify-content-start ms-3 mb-2">
                                    <a href="http://localhost/www/tcc_site/app/index.php?pg=post&Id=<?= $Id ?>&Author=<?= $Author ?>">
                                        <button class="btn btn-sm btn-outline-dark fw-bold" role="button" style="width: 10em;">Leia mais <i class="fas fa-arrow-alt-circle-right ms-3"></i></button>
                                    </a>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                } else {
                    echo "<p class='text-danger'>Nenhum usuário encontrado!</p>";
                }
                ?>
            </div>

            <div class="d-flex justify-content-center py-3">
                <a href="index.php?pg=posts">
                    <button type="button" class="btn btn-lg btn-outline-dark fw-bold" style=" width: 15em" role="button">Todos os Posts</button>
                </a>
            </div>
        </div>
    </section>

    <section id="quemSomos" class="mt-2 mb-5 py-3">
        <div class="container-fluid">
            <div class="row my-5 mx-5 align-items-center">
                <div class="col-lg-6 col-12 mt-3 order-lg-first order-last">
                    <img src="../frontend/assets/svg/Solidarity-bro.svg" class="w-75 mx-auto d-block" alt="">
                </div>
                <div class="col-lg-6 col-12 text-center order-lg-last order-first">
                    <h2 id="quemSomosTitle" class="fs-1 mb-3">Quem somos?</h2>
                    <p class="mx-auto my-auto fs-5">O <strong><i>Health & Union</i></strong> consiste em um site de apoio, comunicação e transporte de informação para pessoas que apresentam a Fibromialgia e para todo aquele que procura ter mais conhecimento sobre o assunto. Mediante à uma patologia muitas vezes desmoralizada, o <strong><i>H&U</i></strong> pretende criar um laço acolhedor de união para que essas pessoas não se sintam incompreendidas e isoladas da sociedade, proporcionando atualizações e resultados de pesquisas sobre a fibromialgia, mantendo uma comunicação não só entre os pacientes como também entres médicos e pesquisadores.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="depoimentos" class="mt-2 mb-5 pt-2 pb-5">
        <div class="block">
            <div class="container">
                <h2 class="title text-center">Depoimentos</h2>
                <h4 class="subtitle text-center mb-4">
                    Et sumi kapa namur aondeai rocus pocus
                </h4>

                <div class="owl-carousel owl-theme owl-loaded">
                    <div>
                        <div class="depoimento">
                            <img src="../frontend/assets/svg/user.svg" />
                            <div class="depoimento-texto ps-3">
                                <p>
                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                    accusantium dolorem que laudantium, totam rem aperiam, eaque
                                    ipsa quae ab illo inventore veritatis.
                                </p>
                                <p class="name">
                                    <span>Maikel Neris</span> / Diretor da Decode Web
                                </p>
                                <p class="mb-0">
                                    <img src="../frontend/assets/svg/quote.svg" class="quote float-right" />
                                </p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="depoimento">
                            <img src="../frontend/assets/svg/user.svg" />
                            <div class="depoimento-texto ps-3">
                                <p>
                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                    accusantium dolorem que laudantium, totam rem aperiam, eaque
                                    ipsa quae ab illo inventore veritatis.
                                </p>
                                <p class="name">
                                    <span>Maikel Neris</span> / Diretor da Decode Web
                                </p>
                                <p class="mb-0">
                                    <img src="../frontend/assets/svg/quote.svg" class="quote float-right" />
                                </p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="depoimento">
                            <img src="../frontend/assets/svg/user.svg" />
                            <div class="depoimento-texto ps-3">
                                <p>
                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                    accusantium dolorem que laudantium, totam rem aperiam, eaque
                                    ipsa quae ab illo inventore veritatis.
                                </p>
                                <p class="name">
                                    <span>Maikel Neris</span> / Diretor da Decode Web
                                </p>
                                <p class="mb-0">
                                    <img src="../frontend/assets/svg/quote.svg" class="quote float-right" />
                                </p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="depoimento">
                            <img src="../frontend/assets/svg/user.svg" />
                            <div class="depoimento-texto ps-3">
                                <p>
                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                    accusantium dolorem que laudantium, totam rem aperiam, eaque
                                    ipsa quae ab illo inventore veritatis.
                                </p>
                                <p class="name">
                                    <span>Maikel Neris</span> / Diretor da Decode Web
                                </p>
                                <p class="mb-0">
                                    <img src="../frontend/assets/svg/quote.svg" class="quote float-right" />
                                </p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="depoimento">
                            <img src="../frontend/assets/svg/user.svg" />
                            <div class="depoimento-texto ps-3">
                                <p>
                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                    accusantium dolorem que laudantium, totam rem aperiam, eaque
                                    ipsa quae ab illo inventore veritatis.
                                </p>
                                <p class="name">
                                    <span>Maikel Neris</span> / Diretor da Decode Web
                                </p>
                                <p class="mb-0">
                                    <img src="../frontend/assets/svg/quote.svg" class="quote float-right" />
                                </p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="depoimento">
                            <img src="../frontend/assets/svg/user.svg" />
                            <div class="depoimento-texto ps-3">
                                <p>
                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                    accusantium dolorem que laudantium, totam rem aperiam, eaque
                                    ipsa quae ab illo inventore veritatis.
                                </p>
                                <p class="name">
                                    <span>Maikel Neris</span> / Diretor da Decode Web
                                </p>
                                <p class="mb-0">
                                    <img src="../frontend/assets/svg/quote.svg" class="quote float-right" />
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTATO -->
    <section id="contato" class="my-5 py-5">
        <div class="container-fluid">
            <div class="row position-relative mx-5">
                <img src="../frontend/assets/svg/paperplane.svg" class="position-absolute translate-middle ms-4" alt="" style="width: 10em; top: -1em;">
                <div class="col-lg-7 align-self-center">
                    <h2 id="contatoTitle" class="fs-1 text-center my-4">Contato</h2>
                    <span class="text-center fs-5">
                        <p>Fale conosco pelo WhatsApp <a href="#" class="mx-2 icones"><span><i class="fab fa-whatsapp"></i></span></a> ou nos envie um email <a href="#" class="mx-2 icones"><span><i class="far fa-envelope"></i></span></a></p>
                    </span>
                    <?php
                    if (isset($_SESSION['msg'])) {
                        echo $_SESSION['msg'];
                        unset($_SESSION['msg']);
                    }
                    ?>
                    <form id="form_mensagem" class="mx-4" action="../backend/class/users/Contact.php" method="post">

                        <!-- Input Name -->
                        <div class="row mt-lg-0 align-items-center mt-3">
                            <label for="inputName" class="col-sm-2 col-form-label fs-5">Nome:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputName" name="inputName" <?php if (isset($_SESSION['Name'])) { ?> value="<?= $_SESSION['Name'] ?><?php } ?>">
                            </div>
                        </div>

                        <!-- Input Email -->
                        <div class="row mt-lg-0 align-items-center mt-3">
                            <label for="inputEmail" class="col-sm-2 col-form-label fs-5">Email:</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputEmail" name="inputEmail" <?php if (isset($_SESSION['Email'])) { ?> value="<?= $_SESSION['Email'] ?><?php } ?>">
                            </div>
                        </div>

                        <!-- Textarea -->
                        <div class="form-group">
                            <div class="mb-3">
                                <label for="mensagem" class="mb-2 fs-5">Ou nos escreva uma mensagem:</label>
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a comment here" id="mensagem" name="inputMensage"></textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Botão de Enviar -->
                        <div class="d-flex justify-content-end">
                            <input type="submit" name="SendRegistration" class="btn btn-sm btn-outline-dark fw-bold" style=" width: 8em" role="button" value="Enviar"></input>
                        </div>
                    </form>
                </div>

                <div id="img_contactUs" class="col-lg-5 align-self-center">
                    <img class="img-fluid" src="../frontend/assets/svg/Contact us-amico.svg" alt="">
                </div>
            </div>
        </div>
    </section>
</main>