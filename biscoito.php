<?php
header('Content-Type: text/html; charset=utf-8');

if(!empty($_GET['cor'])){
    $cor = $_GET['cor'];
    setcookie('cor', $cor, time()+10);
    header('Location: biscoito.php');
}
if(!empty($_GET['acao'])){
    if($_GET['acao'] == 'limpar'){
        setcookie('cor', '', time()-3600);
        header('Location: biscoito.php');
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Trabalhando com cookies</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <?php if(!empty($_COOKIE['cor'])): ?>
            Sua cor favorita é <?php print $_COOKIE['cor']; ?>
            <br />
            <a href="biscoito.php?acao=limpar">definir nova cor</a>
        <?php else: ?>
            <form action="biscoito.php" method="get">
                Sua cor favorita:
                <input type="text" name="cor" />
                <br />
                <input type="submit" value="enviar" />
            </form>
        <?php endif; ?>
    </body>
</html>
