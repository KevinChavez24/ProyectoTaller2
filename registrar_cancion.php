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
    <title>WorldWrite</title>
    <link rel="stylesheet" href="partes/styles.css">
</head>
<body>
    <?php include 'partes/cabecera.php'?>
    <?php include 'partes/menu.php'?>
    <main class="main">
    <div class="music"><h1 style="margin-top: 50px">Comparte tu música</h1>
    <div class="cancion">
        <form action="procesar_cancion.php"method="post">
            <div>
                <input style="width:508px;height:40px" type="hidden" name ="autorc" value="<?php echo $u["Nombres"]?>" readonly="readonly">
            </div><br>  
            <div>
                <input style="width:508px;height:40px" type="text" name ="tituloc"placeholder="Cantante - Título" required>
            </div>
            <br>
            <div>
                <label class="l2">Descripción: </label><br>
                <textarea name="descrc" id="" cols="70" rows="10" required></textarea>
            </div>
            <div>
                <label class="l3">Contenido: </label><br>
                <input name="contc" type="url" size="67" placeholder="Inserte el link de su canción" required></textarea>
            </div><br>
            <div>
                <span>Selecciona el género de tu canción: </span>
                <select name="generoc" id="select">
                    <option value="Balada">Balada</option>
                    <option value="Pop">Pop</option>
                    <option value="Rock">Rock</option>
                    <option value="Metal">Metal</option>
                    <option value="Rap">Rap</option>
                    <option value="Reggaeton">Reggaeton</option>
                </select>
            </div>
            <button style="width:100px;height:50px;margin-top:30px" type="submit">Compartir</button>
        </form>
    </div>
    </div>
    </main>
</body>
</html>