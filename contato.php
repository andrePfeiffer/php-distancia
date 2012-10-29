<?php


if (isset($_POST['nome'])) {
    $aviso = '';
    
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $area = $_POST['area'];
    $mensagem = $_POST['mensagem'];
    
    if(empty($nome)){
        $aviso .= 'Favor preencher o nome<br />';
    }
    if(empty($email)){
        $aviso .= 'Favor preencher o email<br />';
    }
    if(empty($area)){
        $aviso .= 'Favor preencher a area<br />';
    }
    if(empty($mensagem)){
        $aviso .= 'Favor preencher a mensagem<br />';
    }
    
    if(empty($aviso)){
        $aviso .= 'Recebemos sua mensagem. Dados enviados<br />';
        $aviso .= 'Nome: ' . $nome . '<br />';
        $aviso .= 'Email: ' . $email . '<br />';
        $aviso .= 'Mensagem: ' . $mensagem . '<br />';
    }
}else{
    $aviso = 'Você não enviou o formulário';
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <?php echo $aviso; ?>
    </body>
</html>
