<?php

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
