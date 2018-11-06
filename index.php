<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="estilo.css">
    <title>WriteWorld</title>
</head>
<body>
    <main class="contenedor">
        <div class="publicidad">
            <div style="margin-bottom: 10px">WriteWorld te ayuda a comunicarte y compartir historias con personas de todo el mundo.</div>
            <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yc/r/GwFs3_KxNjS.png" alt="">
        </div>
        <div class="iniciar">
            <div class="caja1">
                <h1 style="color:black">WriteWorld</h1>
                <div class="registro">
                    <h2 class="lema">Regístrate para ver historias, conocer nuevas amistades y mucho más. </h2>
                    <form class="registro1" action="procesar_registro.php" method="post">
                        <div>
                            <div><button type="submit">Iniciar sesión con Facebook</button></div>
                        </div>
                        <div id="c2k">
                            <div class="gta">o</div>
                        </div>
                        <div>
                            <div>
                                <div class="correo">
                                    <input type="email" name="correo" id="" aria-label="Correo electrónico"
                                    aria-required="true" placeholder="Correo electrónico" required>   
                                </div>
                            </div>
                        </div>
                        <div>
                            <div>
                                <div class="correo">
                                    <input type="text" name="nombrecompleto" id="" aria-label="Nombre Completo"
                                    aria-required="true" placeholder="Nombre completo" required>   
                                </div>
                            </div>
                        </div>
                        <div>
                            <div>
                                <div class="correo">
                                    <input type="text" name="nombreusuario" id="" aria-label="Nombre usuario"
                                    aria-required="true" placeholder="nombre.usuario" required>   
                                </div>
                            </div>
                        </div>
                        <div>
                                <div>
                                    <div class="correo">
                                        <input type="password" name="contraseña" id="" aria-label="Contraseña"
                                        aria-required="true" placeholder="Contraseña" required>   
                                    </div>
                                </div>
                        </div>
                        <div>
                                <div>
                                    <div class="correo">
                                        <input type="password" name="confirmar" id="" aria-label="Contraseña"
                                        aria-required="true" placeholder="Confirmar contraseña" required>   
                                    </div>
                                </div>
                        </div>
                        <div>
                            <div><button type="submit">Registrarte</button></div>
                        </div>
                        <div style="width: 228px; margin: auto">
                            <p>Al registrate, aceptas nuestras Condiciones, la Política de datos y la Política de cookies.</p>
                        </div>
                    </form>
                </div>
            </div>
            <div class="caja1">
                <p id="sesion">¿Tienes una cuenta?<a href="login.php"> Inicia sesión</a></p>
            </div>
        </div>
    </main>
    <footer></footer>
</body>
</html>