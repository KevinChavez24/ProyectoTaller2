<?php 
session_start();
if(!isset($_SESSION["correo"])){
    die("Contenido no disponible");
}
$contador=0;
$db= new PDO('mysql:host=localhost;dbname=proyectopagina;charset=utf8mb4','root','');
$id= $_SESSION["id"];
$sentencia=$db->query("SELECT * FROM usuario WHERE IDCliente= $id" );
$u= $sentencia->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
    <link rel="stylesheet" href="partes/styles.css">
    <?php include 'partes/cabecera.php'?>
</head> 
<body>
    <?php include 'partes/menu.php'?>
    <?php if(isset($_GET["error"])){?>
    <strong style="color: red">Contraseña no coinciden</strong>
    <?php } ?>
    <div class = "nregistro">
        <form action="procesar_modificar.php" method ="post">
            <div>
                <input style="width:508px;height:50px" type="text" name ="nnombres" value="<?php echo $u["Nombres"]?>" placeholder = "Nombres">
                <input type="hidden" name="id" value="<?php echo $u["id"]?>">   
            </div>
            <div><br>
                <label class="fecha">Fecha de nacimiento: </label><br><br>
                <input class="input5" type="date" name ="nnacimiento" >
            </div>
            <div>
                <input class="input4" type="password" name ="ncontraseña" value="<?php echo $u["Contraseña"]?>" placeholder = "Nueva Contraseña">
            </div>
            <div>
                <input class="input4" type="password" name ="nconfirmacionc" value="<?php echo $u["Contraseña"]?>" placeholder = "Confirmar nueva contraseña">    
            </div>
            <button style="width:300px;height:80px;margin-top:30px" type="submit">Modificar</button>
        </form>
    </div>
    <form  action="eliminar_usuario.php" method="post">
        <input type="hidden" name="id" value="<?php echo $u["id"]?>">
        <button type="submit">Eliminar cuenta</button>
    </form>
</body>
</html>