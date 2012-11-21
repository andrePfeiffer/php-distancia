<?php
header('Content-Type: text/html; charset=utf-8');

$fim_do_mundo = mktime(0, 0, 0, 12, 21, 2012);
$fim_do_mundo_segundos = $fim_do_mundo - time();

function data_por_extenso($time){
    $dias_da_semana = array('Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado');
    $meses = array(
                'Janeiro',
                'Fevereiro',
                'Março',
                'Abril',
                'Maio',
                'Junho',
                'Julho',
                'Agosto',
                'Setembro',
                'Outubro',
                'Novembro',
                'Dezembro',
            );


    return date('d', $time) . ' de ' . $meses[date('m', $time)-1] . ' de ' . date('Y', $time);
}

echo data_por_extenso($fim_do_mundo);
echo '<br>';
echo 'Faltam ' . number_format($fim_do_mundo_segundos, 0, ',', '.') . ' segundos para o fim do mundo';