<?php

$texto = 'oi';

function imprime_texto(){
    global $texto;
    $texto = 'oi mundo!';
}

imprime_texto();

echo $texto;