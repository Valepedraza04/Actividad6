<?php

    $consulta;
    $resultado;
    $usuario="root";
    $password="";
    $servidor="localhost";
    $baseDatos="mi_proyecto";

    $conexion = mysqli_connect($servidor, $usuario, "");
    $db=mysqli_select_db($conexion,$baseDatos);

    if ($conexion && $db) {
        
        $consulta = "SELECT * FROM mi_proyecto.usuarios";
        $resultado = mysqli_query($conexion,$consulta);
        
        
        
    }else {
        echo"<h3>LA CONEXION A $baseDatos NO HA SIDO POSIBLE</h3>";
    }
    ?>
   
    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PUNTO 3</title>
</head>
<body>
    <h1>PUNTO CINCO</h1>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Cédula</th>
        </tr>
    <?php while ($columna =mysqli_fetch_array($resultado)): ?>
        <tr>
            <td><?php echo $columna['nombre']?></td>
            <td><?php echo $columna['apellido']?></td>
            <td><?php echo $columna['cedula']?></td>
        </tr>
    <?php endwhile;?>
    </table>
    
</body>
</html>
<?php
    mysqli_close($conexion);
   
    
?>