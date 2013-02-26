<?php session_start();

if(isset($_SESSION['usuario']['id'])){
    if($_SESSION['usuario']['status'] > 0){
        
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Verifica o login</title>
        <?php include_once 'header.php'; ?>
    </head>
    <body>
        <?php include_once 'menu1.php'; ?>
            Você esta logado.<br />
            <a href="login.php?acao=sair">Clique aqui para sair</a>
        <?php include_once 'menu2.php'; ?>
    </body>
</html>
<?php
    }else{
        header("Location: login.php?msg=semAcesso");
    }
}else{
    header("Location: login.php?msg=semAcesso");
}
?>