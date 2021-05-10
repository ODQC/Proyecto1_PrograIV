<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sign-Up</title>
    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Sign Up Form by Colorlib</title>

        <!-- Font Icon -->
        <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

        <!-- Main css -->
        <link rel="stylesheet" href="css/styleLogin.css">


    </head>

<body>

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form" action="signUp.php">
                        <h2 class="form-title">Registro de Usuarios</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="cedula" id="cedula" placeholder="Cédula de indentidad" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="name" id="name" placeholder="Nombre" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="apellido1" id="apellido1" placeholder="Primer apellido" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="apellido2" id="apellido2" placeholder="Segundo apellido" />
                        </div>
                        <div class="form-group">

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

                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Correo Electrónico" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="telefono" id="telefono" placeholder="Telefono" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="password" id="password" placeholder="Contraseña" />
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="password2" id="password2" placeholder="Confirmar contraseña" />
                        </div>
                        <div class="form-group">

                            <select class="form-control" id="tipoUsuario" name="tipoUsuario">
                                <option value="Paciente">Paciente</option>
                            </select>
                        </div>
                        <div class="form-group">

                            <select class="form-control" id="estadoUsuario" name="tipoUsuario">
                                <option value="">--Estado--</option>
                                <option value="Activo">Activo</option>
                                <option value="Inactivo">Inctivo</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Registrase" />
                        </div>
                    </form>
                    <p class="loginhere">
                        Ya tienes una cuenta? <a href="logIn.php" class="loginhere-link">Accesa aquí</a>
                        <br> Esta plantilla fue tomada de (https://colorlib.com)
                        <br>Rediseñada por Oscar Quesada.
                        <br>Con fines académicos.
                    </p>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
    <?php
    if ($_POST['password'] == $_POST['password2']) {
        if (isset($_POST['submit'])) {
            require_once "/CRUD_PHP/procesos/guardarUsuarios.php";
        }
    } else {
        echo '<script type="text/JavaScript"> 
     				alert("Las contraseñas no coinciden");
     			</script>';
    }
    ?>
</body><!-- La plantilla fue tomada de  Colorlib (https://colorlib.com) -->

</html>