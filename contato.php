<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        Obrigado por entrar em contato conosco!
        <br />
        <?php if(isset($_POST['nome'])){ ?>
        <?php echo $_POST['nome']; ?><br />
        <?php echo $_POST['email']; ?><br />
        <?php echo $_POST['area']; ?><br />
        <?php echo $_POST['mensagem']; ?><br />
        <?php } ?>
    </body>
</html>
