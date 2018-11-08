<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
    <link rel="stylesheet" href="partes/styles.css">
    <?php include 'partes/cabecera.php'?>
</head> 
<body>
    <?php if(isset($_GET["error"])){?>
    <strong style="color: red">Contraseña no coincide</strong>
    <?php } ?>
    <?php if(isset($_GET["correo"])){?>
    <strong style="color: red">Correo ya existe, por favor elija otro</strong>
    <?php } ?>
    <?php if(isset($_GET["usuario"])){?>
    <strong style="color: red">El nombre de usuario ya esta en uso, por favor elija otro</strong>
    <?php } ?>
    <div class = "registro">
        <form action="procesar_registro.php" method ="post">
            <div>
                <input style="width:508px;height:50px" type="text" name ="nombres"placeholder = "Nombre de Usuario" required >
            </div>
            <div>
                <nav class="fecha">Fecha de nacimiento: </nav>
                <input class="input5" type="date" name ="nacimiento" >
            </div>
            <div>
                <input class="input3" type="email" name ="correo" placeholder = "Correo" required>
            </div>
            <div>
                <input class="input4" type="password" name ="contraseña" placeholder = "Contraseña" required>
            </div>
            <div>
                <input class="input4" type="password" name ="confirmacionc" placeholder = "Confirmar contraseña" required>    
            </div>
            <div>
                <label for="">Masculino</label>
                <input class="input6" type="radio" name ="genero" value = "Masculino">
                <label for="">Femenino</label>
                <input class="input7" type="radio" name ="genero" value = "Femenino">
            </div>
            <button style="width:300px;height:80px;margin-top:30px" type="submit">Registrarme</button>
        </form>
            <p>¿Ya Tienes una cuenta?</p>  <a href="login.php">Iniciar Sesión</a> 
    </div>
</body>
</html>