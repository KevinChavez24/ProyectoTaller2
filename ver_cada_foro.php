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
    <link rel="stylesheet" href="partes/styles.css">
    <title>WorldWrite</title>
</head>
<body>
    <?php include 'partes/cabecera.php'?>
    <?php include 'partes/menu.php'?>
    <?php 
    $id = intval($_GET["id"]);
    include("partes/conexion.php");
    $sentencia=$db->query("SELECT * FROM foro WHERE IDForo='$id'");
    $foro= $sentencia->fetchALL();
    $sentencia2=$db->query("SELECT * FROM respuestas WHERE IDForo='$id'");
    $rpta= $sentencia2->fetchALL();
?>
    <div class="vercadaforo">
        <p><strong>Título:</strong></p> <?php echo $foro[0]["Titulo"]?>
        <p><strong>Descripción:</strong></p> <?php echo $foro[0]["Descripcion"]?>
        <p><strong>Comentario:</strong></p> <?php echo $foro[0]["Comentario"]?>
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
    </div>
</body>
</html>
