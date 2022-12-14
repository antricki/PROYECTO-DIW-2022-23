<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:wght@500;600;700&display=swap" rel="stylesheet"> 

    <link
      rel="stylesheet"
      href="../../node_modules/bootstrap/dist/css/bootstrap.css"
    />

    <link rel="stylesheet" href="../code/css/courses.css" />
    <link rel="stylesheet" href="../code/css/styles.css">
  </head>
  <body>
  <?php
    $d = __DIR__;
    include "../code/php/route.php";
    include "../code/php/navbar.php";
  ?>
    
    <!-- Contenedor con todos los cursos -->
    <section class="courses p-5">
      <div class="container courses__container">
        <!-- Estable tamaño del grid, a partir de 992px, 2 ítems por columna, si no 1 ítem -->
        <div class="row">
          <div class="courses__box col-md-12 col-lg-5">
            <h2 class="h2 courses__title">SMR</h2>
            <article class="article">
              <h3 class="h3 article__title">Sistemas Microinformáticos y Redes</h3>
              <h4 class="h4 article__subtitle">Grado Medio</h4>
              <p class="p courses__text">
                Este ciclo te permite un primer contacto “serio” con el mundo de
                la informática. La ventaja es que es abarca buena parte de las
                principales áreas que cubre la informática.
              </p>
              <div class="courses__buttons">
                <button
                  type="button"
                  class="courses__btn button"
                  data-bs-toggle="modal"
                  data-bs-target="#smrEstudiar"
                >
                  ¿Qué estudiaras?
                </button>
                <button
                  type="button"
                  class="courses__btn button"
                  data-bs-toggle="modal"
                  data-bs-target="#smrTrabajar"
                >
                  ¿De qué trabajaras?
                </button>
              </div>
            </article>
            <img
              src="../assets/images/courses_SMR.jpg"
              alt="imagen smr"
              class="courses__img"
            />
          </div>

          <div class="courses__box col-md-12 col-lg-5">
            <h2 class="h2 courses__title">ASIR</h2>
            <article class="article">
              <h3 class="h3 article__title">
                Administración de Sistemas Informáticos en Red
              </h3>
              <h4 class="h4 article__subtitle">Grado Superior</h4>
              <p class="p courses__text">
                En este ciclo te permitirá trabajar en empresas de distintos sectores informáticos desempeñando funciones tales como instalación, mantenimiento, explotación y soporte del usuario informático.
              </p>
              <div class="courses__buttons">
                <button
                  type="button"
                  class="courses__btn button"
                  data-bs-toggle="modal"
                  data-bs-target="#asirEstudiar"
                >
                  ¿Qué estudiaras?
                </button>
                <button
                  type="button"
                  class="courses__btn button"
                  data-bs-toggle="modal"
                  data-bs-target="#asirTrabajar"
                >
                  ¿De qué trabajaras?
                </button>
              </div>
            </article>
            <img
              src="../assets/images/courses_ASIR.jpg"
              alt="imagen smr"
              class="courses__img"
            />
          </div>
        </div>
        <!-- Segunda fila de items -->
        <div class="row">
          <div class="courses__box col-md-12 col-lg-5">
            <h2 class="h2 courses__title">DAW</h2>
            <article class="article">
              <h3 class="h3 article__title">Desarrollo de Aplicaciones Web</h3>
              <h4 class="h4 article__subtitle">Grado Superior</h4>
              <p class="p courses__text">
                Este ciclo está orientado al desarrollo, programación e
                implementación de actividades informáticas en todo tipo de de
                entornos web.
              </p>
              <div class="courses__buttons">
                <button
                  type="button"
                  class="courses__btn button"
                  data-bs-toggle="modal"
                  data-bs-target="#dawEstudiar"
                >
                  ¿Qué estudiaras?
                </button>
                <button
                  type="button"
                  class="courses__btn button"
                  data-bs-toggle="modal"
                  data-bs-target="#dawTrabajar"
                >
                  ¿De qué trabajaras?
                </button>
              </div>
            </article>
            <img
              src="../assets/images/courses_DAW.jpg"
              alt="imagen smr"
              class="courses__img"
            />
          </div>
          <div class="courses__box col-md-12 col-lg-5">
            <h2 class="h2 courses__title">DAM</h2>
            <article class="article">
              <h3 class="h3 article__title">
                Desarrollo de Aplicaciones Multiplataforma
              </h3>
              <h4 class="h4 article__subtitle">Grado Superior</h4>
              <p class="p courses__text">
                Aprenderás a programar y diseñar aplicaciones para distintos sistemas. Se trata de un ciclo formativo con una gran demanda en la actualidad y con muchas posibilidades de futuro.
              </p>
              <div class="courses__buttons">
                <button
                  type="button"
                  class="courses__btn button"
                  data-bs-toggle="modal"
                  data-bs-target="#damEstudiar"
                >
                  ¿Qué estudiaras?
                </button>
                <button
                  type="button"
                  class="courses__btn button"
                  data-bs-toggle="modal"
                  data-bs-target="#damTrabajar"
                >
                  ¿De qué trabajaras?
                </button>
              </div>
            </article>
            <img
              src="../assets/images/courses_DAM.png"
              alt="imagen smr"
              class="courses__img"
            />
          </div>
        </div>
      </div>
    </section>

    <!-- Modal SMR-->
    <div
      class="modal fade"
      id="smrEstudiar"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content modal__window">
          <div class="modal-header">
            <h4 class="h4 modal-title" id="exampleModalLabel">
              En SMR estudiarás, entre otras cosas
            </h4>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <ul class="modal__list">
              <li class="modal__item">
                <span class="text--bold"
                  >Montaje y mantenimiento de equipos.</span
                >
                Cuáles son los principales componentes de un ordenador y cómo
                montarlos, saber identificar los principales fallos, etc.
              </li>
              <li class="modal__item">
                <span class="text--bold">Redes locales.</span> Montar una red
                local de ordenadores, realizando el cableado de red y
                configurando el protocolo TCP/IP, resolver incidencias de una
                red de área local, etc.
              </li>
              <li class="modal__item">
                <span class="text--bold">Sistemas operativos.</span> Conocer
                cuáles son los principales sistemas operativos que existen en el
                mercado, y cuál utilizar en cada caso, configurarlos, etc..
              </li>
              <li class="modal__item">
                <span class="text--bold">Aplicaciones web.</span> Conocer qué
                son los gestores de contenido (blogs, foros, …), webmail,
                calendario web, etc.
              </li>
            </ul>
          </div>
          <div class="modal-footer">
            <button type="button" class="courses__btn button" data-bs-dismiss="modal">
              Cerrar
            </button>
          </div>
        </div>
      </div>
    </div>

    <div
      class="modal fade"
      id="smrTrabajar"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content modal__window">
          <div class="modal-header">
            <h4 class="h4 modal-title" id="exampleModalLabel">
              Una vez termines tu formación profesional en SMR, estarás
              preparado para trabajar como:
            </h4>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <ul class="modal__list">
              <li class="modal__item">Instalador de sistemas informáticos</li>
              <li class="modal__item">Técnico en soporte de equipos informáticos.</li>
              <li class="modal__item">Técnico en redes de datos.</li>
              <li class="modal__item">Reparador de periféricos de sistemas microinformáticos y redes.</li>
              <li class="modal__item">Comercial de productos del sector..</li>
              <li class="modal__item">Técnico operador de asistencia a distancia.</li>
              <li class="modal__item">Técnico de sistemas.</li>
            </ul>
          </div>
          <div class="modal-footer">
            <button type="button" class="courses__btn button" data-bs-dismiss="modal">
              Cerrar
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal ASIR -->

    <div
      class="modal fade"
      id="asirEstudiar"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content modal__window">
          <div class="modal-header">
            <h4 class=" h4 modal-title" id="exampleModalLabel">
              En ASIR estudiarás, entre otras cosas
            </h4>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <ul class="modal__list">
              <li class="modal__item">
                <span class="text--bold">Fundamentos de hardware.</span> Conocer
                los principales componentes de un ordenador, configurar y
                verificar equipos, creación de imágenes de respaldo, etc.
              </li>
              <li class="modal__item">
                <span class="text--bold"
                  >Planificación y administración de redes.</span
                >
                Identificar los diferentes tipos de redes (PAN, LAN, WAN, …),
                configurar el direccionamiento IP de una red, configurar y
                administrar conmutadores, etc.
              </li>
              <li class="modal__item">
                <span class="text--bold"
                  >Administración de sistemas operativos.</span
                >
                Administrar procesos del sistema, automatizar tareas, instalar,
                configurar y utilizar servicios de acceso y administración
                remota, etc.
              </li>
              <li class="modal__item">
                <span class="text--bold">Mucho más </span> como gestión de bases
                de datos, implantación de sistemas operativos, etc.
              </li>
            </ul>
          </div>
          <div class="modal-footer">
            <button type="button" class="courses__btn button" data-bs-dismiss="modal">
              Cerrar
            </button>
          </div>
        </div>
      </div>
    </div>

    <div
      class="modal fade"
      id="asirTrabajar"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content modal__window">
          <div class="modal-header">
            <h4 class="h4 modal-title" id="exampleModalLabel">
              Una vez termines tu formación profesional en ASIR, estarás
              preparado para trabajar como:
            </h4>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <ul class="modal__list">
              <li class="modal__item">Técnico en adiminstración de sistemas</li>
              <li class="modal__item">Responsable de informática</li>
              <li class="modal__item">Técnico de servicios de internet</li>
              <li class="modal__item">Técnico en servicios de mensajeria electróncia</li>
              <li class="modal__item">Técnico en administración de bases de datos</li>
              <li class="modal__item">Técnico de redes</li>
              <li class="modal__item">Supervisor de sistemas</li>
            </ul>
          </div>
          <div class="modal-footer">
            <button type="button" class="courses__btn button" data-bs-dismiss="modal">
              Cerrar
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal DAW -->

    <div
      class="modal fade"
      id="dawEstudiar"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content modal__window">
          <div class="modal-header">
            <h4 class="h4 modal-title" id="exampleModalLabel">
              En DAW estudiarás, entre otras cosas:
            </h4>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <ul class="modal__list">
              <li class="modal__item">
                <span class="text--bold">Programación. </span>Identificar los
                elementos de un programa informático, conocer las estructuras de
                control, desarrollar clases, lectura y escritura de información,
                etc.
              </li>
              <li class="modal__item">
                <span class="text--bold"
                  >Desarrollo web en entorno cliente.</span
                >
                Interacción con el usuario (eventos y formularios), utilización
                del modelo de objetos del documento (DOM), etc.
              </li>
              <li class="modal__item">
                <span class="text--bold">Diseño de interfaces web.</span>
                Planificar interfaces gráficas (tipografías, colores, etc.), uso
                de estilo, usar herramientas software para la creación de
                interfaces gráficas, etc.
              </li>
              <li class="modal__item">
                <span class="text--bold">Mucho más</span> como bases de datos,
                desarrollo web en entorno servidor, despliegue de aplicaciones
                web...
              </li>
            </ul>
          </div>
          <div class="modal-footer">
            <button type="button" class="courses__btn button" data-bs-dismiss="modal">
              Cerrar
            </button>
          </div>
        </div>
      </div>
    </div>

    <div
      class="modal fade"
      id="dawTrabajar"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content modal__window">
          <div class="modal-header">
            <h4 class="h4 modal-title" id="exampleModalLabel">
              Una vez termines tu formación profesional en DAW, estarás
              preparado para trabajar como:
            </h4>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <ul class="modal__list">
              <li class="modal__item">Programador y deseñador web</li>
              <li class="modal__item">Gestor del acceso a bases de datos para entornos web.</li>
              <li class="modal__item">Programador web freelance.</li>
              <li class="modal__item">Programador full-stack.</li>
            </ul>
          </div>
          <div class="modal-footer">
            <button type="button" class="courses__btn button" data-bs-dismiss="modal">
              Cerrar
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal DAM -->
    <div
      class="modal fade"
      id="damEstudiar"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content modal__window">
          <div class="modal-header">
            <h4 class="h4 modal-title" id="exampleModalLabel">
              En DAM estudiarás, entre otras cosas:
            </h4>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <ul class="modal__list">
              <li class="modal__item">
                <span class="text--bold">Programación. </span>Identificar los
                elementos de un programa informático, conocer las estructuras de
                control, desarrollar clases, lectura y escritura de información,
                etc.
              </li>
              <li class="modal__item">
                <span class="text--bold">Desarrollo de interfaces.</span>
                Desarrollar interfaces de usuario, generación interfaces a
                partir de documentos XML, crear componentes visuales,
                confeccionar informes, etc.
              </li>
              <li class="modal__item">
                <span class="text--bold"
                  >Programación multimedia y dispositivos móviles.</span
                >
                Programar aplicaciones para dispositivos móviles, utilizar
                librerías multimedia integradas, desarrollar juegos en 2D y 3D,
                etc.
              </li>
              <li class="modal__item">
                <span class="text--bold">Mucho más</span> como bases de datos,
                desarrollo web en entorno servidor, despliegue de aplicaciones
                web, etc.
              </li>
            </ul>
          </div>
          <div class="modal-footer">
            <button type="button" class="courses__btn button" data-bs-dismiss="modal">
              Cerrar
            </button>
          </div>
        </div>
      </div>
    </div>

    <div
      class="modal fade"
      id="damTrabajar"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content modal__window">
          <div class="modal-header">
            <h4 class="h4 modal-title" id="exampleModalLabel">
              Una vez termines tu formación profesional en DAM, estarás
              preparado para trabajar como:
            </h4>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <ul class="modal__list">
              <li class="modal__item">Desarrolador de apliaciones informáticas para la gestión
                empresarial y de negocio</li>
              <li class="modal__item">Desarrollador de aplicaciones de carácter general</li>
              <li class="modal__item">Técnico en redes de datos.</li>
              <li class="modal__item">Reparador de periféricos de sistemas microinformáticos y redes.</li>
              <li class="modal__item">Comercial de productos del sector..</li>
              <li class="modal__item">Técnico operador de asistencia a distancia.</li>
              <li class="modal__item">Técnico de sistemas.</li>
            </ul>
          </div>
          <div class="modal-footer">
            <button type="button" class="courses__btn button" data-bs-dismiss="modal">
              Cerrar
            </button>
          </div>
        </div>
      </div>
    </div>
    <?php
    $d = __DIR__;
    include "../code/php/footer.php";
  ?>

    <script src="../../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
  </body>
</html>
