<?php

/*
public - fará com que não haja ocultação nenhuma, toda propriedade ou método declarado com public serão acessíveis por todos que quiserem acessá-los

protected - visibildade protected faz com que todos os herdeiros vejam as propriedades ou metodos protegidos como se fossem publicos

private - ao contrário do public, esse modificador faz com que qualquer método ou propriedade seja visivel só e somente pela classe que a declarou
*/


class Veiculo {
     protected $modelo, $cor, $ano;

     private function Andar(){
          echo "Andou<br>";
     }

     public function Parar() {
          echo "Parou<br>";
     }

     public function mostraAndar() {
          $this->Andar();
     }
     public function mostraParar() {
          $this->Parar();
     }
     
}

class Carro extends Veiculo {
     public function ligarLimpador(){
          echo "Limpando em 3 2 1";
     }

     public function setModelo ($m) {
          $this->modelo = $m;
     }

     public function getModelo () {
          return $this->modelo;
     }
}

class Moto extends Veiculo {
     public function darGrau(){
          echo "Dando grau em 3 2 1";
     }
}

$carro = new Carro();
$carro->setModelo('Gol');
echo $carro->getModelo()."<br>";
$carro->mostraAndar();
$carro->mostraParar();
var_dump($carro);