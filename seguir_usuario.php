<?php 
    $id=$_POST["id"];
    include("partes/conexion.php");
    $db->query("SELECT Seguidores from usuario Where IDCliente='$id'");
    $sentencia=$db->query("SELECT * FROM usuario");
    $usuario= $sentencia->fetchALL();
    $usu=$usuario[0];
    $seguir =$usu['Seguidores']+1;
    $db->query("UPDATE usuario SET Seguidores = '$seguir' WHERE IDCliente='$id'");
    header("Location: usuario.php");
?>