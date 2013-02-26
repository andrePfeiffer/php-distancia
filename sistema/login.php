<?php session_start();

require_once 'funcoes/verifica_login.inc.php';
require_once 'funcoes/codifica_senha.inc.php';
require_once 'servidor.php';

if(isset($_GET['msg'])){
    if($_GET['msg'] == 'semAcesso'){
        $aviso = 'Você precisa logar para acessar o sistema<br />';
    }
    if($_GET['msg'] == 'sairSucesso'){
        $aviso = 'Você saiu com sucesso<br />';
    }
}
if(isset($_GET['acao'])){
    if($_GET['acao'] == 'sair'){
        session_destroy();
        unset($_SESSION);
        header("Location: login.php?msg=sairSucesso");
    }
}

if(isset($_POST['login'])){
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    $aviso = '';
    
    if(empty($login)){
        $aviso .= 'O login é obrigatório<br />';
    }elseif(!verifica_login($login)){
        $aviso .= 'O login informado não está cadastrado<br />';
    }
    if(empty($senha)){
        $aviso .= 'A senha é obrigatória<br />';
    }else{
        $usuarioQuery = consulta_dados("select * from usuarios where login = '$login'");
        $usuario = mysqli_fetch_array($usuarioQuery);
        $senhaCodificada = codifica_senha($senha);
        if($senhaCodificada != $usuario['senha']){
            $aviso .= 'A senha informada esta errada<br />';
        }
    }
    
    if(empty($aviso)){
        if($usuario['status'] == 0){
            $aviso .= 'Você precisa confirmar o seu email antes de fazer o login<br />';
        }
    }
    
    if(empty($aviso)){
        $_SESSION['usuario'] = $usuario;
        $aviso = 'sucesso';
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <?php include_once 'header.php'; ?>
    </head>
    <body>
        <?php include_once 'menu1.php'; ?>
        <?php if(!empty($aviso)): ?>
            <?php print $aviso; ?>
        <?php endif; ?>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <label for="login">Login:</label>
            <input type="text" name="login" id="login" />
            <br />
            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha" />
            <br />
            <br />
            <input type="submit" value="login" />
        </form>
        <?php include_once 'menu2.php'; ?>
    </body>
</html>