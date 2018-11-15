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
    <link rel="stylesheet" href="partes/styles.css">
    <title>WorldWrite</title>
</head>
<body>
    <?php include 'partes/cabecera.php'?>
    <?php include 'partes/menu.php'?>
    <?php 
    $id = intval($_GET["idu"]);
    include("partes/conexion.php");
    $sentencia=$db->query("SELECT * FROM usuario WHERE IDCliente='$id'");
    $usuario= $sentencia->fetch();
    $naci = $usuario["FechaNacimiento"];
    $añon = date("Y", strtotime($naci))
    
?>
    <div class = "perfil">
        <p><strong>Nombre de Usuario: </strong></p> <?php echo $usuario["Nombres"]?>
        <p><strong>Correo: </strong></p> <?php echo $usuario["Correo"]?>
        <p><strong>Genero: </strong></p> <?php echo $usuario["Genero"]?>
        <p><strong>Edad: </strong></p> <?php echo date("y")+2000-$añon?> 
        <img class ="fotoperfil" src="https://www.debate.com.mx/export/sites/debate/img/2017/05/08/4b463f287cd814216b7e7b2e52e82687.png_1805022883.png" alt="">
    </div>  
   
</body>
</html>        