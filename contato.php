<?php 
if(!empty($_POST['nome'])){
    $mensagem = '';
    $mensagem .= 'Obrigado por entrar em contato conosco!<br />';
    
    $mensagem .= $_POST['nome'] . '<br />';
    $mensagem .= $_POST['email'] . '<br />';
    $mensagem .= $_POST['area'] . '<br />';
    $mensagem .= $_POST['mensagem'] . '<br />';
    
    $mensagem .= '<br /><a href="formulario.html">voltar</a>';
}else{
    $mensagem = 'Favor preencher corretamente o formulário<br />';
    $mensagem .= '<a href="formulario.html">voltar</a>';
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <?php echo $mensagem; ?>
    </body>
</html>
