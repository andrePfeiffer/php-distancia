<?php

require_once 'servidor.php';

function verifica_login($login){
    $jaTemLogin = consulta_dados("select id from usuarios where login = '$login'");
    if(mysqli_num_rows($jaTemLogin) > 0){
        return true;
    }else{
        return false;
    }    
}