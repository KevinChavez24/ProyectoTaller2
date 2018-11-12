<?php 
$nombre=$_POST["nombres"];
$nacimiento=$_POST["nacimiento"];
$password=$_POST["contraseña"];
$confirmar=$_POST["confirmacionc"];
$correo=$_POST["correo"];
$genero=$_POST["genero"];

include("partes/conexion.php");
$sentencia=$db->query("SELECT * FROM usuario");
$usuario= $sentencia->fetchALL();
$e = false;

foreach ($usuario as $u) {
     if ($correo==$u["Correo"]){
    header("Location: index.php?correo=1");
    $e = true;
}
if ($nombre==$u["Nombres"]){
    header("Location: index.php?usuario=1");
    $e = true;
}
 }
if ($e == false){

if($password!=$confirmar){
        header("Location: index.php?error=1");
}
else{
        include("partes/conexion.php");
        $password=sha1($password);
        $db->query("INSERT INTO usuario (Nombres,Correo,Contraseña,FechaNacimiento,Genero,FechaDeRegistro) VALUES ('$nombre', '$correo', '$password','$nacimiento','$genero', SYSDATE())");
        header("Location: confirmar_registro.php");
    }
}    
?>
