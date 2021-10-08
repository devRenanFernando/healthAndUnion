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
            <!-- //Recentes -->

            <div class="button-group mb-3">
                <button type="button" data-filter="*" class="active btn btn-sm fw-bold text-uppercase">Todos</button>
                <button type="button" data-filter=".posts_recentes" class="btn btn-sm fw-bold text-uppercase">Últimos Posts</button>
                <button type="button" data-filter=".principais_posts" class="btn btn-sm fw-bold text-uppercase">Principais Posts</button>
                <button type="button" data-filter=".pandemia" class="btn btn-sm fw-bold text-uppercase">Pandemia</button>
                <button type="button" data-filter=".vacinacao" class="btn btn-sm fw-bold text-uppercase">Vacinação</button>
                <button type="button" data-filter=".doenca" class="btn btn-sm fw-bold text-uppercase">Doença</button>
            </div>

            <div class="row grid mx-0">
                <div class="col-lg-4 col-6 mb-4 element-item doenca pandemia">
                    <div class="card mb-3" style="max-width: 580px;">
                        <a href="../frontend/assets/svg/img_posts.svg" class="popup-link">
                            <img src="../frontend/assets/svg/img_posts.svg" class="mx-auto rounded-start img-fluid" alt="...">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            <p class="mb-0">
                                <span class="badge bg-light text-dark">Doença</span>
                                <span class="badge bg-light text-dark">Pandemia</span>
                            </p>
                        </div>
                        <div class="d-flex justify-content-start ms-3">
                            <button type="submit" class="btn btn-sm btn-outline-dark fw-bold" role="button" style="width: 10em;">Leia mais <i class="fas fa-arrow-alt-circle-right ms-3"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6 mb-4 element-item posts_recentes pandemia">
                    <div class="card mb-3" style="max-width: 580px;">
                        <a href="../frontend/assets/svg/img_posts.svg" class="popup-link">
                            <img src="../frontend/assets/svg/img_posts.svg" class="mx-auto rounded-start img-fluid" alt="...">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            <p class="mb-0">
                                <span class="badge bg-light text-dark">Post Recente</span>
                                <span class="badge bg-light text-dark">Pandemia</span>
                            </p>
                        </div>
                        <div class="d-flex justify-content-start ms-3">
                            <button type="submit" class="btn btn-sm btn-outline-dark fw-bold" role="button" style="width: 10em;">Leia mais <i class="fas fa-arrow-alt-circle-right ms-3"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6 mb-4 element-item vacinacao pandemia">
                    <div class="card mb-3" style="max-width: 580px;">
                        <a href="../frontend/assets/svg/img_posts.svg" class="popup-link">
                            <img src="../frontend/assets/svg/img_posts.svg" class="mx-auto rounded-start img-fluid" alt="...">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            <p class="mb-0">
                                <span class="badge bg-light text-dark">Vacinação</span>
                                <span class="badge bg-light text-dark">Pandemia</span>
                            </p>
                        </div>
                        <div class="d-flex justify-content-start ms-3">
                            <button type="submit" class="btn btn-sm btn-outline-dark fw-bold" role="button" style="width: 10em;">Leia mais <i class="fas fa-arrow-alt-circle-right ms-3"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6 mb-4 element-item vacinacao posts_recentes">
                    <div class="card mb-3" style="max-width: 580px;">
                        <a href="../frontend/assets/svg/img_posts.svg" class="popup-link">
                            <img src="../frontend/assets/svg/img_posts.svg" class="mx-auto rounded-start img-fluid" alt="...">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            <p class="mb-0">
                                <span class="badge bg-light text-dark">Vacinação</span>
                                <span class="badge bg-light text-dark">Post Recente</span>
                            </p>
                        </div>
                        <div class="d-flex justify-content-start ms-3">
                            <button type="submit" class="btn btn-sm btn-outline-dark fw-bold" role="button" style="width: 10em;">Leia mais <i class="fas fa-arrow-alt-circle-right ms-3"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6 mb-4 element-item principais_posts">
                    <div class="card mb-3" style="max-width: 580px;" class="popup-link">
                        <a href="../frontend/assets/svg/img_posts.svg">
                            <img src="../frontend/assets/svg/img_posts.svg" class="mx-auto rounded-start img-fluid" alt="...">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            <p class="mb-0">
                                <span class="badge bg-light text-dark">Principal Post</span>
                            </p>
                        </div>
                        <div class="d-flex justify-content-start ms-3">
                            <button type="submit" class="btn btn-sm btn-outline-dark fw-bold" role="button" style="width: 10em;">Leia mais <i class="fas fa-arrow-alt-circle-right ms-3"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6 mb-4 element-item vacinacao principais_posts">
                    <div class="card mb-3" style="max-width: 580px;">
                        <a href="../frontend/assets/svg/img_posts.svg" class="popup-link">
                            <img src="../frontend/assets/svg/img_posts.svg" class="mx-auto rounded-start img-fluid" alt="...">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            <p class="mb-0">
                                <span class="badge bg-light text-dark">Vacinação</span>
                                <span class="badge bg-light text-dark">Principal Post</span>
                            </p>
                        </div>
                        <div class="d-flex justify-content-start ms-3">
                            <button type="submit" class="btn btn-sm btn-outline-dark fw-bold" role="button" style="width: 10em;">Leia mais <i class="fas fa-arrow-alt-circle-right ms-3"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center py-3">
                <a href="#">
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

    <section id="contato" class="mt-4 py-5">
        <div class="container-fluid">
            <div class="row position-relative mx-5">
                <img src="../frontend/assets/svg/paperplane.svg" class="position-absolute translate-middle ms-4" alt="" style="width: 10em; top: -1em;">
                <div class="col-md-7 align-self-center">
                    <h2 id="contatoTitle" class="fs-1 text-center my-4">Contato</h2>
                    <span class="text-center fs-5">
                        <p>Fale conosco pelo WhatsApp <a href="#" class="mx-2 icones"><span><i class="fab fa-whatsapp"></i></span></a> ou nos envie um email <a href="#" class="mx-2 icones"><span><i class="far fa-envelope"></i></span></a></p>
                    </span>
                    <form id="form_mensagem" class="mx-4" action="#" method="post">

                        <!-- Textarea -->
                        <div class="form-group">
                            <div class="mb-3">
                                <label for="mensagem" class="mb-2 fs-5">Nos escreva também uma mensagem:</label>
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a comment here" id="mensagem" name="mensagem"></textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Botão de Enviar -->
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-sm btn-outline-dark fw-bold" style=" width: 8em" role="button">Enviar</button>
                        </div>
                    </form>
                </div>

                <div class="col-md-5 align-self-center">
                    <img class="img-fluid" src="../frontend/assets/svg/Contact us-amico.svg" alt="">
                </div>
            </div>
        </div>
    </section>
</main>