<?php

abstract class Banco {
     protected $saldo, $limiteSaque, $juros;

     public function setSaldo ($s) {
          $this->saldo = $s;
     }

     public function getSaldo () {
          return $this->saldo;
     }

     abstract protected function Sacar ($s);
     abstract protected function Depositar($d);
}

class Itau extends Banco {
     public function Sacar ($s) {
          $this->saldo -= $s;
          echo "<hr> Sacou: R$".$s;
     }

     public function Depositar ($d) {
          $this->saldo += $d;
          echo "<hr> Depositou: R$".$d;
     }
}

$itau = new Itau();
$itau->setSaldo(1000);
echo "<hr> Seu saldo: R$".$itau->getSaldo();
$itau->Sacar(250);
echo "<hr> Seu saldo: R$".$itau->getSaldo();
$itau->Depositar(850);
echo "<hr> Seu saldo: R$".$itau->getSaldo();