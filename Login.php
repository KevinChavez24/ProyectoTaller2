<?php 
session_start();
 if(isset($_SESSION["correo"])){
    header("home.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Iniciar sesión • WriteWorld</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <section>
        <main>
            <div style="padding-bottom: 44px;">
                <article class="articulo">
                    <div class="iniciar">
                        <div class="caja1">
                            <h1 style="color:black">WriteWorld</h1>
                            <div class="cajainiciarsesion">
                                <form action="" method="post" class="iniciarsesion">
                                    <div>   
                                        <div>
                                            <div>
                                                <input type="email" name="correoiniciar" id="" aria-label="Correo electrónico"
                                                aria-required="true" placeholder="Correo electrónico">
                                            </div>
                                        </div>
                                    </div>
                                    <div>   
                                        <div>
                                            <div>
                                                <input type="password" name="contraseñainiciar" id="" aria-label="Contraseña"
                                                aria-required="true" placeholder="Contraseña">
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <button type="submit">Iniciar sesión</button>
                                    </div>
                                    <div id="c2k">
                                        <div class="gta">o</div>
                                    </div>
                                    <div>
                                        <button> <span></span><span>Iniciar sesión con Facebook</span></button>
                                    </div>
                                    <a href="">¿Olvidaste tu contraseña?</a>
                                </form>
                            </div>
                        </div>
                        <div class="caja1">
                            <p>¿Nuevo en WriteWorld? <a href="index.html">Regístrate</a></p>
                        </div>
                        <div></div>
                    </div>
                </article>
            </div>
        </main>
        <footer>

        </footer>
    </section>
</body>
</html>
