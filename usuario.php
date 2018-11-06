<?php 
session_start();
if(!isset($_SESSION["correo"])){
    die("Contenido no disponible");
}
$contador=0;
$db= new PDO('mysql:host=localhost;dbname=proyectopagina;charset=utf8mb4','root','');
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
    <link rel="stylesheet" href="partes/style.css">
</head>
<body>
    <?php include 'partes/menu.php'?>
    <p>Nuestros usuarios:</p>
    <table class="tabla">
    <tr>
        <th></th>
        <th>Nombres y Apellidos</th>
        <th>Correo</th>
        <th>Fecha de Nacimiento</th>
        <th>Operaciones</th>
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
                    <input type="hidden" name="id" value="<?php echo $u["id"]?>">
                    <button type="submit">Seguir</button>
                </form>
            </td>
        </tr>
    <?php }?>
    <?php if(count($usuario) == 0) {?>
            <tr>
                <td style="text-align:center" colspan="6">Aún no hay usuarios registrados :(</td>
            </tr>
    <?php }?>
    </table>
</body>
</html>