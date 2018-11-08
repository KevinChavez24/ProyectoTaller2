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
    <h1>Escribe tu historia</h1>
    <div class = "escribir">
        <form action="procesar_historia.php" method ="post">
            <div>
                <input style="width:508px;height:40px" type="hidden" name ="autor" value="<?php echo $u["Nombres"]?>" readonly="readonly">
            </div><br>
            <div>
                <input style="width:508px;height:40px" type="text" name ="titulo"placeholder="Título" required>
            </div>
            <br>
            <div>
                <label class="l2">Descripción: </label><br>
                <textarea name="descr" id="" cols="70" rows="10" required></textarea>
            </div>
            <div>
                <label class="l3">Contenido: </label><br>
                <textarea name="cont" id="" cols="70" rows="32" required></textarea>
            </div>
            <div>
                <span>Selecciona el género de tu historia: </span>
                <select name="genero" id="select">
                    <option value="Accion">Acción</option>
                    <option value="Ciencia ficcion">Ciencia ficción</option>
                    <option value="Fanfic">Fanfic</option>
                    <option value="Humor">Humor</option>
                    <option value="Romance">Romance</option>
                    <option value="Terror">Terror</option>
                </select>
            </div>
            <button style="width:100px;height:50px;margin-top:30px" type="submit">Publicar</button>
        </form>
    </div>
</body>
</html>