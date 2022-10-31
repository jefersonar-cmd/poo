<?php

// Associação
// Acontece quando um objeto "utiliza" outro, porém, sem que eles dependam um do outro

class Pedido {
     public $numero, $cliente;
}

class Cliente {
     public $nome, $endereco;
}

$cliente = new Cliente();
$cliente->nome = 'Jefferson';
$cliente->endereco = 'Rua xxx, nº 69';

$pedido = new Pedido();
$pedido->numero = '123';
$pedido->cliente = $cliente;

$dados = array(
     'numero' => $pedido->numero,
     'nome_cliente' => $cliente->nome,
     'endereco' => $cliente->endereco
);

var_dump($dados);