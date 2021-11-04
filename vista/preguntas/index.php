<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv='cache-control' content='no-cache'>
    <meta http-equiv='expires' content='0'>
    <meta http-equiv='pragma' content='no-cache'>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gastroquirurgica</title>

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">

    <!-- Icono Pestaña -->
    <link rel="shortcut icon" href="<?php echo constant('URL') ?>public/resource/img/pestania.png" />

    <!-- CSS -->
    <link href="<?php echo constant('URL') ?>public/css/style.css" rel="stylesheet">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>

<body style="background-color:   #f7f7f7 ;">
    <nav class="navbar" id="menu">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img src="<?php echo constant('URL') ?>public/resource/img/horizontal.png" alt="" width="200"
                    class="img-fluid">
            </a>
            <div id="redes">
                <a href="https://www.facebook.com/gastroquirurgicaIPS/" target="_blanck"><i
                        class="fab fa-facebook-square fa-2x"></i></a>
                <a href="https://www.instagram.com/gastroquirurgicasas/" target="_blanck"><i
                        class="fab fa-instagram-square fa-2x"></i></a>
                <a href="https://api.whatsapp.com/send?phone=3156785070" target="_blanck"><i
                        class="fab fa-whatsapp-square fa-2x"></i></a>
                <a href="https://g.page/r/CWWd_FM0mzhhEAE" target="_blanck"><i
                        class="fab fa-google-plus-square fa-2x"></i></a>
            </div>
        </div>
    </nav>
    <div class="container" id="contenido">
        <div id="deseo">
            <h2>¿Quieres perder peso?</h2>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-6">
                <div class="card mb-3">
                    <a onclick="eleccionSi()" style="cursor: pointer;">
                    <img src="<?php echo constant('URL') ?>public/resource/img/si.png" class="card-img-top" alt="...">
                    </a>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card mb-3">
                    <a href="portafolio.php">
                    <img src="<?php echo constant('URL') ?>public/resource/img/no.png" class="card-img-top" alt="...">
                    </a>
                </div>
            </div>
        </div>
        <div class="container" id="politicas">
            <form action="<?php echo constant('URL') ?>preguntaControl/sesion" method="post" id="usuario">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
                    <input type="email" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" placeholder="example@example.ex" id="email"
                        name="email">
                </div>
            </form>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="checkbox1">
                <label class="form-check-label" for="flexCheckDefault">
                    <p id="text">Al continuar aceptas los terminos de la <a style="font-weight: bold;" target="_blanck"
                            href="https://www.gastroquirurgica.com.co/politica-de-tratamiento-de-datos-personales/">POLÍTICA
                            DE PRIVACIDAD EN EL
                            TRATAMIENTO DE DATOS PERSONALES.</a> Me gustaria recibir actualizaciones sobre los servicios
                        de
                        la Clinica
                        Gastroquirurgica por correo electronico.</p>
                </label>
            </div>
        </div>
    </div>
    <div class="container" id="abajo"></div>
    <nav class="navbar navbar-light bg-light">
        <div class="container">
            <div style="margin: 0 auto;">
                Copyright © Clinica Gastroquirurgica 2021
            </div>
        </div>
    </nav>
    <script type="text/javascript" src="<?php echo constant('URL') ?>public/js/script.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>