<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WorldWrite</title>
</head>
<body>
    <h1>Comparte tu música</h1>
    <div class="cancion">
        <form action="procesar_cancion"method="post">
            <div>
                <input style="width:508px;height:40px" type="text" name ="tituloc"placeholder="Título">
            </div>
            <br>
            <div>
                <label class="l2">Descripción: </label><br>
                <textarea name="descrc" id="" cols="70" rows="10"></textarea>
            </div>
            <div>
                <label class="l3">Contenido: </label><br>
                <textarea name="contc" id="" cols="70" rows="32"></textarea>
            </div>
            <div>
                <span>Selecciona el género de tu canción: </span>
                <select name="generoc" id="select">
                    <option value="Ba">Balada</option>
                    <option value="Po">Pop</option>
                    <option value="Ro">Rock</option>
                    <option value="Me">Metal</option>
                    <option value="Ra">Rap</option>
                    <option value="Re">Reggaeton</option>
                </select>
            </div>
            <button style="width:100px;height:50px;margin-top:30px" type="submit">Compartir</button>
        </form>
    </div>
</body>
</html>