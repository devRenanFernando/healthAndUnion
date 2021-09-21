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
                    <img src="../frontend/assets/img/svg/img_carrousel01.svg" class="d-block w-75 mx-auto" alt="...">
                </div>
                <!-- <div class="carousel-item">
                    <img src="../frontend/assets/img/svg/" class="d-block w-75 mx-auto" alt="...">
                </div> -->
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

    <section id="quemSomos" class="my-2">
        <div class="container-fluid">
            <div class="row my-5 mx-5 align-items-center">
                <div class="col-md-6 col-12 mt-3 order-md-first order-last">
                    <img src="../frontend/assets/img/svg/Solidarity-bro.svg" class="w-75 mx-auto d-block" alt="">
                </div>
                <div class="col-md-6 col-12 text-center order-md-last order-first">
                    <h2 id="quemSomosTitle" class="fs-1 mb-3">Quem somos?</h2>
                    <p class="mx-auto my-auto fs-5">O <strong><i>Health & Union</i></strong> consiste em um site de apoio, comunicação e transporte de informação para pessoas que apresentam a Fibromialgia e para todo aquele que procura ter mais conhecimento sobre o assunto. Mediante à uma patologia muitas vezes desmoralizada, o <strong><i>H&U</i></strong> pretende criar um laço acolhedor de união para que essas pessoas não se sintam incompreendidas e isoladas da sociedade, proporcionando atualizações e resultados de pesquisas sobre a fibromialgia, mantendo uma comunicação não só entre os pacientes como também entres médicos e pesquisadores.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="contato" class="my-2">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-7 col-12">
                    <h2 id="contatoTitle" class="fs-1 text-center my-4">Contato</h2>
                    <span class="text-center fs-5">
                        <p>Fale conosco pelo <a href="#" class="mx-2 icones"><span><i class="fab fa-whatsapp"></i></span></a> ou nos envie um <a href="#" class="mx-2 icones"><span><i class="far fa-envelope"></i></span></a></p>
                    </span>
                    <form id="form_mensagem" class="mx-4" action="#" method="post">

                        <!-- Textarea -->
                        <div class="form-group mb-3">
                            <div class="col-md-6 offset-md-3">
                                <label class="mb-2 fs-5">Nos escreva uma mensagem:</label>
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a comment here" id="mensagem" name="mensagem" style="height: 8em"></textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Botão de Enviar -->
                        <div class="col-md-6 offset-md-3 d-flex justify-content-end">
                            <button type="submit" class="btn btn-sm btn-outline-dark fw-bold" style=" width: 8em" role="button">Enviar</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-5 col-12">
                    <img class="w-md-100 w-75 d-flex mx-auto" src="../frontend/assets/img//svg//Contact us-amico.svg" alt="">
                </div>
            </div>
        </div>
    </section>
</main>