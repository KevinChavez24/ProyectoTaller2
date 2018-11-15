<?php
session_start();
if(!isset($_SESSION["correo"])){
    die("Contenido no disponible");
}
include("partes/conexion.php");
$sentencia=$db->query("SELECT * FROM historia");
$historia= $sentencia->fetchALL();
$sentencia2=$db->query("SELECT * FROM cancion");
$cancion= $sentencia2->fetchALL();
$id= $_SESSION["id"];
$sentencia3=$db->query("SELECT * FROM usuario WHERE IDCliente= $id" );
$u= $sentencia3->fetch(); 
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
    <?php include 'partes/menu.php'?>
    <main class="main">
    <?php if(isset($_SESSION["correo"]) And $u["Genero"] == "Masculino"){ ?>
            <p class="ia">Bienvenido <span  class="azk"><?php echo $_SESSION["nombre"]?></span></p>          
    <?php }?>  
    <?php if(isset($_SESSION["correo"]) And $u["Genero"] == "Femenino"){ ?>
            <p class="ia">Bienvenida <span  class="azk"><?php echo $_SESSION["nombre"]?></span></p>          
    <?php }?>  
    
    <div class="todo">
        <div class="historias">
        <h2>Historias publicadas:</h2>
            <?php 
                foreach ($historia as $h) {?> 
                    <h3>Título: <?php echo $h["Titulo"]?></h3>
                    <span>Descripcion: <?php echo $h["Descripcion"]?></span>
                    <p>Contenido <?php echo $h["Contenido"]?></p>
                    <p>Género: <?php echo $h["Genero"]?></p>
                    <p>Escrito por: <?php echo $h["Autor"]?></p>
                    <form  action="dar_estrella.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $h["IDHistoria"]?>">
                        <button type="submit">Dar estrella</button>
                    </form>
                    <img width="20" height="20" src="https://st.depositphotos.com/1318729/1471/i/950/depositphotos_14710213-stock-photo-single-yellow-star.jpg" > <?php echo $h["Estrellas"]?>
            <?php }?> 
            <?php if(count($historia) == 0) {?>
                    <tr>
                        <td style="text-align:center" colspan="6">Aún no hay historias registradas</td>
                    </tr>   
            <?php }?>    
        </div>    
        <div class="canciones">
            <h2>Canciones publicadas:</h2>        
            <?php 
                foreach ($cancion as $c) {?>  
                    <h3>Título: <?php echo $c["Titulo"]?></h3>
                    <span>Descripción: <?php echo $c["Descripcion"]?></span>
                    <p><iframe width="430" height="315" src="https://www.youtube.com/embed/<?php echo $c["Contenido"]?>?ecver=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <p>Género: <?php echo $c["Genero"]?></p>
                    <p>Compartido por: <?php echo $c["Autor"]?> </p>
                    
            <?php }?>
            <?php if(count($cancion) == 0) {?>
                    <tr>
                        <td style="text-align:center" colspan="6">Aún no hay canciones compartidas</td>
                    </tr>   
            <?php }?>  
            
            
        </div>
    </div>
    </main>  
</body>
</html> 