<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 2</title>
</head>
<body>
    <h1>PUNTO DOS</h1>
    <form action="" method="post">
    <label for="nombre">Ingrese nombre: </label>
        <input type="text" name="nombre" id="nombre">
        <br><br>
        <label for="edad">Ingrese su edad: </label>
        <input type="numer" name="edad" id="edad">
        <br><br>
        <input type="submit" value="Enviar" name="datos">

    </form>

    <?php
    if(isset($_POST["datos"])){
        $nombre = $_POST["nombre"];
        $edad = $_POST["edad"];
    
        if ($edad>=18) {
            echo "<h2>$nombre Es mayor de edad por que tiene $edad</h2>";
        }else {
            echo "<h2>$nombre Es menor de edad por que tiene $edad</h2>";
        }
    
    }
    ?>
    
</body>
</html>