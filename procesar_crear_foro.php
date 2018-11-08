<?php 
$au=$_POST["autor"];
$ti=$_POST["tema"];
$fd=$_POST["fdescr"];
$cm=$_POST["coment"];
    include("partes/conexion.php");
    $db->query("INSERT INTO foro  VALUES (NULL,'$ti','$au','$fd','$cm',SYSDATE())");
    header("Location: confirmar_crear_foro.php");
?>