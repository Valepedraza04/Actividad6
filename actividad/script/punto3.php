<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PUNTO TRES</title>
</head>
<body>
    <h1>PUNTO TRES</h1>
    <form action="./server.php" method="Get">
        <label for="nombre">Ingrese su nombre: </label>
        <input type="text" name="nombre" id="nombre">
        <br><br>
        <label for="apellido">Ingrese su apellido: </label>
        <input type="text" name="apellido" id="apellido">
        <br><br>
        <label for="documento">Ingrese su documento: </label>
        <input type="number" name="documento" id="documento">
        <br><br>
        <input type="submit" value="Enviar" name="datos">

    </form>
    
</body>
</html>