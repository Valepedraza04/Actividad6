<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PUNTO UNO </title>
</head>
<body>
    <h1>CALCULADORA</h1>
    <form action="" method="post">
        <label for="numero1">Ingrese primer numero: </label>
        <input type="number" name="numero1" id="numero1">
        <br><br>
        <label for="numero2">Ingrese segundo numero: </label>
        <input type="number" name="numero2" id="numero2">
        <br><br>
        <label for="operacion">Seleccione la operacion a realizar: </label>
        <select name="operacion" id="operacion">
            <option value="1">Sumar</option>
            <option value="2">Restar</option>
            <option value="3">Multiplicar</option>
            <option value="4">Dividir</option>
        </select>
        <input type="submit" value="Operar" name="datos">

    </form>
    
    <?php
    if(isset($_POST["datos"])){
    $numero1 = $_POST["numero1"];
    $numero2 = $_POST["numero2"];
    $operacion = $_POST["operacion"];
    $total=0;

    switch ($operacion) {
        case '1':
            $total=$numero1+$numero2;
            break;
        case '2':
            $total=$numero1-$numero2;
            break;
        case '3':
            $total=$numero1*$numero2;
            break;
        default:
            $total=$numero1/$numero2;
            break;
    }


    echo "<h2>El total es $total</h2>";
}
    ?>
</body>
</html>
