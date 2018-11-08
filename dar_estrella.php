<?php 
    $id=$_POST["id"];
    include("partes/conexion.php");
    $db->query("SELECT Estrellas from historia Where IDHistoria='$id'");
    $sentencia=$db->query("SELECT * FROM historia");
    $historia= $sentencia->fetchALL();
    $hist=$historia[0];
    $estrella =$hist['Estrellas']+1;
    $db->query("UPDATE historia SET Estrellas = '$estrella' WHERE IDHistoria='$id'");
    header("Location: home.php");
?>