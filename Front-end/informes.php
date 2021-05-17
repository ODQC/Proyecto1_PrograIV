<?php
session_start();
if (!$_SESSION['verificar']) {
  header("Location: logIn.php");
}
echo $_SESSION['user'];
?>

<?php
$con = mysqli_connect("localhost", "root", "207460988", "RegistroCovid19");
if ($con) {
  echo "connected";
}
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

  <title> Informes </title>

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

<body class="sub_page">

  <div class="hero_area">

    <div class="hero_bg_box">
      <img src="images/hero-bg.png" alt="">
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

  <!-- doctor section -->

  <section class="doctor_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h3>
          Informes Estádisticos sobre los vacunados contra el COVID-19
        </h3>

      </div>
      <div class="row">
        <div class="col-sm-6 col-lg-4 mx-auto">
          <div class="box">

            <div class="detail-box">
              <div id="piechartRiesgo"></div>

              <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


              <script type='text/javascript'>
                // Load google charts
                google.charts.load('current', {
                  'packages': ['corechart']
                });
                google.charts.setOnLoadCallback(drawChart);
                var De_Riesgo = 5;
                var Sin_Riesgo = 6;
                // Draw the chart and set the chart values
                function drawChart() {
                  var data = google.visualization.arrayToDataTable([
                    ['Vacunados', 'Cantidad'],

                    ['Personas de Riesgo', De_Riesgo],
                    ['Personas sin Riesgo', Sin_Riesgo],

                  ]);

                  // Optional; add a title and set the width and height of the chart
                  var options = {
                    'title': 'Porcentage de vacunados por condición de riesgo debido otras patologías',
                    'width': 400,
                    'height': 400
                  };

                  // Display the chart inside the <div> element with id='piechart'
                  var chart = new google.visualization.PieChart(document.getElementById('piechartRiesgo'));
                  chart.draw(data, options);
                }
              </script>


            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 mx-auto">
          <div class="box">

            <div class="detail-box">
              <div id="piechartAge"></div>

              <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

              <script type='text/javascript'>
                // Load google charts
                google.charts.load('current', {
                  'packages': ['corechart']
                });
                google.charts.setOnLoadCallback(drawChart);
                var Mas65 = 5;
                var Menos65 = 6;
                // Draw the chart and set the chart values
                function drawChart() {
                  var data = google.visualization.arrayToDataTable([
                    ['Vacunados', 'Cantidad'],
                    ['Mayores de 65', Mas65],
                    ['Menores de 65', Menos65],

                  ]);

                  // Optional; add a title and set the width and height of the chart
                  var options = {
                    'title': 'Porcentage de vacunados Mayores de 65 años',
                    'width': 400,
                    'height': 400
                  };

                  // Display the chart inside the <div> element with id='piechart'
                  var chart = new google.visualization.PieChart(document.getElementById('piechartAge'));
                  chart.draw(data, options);
                }
              </script>


            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 mx-auto">
          <div class="box">

            <div class="detail-box">
              <div id="piechart"></div>

              <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

              <script type='text/javascript'>
                // Load google charts
                google.charts.load('current', {
                  'packages': ['corechart']
                });
                google.charts.setOnLoadCallback(drawChart);
                var Hombres = 5;
                var Mujeres = 6;
                // Draw the chart and set the chart values
                function drawChart() {
                  var data = google.visualization.arrayToDataTable([
                    ['Vacunados', 'Cantidad'],
                    ['Mujeres', Mujeres],
                    ['Hombres', Hombres],
                    <?php
                    $sql = "SELECT COUNT(*) FROM `RegistroCovid19` .` Usuarios`  WHERE `genero` = 'Masculino'";
                    $fire = mysqli_query($con, $sql);


                    ?>

                  ]);

                  // Optional; add a title and set the width and height of the chart
                  var options = {
                    'title': 'Porcentage de vacunados según el sexo',
                    'width': 400,
                    'height': 400
                  };

                  // Display the chart inside the <div> element with id='piechart'
                  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                  chart.draw(data, options);
                }
              </script>


            </div>
          </div>
        </div>
      </div>
      <div class="btn-box">
        <a href="">
          View All
        </a>
      </div>
    </div>
  </section>

  <!--  fin Graficas pastel-->
  <!-- Gaficas de barras -->
  <section class="doctor_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h3>
          <br>Porcentage de vacunados según el tipo de vacuna
        </h3>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

        <?php
        try {
          $servername = "localhost";
          $username = "root";
          $password = "207460988";
          $db_name = "RegistroCovid19";

          // Create connection
          $conn = new mysqli($servername, $username, $password, $db_name);
          $query = "SELECT COUNT(*) FROM `RegistroCovid19`.`Registro_Vacunados` WHERE marcaVacuna ='BioNTech-Pfizer'";
          $qresult = mysqli_query($this->conn, $query);
          $row = mysqli_fetch_assoc($qresult);
          $Pfizer = $row["COUNT(*)"];


          $query2 = "SELECT COUNT(*) FROM `RegistroCovid19`.`Registro_Vacunados` WHERE marcaVacuna ='Oxford_Astrazeneca'";
          $qresult2 = mysqli_query($this->conn, $query2);
          $row2 = mysqli_fetch_assoc($qresult2);
          $Astrazeneca = $row["COUNT(*)"];
        } catch (mysqli_sql_exception $e) {
          throw $e;
        } catch (Exception $e) {
          echo 'Message: ' . $e->getMessage();
        }
        echo '<script type="text/JavaScript"> 
              alert("");
            </script>';


        ?>
        <p id="demo"></p>

        <script type="text/javascript">
          try {


            google.charts.load("current", {
              packages: ["corechart"]
            });
            google.charts.setOnLoadCallback(drawChart);

            var BioNTech_Pfizer = <?php echo json_encode($Pfizer); ?>;
            var Oxford_Astrazeneca = <?php echo json_encode($Pfizer); ?>;
            alert(BioNTech_Pfizer,Oxford_Astrazeneca);


            function drawChart() {
              var data = google.visualization.arrayToDataTable([
                ["Element", "Density", {
                  role: "style"
                }],
                ["BioNTech-Pfizer", 1, "gold"],
                ["Oxford-Astrazeneca", 3, "silver"],

              ]);

              var view = new google.visualization.DataView(data);
              view.setColumns([0, 1,
                {
                  calc: "stringify",
                  sourceColumn: 1,
                  type: "string",
                  role: "annotation"
                },
                2
              ]);

              var options = {
                title: "Porcentaje de vacunados según el tipo de Vacuna",
                width: 700,
                height: 400,
                bar: {
                  groupWidth: "50%"
                },
                legend: {
                  position: "none"
                },
              };
              var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
              chart.draw(view, options);
            }

          } catch (err) {
            document.getElementById("demo").innerHTML = err.message;
          }
        </script>
        <div id="columnchart_values" style="width: 900px; height: 300px;"></div>


      </div>
    </div>
  </section>
  <!-- fin graficas de barras-->

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
  <script type="text/javascript" src="js/controladorRegistro.js"></script>
</body>

</html>