<?php
session_start();
$db= new PDO('mysql:host=localhost;dbname=proyectopagina;charset=utf8mb4','root','');
$contador=0;
$sentencia=$db->query("SELECT * FROM historia");
$historia= $sentencia->fetchALL();
$sentencia2=$db->query("SELECT * FROM cancion");
$cancion= $sentencia2->fetchALL();
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
    <?php if(isset($_SESSION["correo"])){ ?>
        <p>Bienvenido <?php echo $_SESSION["nombre"]?></p>
    <?php include 'partes/menu.php'?>
        <p>Historias publicadas:</p>
    <div>
        <?php 
            foreach ($historia as $h) {?>
            <?php $contador=$contador+1;?>  
                <strong><?php echo $contador?></strong>
                <h2><?php echo $h["Titulo"]?></h2>
                <span><?php echo $h["Descripcion"]?></span>
                <p><?php echo $h["Contenido"]?></p>
                <p><?php echo $h["Genero"]?></p>
                <p>---------------------------------------------------------------------------------</p>
        <?php }?>
    </div>    
    <div>
        <?php 
            foreach ($cancion as $c) {?>
            <?php $contador=$contador+1;?>  
                <strong><?php echo $contador?></strong>
                <h2><?php echo $h["Titulo"]?></h2>
                <span><?php echo $h["Descripcion"]?></span>
                <p><?php echo $h["Contenido"]?></p>
                <p><?php echo $h["Genero"]?></p>
                <p>---------------------------------------------------------------------------------</p>
        <?php }?>
    </div>
</body>
</html> 