<?php

include ("produto2.php");

$p1 = new produto;
$p1->descricao = 'Bisnaguinha';
$p1->estoque = 30;
$p1->preco = 4.5;
$p1->codigo = 001;
$p1->marca = 'Senven Boys';
$p1->cor_embalagem = 'Vermelho';
$p1->prazo_validade = '27/10/2024';
$p1->peso_embalagem = '5g';
$p1->peso_produto = 300;
echo"O estoque de {$p1->descricao} é {$p1->estoque}.<br>";
echo"O preço de {$p1->descricao} é {$p1->preco}.<br>";

$p1 ->aumentarEstoque(10);
$p1 ->diminuirEstoque(5);
$p1 ->reajustarPreco(50);


echo"O estoque de {$p1->descricao} é {$p1->estoque}.<br>";
echo"O preço de {$p1->descricao} é {$p1->preco}.<br>";


$p2 = new produto;
$p2->descricao = 'Nutella';
$p2->estoque = 45;
$p2->preco = 9.5;
$p2->codigo = 002;
$p2->marca = 'Nutella';
$p2->cor_embalagem = 'Marrom';
$p2->prazo_validade = '10/11/2024';
$p2->peso_embalagem = '15g';
$p2->peso_produto = 500;









$p3 = new produto;
$p3->descricao = 'Água Mineral';
$p3->estoque = 30;
$p3->preco = 7.5;
$p3->codigo = 003;
$p3->marca = 'Floresta';
$p3->cor_embalagem = 'Branca';
$p3->prazo_validade = '12/12/2026';
$p3->peso_embalagem = '10g';
$p3->peso_produto = 500;
?>