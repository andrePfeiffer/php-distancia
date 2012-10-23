<?php
header('Content-Type: text/html; charset=utf-8');

$acesso = 1;
echo 'usuário ';
echo ($acesso > 0) ? 'registrado' : 'não registrado';

echo '<br><hr><br>';

if($acesso > 0){
    echo 'usuário registrado';
}else{
    echo 'usuário não registrado';
}