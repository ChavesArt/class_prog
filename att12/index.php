<?php
include "pagamento.php";
include "cartaoCredito.php";
include "boleto.php";

echo "<pre>";

$cC = new cartaoCredito(1200,"28/11/2024");
$cC->processarProduto();

echo "<hr>";

$b = new boleto(1200,"28/11/2024");
$b->processarProduto();

echo "</pre>";
?>