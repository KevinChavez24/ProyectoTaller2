<?php 
    $co=$_POST["correo"];
    $pa=$_POST["password"];

    $validacion=false;
    $pa=sha1($pa);
    include("partes/conexion.php");
    $sentencia=$db->query("SELECT * FROM usuario  WHERE Correo='$co' AND Contraseña='$pa' ");
    $usuario= $sentencia->fetchALL();

    if(count($usuario) == 1){
        $validacion=true;
        session_start();
        $u= $usuario[0];
        $_SESSION["correo"]=$u["Correo"];
        $_SESSION["nombre"]=$u["Nombres"];
        $_SESSION["id"]=$u["IDCliente"];
    }  
    if($validacion){
        header("Location: home.php");
    }else{
        header("Location: login.php?error=1");
    }
?>