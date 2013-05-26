<?php

require_once 'servidor.php';

function verifica_email($email){
    $jaTemEmail = consulta_dados("select id from usuarios where email = '$email'");
    if(mysqli_num_rows($jaTemEmail) > 0){
        return true;
    }else{
        return false;
    }    
}