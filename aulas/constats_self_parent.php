<?php

//constantes
class Pessoa {
     const name = 'Antônio';

     public function exibirNome () {
          echo self::name;
     }
}

$pessoa = new Pessoa();
echo "Constante/Self em classe Pessoa:<br>";
$pessoa->exibirNome();
echo "<hr>";

class Jhuan extends Pessoa {
     const name = 'Jhuan';

     public function exibirNome () {
          echo self::name;
     }
}

$jhuan = new Jhuan();
echo "Constante/Self em classe Jhuan:<br>";
$jhuan->exibirNome();
echo "<hr>";

class Jorge extends Pessoa {
     const name = 'Jorge';

     public function exibirNome () {
          echo parent::name;
     }
}

$jorge = new Jorge();
echo "Constante/Parent em classe Jorge:<br>";
$jorge->exibirNome();
echo "<hr>";