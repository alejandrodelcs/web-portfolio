<?php
$pg = "sobre-mi";
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
    <title>Sobre Mi</title>
</head>

<body id="sobre-mi">
    <?php include_once("header.php"); ?>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-6">
                    <h1 class="mt-4 pb-4">Sobre mí</h1>
                    <div class="col-sm-8">
                        <p>Apasionado por la tecnología y gestión de proyectos. Soy docente de cursos de programación
                            Full Stack y de Base de datos.</p>
                    </div>
                    <div class="col-sm-3 py-3">
                        <a href="/contacto.html" class="btn btn-rojo shadow">Enviar mensaje</i></a>
                    </div>
                </div>
                <div class="col-sm-3 col-6 p-0 mt-5 circulo">
                    <img / src="images/foto-perfil.png" alt="" title="Alejandro Del Carpio Sánchez" class="img-perfil">
                </div>
            </div>
        </div>


        <section class="color-gradiente pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 mt-4">
                        <h2 class="mt-4 p-0">Stack Tecnológico</h2>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-sm-2 col-6 mt-3">
                        <div class="card py-5 text-center">
                            <h3>Javascript</h3>
                            <img / src="images/logo-js.svg" alt="" class="img-fluid logo-stack">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 mt-3">
                        <div class="card py-5 text-center">
                            <h3>PHP</h3>
                            <img / src="images/logo-php.svg" alt="" class="img-fluid logo-stack">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 mt-3">
                        <div class="card py-5 text-center">
                            <h3>HTML5</h3>
                            <img / src="images/logo-html5.svg" alt="" class="img-fluid logo-stack">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 mt-3">
                        <div class="card py-5 text-center">
                            <h3>React.js</h3>
                            <img / src="images/logo-react.svg" alt="" class="img-fluid logo-stack">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 mt-3">
                        <div class="card py-5 text-center">
                            <h3>JQuery</h3>
                            <img / src="images/logo-jquery.svg" alt="" class="img-fluid logo-stack">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 mt-3">
                        <div class="card py-5 text-center">
                            <h3>Bootstrap</h3>
                            <img / src="images/logo-bootstrap.svg" alt="" class="img-fluid logo-stack">
                        </div>
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-sm-2 col-6 mt-3">
                        <div class="card py-5 text-center">
                            <h3>Laravel</h3>
                            <img / src="images/logo-laravel.svg" alt="" class="img-fluid logo-stack">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 mt-3">
                        <div class="card py-5 text-center">
                            <h3>MySQL</h3>
                            <img / src="images/logo-mariadb.svg" alt="" class="img-fluid logo-stack">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 mt-3">
                        <div class="card py-5 text-center">
                            <h3>CSS</h3>
                            <img / src="images/logo-css.svg" alt="" class="img-fluid logo-stack">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 mt-3">
                        <div class="card py-5 text-center">
                            <h3>Git</h3>
                            <img / src="images/logo-git.svg" alt="" class="img-fluid logo-stack">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 mt-3">
                        <div class="card py-5 text-center">
                            <h3>Apache</h3>
                            <img / src="images/logo-apache.svg" alt="" class="img-fluid logo-stack">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 mt-3">
                        <div class="card py-5 text-center">
                            <h3>Python</h3>
                            <img / src="images/logo-py.svg" alt="" class="img-fluid logo-stack">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="experiencias">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 pt-5 pb-4">
                        <h2>
                            <i class="fas fa-briefcase"></i>
                            Experiencias Laborales
                        </h2>
                    </div>
                </div>
                <div class="row shadow p-3 mb-5 bg-white rounded">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-sm-2">
                                <img / src="images/logo-bilog.svg" alt="" title="Bilog Soluciones Informáticas" class="img-fluid py-5">
                            </div>
                            <div class="col-sm-7">
                                <h3>Soporte Técnico</h3>
                                <h4>Bilog Soluciones Informáticas</h4>
                                <h5>2016 - al presente</h5>
                                <p> Brindar servicio técnico a nivel de computadoras de los usuarios de las empresas
                                    clientes así
                                    como de ciertas tareas de redes y servidores.
                                    La atención puede ser remota mediante asistencia telefónica, usando herramientas
                                    de conexión remota al PC del usuario.
                                    Contacto con los clientes quien deberá resolverles los
                                    problemas para lo cual fue designado y relevar e informar de aquellos que no pueda
                                    resolver.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section id="formacion">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 pt-5 pb-4">
                        <h2>
                            <i class="fas fa-user-graduate"></i>
                            Formación Académica
                        </h2>
                    </div>
                </div>
                <div class="row shadow p-3 mb-5 bg-white rounded">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-sm-2">
                                <img / src="images/fiuba_logo.svg" alt="" title="FIUBA" class="img-fluid py-5">
                            </div>
                            <div class="col-sm-7">
                                <h3>Ingeniería en Informática</h3>
                                <h3>Licenciatura en Análisis de Sistemas</h3>
                                <h4>Universidad de Buenos Aires</h4>
                                <h5>2016-Al presente</h5>
                                <h5>simultaneidad en ambas carreras</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="idiomas">
            <div class="container">
                <div class="row py-5">
                    <div class="col-sm-6 col-12">
                        <div class="row">
                            <div class="col-4 py-3 card text-center">
                                <img / src="images/language-icon.svg" alt="" class="img-fluid">
                            </div>
                            <div class="col-8 p-5 shadow bg-white rounded">
                                <h2>IDIOMAS</h2>
                                <h3>ESPAÑOL-Nativo<br>
                                    INGLÉS-Intermedio
                                </h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-12">
                        <div class="row">
                            <div class="col-4 py-3 card text-cent">
                                <img / src="images/logo-hobbies.svg" alt="" class="img-fluid logo-hobbies">
                            </div>
                            <div class="col-8 p-5 shadow bg-white rounded col-hobbies">
                                <h2>Hobbies</h2>
                                <h3>Dibujo y Pintura<br>
                                    Leer<br>
                                    Escuchar música
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php include_once("footer.php"); ?>
    </main>
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>