<?php
header('Content-Type: text/html; charset=utf-8');

$nome = 'André Pfeiffer';

$iparos = <<<QQC
Exemplo de variável definida pela sintaxe heredoc<br />
É possível expandir variáveis: $nome;
QQC;

echo $iparos;
