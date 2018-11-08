<?php 
$ac=$_POST["autorc"];
$tc=$_POST["tituloc"];
$dc=$_POST["descrc"];
$cct=$_POST["contc"];
$gnc=$_POST["generoc"];

include("partes/conexion.php");
$db->query("INSERT INTO cancion VALUES (NULL, '$ac','$tc', '$dc','$cct','$gnc',SYSDATE())");
header("Location: home.php");
?>