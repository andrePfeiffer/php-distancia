<?php

require_once 'funcoes/verifica_login.inc.php';
require_once 'funcoes/codifica_senha.inc.php';

if(isset($_POST['nome'])){
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    $confirmaSenha = $_POST['confirma-senha'];
    $aviso = '';
    
    require_once 'servidor.php';
    
    if(empty($nome)){
       $aviso .= 'O nome é um campo obrigatório<br />'; 
    }
    if(empty($email)){
       $aviso .= 'O email é um campo obrigatório<br />'; 
    }
    if(empty($login)){
       $aviso .= 'O login é um campo obrigatório<br />'; 
    }elseif(verifica_login($login)){
        $aviso .= 'O login já existe<br />';
    }
    if(empty($senha)){
       $aviso .= 'A senha é um campo obrigatório<br />'; 
    }elseif($senha != $confirmaSenha){
       $aviso .= 'A confirmação da senha está errada<br />';
    }
    
    if(empty($aviso)){
        $senhaCodificada = codifica_senha($senha);
        
        $token = md5($fraseSecreta . $email);
        $body = "Favor confirme o seu cadastro clicando no link abaixo\n";
        $body .= "http://localhost/phponline/sistema/confirmar-email.php?token=" . $token;
        mail($email, 'Confirmação de cadastro', $body);
        
        consulta_dados("insert into usuarios (nome, sobrenome, email, login, senha, token) 
            values ('$nome', '$sobrenome', '$email', '$login', '$senhaCodificada', '$token')");
        $aviso = 'Sucesso';
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Cadastro de usuários</title>
        <?php include_once 'header.php'; ?>
    </head>
    <body>
        <?php include_once 'menu1.php'; ?>
        <?php if(!empty($aviso)): ?>
            <?php print $aviso; ?>
        <?php endif; ?>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" />
            <br />
            <label for="sobrenome">Sobrenome:</label>
            <input type="text" name="sobrenome" id="sobrenome" />
            <br />
            <label for="email">Email:</label>
            <input type="text" name="email" id="email" />
            <br />
            <label for="login">Login:</label>
            <input type="text" name="login" id="login" />
            <br />
            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha" />
            <br />
            <label for="confirma-senha">Confirmação da senha:</label>
            <input type="password" name="confirma-senha" id="confirma-senha" />
            <br />
            <br />
            <input type="submit" value="cadastrar" />
        </form>
        <?php include_once 'menu2.php'; ?>
    </body>
</html>