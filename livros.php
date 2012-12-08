<?php

require_once 'servidor.php';

// insert into
/*
$titulo = 'HTML5 + mobile';
$autor = 'Iparos';
$preco = '999';
$paginas = '99';
consulta_dados("insert into livros (titulo, autor, preco, paginas) 
    values ('$titulo', '$autor', $preco, $paginas)");
*/


// update
/*
consulta_dados("update livros set titulo = 'PHP para iniciantes' where id = 2");
*/


// delete
/*
consulta_dados('delete from livros where id = 8');
 */


// select
$livros_query = consulta_dados("select * from livros");
while($livros = mysqli_fetch_assoc($livros_query)){
    echo '<pre>';
    print_r($livros);
    echo '</pre>';
}