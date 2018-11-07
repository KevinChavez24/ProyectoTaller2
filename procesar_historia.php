<?php 
$a=$_POST["autor"];
$t=$_POST["titulo"];
$d=$_POST["descr"];
$ct=$_POST["cont"];
$gn=$_POST["genero"];
    $db= new PDO('mysql:host=localhost;dbname=proyectopagina;charset=utf8mb4','root','');
    $db->query("INSERT INTO historia (Autor,Titulo,Descripcion,Contenido,Genero,FechaDeRegistro) VALUES ('$a','$t','$d','$ct','$gn',SYSDATE())");
    header("Location: home.php");
?>