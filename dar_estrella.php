<?php 
    $id=$_POST["id"];
    $db= new PDO('mysql:host=localhost;dbname=proyectopagina;charset=utf8mb4','root','');
    $db->query("SELECT Estrellas from historia Where IDHistoria='$id'");
    $sentencia=$db->query("SELECT * FROM historia");
    $historia= $sentencia->fetchALL();
    $hist=$historia[0];
    $estrella =$hist['Estrellas']+1;
    $db->query("UPDATE historia SET Estrellas = '$estrella' WHERE IDHistoria='$id'");
    header("Location: home.php");
?>