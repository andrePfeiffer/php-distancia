<?php
require_once 'servidor.php';
$itensQuery = consulta_dados("select * from links order by ordem asc");
?>
        <div id="site">
            <div id="sombra">
                <div id="topo">
                    <div id="nome-do-site">Site em PHP</div>
                </div>
                <div id="main-wrapper">
                    <div id="menu">
                        <ul>
                            <?php while($itens = mysqli_fetch_array($itensQuery)): ?>
                                <li>
                                    <a href="<?php print $itens['url']; ?>">
                                        <?php print $itens['nome']; ?>
                                    </a>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    </div>
                    <div id="conteudo">
