﻿<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv='cache-control' content='no-cache'>
    <meta http-equiv='expires' content='0'>
    <meta http-equiv='pragma' content='no-cache'>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gastroquirurgica</title>

    <!-- JQuery -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

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
    <div id="asincrono">
        <div class="container">
            <div class="container" id="preguntas">
                <div id="contenido-pregunta">
                    <div id="encabezado">
                        <h3>
                            Describe un dia comun para ti
                        </h3>
                    </div>
                    <br>
                    <div style="text-align: center;">
                        <img id="doctor" src="<?php echo constant('URL') ?>public/resource/img/inicio.png" class="img-fluid" alt="...">
                    </div>
                    <br>
                    <form action="<?php echo constant('URL') ?>preguntaControl/registrarDatos" method="post"
                        id="datosUsuario">
                        <select id="genero" class="form-select" aria-label="Default select example" name="genero">
                            <option selected>Genero</option>
                            <option value="Masculino">Masculino</option>
                            <option value="Femenino">Femenino</option>
                        </select>
                        <div class="input-group mb-3" style="padding-top: 17px;">
                            <input id="edad" type="number" class="form-control" placeholder="Edad" aria-label="Username"
                                aria-describedby="basic-addon1" name="edad">
                        </div>
                        <div class="input-group mb-3">
                            <input id="estatura" type="number" class="form-control" placeholder="Estatura (m)"
                                aria-label="Username" aria-describedby="basic-addon1" name="estatura">
                        </div>
                        <div class="input-group mb-3">
                            <input id="peso" type="number" class="form-control" placeholder="Peso (kg)"
                                aria-label="Username" aria-describedby="basic-addon1" name="peso">
                        </div>
                        <button onclick="return pregunta1()" type="button" class="btn btn-primary btn-lg"
                            style="width: 100%;">
                            <div class="row">
                                <div class="col" style="text-align: left;">
                                    Continuar
                                </div>
                                <div class="col" style="text-align: right;">
                                    <i class="fas fa-hand-point-right"></i>
                                </div>
                            </div>
                        </button>
                    </form>
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-light bg-light">
        <div class="container">
            <div style="margin: 0 auto;">
                Copyright © Clinica Gastroquirurgica 2021
            </div>
        </div>
    </nav>
    <script type="text/javascript" src="<?php echo constant('URL') ?>public/js/script.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript">
    window.onbeforeunload = function() {
        return "¿Estás seguro que deseas salir de la página actual?"
    }
    </script>
</body>

</html>