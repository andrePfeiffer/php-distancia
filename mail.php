<?php
header('Content-Type: text/html; charset=utf-8');

// $body = "Email enviado pelo PHP\nEmail criado na aula da iparos a distância";
$body = '
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <h1>Título</h1><br><strong>Texto em negrito</strong>
    </body>
</html>
';
$email_headers = "Content-type: text/html;charset=utf-8;";
$email_headers .= "\r\nFrom:andre@pfeiffer.com.br";
$email_headers .= "\r\nBcc:andre@iparos.com.br";

mail('andre@pfeiffer.com.br', 'Email enviado pelo PHP', $body, $email_headers);

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Envio de emails pelo PHP</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
    </body>
</html>
