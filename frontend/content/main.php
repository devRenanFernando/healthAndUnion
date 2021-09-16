<main>
    <section id="carousel">
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

    <section id="quemSomos">
        <div class="container-fluid">
            <div class="row my-5 mx-5 align-items-center">
                <div class="col-md col-sm text-center">
                    <h2 class="fs-2 mb-3">Quem somos?</h2>
                    <p class="mx-auto my-auto">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem asperiores animi debitis nam velit libero magni id consectetur, aspernatur consequatur atque minima voluptatum mollitia, quas sapiente at illum nisi et. Dolorem asperiores animi debitis nam velit libero magni id consectetur, aspernatur consequatur atque minima voluptatum mollitia, quas sapiente at illum nisi et.</p>
                </div>
                <div class="col-md col-sm mt-3">
                    <img src="../frontend/assets/img/svg/Solidarity-bro.svg" class="w-75 mx-auto d-block" alt="">
                </div>
            </div>
        </div>
    </section>

    <section id="contato">
        <h2 class="fs-2 text-center">Contato</h2>
        <span class="text-center fs-4">
            <p>Fale conosco pelo <a href="#"><span><i class="fab fa-whatsapp"></i></span></a> ou nos envie um <a href="#"><span><i class="far fa-envelope"></i></span></a></p>
        </span>
        <form id="form_registration_news" class="mx-2" action="../backend/classes/news/IncludeNews.php" method="post">

            <!-- Textarea -->
            <div class="form-group mb-3">
                <div class="col-md-6 offset-md-3">
                    <label class="mb-2">Nos escreva uma mensagem</label>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="mensagem" name="mensagem" style="height: 8em"></textarea>
                    </div>
                </div>
            </div>

            <!-- Botão de Enviar -->
            <div class="col-md-6 offset-md-3 mb-3">
                <button type="submit" class="btn btn- btn-outline-dark" role="button">Enviar</button>
            </div>
        </form>
    </section>
</main>