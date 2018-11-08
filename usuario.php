<?php 
session_start();
if(!isset($_SESSION["correo"])){
    die("Contenido no disponible");
}
$contador=0;
include("partes/conexion.php");
$sentencia=$db->query("SELECT * FROM usuario");
$usuario= $sentencia->fetchALL();
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
    <h2>Nuestros Usuarios: </h2>
    <div>
        <table border = 3 class="tabla">
        <tr>
            <th>Nº</th>
            <th>Nombres y Apellidos</th>
            <th>Correo</th>
            <th>Fecha de Nacimiento</th>
            <th>Seguir</th>
            <th>Seguidores</th>
        </tr>
        <?php foreach ($usuario as $u) {?>
        <?php $contador=$contador+1;?>

            <tr>
                <td><?php echo $contador?></td>
                <td><?php echo $u["Nombres"]?></td>
                <td><?php echo $u["Correo"]?></td>
                <td><?php echo $u["FechaNacimiento"]?></td>
                <td>
                    <form  action="seguir_usuario.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $u["IDCliente"]?>">
                        <button type="submit">Seguir</button>
                    </form>
                </td>
                <td><?php echo $u["Seguidores"]?></td>
            </tr>
        <?php }?>
        <?php if(count($usuario) == 0) {?>
                <tr>
                    <td style="text-align:center" colspan="6">Aún no hay usuarios registrados</td>
                </tr>
        <?php }?>
        </table>
    </div>    
</body>
</html>