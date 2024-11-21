<?php

include "funcionario.php";
include "gerente.php";
include "operador.php";

echo "<pre>";
$o1 = new operador(1200,"Operêncio");
$o1->get_nome();
$o1->get_salario();
$o1->calcularBonus();
echo "<hr>";
$g1 = new gerente(1200,"Gerêncio");
$g1->get_nome();
$g1->get_salario();
$g1->calcularBonus();
echo "</pre>";