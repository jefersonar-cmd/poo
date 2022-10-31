<?php
// Herança

class Veiculo {
     public $modelo, $cor, $ano;

     public function Andar(){
          echo "Andou";
     }

     public function Parar(){
          echo "Parou";
     }
}

class Carro extends Veiculo {
     public function ligarLimpador(){
          echo "Limpando em 3 2 1";
     }
}

class Moto extends Veiculo {
     public function darGrau(){
          echo "Dando grau em 3 2 1";
     }
}

$carro = new Carro();
$carro->modelo = "Gol";
$carro->cor = "Vermelho";
$carro->ano = 2018;
$carro->Andar();
echo "<br>";
$carro->ligarLimpador();
echo "<br>";
var_dump($carro);