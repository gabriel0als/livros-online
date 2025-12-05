<?php require __DIR__ . "/templates/header.php"; ?>

<main class="produto">

    <div class=container>

        <nav class="mt-4" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="produtos.php">Produtos</a></li>
                <li class="breadcrumb-item active" aria-current="page">Camiseta Manga Comprida</li>
            </ol>
        </nav>

        <!-- Imagem e informação -->
        <div class="row">
            <div class="col-md-7">
                <img src="assets/images/produtos/details/foto-carrinho-camiseta-manga-comprida.jpg" alt="">
            </div>

            <div class="col-md-5">
                <h1 class="">Camiseta Manga Comprida</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A, asperiores eligendi. Ut consequatur suscipit aut laboriosam enim tenetur velit architecto corporis, officiis, similique, facilis dolorem unde maxime earum cum voluptates.</p>

                <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                </div>

                <h5 class="preco mt-3">R$79,90</h5>
                <span>Em até 12x sem juros</span>

                <div class="comprar mt-2">
                    <form action="">

                        <select class="form-select" aria-label="Default select example">
                            <option value="1">1x</option>
                            <option value="2">3x</option>
                            <option value="3">6x</option>
                            <option value="4">12x</option>
                        </select>

                        <btn type="submit" class="btn btn-success mt-4 w-100">Comprar</btn>



                    </form>
                </div>
            </div>
        </div>

        <!-- /.imagem e informação -->

        <div class="row">
            <div class="col">
                <div class="fb-comments"
                    data-href="https://www.seusite.com/pagina"
                    data-width="100%"
                    data-numposts="5">
                </div>
            </div>
        </div>

    </div>

</main>


<script async defer crossorigin="anonymous" 
        src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v19.0">
</script>



<?php require __DIR__ . "/templates/footer.php"; ?>