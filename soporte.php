<?php
session_start();
if(!isset($_SESSION["correo"])){
    die("Contenido no disponible");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WriteWorld</title>
    <link rel="stylesheet" href="partes/styles.css">
</head>
<body>
    <?php include 'partes/cabecera.php'?>
    <?php include 'partes/menu.php' ?>  
    <main class="main">
        <div class="ajm"><h1 style="margin-top: 50px">Escríbenos tus dudas o reclamos :)</h1>
    <div class = "soporte">
    <form action="procesar_soporte.php" method ="post">
         <div>
            <label class="l8">Descripción: </label><br>
            <textarea name="descr" id="" cols="70" rows="10" required></textarea>
        </div>
        <div>
            <label for="">Asunto</label>
            <select name="asunto" id="asunto" >
                    <option value="S">Sugerencia</option>
                    <option value="R">Reclamo</option>
            </select>        
        </div>
        <button style="width:200px;height:50px;margin-top:30px; margin-left: 150px" type="submit">Enviar</button>
    </form>
</div>
</div>
</main>
</body>
</html>