<?php
require_once 'funciones.php';//cambiar por clase
require_once 'productos.php';//cambiar x db
//cambiar header y footer x vistas
?>
<html lang="en-US">
<!doctype html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Equipos &amp; Gruas MX</title>
    <link rel="stylesheet" id="cherry-google-fonts-css"
          href="https://fonts.googleapis.com/css?family=Open+Sans%3A300%2C600%7CRaleway%3A600%2C500%2C400%7CPoppins%3A400%2C300&amp;subset=latin&amp;ver=4.6.5">
    <link rel="stylesheet" id="font-awesome-css" href="assets/css/font-awesome.min89df.css?ver=4.6.0">
    <link rel="stylesheet" href="assets_new/css/boostrap.min.css">
    <link rel="stylesheet" href="assets_new/css/custom.css">
    <link rel="icon" href="assets/img/cropped-fav-32x32.png" sizes="32x32">
    <link rel="icon" href="assets/img/cropped-fav-192x192.png" sizes="192x192">
</head>

<body class="">
<div class="container-fluid">
    <div class="col-lg-12 offset-lg-0 col-xl-10 col-xl-10 offset-xl-1">
        <div class="row ">
            <div class="eyg-header">Equipos & Gruas MX</div>
        </div>
        <div class="row">
            <?php
            foreach ($productos as $producto) {
                echo cardTemplate($producto);
            }
            ?>
        </div>
    </div>
</div>

<?php require "footer.php"; ?>
<?php require "modales.php"; ?>
<?php require "scripts.php"; ?>
</body>
</html>