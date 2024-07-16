<?php
// define os atributos
include "class.php";
$c1 = new Caneta;
$c1-> cor ="Azul";
$c1->ponta = 0.5;
$c1->tampada = false;
// acessa os métodos
$c1->tampar();
$c1->rabiscar();

?>