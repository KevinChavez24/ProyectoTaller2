<?php 
    $id=$_POST["id"];
    $db= new PDO('mysql:host=localhost;dbname=proyectopagina;charset=utf8mb4','root','');
    $db->query("SELECT Seguidores from usuario Where IDCliente='$id'");
    $sentencia=$db->query("SELECT * FROM usuario");
    $usuario= $sentencia->fetchALL();
    $usu=$usuario[0];
    $seguir =$usu['Seguidores']+1;
    $db->query("UPDATE usuario SET Seguidores = '$seguir' WHERE IDCliente='$id'");
    header("Location: usuario.php");
?>