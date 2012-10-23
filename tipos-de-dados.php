<?php

// numeros inteiros
$variavel = 13;
echo is_integer($variavel);
echo '<br>';

// numeros com ponto flutuante
$variavel = 13.10;
echo is_float($variavel);
echo '<br>';

// strings
$variavel = 'André Pfeiffer';
$variavel = "André Pfeiffer";
echo is_string($variavel);
echo '<br>';

// boleanos - bool
$variavel = true;
$variavel = false;
echo is_bool($variavel);
echo '<br>';

// arrays
$variavel = array(1, 2, 3, 10.1, 'André', true);
echo is_array($variavel);
echo '<br>';

//objetos
//$variavel = new Objeto();

//recursos
$variavel = mysql_connect('localhost', 'root');
echo is_resource($variavel);
echo '<br>';

// nulo
$variavel = null;
echo is_null($variavel);
echo '<br>';

echo gettype($variavel);


