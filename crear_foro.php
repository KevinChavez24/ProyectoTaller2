<?php
session_start();
if(!isset($_SESSION["correo"])){
    die("Contenido no disponible");
}
$id = $_SESSION["id"];
include("partes/conexion.php");
$sentencia=$db->query("SELECT * FROM usuario WHERE IDCliente='$id'" );
$u= $sentencia->fetch();
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
    <h1>Crea una conversación</h1>
    <div class = "escribir">
        <form action="procesar_crear_foro.php" method ="post">
            <div>
                <input style="width:508px;height:40px" type="hidden" name ="autor" value="<?php echo $u["Nombres"]?>" readonly="readonly">
            </div><br>
            <div>
                <input style="width:508px;height:40px" type="text" name ="tema"placeholder="Titulo" required>
            </div><br>
            <div>
                <label class="l2">Descripción: </label><br>
                <textarea name="fdescr" id="" cols="70" rows="10" required></textarea>
            </div>
            <div>
                <label class="l3">Comentario: </label><br>
                <textarea name="coment" id="" cols="70" rows="32" required></textarea>
            </div>
           
            <button style="width:100px;height:50px;margin-top:30px" type="submit">Crear</button>
        </form>
    </div>
</body>
</html>