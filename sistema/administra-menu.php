<?php
require_once 'servidor.php';

if(isset($_GET['acao'])){
    if($_GET['acao'] == 'deletar'){
        $id = (int)$_GET['id'];
        consulta_dados("delete from links where id = $id");
        header("Location: administra-menu.php");
    }
}


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
        if(!empty($_GET['id'])){
            $id = (int)$_GET['id'];
            consulta_dados("update links set nome = '$nome', url = '$url', ordem = '$ordem' where id = $id");
        }else{
            consulta_dados("insert into links (nome, url, ordem) 
            values ('$nome', '$url', '$ordem')");
        }
        header("Location: administra-menu.php");
    }
}

$itensQuery = consulta_dados("select * from links order by ordem asc");

function select_ordem($ordem = 0){
    $saida = '';
    $saida .= '<select name="ordem">';
    for($i = -10; $i <= 10; $i++){
        $saida .= '<option value="' . $i . '"';
        if($i == $ordem){ 
            $saida .= 'selected'; 
        }
        $saida .= '>' . $i . '</option>';
    }
    $saida .= '</select>';
    return $saida;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <?php include_once 'header.php'; ?>
        <script type="text/javascript">
            function deletar(id){
                if(confirm("Você tem certeza que quer deletar este registro?")){
                    window.location = "administra-menu.php?acao=deletar&id=" + id;
                }
            }
        </script>
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
            <?php while($itens = mysqli_fetch_array($itensQuery)): ?>
                <tr>
                    <form action="administra-menu.php" method="get">
                        <input type="hidden" name="id" value="<?php print $itens['id']; ?>" />
                        <td><input type="text" name="nome" value="<?php print $itens['nome']; ?>" /></td>
                        <td><input type="text" name="url" value="<?php print $itens['url']; ?>" /></td>
                        <td><?php echo select_ordem($itens['ordem']); ?></td>
                        <td>
                            <input type="submit" value="editar" />
                            <input type="button" value="deletar" onclick="deletar(<?php print $itens['id']; ?>)" />
                        </td>
                    </form>
                </tr>
            <?php endwhile; ?>
            <tr>
                <form action="administra-menu.php" method="get">
                    <td><input type="text" name="nome" /></td>
                    <td><input type="text" name="url" /></td>
                    <td><?php echo select_ordem(); ?></td>

                    <td>
                        <input type="submit" value="cadastrar um novo item" />
                    </td>
                </form>
            </tr>
        </table>
        <?php include_once 'menu2.php'; ?>
    </body>
</html>
