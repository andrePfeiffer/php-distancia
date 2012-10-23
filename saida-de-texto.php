<?php
header('Content-Type: text/html; charset=utf-8');

$operador = '!!';
$numero = 13;
echo 'Olá mundo' . ' ' . $numero . $operador;

echo '<br>';

echo "Olá mundo" . " " . $numero . $operador;

echo '<br>';

echo 'Olá mundo $numero$operador';

echo '<br>';

echo "Olá mundo $numero$operador";

echo '<br>';

echo 'Olá mundo ' . $numero . $operador;

echo '<br><pre>';

echo "Olá mundo \n$numero\n$operador";

echo "\n" . 'Olá mundo ' . "\n" . $numero . "\n" . $operador;

echo '</pre><br>';

echo '<a href="http://www.iparos.com.br">iparos</a>';

echo '<br>';

echo "<a href=\"http://www.iparos.com.br\">iparos</a>";

echo '<br>';

echo 'E ele falou: "use \'aspas\' simples"';

