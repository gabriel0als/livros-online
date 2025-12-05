<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require __DIR__ . "/../templates/header.php"; ?>

  <section class="slideshow">

    <div class="container">

      <div id="carousel" class="carousel slide">

        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="assets/images/banners/banner-1.jpg" class="d-block w-100" alt="">
          </div>

          <div class="carousel-item">
            <img src="assets/images/banners/banner-2.jpg" class="d-block w-100" alt="">
          </div>
        </div>
        <!-- /.carousel-inner -->

        <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Próximo</span>
        </button>

      </div>

    </div>

  </section>
  <!-- /.slideshow -->

  <section class="banners mt-4">

    <div class="container">

      <div class="row">
        <div class="col-md-6">
          <img src="assets/images/banners/Parcelas 12x.png" class="d-block w-100" alt="">
        </div>

        <div class="col-md-6">
          <img src="assets/images/banners/Entrega todo Pais.png" class="d-block w-100" alt="">
        </div>

      </div>

    </div>

  </section>
  <!-- /.banners -->

  <section class="mais-populares mt-5 text-center">
    <div class="container">
      <h2>Mais populares</h2>
    </div>
  </section>
  <!-- /.mais-populares -->

  <main class="produtos">

    <div class="container">

      <div class="row">

        <!-- Produto -->
        <div class="col-md-3">
          <div class="card card-produto rounded-0 border-0">
            <img src="assets/images/produtos/thumb/cropped-rosa.jpg" class="card-img-top rounded-0" alt="...">
            <div class="card-body">

              <h5 class="card-title">Cropped rosa</h5>

              <p class="card-text">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
              </p>

              <p class="card-text">R$ 59,90</p>

            </div>
          </div>
        </div>
        <!-- /Produto -->

        <!-- Produto -->
        <div class="col-md-3">
          <div class="card rounded-0 border-0">
            <img src="assets/images/produtos/thumb/camiseta-manga-comprida.jpg" class="card-img-top rounded-0"
              alt="...">
            <div class="card-body">

              <h5 class="card-title">Camiseta manga comprida</h5>

              <p class="card-text">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>

              </p>

              <p class="card-text">R$ 59,90</p>

            </div>
          </div>
        </div>
        <!-- /Produto -->

        <!-- Produto -->
        <div class="col-md-3">
          <div class="card rounded-0 border-0">
            <img src="assets/images/produtos/thumb/cropped-rosa.jpg" class="card-img-top rounded-0" alt="...">
            <div class="card-body">

              <h5 class="card-title">Cropped rosa</h5>

              <p class="card-text">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
              </p>

              <p class="card-text">R$ 59,90</p>

            </div>
          </div>
        </div>
        <!-- /Produto -->

        <!-- Produto -->
        <div class="col-md-3">
          <div class="card rounded-0 border-0">
            <img src="assets/images/produtos/thumb/cropped-rosa.jpg" class="card-img-top rounded-0" alt="...">
            <div class="card-body">

              <h5 class="card-title">Cropped rosa</h5>

              <p class="card-text">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
              </p>

              <p class="card-text">R$ 59,90</p>

            </div>
          </div>
        </div>
        <!-- /Produto -->

      </div>

    </div>

  </main>
  <!-- /.produtos -->

  <section class="container veja-mais">

    <div class="d-flex justify-content-center my-5">
      <div class="btn btn-lg btn-warning text-uppercase rounded-pill px-4">veja mais</div>
    </div>

  </section>
  <!-- /.veja-mais -->


<?php require __DIR__ . "/../templates/footer.php"; ?>