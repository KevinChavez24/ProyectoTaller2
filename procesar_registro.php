<?php
# Entrada
$n = $_POST["nombres"];
$f = $_POST["nacimiento"];
$c = $_POST["correo"];
$p = $_POST["contraseña"];
$p_c = $_POST["confirmacionc"];
$g = $_POST["genero"]

# Proceso
$validacion = false;
if ($p == $p_c) {
    $validacion=true;
    $db = new PDO('mysql: host=localhots;dbname=portal2;charset=utf8mb4','root','');
    $db->query("INSERT INTO usuarios VALUES (NULL, '$n', '$c', '$p', '$f', '$g',  SYSDATE())");
}
# Salida
if ($validacion == true){
    header('Location: index.php');
}
else{
    header('Location: index.php?error=1');
}
?> 