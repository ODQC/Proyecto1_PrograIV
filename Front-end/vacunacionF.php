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

  <title> Registrar vacunados </title>

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
  <link href="css/combo.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>

<body class="sub_page">

  <div class="hero_area">
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
              <li class="nav-item">
                <a class="nav-link" href="index.php">Inicio </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="registros.php">Registros</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="vacunacionF.php">Vacunación</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="informes.php">Informes</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="usuariosF.php">Usuarios<span class="sr-only">(current)</span> </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../Back-end/logout.php">Salir</a>
              </li>

            </ul>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>

  <!-- Formulario de vacunación section -->
  <section class="contact_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Formulario de Vacunación
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form_container contact-form">
            <form method="$_POST" action="../Back-end/procesos/guardarRegistros.php">
              <div>
                <label for="sel1">Ingrese el número de cédula del paciente:</label>
                <input type="text" placeholder="Número de cédula" />
              </div>
              <div class="form-group">
                <label for="sel1">Seleccione el tipo de Vacuna:</label>
                <select class="form-control" id="sel1">
                  <option value="">--Seleccionar--</option>
                  <option value="Una dosis">Una dosis</option>
                  <option value="Dos dosis">Dos dosis</option>
                </select>
              </div>
              <div class="form-group">
                <label for="sel1">Indique la marca de la vacuna:</label>
                <select class="form-control" id="sel1">
                  <option value="">--Seleccionar--</option>
                  <option value="BioNTech-Pfizer">BioNTech-Pfizer</option>
                  <option value="Oxford-AstraZeneca">Oxford-AstraZeneca</option>
                </select>
              </div>
              <div class="form-group">
                <label for="sel1">Indique el tipo de Paciente</label>
                <select class="form-control" id="sel1">
                  <option>--Seleccionar--</option>
                  <option value="Sin Riesgo">Sin riesgo</option>
                  <option value="De riesgo">De riesgo</option>
                  <option value="Adulto mayor">Adulto Mayor</option>
                </select>
              </div>

             
              <div class="btn_box">
                <button type="submit" name="submit" id="submit" value="Guardar">
                  Guardar
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6 ">
          <div class="img-box">
            <img src="images/Vacunacion2.jpeg" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end formulario vacunación section -->

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
              <a href="mailto:oscar.quesda.calderon@est.una.cr">

                <span>
                  oscar.quesda.calderon@est.una.cr
                </span>
              </a>
              <a href="mailto:oscaardanielqc@outlook.es">

                <span>
                  oscaardanielqc@outlook.es
                </span>
              </a>
              <a href="https://github.com/ODQC" target="_blank">

                <span>
                  https://github.com/ODQC
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
              <a class="active" href="index.php">
                Inicio <br>
              </a>
              <a class="" href="pacientes.php">
                Registro
              </a>
              <a class="" href="vacunacion.php">
                Vacunación
              </a>
              <a class="" href="informes.php">
                Informes
              </a>
              <a class="" href="logIn.php">
                Usuarios
              </a>
              <a class="" href="./CRUD_PHP/procesos/logout.php">
                Salir
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
  <!-- jquery JS -->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

  <!-- Bootstrap js -->
  <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <!-- Propeller textfield js -->
  <script type="text/javascript" src="dist/js/propeller.min.js"></script>

  <!-- Datepicker moment with locales -->
  <script type="text/javascript" language="javascript" src="datetimepicker/js/moment-with-locales.js"></script>

  <!-- Propeller Bootstrap datetimepicker -->
  <script type="text/javascript" language="javascript" src="datetimepicker/js/bootstrap-datetimepicker.js"></script>

  <script>
    $("[data-header-left='true']").parent().addClass("pmd-navbar-left");

    // Datepicker left header
    $('#datepicker-left-header').datetimepicker({
      'format': "YYYY-MM-DD HH:mm:ss", // HH:mm:ss
    });
  </script>
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