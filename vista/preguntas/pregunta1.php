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

    <!-- JQuery -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">

    <!-- Icono Pestaña -->
    <link rel="shortcut icon" href="<?php echo constant('URL')?>public/resourse/img/pestania.png" />

    <!-- CSS -->
    <link href="<?php echo constant('URL')?>public/css/style.css" rel="stylesheet">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>
    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>

<body style="background-color:   #f7f7f7 ;">
    
        <nav class="navbar" id="menu">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <img src="<?php echo constant('URL')?>public/resourse/img/horizontal.png" alt="" width="200" class="img-fluid">
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
                    <div class="row" style="padding-bottom: 7px;">
                        <div>
                            <a id="regresar" href="<?php echo constant('URL')?>index.php"><i class="fas fa-chevron-left"></i> Paso anterior</a>
                        </div>
                    </div>
                    <div class="progress" style="height: 5px;">
                        <div class="progress-bar progress-bar-striped progress-bar-animated progreso1" role="progressbar"
                            style="width: 10%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div id="contenido-pregunta">
                        <h3>Pregunta</h3>
                        <br>
                        <div class="row">
                            <div class="col-sm-4" style="height: 323px;"><img id="doctor"
                                    src="<?php echo constant('URL')?>public/resourse/img/doctor.png" class="img-fluid"
                                    alt="..."></div>
                            <div class="col-sm-8">
                                <p style="text-align: justify;" id="text">Lorem ipsum dolor sit amet consectetur adipisicing
                                    elit.
                                    Architecto tempora
                                    voluptate ipsam reprehenderit. Perspiciatis animi velit enim repellendus alias aspernatur
                                    nostrum magnam debitis blanditiis, fugit dolorem sit, sequi recusandae iste! Lorem ipsum,
                                    dolor
                                    sit amet consectetur adipisicing elit. Repellat reiciendis debitis aliquam sunt fuga
                                    inventore
                                    laborum dolor optio porro nostrum quo, adipisci dignissimos perferendis soluta quam, autem
                                    illum. Nam, ipsum. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rerum
                                    blanditiis
                                    voluptates aperiam quod a ut repellendus nostrum, tenetur, enim alias sapiente, at non
                                    architecto. Perferendis veniam cum possimus vel quibusdam.</p>
                            </div>
                        </div>
                        <select id="genero" class="form-select" aria-label="Default select example">
                            <option selected>Genero</option>
                            <option value="1">Masculino</option>
                            <option value="2">Femenino</option>
                        </select>
                        <div style="padding-bottom: 17px;"></div>
                        <select id="departamentos" class="form-select" aria-label="Default select example">
                            <option selected>Departamento</option>
                            <?php for ($m = 0; $m < count($this->datos); $m++) : ?>
                                <option value="<?php echo rtrim($this->datos[$m]['id'],"")?>"><?php echo rtrim($this->datos[$m]['nombre'], "")?></option>
                            <?php endfor; ?>
                        </select>
                        <div class="input-group mb-3" style="padding-top: 17px;">
                            <input id="edad" type="number" class="form-control" placeholder="Edad" aria-label="Username"
                                aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <input id="estatura" type="number" class="form-control" placeholder="Estatura (m)"
                                aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <input id="peso" type="number" class="form-control" placeholder="Peso (kg)" aria-label="Username"
                                aria-describedby="basic-addon1">
                        </div>
                        <button onclick="return pregunta1()" type="button" class="btn btn-primary btn-lg" style="width: 100%;">
                            <div class="row">
                                <div class="col" style="text-align: left;">
                                    Continuar
                                </div>
                                <div class="col" style="text-align: right;">
                                    <i class="fas fa-hand-point-right"></i>
                                </div>
                            </div>
                        </button>
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
    <script type="text/javascript" src="<?php echo constant('URL')?>public/js/script.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script language="JavaScript">
        history.forward()
    </script>
</body>

</html>