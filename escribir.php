<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WriteWorld</title>
    <link rel="stylesheet" href="partes/styles.css">
    <?php include 'partes/menu.php'?>
</head> 
<body>
    <h1>Escribe tu historia</h1>
    <div class = "escribir">
        <form action="procesar_historia.php" method ="post">
            <div>
                <input style="width:508px;height:40px" type="text" name ="titulo"placeholder="Título">
            </div>
            <br>
            <div>
                <label class="l2">Descripción: </label><br>
                <textarea name="descr" id="" cols="70" rows="10"></textarea>
            </div>
            <div>
                <label class="l3">Contenido: </label><br>
                <textarea name="cont" id="" cols="70" rows="32"></textarea>
            </div>
            <div>
                <span>Selecciona el género de tu historia: </span>
                <select name="genero" id="select">
                    <option value="1">Acción</option>
                    <option value="2">Ciencia ficción</option>
                    <option value="3">Fanfic</option>
                    <option value="4">Humor</option>
                    <option value="5">Romance</option>
                    <option value="6">Terror</option>
                </select>
            </div>
            <button style="width:100px;height:50px;margin-top:30px" type="submit">Publicar</button>
        </form>
    </div>
    <?php include 'partes/footer.php' ?>
</body>
</html>