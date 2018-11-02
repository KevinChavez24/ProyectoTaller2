<?php 
$descr=$_POST["descr"];
$asnt=$_POST["asunto"];

$db= new PDO('mysql:host=localhost;dbname=proyectopagina;charset=utf8mb4','root','');
$db->query("INSERT INTO soporte VALUES (NULL, '$descr','$asnt',SYSDATE())");
header("Location: confirmar_soporte.php");
}
?>