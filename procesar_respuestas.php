<?php 
$aur=$_POST["autorr"];
$cmr=$_POST["comentr"];
$id = $_POST["id"];
    $db= new PDO('mysql:host=localhost;dbname=proyectopagina;charset=utf8mb4','root','');
    $db->query("INSERT INTO respuestas VALUES (NULL,'$aur','$cmr',SYSDATE(),'$id')");
    header("Location: ver_cada_foro.php");
?>