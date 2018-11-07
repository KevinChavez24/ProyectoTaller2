<?php
session_start();
if(!isset($_SESSION["correo"])){
    die("Contenido no disponible");
}
$db= new PDO('mysql:host=localhost;dbname=proyectopagina;charset=utf8mb4','root','');
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
    <?php include 'partes/cabecera.php'?>
    <?php if(isset($_SESSION["correo"])){ ?>
        <p>Bienvenido <?php echo $_SESSION["nombre"]?></p>
    <?php }?>    
    <?php include 'partes/menu.php'?>
        <h2>Historias publicadas:</h2>
    <div class="historias">
        <?php 
            foreach ($historia as $h) {?> 
                <h3>Título: <?php echo $h["Titulo"]?></h3>
                <span>Descripcion: <?php echo $h["Descripcion"]?></span>
                <p>Contenido <?php echo $h["Contenido"]?></p>
                <p>Género: <?php echo $h["Genero"]?></p>
                <p>Escrito por: <?php echo $h["Autor"]?></p>
                <form  action="dar_estrella.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $h["IDHistoria"]?>">
                    <button type="submit">Dar estrella</button>
                </form>
                <p>Estrellas: <?php echo $h["Estrellas"]?></p>
                <p>---------------------------------------------------------------------------------</p>
        <?php }?>
    </div>    
    <div class="canciones">
        <h2>Canciones publicadas:</h2>        
        <?php 
            foreach ($cancion as $c) {?>  
                <h3>Título: <?php echo $c["Titulo"]?></h3>
                <span>Descripción: <?php echo $c["Descripcion"]?></span>
                <p>Link: <a href="<?php echo $c["Contenido"]?>"><?php echo $c["Contenido"]?></a></p>
                <p>Género: <?php echo $c["Genero"]?></p>
                <p>Compartido por: <?php echo $c["Autor"]?> </p>
                <p>---------------------------------------------------------------------------------</p>
        <?php }?>
        
    </div>
</body>
</html> 