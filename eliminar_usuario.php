<?php 
$id=$_POST["id"];
$db= new PDO('mysql:host=localhost;dbname=proyectopagina;charset=utf8mb4','root','');
$sentencia=$db->query("DELETE FROM usuario WHERE IDCliente='$id' ");
header("Location: index.php");
?>