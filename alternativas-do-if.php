<?php
header('Content-Type: text/html; charset=utf-8');

$idade = 18;
$nacionalidade = 'brasileira';


if($idade >= 18 && $nacionalidade != 'brasileira'){
    echo 'Seja bem vindo';
}elseif($idade < 18){
    echo 'Você precisa ter 18 anos ou mais';
}elseif($nacionalidade == 'brasileira'){
    echo 'Em breve estaremos chegando no Brasil';
}else{
    echo 'Você não tem acesso a isto';
}

echo '<br><hr><br>';

if($idade >= 18 && $nacionalidade != 'brasileira'){
    echo 'Seja bem vindo';
}
elseif($idade < 18){
    echo 'Você precisa ter 18 anos ou mais';
}
elseif($nacionalidade == 'brasileira'){
    echo 'Em breve estaremos chegando no Brasil';
}
else{
    echo 'Você não tem acesso a isto';
}

echo '<br><hr><br>';

if($idade >= 18 && $nacionalidade != 'brasileira')
{
    echo 'Seja bem vindo';
}
elseif($idade < 18)
{
    echo 'Você precisa ter 18 anos ou mais';
}
elseif($nacionalidade == 'brasileira')
{
    echo 'Em breve estaremos chegando no Brasil';
}
else
{
    echo 'Você não tem acesso a isto';
}

echo '<br><hr><br>';

if($idade >= 18 && $nacionalidade != 'brasileira'):
    echo 'Seja bem vindo';
elseif($idade < 18):
    echo 'Você precisa ter 18 anos ou mais';
elseif($nacionalidade == 'brasileira'):
    echo 'Em breve estaremos chegando no Brasil';
else:
    echo 'Você não tem acesso a isto';
endif;

echo '<br><hr><br>';

if(1 == 1) echo '1 é igual a 1'; 
if(1 == 1){ echo '1 é igual a 1'; } 
