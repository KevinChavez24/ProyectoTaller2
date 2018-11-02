<?php 
$t=$_POST["titulo"];
$d=$_POST["descr"];
$ct=$_POST["cont"];
$gn=$_POST["genero"];
#Proceso
    $db= new PDO('mysql:host=localhost;dbname=proyectopagina;charset=utf8mb4','root','');
    $db->query("INSERT INTO historia VALUES (NULL, '$t','$d','$ct','$gn',SYSDATE())");
    header("Location: home.php");
?>