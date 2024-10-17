<?php
include "financeiro.php";
include "poupanca.php";

echo "<pre>";
$c1 = new conta(0);
echo $c1->get_saldo();
echo"<br>";
$c1->depositar(10000);
echo $c1->get_saldo();
echo"<br>";
$c1->sacar(15000);
echo $c1->get_saldo();
echo"<br>";
echo "</pre>";
echo"<hr>";
echo "<pre>";
$p1 = new poupanca(0,'20/12/2024');
echo $p1->get_saldo();
echo"<br>";
$p1->depositar(15000);
echo $p1->get_saldo();
echo"<br>";
$p1->sacar(10000);
echo $p1->get_saldo();
echo "</pre>";

?>