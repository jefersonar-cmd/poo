<?php

// Agregação
// Na agregação, uma classe precisa de outra para executar sua ação, ou seja, uma classe utiliza a outra como parte de si própria.

class Produtos {
     public $name, $valor;

     function __construct($name, $valor) {
          $this->name = $name;
          $this->valor = $valor;
     }
}

class Carrinho {
     public $produtos;

     public function Adiciona (Produtos $produto) {
          $this->produtos[] = $produto;
     }

     public function Exibe() {
          foreach($this->produtos as $produto) {
               echo $produto->name."<br />";
               echo $produto->valor."<hr />";
          }
     }
}

$produto1 = new Produtos("Notebook", "1500");
$produto2 = new Produtos("Mouse", "50");

$carrinho = new Carrinho();
$carrinho->Adiciona($produto1);
$carrinho->Adiciona($produto2);
$carrinho->Exibe();