<?php 
    $id=$_POST["id"];
    $db= new PDO('mysql:host=localhost;dbname=proyectopagina;charset=utf8mb4','root','');
    $db->query("UPDATE historia SET Estrellas=Estrellas+1 WHERE IDHistoria='$id'");
    header("Location: home.php");
?>