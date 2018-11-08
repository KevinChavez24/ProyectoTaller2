<?php 
$id=$_POST["id"];
include("partes/conexion.php");
$sentencia=$db->query("DELETE FROM usuario WHERE IDCliente='$id' ");
header("Location: index.php");
?>