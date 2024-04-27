<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Envío archivos</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
    <form action="recibe.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="archivo">
        <br><br>
        <input type="submit" name="enviar">
    </form>
    
</body>
</html>