<?php 
$id=$_POST["id"];
$nnombre=$_POST["nnombres"];
$nnacimiento=$_POST["nnacimiento"];
$npassword=$_POST["ncontraseña"];
$nconfirmar=$_POST["nconfirmacionc"];
if($npassword!=$nconfirmar){
        header("Location: modificar.php?error=1");
}
else{
        $db= new PDO('mysql:host=localhost;dbname=proyectopagina;charset=utf8mb4','root','');
        $npassword=sha1($npassword);
        $sentencia=$db->query("UPDATE usuario SET Nombres = '$nnombre', Contraseña='$npassword', FechaNacimiento='$nnacimiento' WHERE IDCliente = '$id'");
        header("Location: confirmar_modificar.php");
    }
?>