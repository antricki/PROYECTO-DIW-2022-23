<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:wght@500;600;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="../code/css/gallery.css">
    <link rel="stylesheet" href="../code/css/styles.css">
    <title>Galería</title>


</head>

<body>
    <?php
  $d = __DIR__;
  include "../code/php/route.php";
  include "../code/php/navbar.php";
  ?>

    <section class="gallery">


        <section class="carrusel carrusel--first">
            <div class="carrusel__items">
                <h2 class="title h2">Aulas</h2>
                <div class="arrows">
                    <div class="arrow arrow--left dotRight" id="dotRight"><img src="../assets/icons/caret-left.svg"
                            alt="caret left"></div>
                    <div class="arrow arrow--right dotLeft" id="dotLeft"><img src="../assets/icons/caret-right.svg"
                            alt="caret right"></div>
                </div>
                <div class="carrusel__big">
                    <img src="./../assets/images/carrusel-aula-1.jpg" class="img">
                    <img src="./../assets/images/carrusel-aula-2.jpg" class="img">
                    <img src="./../assets/images/carrusel-aula-3.jpg" class="img img--normal">
                    <img src="./../assets/images/carrusel-aula-4.jpg" class="img img--big">
                    <img src="./../assets/images/carrusel-aula-5.jpg" class="img img--normal">
                    <img src="./../assets/images/carrusel-aula-6.jpg" class="img">
                    <img src="./../assets/images/carrusel-aula-7.jpg" class="img">
                </div>
            </div>
            <div class="line"></div>
        </section>




        <section class="carrusel">
            <div class="carrusel__items">
                <h2 class="title h2">Promociones</h2>
                <div class="arrows">
                    <div class="arrow arrow--left dotRight" id="dotRight"><img src="../assets/icons/caret-left.svg"
                            alt="caret left"></div>
                    <div class="arrow arrow--right dotLeft" id="dotLeft"><img src="../assets/icons/caret-right.svg"
                            alt="caret right"></div>
                </div>
                <div class="carrusel__big">
                    <img src="./../assets/images/carrusel-prom-1.jpg" class="img">
                    <img src="./../assets/images/carrusel-prom-2.jpg" class="img img--normal">
                    <img src="./../assets/images/carrusel-prom-3.jpg" class="img img--big">
                    <img src="./../assets/images/carrusel-prom-4.jpg" class="img img--normal">
                    <img src="./../assets/images/carrusel-prom-5.jpg" class="img">
                </div>
            </div>
            <div class="line"></div>
        </section>

        <section class="carrusel">

            <div class="carrusel__items">
                <h2 class="title h2">Instalaciones</h2>
                <div class="arrows">
                    <div class="arrow arrow--left dotRight" id="dotRight"><img src="../assets/icons/caret-left.svg"
                            alt="caret left"></div>
                    <div class="arrow arrow--right dotLeft" id="dotLeft"><img src="../assets/icons/caret-right.svg"
                            alt="caret right"></div>
                </div>
                <div class="carrusel__big">
                    <img src="./../assets/images/carrusel-inst-1.jpg" class="img">
                    <img src="./../assets/images/carrusel-inst-2.jpg" class="img">
                    <img src="./../assets/images/carrusel-inst-3.jpg" class="img img--normal">
                    <img src="./../assets/images/carrusel-inst-4.jpg" class="img img--big">
                    <img src="./../assets/images/carrusel-inst-5.jpg" class="img img--normal">
                    <img src="./../assets/images/carrusel-inst-6.jpg" class="img">
                    <img src="./../assets/images/carrusel-inst-7.jpg" class="img">
                </div>
            </div>
            <div class="line"></div>
        </section>

        <section class="carrusel">

            <div class="carrusel__items">
                <h2 class="title h2">Exteriores</h2>
                <div class="arrows">
                    <div class="arrow arrow--left dotRight" id="dotRight"><img src="../assets/icons/caret-left.svg"
                            alt="caret left"></div>
                    <div class="arrow arrow--right dotLeft" id="dotLeft"><img src="../assets/icons/caret-right.svg"
                            alt="caret right"></div>
                </div>
                <div class="carrusel__big">
                    <img src="./../assets/images/carrusel-ext-1.jpg" class="img">
                    <img src="./../assets/images/carrusel-ext-2.jpg" class="img">
                    <img src="./../assets/images/carrusel-ext-3.jpg" class="img img--normal">
                    <img src="./../assets/images/carrusel-ext-4.jpg" class="img img--big">
                    <img src="./../assets/images/carrusel-ext-5.jpg" class="img img--normal">
                    <img src="./../assets/images/carrusel-ext-6.jpg" class="img">
                    <img src="./../assets/images/carrusel-ext-7.jpg" class="img">
                </div>
            </div>
        </section>



    </section>

    <?php
  $d = __DIR__;
  include "../code/php/footer.php";
  ?>




    <script src="gallery.js"></script>

    <script src="../../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>




</body>

</html>