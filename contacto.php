<?php
$pg = "contacto";
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
    <title>Contacto</title>
</head>

<body id="contacto">
    <?php include_once("header.php"); ?>

    <main class="container">
        <div class="row">
            <div class="col-12 mt-3 mb-5">
                <h1>Contacto</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <p>
                    <i>
                        Te invito a que te contactes enviándome un mensaje por Telegram
                    </i>
                <p>
            </div>
            <div class="col-sm-6">
                <form action="" method="POST">
                    <div class="mb-3">
                        <input type="text" id="txtNombre" placeholder="Nombre" class="form-control shadow border border-light">
                    </div>
                    <div class="mb-3">
                        <input type="email" id="txtCorreo" placeholder="Correo" class="form-control shadow border border-light">
                    </div>
                    <div class="mb-3">
                        <input type="tel" name="txtTelefono" placeholder="Teléfono/Whatsapp" class="form-control shadow">
                    </div>
                    <div class="mb-3">
                        <textarea name="txtMensaje" id="txtMensaje" placeholder="Escribe aquí tu mensaje" class="form-control shadow border border-light"></textarea>
                    </div>
                    <div class="botonera">
                        <button name="btnEnviar" id="btnEnviar" class="btn shadow">ENVIAR</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-12 py-5 my-5">
                <?php include_once("footer.php"); ?>
            </div>
        </div>
    </main>

    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>