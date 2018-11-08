<?php 
$a=$_POST["autor"];
$t=$_POST["titulo"];
$d=$_POST["descr"];
$ct=$_POST["cont"];
$gn=$_POST["genero"];
    include("partes/conexion.php");
    $db->query("INSERT INTO historia (Autor,Titulo,Descripcion,Contenido,Genero,FechaDeRegistro) VALUES ('$a','$t','$d','$ct','$gn',SYSDATE())");
    header("Location: home.php");
?>