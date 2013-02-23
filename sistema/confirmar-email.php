<?php
$sucesso = false;
if(!empty($_GET['token'])){
    $token = $_GET['token'];
    require_once 'servidor.php';
    $verificaToken = consulta_dados("select id from usuarios where token = '$token'");
    if(mysqli_num_rows($verificaToken) > 0){
        consulta_dados("update usuarios set status = 1 where token = '$token'");
        $sucesso = true;
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Confirmação de email</title>
        <?php include_once 'header.php'; ?>
    </head>
    <body>
        <?php include_once 'menu1.php'; ?>
        <?php if($sucesso): ?>
            Você confirmou com sucesso o seu login.<br />
            <a href="login.php">Clique para entrar</a>
        <?php else: ?>
            Ocorreu algum problema ao confirmar o email<br />
            Envie um email para: <a href="mailto:andre@pfeiffer.com.br">andre@pfeiffer.com.br</a>
        <?php endif; ?>
        <?php include_once 'menu2.php'; ?>
    </body>
</html>