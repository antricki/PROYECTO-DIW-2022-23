<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:wght@500;600;700&family=League+Spartan:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.css">
  <script src="../../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
   <link rel="stylesheet" href="../code/css/navbar.css">
  <link rel="stylesheet" href="styles2.css">
</head>

<body>
  <!--Nav
  <nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
  </nav>-->
<?php
include "../code/php/navbar.php"
?>


<div class="container">
  <div class="row">
    <!--Imagen-->
    <div class="col-lg-4 col-md-6 col-" id="imagen">
      <img src="products/camiseta2.webp" id="proPrincipal">
    </div>
    <!--Info-->
    <div class="col-lg-6 col-md-6" id="info">
      <h2>Camiseta de programacion</h2>
      <hr>
      <p class="precio">15,95€</p>
      <h4>Tamaño:</h4>
      <div class="row">
        <div class="col-4">
          <select class="form-contol" id="tallas" aria-label=" select example">
            <option class="talla" value="xl">XL</option>
            <option class="talla" value="L">L</option>
            <option class="talla" value="M">M</option>
            <option class="talla" value="S">S</option>
            <option class="talla" value="XS">XS</option>
          </select>
        </div>
        <div class="col-8"></div>
      </div>
      <p>
      <h4>Color:</h4>
      <div class="btn-group" role="group" aria-label="Basic example">
        <button type="button" class="btn azul">Azul</button>
        <button type="button" class="btn verde">Verde</button>
        <button type="button" class="btn negro">Negro</button>
        <button type="button" class="btn rojo">Rojo</button>
        <button type="button" class="btn naranja">Naranja</button>
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
          <label for="radio1">★</label>
          <input id="radio2" type="radio" name="estrellas" value="4">
          <label for="radio2">★</label>
          <input id="radio3" type="radio" name="estrellas" value="3">
          <label for="radio3">★</label>
          <input id="radio4" type="radio" name="estrellas" value="2">
          <label for="radio4">★</label>
          <input id="radio5" type="radio" name="estrellas" value="1">
          <label for="radio5">★</label>
        </p>
      </form>
      <h5>Cantidad:</h5>
      <div class="col-4">
        <select class="form-contol" id="cantidades" aria-label=" select example">
          <option class="talla" value="xl">1</option>
          <option class="talla" value="L">2</option>
          <option class="talla" value="M">3</option>
          <option class="talla" value="S">4</option>
          <option class="talla" value="XS">5</option>
        </select>
      </div>
      <br>
      <input class="btn " id="botoncarrito" type="submit" value="Añadir al carrito">
      <br>
      <div class="form-check">
        <input class="form-check-input" id="ticketregalo" type="checkbox" value="" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
          Añade un ticket de regalo para facilitar las devoluciones
        </label>
      </div>
    </div>
  </div>
  </div>

  <!--Relacionados-->
  <div class="row" id="relacionados">
    <h2>Productos relacionados con este producto</h2>
    <div class="col-lg-3 col-md-6 col-sm-12" id="producRel">
      <div class="card" style="width: 18rem;">
        <img src="products/sudadera3.webp" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Sudadera Informatico</h5>
          estrellas
          <p class="precio">25,95€</p>
        </div>
      </div>

    </div>
    <div class="col-lg-3 col-md-6 col-sm-12" id="producRel">

      <div class="card" style="width: 18rem;">
        <img src="products/camiseta.webp" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Camiseta Ingeniero</h5>
          estrellas
          <p class="precio">13,95€</p>
        </div>
      </div>

    </div>
    <div class="col-lg-3 col-md-6 col-sm-12" id="producRel">

      <div class="card" style="width: 18rem;">
        <img src="products/sudadesra.webp" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Sudadera Programacion</h5>
          estrellas
          <p class="precio">23,95€</p>
        </div>
      </div>

    </div>
    <div class="col-lg-3 col-md-6 col-sm-12" id="producRel">

      <div class="card" style="width: 18rem;">
        <img src="products/ingeniero-informatico-ingeniero-informatico.webp" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Sudadera Ingeniero</h5>
          estrellas
          <p class="precio">21,95€</p>

        </div>
      </div>

    </div>
  </div>

  <footer class="bg-dark text-center text-white">
    <div class="container p-4">
      <section class="mb-4">
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt distinctio earum
          repellat quaerat voluptatibus placeat nam, commodi optio pariatur est quia magnam
          eum harum corrupti dicta, aliquam sequi voluptate quas.
        </p>
    </div>
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2020 Copyright:
      <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
  </footer>

</body>

</html>