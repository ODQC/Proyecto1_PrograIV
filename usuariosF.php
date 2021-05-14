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

  <title> Registrar Usuarios </title>

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
                <a class="nav-link" href="./CRUD_PHP/procesos/logout.php">Salir</a>
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
          Formulario para registro de Usuarios
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form_container contact-form">
            <form method="$_POST" action="usuariosF.php">
              <div>
                <label for="sel1">Ingrese el número de cédula:</label>
                <input type="text" placeholder="Número de cédula" id="idUsuario" name="idUsuario" />
              </div>
              <div>
                <label for="sel1">Ingrese el nombre :</label>
                <input type="text" placeholder="Nombre" id="nombre" name="nombre" />
              </div>
              <div>
                <label for="sel1">Ingrese el primer apellido :</label>
                <input type="text" placeholder="Apellido 1" id="apellido1" name="apellido1" />
              </div>
              <div>
                <label for="sel1">Ingrese el segundo apellido:</label>
                <input type="text" placeholder="Apellido 2" id="apellido2" name="apellido2" />
              </div>
              <div class="form-group">
                <label for="sel1">Indique el genero:</label>
                <select class="form-control" id="genero" name="genero">
                  <option value="">--Genero--</option>
                  <option value="Masculino">Masculino</option>
                  <option value="Femenino">Femenino/option>
                  <option value="No indicado">No quiero indicar</option>
                </select>
              </div>
              <div class="form-group">

                <select class="form-control" id="edad" name="edad">
                  <option value="">--Edad--</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                  <option value="13">13</option>
                  <option value="14">14</option>
                  <option value="15">15</option>
                  <option value="16">16</option>
                  <option value="17">17</option>
                  <option value="18">18</option>
                  <option value="19">19</option>
                  <option value="20">20</option>
                  <option value="21">21</option>
                  <option value="22">22</option>
                  <option value="23">23</option>
                  <option value="24">24</option>
                  <option value="25">25</option>
                  <option value="26">26</option>
                  <option value="27">27</option>
                  <option value="28">28</option>
                  <option value="29">29</option>
                  <option value="30">30</option>
                  <option value="31">31</option>
                  <option value="32">32</option>
                  <option value="33">33</option>
                  <option value="34">34</option>
                  <option value="35">35</option>
                  <option value="36">36</option>
                  <option value="37">37</option>
                  <option value="38">38</option>
                  <option value="39">39</option>
                  <option value="40">40</option>
                  <option value="41">41</option>
                  <option value="42">42</option>
                  <option value="43">43</option>
                  <option value="44">44</option>
                  <option value="45">45</option>
                  <option value="46">46</option>
                  <option value="47">47</option>
                  <option value="48">48</option>
                  <option value="49">49</option>
                  <option value="50">50</option>
                  <option value="51">51</option>
                  <option value="52">52</option>
                  <option value="53">53</option>
                  <option value="54">54</option>
                  <option value="55">55</option>
                  <option value="56">56</option>
                  <option value="57">57</option>
                  <option value="58">58</option>
                  <option value="59">59</option>
                  <option value="60">60</option>
                  <option value="61">61</option>
                  <option value="62">62</option>
                  <option value="63">63</option>
                  <option value="64">64</option>
                  <option value="65">65</option>
                  <option value="66">66</option>
                  <option value="67">67</option>
                  <option value="68">68</option>
                  <option value="69">69</option>
                  <option value="70">70</option>
                  <option value="71">71</option>
                  <option value="72">72</option>
                  <option value="73">73</option>
                  <option value="74">74</option>
                  <option value="75">75</option>
                  <option value="76">76</option>
                  <option value="77">77</option>
                  <option value="78">78</option>
                  <option value="79">79</option>
                  <option value="80">80</option>
                  <option value="81">81</option>
                  <option value="82">82</option>
                  <option value="83">83</option>
                  <option value="84">84</option>
                  <option value="85">85</option>
                  <option value="86">86</option>
                  <option value="87">87</option>
                  <option value="88">88</option>
                  <option value="89">89</option>
                  <option value="90">90</option>
                  <option value="91">91</option>
                  <option value="92">92</option>
                  <option value="93">93</option>
                  <option value="94">94</option>
                  <option value="95">95</option>
                  <option value="96">96</option>
                  <option value="97">97</option>
                  <option value="98">98</option>
                  <option value="99">99</option>
                  <option value="100">100</option>
                </select>
              </div>
              <div>
                <label for="sel1">Ingrese su correo elctrónico :</label>
                <input type="email" placeholder="Correo electrónico" name="email" id="email" />
              </div>
              <div>
                <label for="sel1">Ingrese el número de teléfono :</label>
                <input type="text" placeholder="Teléfono" name="telefono" id="telefono" />
              </div>
              <div>
                <label for="sel1">Ingrese la contraseña :</label>
                <input type="password" placeholder="Contraseña" id="password" name="password" />
              </div>
              <div>
                <label for="sel1">Ingrese la contraseña de nuevo:</label>
                <input type="password" placeholder="Contraseña" id="password2" name="password2" />
              </div>
              <div class="form-group">
                <label for="sel1">Indique el tipo de usuario:</label>
                <select class="form-control" id="tipoUsuario" name="tipoUsuario">
                  <option>--Tipo--</option>
                  <option>Doctor</option>
                  <option>Personal</option>
                  <option>Paciente</option>
                </select>
              </div>
              <div class="btn_box">
                <button onclick="Proyecto1_PrograIV/CRUD_PHP/procesos/guardarUsuarios.php" type="submit" name="registrarse" id="registrarse" value="Registrarse">
                  Guardar
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6 ">
          <div class="img-box">
            <img src="images/Usuarios.jpeg" alt="">
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