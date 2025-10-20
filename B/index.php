<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index B - Funciones</title>
</head>
<body>
    <?php require_once __DIR__ . '/funciones_b.php';

    echo "Resultado de esPar(14): " . esPar(14) . "<br>";
    $numeros = [12,3,5,9];
    echo "Resultado de multiplicarNumeros(12, 3, 5, 9): " . multiplicarNumeros($numeros) . "<br>";
    $mensaje = "Alerta que se muestra con la función crearAlerta()";
    crearAlerta($mensaje);
    echo "El resultado de crearAlerta($mensaje) se ha mostrado al cargar la página.<br>";

    $texto = "Ayer comí arroz";
    $palabra = "ARROZ";
    echo "Resultado de buscarPalabra($texto, $palabra): " . buscarPalabra($texto, $palabra) . "<br>";

    echo "Resultado de contarPalabras($texto): " . contarPalabras($texto) . "<br>";

    //No existe la función esImpar en funciones.php
    if(function_exists('esImpar')){
        echo "Resultado de esImpar(10): " . (esImpar(10) ? "Sí" : "No") . "<br>";
    } else {
        echo "La función esImpar no está definida en funciones_b.php <br>";
    }
    ?>
</body>
</html>