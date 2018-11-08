<?php
session_start();
if(!isset($_SESSION["correo"])){
    die("Contenido no disponible");}
include("partes/conexion.php");
$id= $_SESSION["id"];
$sentencia=$db->query("SELECT * FROM usuario WHERE IDCliente= $id" );
$u= $sentencia->fetch();    

$id = $_POST["id"];
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
    <h1>Responder</h1>
    <div class = "escribir">
        <form action="procesar_respuestas.php" method ="post">
        <input type="hidden" name="id" value="<?php echo $id?>">    
            <div>
                <input style="width:508px;height:40px" type="text" name ="autorr" value="<?php echo $u["Nombres"]?>" readonly="readonly">
            </div><br>
            <div>
                <label class="l3">Comentario: </label><br>
                <textarea name="comentr" id="" cols="70" rows="32" required></textarea>
            </div>
            <button style="width:100px;height:50px;margin-top:30px" type="submit">Responder</button>
        </form>
    </div>
</body>
</html>