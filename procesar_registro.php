<?php
$nombres = $_POST["nombrecompleto"];
$correo = $_POST["correo"];
$nusuario = $_POST["nombreusuario"]
$contraseña  $_POST["contraseña"];
$confirmar = $_POST["confirmar"];

if(($nombres=="") or ($correo=="") or ($contraseña=="") or ($confirmar=="")){
    header('Location: index.php?error=1');
}
else{
    if($contraseña!=$confirmar){
        header('Location: index.php?error=1');
    }
    else{
        $db = new PDO('mysql:host=localhost;dbname=proyectopagina;charset=utf8mb4','root','');
        $contreseña = sha1($contraseña);
        $db->query("INSERT INTO usuario VALUES (NULL, '$nombres', '$correo', '$contraseña', NULL, NULL, )");
        header('Location: home.php');
    }
}
?>