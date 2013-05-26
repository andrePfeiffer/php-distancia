<?php session_start();

if(isset($_SESSION['usuario']['id'])){
    if($_SESSION['usuario']['status'] > 0){
        
require_once 'funcoes/codifica_senha.inc.php';
require_once 'servidor.php';
$sucesso = false;

if(isset($_POST['senha-antiga'])){
    $senha_antiga = $_POST['senha-antiga'];
    $senha = $_POST['senha'];
    $confirmaSenha = $_POST['confirma-senha'];
    $usuario_id = $_SESSION['usuario']['id'];
    $aviso = '';
    
    if(empty($senha_antiga)){
        $aviso .= 'A senha antiga é obrigatória<br />';
    }else{
        $usuarioQuery = consulta_dados("select * from usuarios where id = '$usuario_id'");
        $usuario = mysqli_fetch_array($usuarioQuery);
        $senhaCodificada = codifica_senha($senha_antiga);
        if($senhaCodificada != $usuario['senha']){
            $aviso .= 'A senha antiga informada esta errada<br />';
        }
    }
    
    if(empty($senha)){
       $aviso .= 'A nova senha é um campo obrigatório<br />'; 
    }elseif($senha != $confirmaSenha){
       $aviso .= 'A confirmação da nova senha está errada<br />';
    }
    
    if(empty($aviso)){
      $novaSenhaCodificada = codifica_senha($senha);
      consulta_dados("update usuarios set senha = '$novaSenhaCodificada' where id = '$usuario_id'");
      $sucesso = true;
      $aviso = 'sucesso';
    }
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Troca senha</title>
        <?php include_once 'header.php'; ?>
    </head>
    <body>
        <?php include_once 'menu1.php'; ?>
        <?php if(!empty($aviso)): ?>
            <?php print $aviso; ?>
        <?php endif; ?>
      
      <?php if(!$sucesso): ?>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <label for="senha-antiga">Senha antiga:</label>
            <input type="password" name="senha-antiga" id="senha-antiga" />
            <br />
            <label for="senha">Nova senha:</label>
            <input type="password" name="senha" id="senha" />
            <br />
            <label for="confirma-senha">Confirmação da nova senha:</label>
            <input type="password" name="confirma-senha" id="confirma-senha" />
            <br />
            <input type="submit" value="trocar senha" />
        </form>
        <?php include_once 'menu2.php'; ?>
      <?php endif; ?>
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