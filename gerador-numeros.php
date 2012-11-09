<?php
if(isset($_GET['minimo']) && isset($_GET['maximo']) && isset($_GET['quantidade'])){
    
    echo '<a href="gerador-numeros.php">voltar</a><br />';
    
    $minimo = $_GET['minimo'];
    $maximo = $_GET['maximo'];
    $quantidade = $_GET['quantidade'];
    
    for($i = 0; $i < $quantidade; $i++){
        echo mt_rand($minimo, $maximo) . ' ';
    }
}else{
?>
<a href="gerador-numeros.php?minimo=10&maximo=19&quantidade=10000">gerar do 10 ao 19</a><br />
<a href="gerador-numeros.php?minimo=20&maximo=29&quantidade=10000">gerar do 20 ao 29</a><br />
<a href="gerador-numeros.php?minimo=30&maximo=39&quantidade=10000">gerar do 30 ao 39</a><br />
<a href="gerador-numeros.php?minimo=10&maximo=99&quantidade=10000">gerar do 10 ao 99</a><br />
<?php
}
?>
