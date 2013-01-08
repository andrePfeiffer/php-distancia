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

$db_link = mysqli_connect(DB_HOST, DB_USER, DB_PASS) or die(mysql_error());
mysqli_select_db($db_link, DB_BASE);


function consulta_dados($query){
    global $db_link;
    $resultado = mysqli_query($db_link, $query);
    return $resultado;
}

