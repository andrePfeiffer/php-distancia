<?php
/*
 * count() - retorna o número de posições que existe no array
 * 
 * in_array() - retorna verdadeiro se o conteúdo existe no array
 * array_key_exists() - retorna verdadeiro se a posição do array existe
 * isset() - retorna verdadeiro se existe algum conteúdo válido na posição do array
 * 
 * array_pop() - retira um elemento do final do array diminuindo o mesmo
 * array_shift() - retira um elemento do início do array diminuindo o mesmo
 * array_unshift() - adiciona valores no início do array
 * array_push() - adiciona valores no final do array
 * $array[] - adiciona valores no final do array
 * 
 * sort() - ordena o array pelos valores
 * asort() - ordena o array mantendo a associação existente
 * ksort() - ordena o array pelas chaves
 * shufle() - mistura os valores do array
 * 
 * list() - transforma um array em variáveis
 */

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
$dados_pessoais = array(
                        'nome' => 'André', 
                        'sobrenome' => 'Pfeiffer', 
                        'sexo' => 'masculino', 
                        'email' => 'andre@pfeiffer.com.br',
                        'telefone' => null
                );


echo count($meses);

echo '<br><hr><br>';

if(in_array('Janeiro', $meses)){
    echo 'achei!';
}else{
    echo 'não achei!';
}

echo '<br><hr><br>';

if(array_key_exists('telefone', $dados_pessoais)){
    echo 'achei!';
}else{
    echo 'não achei!';
}

echo '<br><hr><br>';

if(isset($dados_pessoais['telefone'])){
    echo 'achei!';
}else{
    echo 'não achei!';
}

echo '<br><hr><br>';

array_pop($dados_pessoais);
array_shift($dados_pessoais);
array_shift($dados_pessoais);
asort($dados_pessoais);
$dados_pessoais['nome'] = 'Andre Pfeiffer';

echo '<pre>';
print_r($dados_pessoais);
echo '</pre>';

echo '<br><hr><br>';

list($janeiro, $fevereiro, , , $maio) = $meses;
echo $janeiro;
echo '<br>';
echo $fevereiro;
echo '<br>';
echo $maio;
