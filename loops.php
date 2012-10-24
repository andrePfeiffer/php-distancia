<?php
header('Content-Type: text/html; charset=utf-8');

for($i = 0; $i < 10; $i++){
    echo 'i é igual a ' . $i . '<br>';
}

echo '<br><hr><br>';

for($variavel = 0; $variavel < 10; $variavel++){
    echo 'i é igual a ' . $i . '<br>';
}

echo '<br><hr><br>';
echo 'for<br>';

for($i = 10; $i > 0; $i--){
    echo 'i é igual a ' . $i . '<br>';
}

echo '<br><hr><br>';
echo 'while<br>';

$i = 0;
while($i < 10){
    echo 'i é igual a ' . $i . '<br>';
    $i++;
}

echo '<br><hr><br>';
echo 'do while<br>';

$i = 0;
do{
    echo 'i é igual a ' . $i . '<br>';
    $i++;
}while($i < 10);

echo '<br><hr><br>';
echo 'while<br>';

$i = 10;
while($i < 10){
    echo 'i é igual a ' . $i . '<br>';
    $i++;
}

echo '<br><hr><br>';
echo 'do while<br>';

$i = 10;
do{
    echo 'i é igual a ' . $i . '<br>';
    $i++;
}while($i < 10);