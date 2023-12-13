<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Áreas</title>
</head>
<body>

<form method="post" action="">
    <label for="forma">SELECIONA UNA FORMAS</label>
    <select name="forma" id="forma" required>
        <option value="circulo">Círculo</option>
        <option value="cuadrado">Cuadrado</option>
        <option value="triangulo">Triángulo</option>
    </select>
    <br><br>
    <label for="dimension1">DIMENSION 2:</label>
    <input type="text" name="dimension1" id="dimension1" required>
    <br><br>
    <label for="dimension2">DIMENSION 2: </label>
    <input type="text" name="dimension2" id="dimension2">
    <br><br>
    <button type="submit">CALCULAR ARÉA</button>
</form>

</body>
</html>

<?php
function calcularAreaCirculo($radio) {
    $area = M_PI * pow($radio, 2);
    return $area;
}


function calcularAreaCuadrado($lado) {
    $area = pow($lado, 2);
    return $area;
}


function calcularAreaTriangulo($base, $altura) {
    $area = 0.5 * $base * $altura;
    return $area;
}

if(isset($_POST['forma']) && isset($_POST['dimension1']) && isset($_POST['dimension2'])){
    $forma = $_POST['forma'];
    $dimension1 = $_POST['dimension1'];
    $dimension2 = $_POST['dimension2'];

    if(is_numeric($dimension1) && $dimension1 > 0 && is_numeric($dimension2) && $dimension2 > 0){
       
        switch ($forma) {
            case 'circulo':
                $area = calcularAreaCirculo($dimension1);
                $mensajeForma = 'Círculo';
                $mensajeDimension = "Radio: $dimension1";
                break;
            case 'cuadrado':
                $area = calcularAreaCuadrado($dimension1);
                $mensajeForma = 'Cuadrado';
                $mensajeDimension = "Lado: $dimension1";
                break;
            case 'triangulo':
                $area = calcularAreaTriangulo($dimension1, $dimension2);
                $mensajeForma = 'Triángulo';
                $mensajeDimension = "Base: $dimension1, Altura: $dimension2";
                break;
            default:
                $area = 0;
                $mensajeForma = 'Forma no válida';
                $mensajeDimension = '';
        }

      
        echo "<h2>Área de $mensajeForma</h2>";
        echo "<p>$mensajeDimension</p>";
        echo "<p>El área es: $area</p>";
    } else {
        echo "Por favor, ingresa dimensiones válidas (números positivos).";
    }
}

?>

