<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Costo de Llamada</title>
</head>
<body>

<form method="post" action="">
    <label for="duracion">DURACION DE LLAMADAS</label><br><br>
    <input type="text" name="duracion" id="duracion" required><br><br>
    <button type="submit">COSTO DE LALLAMADA</button>
</form>

</body>
</html>
<?php

if(isset($_POST['duracion'])){
    $duracion = $_POST['duracion'];

    if(is_numeric($duracion) && $duracion >= 0 && floor($duracion) == $duracion){
        $costo = ($duracion <= 3) ? 200 : 200 + ($duracion - 3) * 30;
        echo "<h2>Costo de la llamada:</h2>";
        echo "<p>La llamada de $duracion minutos tiene un costo de $$costo.</p>";
    } else {
        echo "Por favor, ingresa una duración válida en minutos.";
    }
}

?>

