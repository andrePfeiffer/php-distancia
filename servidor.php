<?php

if($_SERVER['SERVER_NAME'] == 'localhost' || $_SERVER['SERVER_NAME'] == '127.0.0.1'){
    define('DB_HOST', 'localhost', true);
    define('DB_USER', 'root', true);
    define('DB_PASS', '', true);
    define('DB_BASE', 'phponline', true);
}elseif($_SERVER['SERVER_NAME'] == 'ctiparos.com.br' || $_SERVER['SERVER_NAME'] == 'www.ctiparos.com.br'){
    define('DB_HOST', 'localhost', true);
    define('DB_USER', 'ctiparos_iparos', true);
    define('DB_PASS', 'rostie2006', true);
    define('DB_BASE', 'ctiparos_phponline', true);
}

mysql_connect(DB_HOST, DB_USER, DB_PASS) or die(mysql_error());
mysql_select_db(DB_BASE) or die(mysql_error());

function consulta_dados($query){
    $resultado = mysql_query($query) or die(mysql_error());
    return $resultado;
}

$query = consulta_dados("select * from livros");

while($livros = mysql_fetch_array($query)){
    echo $livros['titulo'] . '<br />';
}

