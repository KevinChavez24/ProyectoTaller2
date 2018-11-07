<?php
session_start();
if(!isset($_SESSION["correo"])){
    die("Contenido no disponible");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WriteWorld</title>
    <link rel="stylesheet" href="partes/styles.css">
    
</head> 
<body>
    <?php include 'partes/cabecera.php'?>
    <?php include 'partes/menu.php'?>
    <h1>Foro creado</h1>
</body>
</html>   