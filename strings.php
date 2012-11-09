<?php

$texto = 'O rato roeu a roupa do rei de Roma';

// contagem
echo strlen($texto);
echo '<br>';
echo substr_count($texto, 'r');

echo '<br><hr><br>';

// localização
echo substr($texto, 2, 4);
echo '<br>';
echo strpos($texto, 'r');
echo '<br>';
echo strpos($texto, 'R');
echo '<br>';
echo strrpos($texto, 'R');
echo '<br>';
echo strrpos($texto, 'r');
echo '<br>';
echo stripos($texto, 'R');
echo '<br>';
echo strripos($texto, 'r');

echo '<br><hr><br>';

// substitução
echo str_replace(' ', '', $texto);
echo '<br>';
echo str_replace('r', '$', $texto);
echo '<br>';
echo str_ireplace('r', '$', $texto);

echo '<br><hr><br>';

// modificação
echo rtrim($texto);
echo '<br>';
echo ltrim($texto);
echo '<br>';
echo trim($texto);
echo '<br>';
echo strtoupper($texto);
echo '<br>';
echo strtolower($texto);
echo '<br>';
echo ucfirst($texto);
echo '<br>';

