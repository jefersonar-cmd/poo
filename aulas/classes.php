<?php
// classes

class Pessoa {
     public $nome, $idade;
     public function Falar () {
          echo $this->nome. " de " .$this->idade. " acabou de falar";
     }
}

$rodrigo = new Pessoa();
$rodrigo->nome = 'Rodrigo';
$rodrigo-> idade = 35;
$rodrigo->falar();