<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Producto</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:wght@500;600;700&family=League+Spartan:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.css">
  <script src="../../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
  <link rel="stylesheet" href="code/css/navbar_store.css">
  <script defer src="code/js/product.js"></script>
  <link rel="stylesheet" href="code/css/styles_produc.css">
</head>

<body>
  <!--Nav-->
  <?php
  
  include "code/php/navbar_store.php";

  ?>


  <div class="container">
    <div class="row">
      <!--Imagen-->
      <div class="col-lg-4 col-md-6" id="imagen">
        <img src="assets/products/camiseta2.webp" id="proPrincipal">
      </div>
      <!--Info-->
      <div class="col-lg-6 col-md-6" id="info">
        <h2 id="nombre">Camiseta de programacion</h2>
        <hr>
        <p class="precio"><span id="precioProducto">15,95€</span> </p>
        <h4>Tamaño:</h4>
        <div class="row">
          <div class="col-4">
            <select class="form-contol" id="tallas" aria-label=" select example">
              <option value="xl">XL</option>
              <option value="L">L</option>
              <option value="M">M</option>
              <option value="S">S</option>
              <option value="XS">XS</option>
            </select>
          </div>
          <div class="col-8"></div>
        </div>
        <p>
        <h4>Color:</h4>
        <div class="btn-group" id="color" role="group" aria-label="Basic example">
          <button type="button" onclick="añadircolor(this)" class="btn azul">Azul</button>
          <button type="button" onclick="añadircolor(this)" class="btn verde">Verde</button>
          <button type="button" onclick="añadircolor(this)" class="btn negro">Negro</button>
          <button type="button" onclick="añadircolor(this)" class="btn rojo">Rojo</button>
          <button type="button" onclick="añadircolor(this)" class="btn naranja">Naranja</button>
        </div>
        </p>
        <h4>Detalles del producto</h4>
        <div class="row">
          <div class="col">
            <h5>Composición del material</h5>
          </div>
          <div class="col">52% Algodón, 48% Poliéster</div>
          <div class="w-100"></div>
          <div class="col">
            <h5>Instrucciones</h5>
          </div>
          <div class="col">Lavar a máquina</div>
        </div>
      </div>
      <!--Aside-->
      <div class="aside col-lg-2 col-md-12">
        <p class="precio">15,95€</p>
        <p>Entrega GRATIS el lunes, 26 de septiembre en pedidos superiores a 29€.
        <h5 class="enStock">En Stock</h5>
        </p>
        <form class="destacados_estrellas">
          <p class="clasificacion">
            <input id="radio1" type="radio" name="estrellas" value="5">
            <label class="estrellaColor" for="radio1">★</label>
            <input id="radio2" type="radio" name="estrellas" value="4">
            <label class="estrellaColor" for="radio2">★</label>
            <input id="radio3" type="radio" name="estrellas" value="3">
            <label class="estrellaColor" for="radio3">★</label>
            <input id="radio4" type="radio" name="estrellas" value="2">
            <label class="estrellaColor" for="radio4">★</label>
            <input id="radio5" type="radio" name="estrellas" value="1">
            <label class="estrellaColor" for="radio5">★</label>
          </p>
        </form>
        <h5>Cantidad:</h5>
        <div class="col-4">
          <select class="form-contol" id="cantidades" aria-label=" select example">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select>
        </div>
        <dialog id="modal">
        <div class="row">
          <div class="col-10">
          <h2 id="tituloVentana"></h2>
            <h3 id="tituloVentana2"></h3>
          </div>
          <div class="col-2"><button id="cerrar-modal">&times;</button></div>
        </div>
        <p id="contenido">
        </p>
      </dialog>
        <!--Con este boton se envia la informacion al carrito  -->
        <input class="btn" name="añadir" onclick="pasarInfoProduct()" id="botoncarrito" type="submit" value="Añadir al carrito">
        <div class="form-check">
          <input class="form-check-input" id="ticketregalo" type="checkbox" value="" id="flexCheckDefault">
          <label class="form-check-label" id="textoTicketRegalo" for="flexCheckDefault">
            Añade un ticket de regalo para facilitar las devoluciones
          </label>
        </div>
      </div>

    </div>
  </div>

  <!--Relacionados-->
  <section class="container-fluid">
    <div class="row" id="relacionados">
      <h2>Productos relacionados con este producto</h2>
      <?php
      $relacionados = array(
        "producto1" => array("nombre" => "Sudadera Informatico", "precio" => "25,95", "imagen" => "assets/products/sudadera3.webp"),
        "producto2" => array("nombre" => "Camiseta Ingeniero", "precio" => "13,95", "imagen" => "assets/products/camiseta.webp"),
        "producto3" => array("nombre" => "Sudadera Programacion", "precio" => "23,95", "imagen" => "assets/products/sudadesra.webp"),
        "producto4" => array("nombre" => "Sudadera Ingeniero", "precio" => "21,95", "imagen" => "assets/products/ingeniero-informatico-ingeniero-informatico.webp")
      );
      foreach ($relacionados as $producto => $elemento) {
      ?>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12" id="producRel">
          <a href="product.php" class="card card__link">
            <div class="card" style="width: 18rem;">
              <img src="<?= $elemento['imagen'] ?>" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"><?= $elemento['nombre'] ?></h5>
                <p class="precio"><?= $elemento['precio'] ?>€</p>
                <form>
                  <p class="clasificacion">
                    <input id="radio1" type="radio" name="estrellas" value="5">
                    <label class="estrellaColor" for="radio1">★</label>
                    <input id="radio2" type="radio" name="estrellas" value="4">
                    <label class="estrellaColor" for="radio2">★</label>
                    <input id="radio3" type="radio" name="estrellas" value="3">
                    <label class="estrellaColor" for="radio3">★</label>
                    <input id="radio4" type="radio" name="estrellas" value="2">
                    <label class="estrellaColor" for="radio4">★</label>
                    <input id="radio5" type="radio" name="estrellas" value="1">
                    <label class="estrellaColor" for="radio5">★</label>
                  </p>
                </form>
              </div>
            </div>

          </a>
        </div>
      <?php } ?>
    </div>
  </section>
  <!--PreFooter-->
  <div class="row pre-footer container-fluid">
    <div class="col">
      <div class="pre_footer__card">
        <img src="products/camion-de-reparto.png" class="card-img-top pre-footer_img" alt="...">
        <div class="card-body pre-footer__body">
          <h5 class="card-title pre-footer__title">Envío gratis con 2 o más artículos</h5>
          <p class="card-text">Da igual lo que compres, con solo 2 artículos en tu pedido, envío gratis :)</p>
          <a href="politicas.php" class="pre_footer__card-link">Leer más</a>
        </div>
      </div>

    </div>
    <div class="col">
      <div class="pre_footer__card">
        <img src="products/reloj-de-pared.png" class="card-img-top pre-footer_img" alt="...">
        <div class="card-body pre-footer__body">
          <h5 class="card-title pre-footer__title">Tu pedido en tu casa en 24h</h5>
          <p class="card-text">Envío express con entrega al día siguiente si compras de lunes a jueves antes de las 17:00 (solo península)</p>
          <a href="politicas.php" class="pre_footer__card-link">Leer más</a>
        </div>
      </div>

    </div>
    <div class="col">
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
  <!--Footer-->
  <?php
  $d = __DIR__;
  include "../code/php/route.php";
  include "../code/php/footer.php";
  ?>

</body>

</html>