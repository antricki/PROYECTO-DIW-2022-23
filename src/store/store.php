<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Store</title>
  <!-- fuentes -->
  <link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:wght@500;600;700&family=League+Spartan:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Display:ital,wght@0,600;1,700&family=Orbitron:wght@400;600;900&display=swap" rel="stylesheet">


  <!-- fin fuentes -->
  <script src="../../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
  <link rel="stylesheet" href="./code/css/storeMain.css">
</head>
<!--• Gris : #EBEBEB  un 60% de la página, el fondo y lo menos important.
    • Naranja: #F5A25D un 10% para aquello que llama a la acción.
    • Rojo: #FA7F72 solo para pequeños detalles o pequeños bloques de texto
    • Azul: #389393 para el footer 
    https://www.shutterstock.com/es/create/home para crear imagenes-->

<body>
  <header>
    <!-- Navbar -->
    <?php
    $d = __DIR__;
    include "../code/php/route.php";
    include "./code/php/navbar_store.php";
    ?>
    <!-- Navbar -->
    <div class="banner_linea_aparece banner_aparece" id="banner_aparece">
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner banner_carousel_aparece">
          <div class="carousel-item active">
            <h2 class="mb-3">OFERTA FLASH!!!</h2>
            <h4 class="mb-3">Por tiempo limitado en todas tus compras</h4>
            <h2 class="mb-3">-30%</h2>
          </div>
          <div class="carousel-item">
            <h2 class="mb-3">DESCUENTOS PERSONALIZADOS!!!</h2>
            <h4 class="mb-3">Registrate en nuestra web para conseguir descuentos</h4>
            <h2 class="mb-3">Registrate</h2>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- sección 1: PRODUCTO ESTRELLA -->
  <section class="oferta">
    <a href="product.php" class="container-fluid oferta__link">
      <div class="oferta_container_title">
        <h2 class="oferta__title">Nuestro Producto Estrella...</h2>
      </div>
      <div class="row row-cols-1 row-cols-md-1 row-cols-lg-4 justify-content-evenly">
        <div class="col d-flex justify-content-around">
          <div class="destacados_title__img">
            <figure class="figure img-fluid">
              <img src="products/ingeniero-informatico-ingeniero-informatico.webp" class="figure-img img-fluid rounded" alt="...">
              <figcaption class="figure-caption">
                <!-- código de la clasificación de estrellas -->
                <form class="destacados_estrellas">
                  <p class="clasificacion">
                    <input id="radio1" type="radio" name="estrellas" value="5" class="estrellas">
                    <label for="radio1" class="estrellas__label">★</label>
                    <input id="radio2" type="radio" name="estrellas" value="4" class="estrellas">
                    <label for="radio2" class="estrellas__label">★</label>
                    <input id="radio3" type="radio" name="estrellas" value="3" class="estrellas">
                    <label for="radio3" class="estrellas__label">★</label>
                    <input id="radio4" type="radio" name="estrellas" value="2" class="estrellas">
                    <label for="radio4" class="estrellas__label">★</label>
                    <input id="radio5" type="radio" name="estrellas" value="1" class="estrellas">
                    <label for="radio5" class="estrellas__label">★</label>
                  </p>
                </form>
              </figcaption>
            </figure>
          </div>
        </div>
        <div class="explicacion">
          <h2 class="explicacion_title">...será tu nueva SUDADERA favorita!!</h2>
          <p class="text_explicacion">Nuestra SUDADERA de informático. Ofrece la flexibilidad para dar libertad de movimiento. Con ella te sentirás como en casa, comfortable y calentita, mientras realizas tus trabajos ante el ordenador.
          </p>
        </div>
      </div>
    </a>
  </section>

  <!-- sección 2: LO QUE MÁS GUSTA -->
  <section class="gusta">
    <div class="container-fluid destacados-container_title">
      <h2 class="">Lo que más gusta a otros clientes</h2>
    </div>
    <div class="container-fluid destacados">
      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 rounded d-flex d-inline-flex">
        <div class="col">
          <a href="product.php" class="card card__link">
            <img src="products/camiseta.webp" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Sudadera con capucha unisex.</p>
              <form class="destacados_estrellas">
                <p class="clasificacion">
                  <input id="radio1" type="radio" name="estrellas" value="5" class="estrellas">
                  <label for="radio1" class="estrellas__label">★</label>
                  <input id="radio2" type="radio" name="estrellas" value="4" class="estrellas">
                  <label for="radio2" class="estrellas__label">★</label>
                  <input id="radio3" type="radio" name="estrellas" value="3" class="estrellas">
                  <label for="radio3" class="estrellas__label">★</label>
                  <input id="radio4" type="radio" name="estrellas" value="2" class="estrellas">
                  <label for="radio4" class="estrellas__label">★</label>
                  <input id="radio5" type="radio" name="estrellas" value="1" class="estrellas">
                  <label for="radio5" class="estrellas__label">★</label>
                </p>
              </form>
            </div>
            <!-- <div class="card-footer">
                <input class="card-footer_input" type="submit" value="Añadir" name="añadir">
              </div> -->
          </a>
        </div>
        <div class="col">
          <a href="product.php" class="card card__link">
            <img src="products/sudadera3.webp" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Sudadera con capucha unisex.</p>
              <form class="destacados_estrellas">
                <p class="clasificacion">
                  <input id="radio1" type="radio" name="estrellas" value="5" class="estrellas">
                  <label for="radio1" class="estrellas__label">★</label>
                  <input id="radio2" type="radio" name="estrellas" value="4" class="estrellas">
                  <label for="radio2" class="estrellas__label">★</label>
                  <input id="radio3" type="radio" name="estrellas" value="3" class="estrellas">
                  <label for="radio3" class="estrellas__label">★</label>
                  <input id="radio4" type="radio" name="estrellas" value="2" class="estrellas">
                  <label for="radio4" class="estrellas__label">★</label>
                  <input id="radio5" type="radio" name="estrellas" value="1" class="estrellas">
                  <label for="radio5" class="estrellas__label">★</label>
                </p>
              </form>
            </div>
            <!-- <div class="card-footer">
                <input class="card-footer_input" type="submit" value="Añadir" name="añadir">
              </div> -->
          </a>
        </div>
        <div class="col">
          <a href="product.php" class="card card__link">
            <img src="products/sudadesra.webp" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Sudadera con capucha unisex.</p>
              <form class="destacados_estrellas">
                <p class="clasificacion">
                  <input id="radio1" type="radio" name="estrellas" value="5" class="estrellas">
                  <label for="radio1" class="estrellas__label">★</label>
                  <input id="radio2" type="radio" name="estrellas" value="4" class="estrellas">
                  <label for="radio2" class="estrellas__label">★</label>
                  <input id="radio3" type="radio" name="estrellas" value="3" class="estrellas">
                  <label for="radio3" class="estrellas__label">★</label>
                  <input id="radio4" type="radio" name="estrellas" value="2" class="estrellas">
                  <label for="radio4" class="estrellas__label">★</label>
                  <input id="radio5" type="radio" name="estrellas" value="1" class="estrellas">
                  <label for="radio5" class="estrellas__label">★</label>
                </p>
              </form>
            </div>
            <!-- <div class="card-footer">
                <input class="card-footer_input" type="submit" value="Añadir" name="añadir">
              </div> -->
          </a>
        </div>
        <div class="col">
          <a href="product.php" class="card card__link">
            <img src="products/camiseta2.webp" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Sudadera con capucha unisex.</p>
              <form class="destacados_estrellas">
                <p class="clasificacion">
                  <input id="radio1" type="radio" name="estrellas" value="5" class="estrellas">
                  <label for="radio1" class="estrellas__label">★</label>
                  <input id="radio2" type="radio" name="estrellas" value="4" class="estrellas">
                  <label for="radio2" class="estrellas__label">★</label>
                  <input id="radio3" type="radio" name="estrellas" value="3" class="estrellas">
                  <label for="radio3" class="estrellas__label">★</label>
                  <input id="radio4" type="radio" name="estrellas" value="2" class="estrellas">
                  <label for="radio4" class="estrellas__label">★</label>
                  <input id="radio5" type="radio" name="estrellas" value="1" class="estrellas">
                  <label for="radio5" class="estrellas__label">★</label>
                </p>
              </form>
            </div>
            <!-- <div class="card-footer">
                <input class="card-footer_input" type="submit" value="Añadir" name="añadir">
              </div> -->
          </a>
        </div>
      </div>
  </section>

  <!-- sección 3: OTROS PRODUCTOS -->
  <section class="otros_productos container-fluid ">
    <div class="otros__container_title">
      <h2 class="">Otros productos</h2>
    </div>
    <div class="container-fluid otros_productos__container">
      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-6 justify-content-center">
        <div class="col">
          <a href="product.php">
            <figure class="figure">
              <img src="products/botella.jpg" class="figure-img img-fluid rounded  otros_productos__figure" alt="...">
              <figcaption class="figure-caption text-end">Botella</figcaption>
            </figure>
          </a>
        </div>
        <div class="col">
          <a href="product.php">
            <figure class="figure">
              <img src="products/puff.jpg" class="figure-img img-fluid rounded  otros_productos__figure" alt="...">
              <figcaption class="figure-caption text-end">Puff para móvil</figcaption>
            </figure>
          </a>
        </div>
        <div class="col">
          <a href="product.php">
            <figure class="figure">
              <img src="products/taza2.jpg" class="figure-img img-fluid rounded  otros_productos__figure" alt="...">
              <figcaption class="figure-caption text-end">Taza</figcaption>
            </figure>
          </a>
        </div>
      </div>
      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-6 justify-content-center">
        <div class="col">
          <a href="product.php">
            <figure class="figure">
              <img src="products/alfombrilla.jpg" class="figure-img img-fluid rounded  otros_productos__figure" alt="...">
              <figcaption class="figure-caption text-end">Alfombrilla para ratón</figcaption>
            </figure>
          </a>
        </div>
        <div class="col">
          <a href="product.php">
            <figure class="figure">
              <img src="products/cargador.jpg" class="figure-img img-fluid rounded  otros_productos__figure" alt="...">
              <figcaption class="figure-caption text-end">Cargador</figcaption>
            </figure>
          </a>
        </div>
        <div class="col">
          <a href="product.php">
            <figure class="figure">
              <img src="products/pen2.jpg" class="figure-img img-fluid rounded  otros_productos__figure" alt="...">
              <figcaption class="figure-caption text-end">Pen 32GB</figcaption>
            </figure>
          </a>
        </div>
      </div>
      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-6 justify-content-center">
        <div class="col">
          <a href="product.php">
            <figure class="figure">
              <img src="products/fundaPortatil.jpg" class="figure-img img-fluid rounded  otros_productos__figure" alt="...">
              <figcaption class="figure-caption text-end">Funda para pórtatil</figcaption>
            </figure>
          </a>
        </div>
        <div class="col">
          <a href="product.php">
            <figure class="figure">
              <img src="products/manta.jpg" class="figure-img img-fluid rounded  otros_productos__figure" alt="...">
              <figcaption class="figure-caption text-end">Manta</figcaption>
            </figure>
          </a>
        </div>
        <div class="col">
          <a href="product.php">
            <figure class="figure">
              <img src="products/powerbank.jpg" class="figure-img img-fluid rounded  otros_productos__figure" alt="...">
              <figcaption class="figure-caption text-end">PowerBank</figcaption>
            </figure>
          </a>
        </div>
      </div>
    </div>
  </section>
  <hr class="raya" />
  <!-- Footer -->
  <div class="container-fluid">
    <div class="row pre-footer d-flex justify-content-evenly">
      <div class="col-lg-3 col-md-8">
        <div class="pre_footer__card">
          <img src="products/camion-de-reparto.png" class="card-img-top pre-footer_img" alt="...">
          <div class="card-body pre-footer__body">
            <h5 class="card-title pre-footer__title">Envío gratis con 2 o más artículos</h5>
            <p class="card-text">Da igual lo que compres, con solo 2 artículos en tu pedido, envío gratis :)</p>
            <a href="politicas.php" class="pre_footer__card-link">Leer más</a>
          </div>
        </div>

      </div>
      <div class="col-lg-3 col-md-8">
        <div class="pre_footer__card">
          <img src="products/reloj-de-pared.png" class="card-img-top pre-footer_img" alt="...">
          <div class="card-body pre-footer__body">
            <h5 class="card-title pre-footer__title">Tu pedido en tu casa en 24h</h5>
            <p class="card-text">Envío express con entrega al día siguiente si compras de lunes a jueves antes de las 17:00 (solo península)</p>
            <a href="politicas.php" class="pre_footer__card-link">Leer más</a>
          </div>
        </div>

      </div>
      <div class="col-lg-3 col-md-8">
        <div class="pre_footer__card">
          <img src="products/regreso.png" class="card-img-top pre-footer_img" alt="...">
          <div class="card-body pre-footer__body">
            <h5 class="card-title pre-footer__title">Devoluciones</h5>
            <p class="card-text">60 días para efectuar cambios o devoluciones. ¡Sin preguntas!</p>
            <a href="politicas.php" class="pre_footer__card-link">Leer más</a>
          </div>
        </div>
      </div>
    </div>

  </div>
  <?php
  include "../code/php/footer.php";
  ?>
  <script src="./code/js/store1.js"></script>
</body>

</html>