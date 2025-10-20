<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index A - Funciones</title>
</head>
<body>
    <?php require_once __DIR__ . '/funciones.php'; 
    echo "Resultado de sumar(5,3): " . sumar(5, 3) . "<br>";
    echo "Resultado de saludar(Juan Carlos): " . saludar('Juan Carlos') . "<br>";
    //No existe la función esPar en funciones.php
    if(function_exists('esPar')){
        echo "Resultado de esPar(10): " . (esPar(10) ? "Sí" : "No") . "<br>";
    } else {
        echo "La función esPar no está definida en funciones.php <br>";
    }
    echo "Resultado de factorial(9): " . factorial(9) . "<br>";
    echo "Resultado de sumaTotal(1,3,5,7): " . sumaTotal(1,3,5,7) . "<br>";
    $a = 3;
    $b = 4;
    echo "a = $a <br>";
    echo "b = $b <br>";
    swap($a,$b);
    echo "Resultado de swap(a,b): <br>" . "a = " . $a . "<br> b = " . $b . "<br>";
    $lista = [1,3,4,7,0,10];
    $resultado = stats($lista);
    echo "Resultado del mínimo de stats(1,3,4,7,0,10): " . $resultado[0] . "<br>";
    echo "Resultado del máximo de stats(1,3,4,7,0,10): " . $resultado[1] . "<br>";
    echo "Resultado del media de stats(1,3,4,7,0,10): " . $resultado[2] . "<br>";
    ?>
</body>
</html>