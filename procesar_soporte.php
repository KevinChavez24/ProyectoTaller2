<?php 
$descr=$_POST["descr"];
$asnt=$_POST["asunto"];

include("partes/conexion.php");
$db->query("INSERT INTO soporte VALUES (NULL, '$descr','$asnt',SYSDATE())");
header("Location: confirmar_soporte.php");

?>