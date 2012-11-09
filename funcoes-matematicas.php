<?php
/*
for($i = 0; $i < 10000; $i++){
    echo mt_rand(0, 9) . ' ';
}
 */

echo floor(5.9);
echo '<br>';
echo ceil(5.1);
echo '<br>';
echo round(5.1);
echo '<br>';
echo round(5.9);
echo '<br>';
$valor = 12345.91;
echo 'R$ ' . number_format($valor, 2, ',', '.');
echo '<br>';
echo abs(-10);
echo '<br>';
echo abs(10);
echo '<br>';
echo pow(2,4);
echo '<br>';
echo max(1, 3, 4, 6, 7, 10);
echo '<br>';
echo min(1, 3, 4, 6, 7, 10);
echo '<br>';
echo dechex(255);
echo '<br>';
echo hexdec(100);
echo '<br>';
echo decbin(2);
echo '<br>';
echo bindec(101);
