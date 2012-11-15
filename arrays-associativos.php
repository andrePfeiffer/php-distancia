<?php

$dados_pessoais = array(
                        'nome' => 'André', 
                        'sobrenome' => 'Pfeiffer', 
                        'sexo' => 'masculino', 
                        'email' => 'andre@pfeiffer.com.br'
                );

echo '<pre>';
print_r($dados_pessoais);
echo '</pre>';

echo '<br><hr><br>';

echo $dados_pessoais['nome'];

/*
$_GET['variavel'];
$_POST['variavel'];
*/
