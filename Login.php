<?php 
session_start();
 if(isset($_SESSION["correo"])){
    header("home.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<main>
<h1>Iniciar sesión</h1>
    <?php if(isset($_GET["error"])){?>
        <strong style="color: red">Datos Incorrectos.</strong>
    <?php } ?>
    <form action="procesar_login.php" method="post">
        <div>
            <label for="">Correo:</label>
            <input type="text" name="correo">
        </div>
        <div>
            <label for="">Contraseña:</label>
            <input type="password" name="password">
        </div>
        <button type="submit">Iniciar sesión</button>
    </form>
</main>
</body>
</html>