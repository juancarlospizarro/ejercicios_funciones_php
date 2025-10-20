<?php // src/functions.php

/**
 * Esa línea activa el modo de comprobación estricta de tipos (strict typing) en PHP.
Se coloca al principio del archivo y le dice al intérprete que debe respetar exactamente los tipos de datos indicados en las funciones.
 */
//declare(strict_types=1);

function esPar($a){
    $resultado = "No es par";
    if($a % 2 == 0){
        $resultado = "Es par";
    }
    return $resultado;
}

function multiplicarNumeros(array $nums){
    $resultado = 1;
    for($i = 0; $i < sizeof($nums); $i++){
        $resultado *= $nums[$i];
    }
    return $resultado;
}

function crearAlerta($mensaje){
    echo "<script>alert('$mensaje')</script>";
}


function buscarPalabra($texto, $palabra){
    $existe = false;
    $texto = strtolower($texto);
    $palabra = strtolower($palabra);
    if(strpos($texto, $palabra)){
        $existe = true;
    }
    if($existe){
        $respuesta = "La palabra se encuentra en el texto";
    }else{
        $respuesta = "La palabra no se encuentra en el texto";
    }
    return $respuesta;
}


function contarPalabras($texto){
    return str_word_count($texto);
}





?>