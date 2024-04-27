<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Formulario</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
    <form action="1-index.php" method="POST">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre"><br>
        <label for="marcas">Elige la marca</label>
        <select name="marcas[]" multiple><br>
            <option value="Ford">Ford</option>
            <option value="Seat">Seat</option>
            <option value="Renault">Renault</option>
        </select>
        <label for="motor">Tipo de motor</label><br>
        <input type="radio" name="motor" value="diesel">Diesel<br>
        <input type="radio" name="motor" value="gasolina">Gasolina<br><br>
        <input type="submit">

    
</body>
</html>