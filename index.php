<?php
$pg = "inicio";
?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <link  rel="icon"   href="images/favicon.ico" type="image/ico" /> 
    <title>Inicio</title>
</head>

<body id="inicio">
    <?php include_once("header.php"); ?>
    <main class="container">
        <div class="row">
            <div class="col-12 py-5 text-center">
                <img / src="images/cohete.svg" alt="" class="cohete">
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <p class="titulo"> <b>Bienvenido/a a mi sitio web en sistemas</b></p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 py-5 text-center btn-inicio">
                <a href="proyectos.html" class="btn active shadow" role="button" aria-pressed="true">Conoce mis
                    proyectos</a>
            </div>
        </div>
    </main>
    <?php include_once("footer.php"); ?>
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>