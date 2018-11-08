<?php 
session_start();
if(!isset($_SESSION["correo"])){
    die("Contenido no disponible");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WorldWrite</title>
</head>
<body>
    <?php include 'partes/cabecera.php'?>
    <?php include 'partes/menu.php'?>
    <?php 
    $id = intval($_GET["id"]);
    $db= new PDO('mysql:host=localhost;dbname=proyectopagina;charset=utf8mb4','root','');
    $sentencia=$db->query("SELECT * FROM foro WHERE IDForo='$id'");
    $foro= $sentencia->fetchALL();
    $sentencia2=$db->query("SELECT * FROM respuestas WHERE IDForo='$id'");
    $rpta= $sentencia2->fetchALL();
?>
    <p>Título:</p> <?php echo $foro[0]["Titulo"]?>
    <p>Descripción:</p> <?php echo $foro[0]["Descripcion"]?>
    <p>Comentario:</p> <?php echo $foro[0]["Comentario"]?>
    <form  action="respuestas.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id?>">
        <button type="submit">Responder</button>
    </form>

            <?php foreach ($rpta as $r) {?>
                    <strong><?php echo $r["Autor"]?></strong> dice : <br>
                    <?php echo $r["Contenido"]?><br>
            <?php }?>
            <?php if(count($rpta) == 0) {?>
                    <tr>
                        <td style="text-align:center" colspan="6">No hay respuestas hasta el momento</td>
                    </tr>
            <?php }?>
</body>
</html>
