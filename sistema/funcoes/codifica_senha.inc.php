<?php

function codifica_senha($senha){
    $fraseSecreta = 'aopdjasd8as90udaskdsakdjaskl dasij sdasdsa';
    $senhaCodificada = hash('sha512', $fraseSecreta . $senha);
    return $senhaCodificada;
}