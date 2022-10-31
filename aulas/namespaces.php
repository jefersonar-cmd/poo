<?php

include 'Classes/produto.php';
include 'Models/produto.php';

use models\Produto as productModel;
use classes\Produto as productClass;
$produto = new productClass();
$produto->mostrarDetalhes();

echo "<br>";

$produto2 = new productModel();
$produto2->mostrarDetalhes();