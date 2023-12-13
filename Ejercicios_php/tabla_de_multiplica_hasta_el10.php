<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Multiplicar</title>
</head>
<body>

<form method="post" action="">
    <label for="numero">INGRESA EL NUMERO </label><br><br>
    <input type="text" name="numero" id="numero" required><br><br>
    <button type="submit">MULTIPLICAR</button>
</form>

</body>
</html>


<?php

if(isset($_POST['numero'])){

    $numero = $_POST['numero'];
    if(is_numeric($numero) && $numero > 0 && floor($numero) == $numero){
     
        echo "<h2>Tabla de multiplicar del $numero:</h2>";
        echo "<ul>";

        for ($i = 1; $i <= 10; $i++) {
            $resultado = $numero * $i;
            echo "<li>$numero x $i = $resultado</li>";
        }

        echo "</ul>";
    } else {
        echo "Por favor, ingresa un número entero positivo.";
    }
}

?>


