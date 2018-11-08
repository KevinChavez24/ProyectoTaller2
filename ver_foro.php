<?php 
session_start();
if(!isset($_SESSION["correo"])){
    die("Contenido no disponible");
}
$contador=0;
$db= new PDO('mysql:host=localhost;dbname=proyectopagina;charset=utf8mb4','root','');
$sentencia=$db->query("SELECT * FROM foro");
$foro= $sentencia->fetchALL();
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
    <h2>Nuestros temas de conversación: </h2>
    <div>
        <table border = 3 class="tabla">
        <tr>
            <th>Nº</th>
            <th>Tema</th>
            <th>Creado por</th>
            <th>Ver</th>
        </tr>
        <?php foreach ($foro as $f) {?>
        <?php $contador=$contador+1;?>

            <tr>
                <td><?php echo $contador?></td>
                <td><?php echo $f["Titulo"]?></td>
                <td><?php echo $f["Autor"]?></td>
                <td>
                    <form  action="ver_cada_foro.php" method="get">
                        <input type="hidden" name="id" value="<?php echo $f["IDForo"]?>">
                        <button type="submit">Ver</button>
                    </form>
                </td>
            </tr>
        <?php }?>
        <?php if(count($foro) == 0) {?>
                <tr>
                    <td style="text-align:center" colspan="6">Aún no hay temas registrados</td>
                </tr>
        <?php }?>
        </table>
    </div>    
</body>
</html>