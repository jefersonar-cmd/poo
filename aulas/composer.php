<?php

require_once 'composer/vendor/autoload.php';

$produto = new \App\Model\Produto();
$produto->setId(1);
$produto->setNome('Notebook Dell');
$produto->setDescricao('ryzen 9, 32gb, 512gb, RTX 3080');

$produtoDao = new \App\Model\ProdutoDao();
//$produtoDao->update($produto);
//$produtoDao->create($produto);
//$produtoDao->delete($produto);

foreach($produtoDao->read() as $produto):
     echo $produto['nome']."<br />".$produto['descricao']."<hr />";
endforeach;