<?php 
    $id=$_POST["id"];
    include("partes/conexion.php");
    $db->query("UPDATE historia SET Estrellas = Estrellas+1 WHERE IDHistoria='$id'");
    header("Location: home.php");
?>