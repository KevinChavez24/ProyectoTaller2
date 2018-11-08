<?php
session_start();
if(!isset($_SESSION["correo"])){
    die("Contenido no disponible");
}
$id=$_POST["id"];
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
    <h2>¿Esta seguro de eliminar su cuenta?</h2>

    <form action="eliminar_usuario.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <button type="submit">Si</button>
    </form>
    <button onclick="location.href='modificar.php'">No</button>
</body>
</html>