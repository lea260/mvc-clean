<?php
define('BASE_URL', 'http://localhost:8080/');
define('BASE_URL_CTRL', 'http://localhost:8080/controller/');
define('BASE_URL_CTRL_API', 'http://localhost:8080/api/'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    hola desde src index.
    <?php
    $nombre = "hola";
    $apellido = "hola";
    ?>
    <ul>
        <li><a href="index.php">inicio</a></li>
        <li><a href="<?= BASE_URL_CTRL ?>auto/listar_controller.php">Listar Autos</a></li>
        <li><a href="<?= BASE_URL_CTRL ?>auto/crear_controller.php">Nuevo Auto</a></li>
        <li><a href="<?= BASE_URL_CTRL_API ?>auto/listar_controller.php">Json autos</a></li>
    </ul>
</body>

</html>