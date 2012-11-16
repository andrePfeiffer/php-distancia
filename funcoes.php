<?php

function texto_em_negrito($texto, $quebra = '<br />'){
    return '<strong>' . $texto . '</strong>' . $quebra;
}


echo texto_em_negrito('oi');
echo texto_em_negrito('tudo');
echo texto_em_negrito('bem');
echo texto_em_negrito('como');
echo texto_em_negrito('vai', null);

