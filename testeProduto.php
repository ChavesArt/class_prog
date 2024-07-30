<?php
include('produto.php');

$p1 = new produto;
$p1->descricao = 'Café';
$p1->estoque = 20;
$p1->preco = 4;

$p2 = new produto;
$p2 ->descricao = 'chocolate';
$p2 ->estoque = 10;
$p2 ->preco = 8;
// Exibição do objeto
print_r($p1);
echo "<br>";
print_r($p2);
?>