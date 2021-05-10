<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign-In</title>

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
                    <form action="logIn.php" method="POST" id="signup-form" class="signup-form">
                        <h2 class="form-title">Acceder al Sistema</h2>
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Correo Electrónico" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="password" id="password" placeholder="Contraseña" />
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>

                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Ingresar" />
                        </div>
                    </form>
                    <p class="loginhere">
                        Aún no tienes una cuenta? <a href="signUp.php" class="loginhere-link">Crear una</a>
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
        if (isset($_POST['email']) && isset($_POST['password'])) {
            require_once "CRUD_PHP/php/connect.php";
            require_once "CRUD_PHP/procesos/login.php";
        }
    ?>
    

</body><!-- La plantilla fue tomada de  Colorlib (https://colorlib.com) -->

</html>