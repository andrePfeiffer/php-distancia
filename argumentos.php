<?php
header('Content-Type: text/html; charset=utf-8');

function foo(){
    $numero_de_argumentos = func_num_args();
    echo 'Número de argumentos: ' . $numero_de_argumentos . '<br />';
    if($numero_de_argumentos >= 2){
        echo 'O segundo argumento é: ' . func_get_arg(1) . '<br />';
    }
    $argumentos = func_get_args();
    foreach ($argumentos as $variavel => $valor) {
        echo 'Argumento ' . $variavel . ' é: ' . $valor . '<br />';
    }
}

foo(1, 2, 'oi', 'mundo', 10, 2);