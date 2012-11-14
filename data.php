<?php

echo date('d') . '/' . date('m') . '/' . date('Y');
echo '<br>';
echo date('d/m/Y');
echo '<br><hr><br>';
echo time();
echo '<br><hr><br>';
$agora = time();
$prazo = time() + ((60*60*24) * 30);
echo $prazo;
echo '<br>';
echo date('d/m/Y', $prazo);
echo '<br><hr><br>';
$fim_do_mundo = mktime(0, 0, 0, 12, 21, 2012);
$fim_do_mundo_segundos = $fim_do_mundo - time();
echo date('d/m/Y', $fim_do_mundo);
echo '<br>';
echo 'Faltam ' . number_format($fim_do_mundo_segundos, 0, ',', '.') . ' segundos para o fim do mundo';