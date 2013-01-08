<?php
if(isset($_GET['nome'])){
    $nome = $_GET['nome'];
    $url = $_GET['url'];
    $ordem = $_GET['ordem'];
    $aviso = '';
    
    if(empty($nome)){
        $aviso .= 'O nome do link é obrigatório<br />';
    }
    if(empty($url)){
        $aviso .= 'O endereço é obrigatório<br />';
    }
    
    if(empty($aviso)){
        require_once 'servidor.php';
        
        consulta_dados("insert into links (nome, url, ordem) 
            values ('$nome', '$url', '$ordem')");
        
        $aviso = 'Dados enviados com sucesso<br />';
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <?php include_once 'header.php'; ?>
    </head>
    <body>
        <?php include_once 'menu1.php'; ?>
        
        <?php if(!empty($aviso)): ?>
            <?php print $aviso; ?>
        <?php endif; ?>
        
        <table>
            <tr>
                <th>nome do link</th>
                <th>endereço</th>
                <th>ordem</th>
                <th>ações</th>
            </tr>
            <tr>
                <form action="administra-menu.php" method="get">
                    <td><input type="text" name="nome" /></td>
                    <td><input type="text" name="url" /></td>
                    <td><input type="text" name="ordem" /></td>
                    <td>
                        <input type="submit" value="cadastrar" />
                        <input type="button" value="editar" />
                    </td>
                </form>
            </tr>
        </table>
        <?php include_once 'menu2.php'; ?>
    </body>
</html>
