<?php 
$nombre=$_POST["nombres"];
$nacimiento=$_POST["nacimiento"];
$password=$_POST["contraseña"];
$confirmar=$_POST["confirmacionc"];
$correo=$_POST["correo"];
$genero=$_POST["genero"];

if($password!=$confirmar){
        header("Location: index.php?error=1");
}
else{
        $db= new PDO('mysql:host=localhost;dbname=proyectopagina;charset=utf8mb4','root','');
        $password=sha1($password);
        $db->query("INSERT INTO usuario VALUES (NULL, '$nombre', '$correo', '$password','$nacimiento','$genero', SYSDATE())");
        header("Location: confirmar_registro.php");
    }
?>