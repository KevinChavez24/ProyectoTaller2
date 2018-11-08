<?php 
$aur=$_POST["autorr"];
$cmr=$_POST["comentr"];
$id = $_POST["id"];

    include("partes/conexion.php");
    $db->query("INSERT INTO respuestas VALUES (NULL,'$aur','$cmr',SYSDATE(),'$id')");
    header("Location: ver_cada_foro.php?id=$id");
?>
