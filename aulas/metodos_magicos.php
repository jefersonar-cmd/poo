<?php

/*
Métodos Mágicos:
clone*
construct*
invoke
tostring
get
set
*/


class Pessoa {
     private $dados = [];

     // __set
     public function __set($nome, $valor) {
          $this->dados[$nome] = $valor;
     }
     // __get
     public function __get($nome){
          return $this->dados[$nome];
     }
     // __toString
     public function __toString(){
          return "Tentei imprimir o objeto.";
     }
     public function __invoke()
     {
          return "Objeto como função.";
     }
}

$pessoa = new Pessoa();
$pessoa->nome = 'Danillo';
$pessoa->idade = 50;
$pessoa->sexo = 'Masculino';
var_dump($pessoa);
echo "<br />".$pessoa->nome;
echo "<br />".$pessoa->idade;
echo "<br />".$pessoa->sexo;
echo "<br />".$pessoa;
echo "<br />".$pessoa();