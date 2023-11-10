<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 4</title>
</head>
<body>
    <h1>PUNTO CUATRO</h1>
    <form action="" method ="post">
        <label for="nombre">Ingrese nombre: </label>
        <input type="text" name="nombre" id="nombre">
        <br><br>
        <label for="fecha">Ingrese fecha de nacimiento: </label>
        <input type="date" name="fecha" id="fecha">
        <br><br>
        <input type="submit" value="Enviar" name="datos">
    </form>
    <?php
        if(isset($_POST["datos"])){
            $nombre = $_POST["nombre"];
            $fecha = $_POST["fecha"];
            $fecha_act=date('Y-m-d');

            $date1=new DateTime($fecha);
            $date2=new DateTime($fecha_act);

            $dif=$date1->diff($date2);
            $edad=$dif->y;

            echo "<h3>Nombre: $nombre</h3>";
            echo "<h3>Fecha: $fecha</h3>";
            echo "<h3>Fecha actual: $fecha_act</h3>";

            echo"<h3>Edad: $edad</h3>";

            if ($edad>=18) {
                echo "<h2>Su edad es $edad por tanto: Es mayor de edad</h2>";
            }else {
                echo "<h2>Su edad es $edad por tanto: No es mayor de edad</h2>";
            }

        }
    ?>
    
</body>
</html>