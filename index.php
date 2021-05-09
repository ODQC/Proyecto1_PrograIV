<?php
session_start();
if (!$_SESSION['verificar']) {
  header("Location: logIn.php");
}
echo $_SESSION['user'];
?>
<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="">

  <title>Sistema de Vacunación</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />


</head>

<body>

  <div class="hero_area">

    <div class="hero_bg_box">
      <img src="images/covid19-vaccination-Cover.jpg" alt="">
    </div>

    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <span>
              Sistema de
              Vacunación <br>contra el Covid-19
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="index.html">Inicio <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="registros.html">Registros</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="vacunacionF.html">Vacunación</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="informes.html">Informes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="signUp.html">Usuarios</a>
              </li>

            </ul>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section ">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-7">
                  <div class="detail-box">
                    <h1>
                      Historial de Vacunación
                    </h1>
                    <p>
                      Consulte su historial de vacunación, Información gneral acerca de la vacuna.
                    </p>
                    <div class="btn-box">
                      <a href="informes.html" class="btn1">
                        Más información
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container ">
              <div class="row">
                <div class="col-md-7">
                  <div class="detail-box">
                    <h1>
                      Estádisticas del procese de Vacunación
                    </h1>
                    <p>
                      Puede vericficar información estádistica acerca de las personas vacunadas.
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn1">
                        Más información
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-7">
                  <div class="detail-box">
                    <h1>
                      Reguistro de Pacientes
                    </h1>
                    <p>
                      Ingrese al sistema información personal del paciente y registros de Vacunas.
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn1">
                        Más información
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <ol class="carousel-indicators">
          <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
          <li data-target="#customCarousel1" data-slide-to="1"></li>
          <li data-target="#customCarousel1" data-slide-to="2"></li>
        </ol>
      </div>

    </section>
    <!-- end slider section -->
  </div>


  <!-- department section -->

  <section class="department_section layout_padding">
    <div class="department_container">
      <div class="container ">
        <div class="heading_container heading_center">
          <h2>
            Encuentre información de
          </h2>
          <p>
            Este sitio esta diseñado para que los doctores y profecionales en
            salud puedad registrar y acceder las personas que son vacunadas con las diferentes vacunas contra el
            covid-19
          </p>
        </div>
        <div class="row">
          <div class="col-md-3">
            <div class="box ">
              <div class="img-box">
                <img src="images/s1.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Personas de riesgo
                </h5>
                <p>
                  Es importante llevar registro exacto de todas las personas de riesgo que han sido vacunadas.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="box ">
              <div class="img-box">
                <img src="images/s2.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Informes de Vacunación
                </h5>
                <p>
                  Consulte información de estadística de los diferentes grupos poblacionales que han sido vacunados.
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="box ">
              <div class="img-box">
                <img src="images/s4.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Tipos de Vacunas
                </h5>
                <p>
                  El país cuenta con dos tipos de vacunas contra el covid-19 la de BioNTech-Pfizer y la de Oxford
                  AstraZeneca.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="box ">
              <div class="img-box">
                <img src="images/s2.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Historial de actividad
                </h5>
                <p>
                  Consulte el historial de actividad de los Usuarios.
                </p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- end department section -->

  <!-- about section -->

  <section class="about_section layout_margin-bottom">
    <div class="container  ">
      <div class="row">
        <div class="col-md-6 ">
          <div class="img-box">
            <img src="images/Vacunacion.gif" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                Campaña de Vacunación
              </h2>
            </div>
            <p>
              San José, 6 de abril de 2021 (OPS/OMS)- Costa Rica recibirá este miércoles 7 de abril 43.200 dosis de
              vacunas COVID-19 a
              través del Mecanismo COVAX, un esfuerzo global solidario entre la Coalición para la Promoción de
              Innovaciones en pro de
              la Preparación ante las Epidemias (CEPI), la Alianza Mundial para las Vacunas e Inmunización (Gavi), el
              Fondo de las
              Naciones Unidas para la Infancia (UNICEF), la Organización Panamericana de la Salud (OPS) y la
              Organización Mundial de
              la Salud (OMS).
            </p>
            <p>
              La llegada marca un paso histórico hacia el objetivo de garantizar el acceso y la distribución equitativa
              de las vacunas
              COVID-19 a nivel mundial, en lo que es la mayor operación de adquisición y suministro de vacunas de la
              historia. Esta
              entrega es la primera de un total de 218 mil 400 dosis que recibirá Costa Rica en la primera ronda de
              envíos.
            </p>
            <p>Extraido de: https://www.unicef.org/costarica/comunicados-prensa/CostaRica-recibe-vacunas-COVID-COVAX
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->



  <!-- end client section -->

  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3 footer_col">
          <div class="footer_contact">
            <h4>
              Contactos:
            </h4>
            <div class="contact_link_box">
              <a href="">

                <span>
                  oscar.quesda.calderon@est.una.cr
                </span>
              </a>
              <a href="https://github.com/ODQC" target="_blank">

                <span>
                  https://github.com/ODQC
                </span>
              </a>
              <a href="">

                <span>
                  oscaardanielqc@outlook.es
                </span>
              </a>
            </div>
          </div>

        </div>
        <div class="col-md-6 col-lg-3 footer_col">
          <div class="footer_detail">
            <h4>
              Acerca del proyecto
            </h4>
            <p>
              Proyecto de programación IV
              <br>Ingeniería en Sistemas UNA.
              <br>Desarrollado por Oscar Quesada.
              <br>Proyecto basado en Orthoc template


            </p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 mx-auto footer_col">
          <div class="footer_link_box">
            <h4>
              Links
            </h4>
            <div class="footer_links">
              <a class="active" href="index.html">
                Inicio <br>
              </a>
              <a class="" href="pacientes.html">
                Ingreso Pacientes
              </a>
              <a class="" href="vacunacion.html">
                Registro de Vacunación
              </a>
              <a class="" href="informes.html">
                Informes de vacunación
              </a>
              <a class="" href="signUp.html">
                Registro Usuarios
              </a>
              <a class="" href="actividad.html">
                Actividad de Usuarios
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 footer_col ">
          <h4>
            Repositorio en Github
          </h4>
          <div class="contact_link_box">
            <a href="https://github.com/ODQC/Proyecto1_PrograIV.git" target="_blank">
              <span>
                Repositorio en Github
              </span>
            </a>
            <div class="img-box">
              <img src="images/GitHub-Logo.png" alt="">


            </div>

          </div>
        </div>
      </div>
      <div class="footer-info">
        <p>
          Rediseñada con fines académicos.<br>
          &copy; <span id="displayYear"></span> All Rights Reserved By
          <a href="https://html.design/" target="_blank">Free Html Templates</a>

        </p>
      </div>
    </div>
  </footer>
  <!-- footer section -->

  <!-- jQery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- custom js -->
  <script type="text/javascript" src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->

</body>

</html>