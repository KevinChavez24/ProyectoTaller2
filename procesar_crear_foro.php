<?php 
$au=$_POST["autor"];
$ti=$_POST["tema"];
$fd=$_POST["fdescr"];
$cm=$_POST["coment"];
    $db= new PDO('mysql:host=localhost;dbname=proyectopagina;charset=utf8mb4','root','');
    $db->query("INSERT INTO foro  VALUES (NULL,'$ti','$au','$fd','$cm',SYSDATE())");
    header("Location: confirmar_crear_foro.php");
?>