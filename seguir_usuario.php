<?php 
    $id=$_POST["id"];
    $db= new PDO('mysql:host=localhost;dbname=proyectopagina;charset=utf8mb4','root','');
    $db->query("UPDATE usuario SET Seguidores=Seguidores+1 WHERE IDCliente='$id'");
    header("Location: usuario.php");
?>