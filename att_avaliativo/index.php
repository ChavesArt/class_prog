<?php
include_once ("veiculo.php");
include_once ("carro.php");
include_once ("moto.php");


$c1 = new carro(4,'Toyota','Corolla',2020);
echo "<b>Carro</b><br>";
$c1->exibirInformacoes();

echo "<hr>";

$m1 = new moto('689 cc','Yamaha','MT-07',2021);
echo "<b>Moto</b><br>";
$m1->exibirInformacoes();
?>