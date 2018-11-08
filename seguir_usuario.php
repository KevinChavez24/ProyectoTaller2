<?php 
    $id=$_POST["id"];
    include("partes/conexion.php");
    $db->query("UPDATE usuario SET Seguidores = Seguidores+1 WHERE IDCliente='$id'");
    header("Location: usuario.php");
?>