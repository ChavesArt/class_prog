<?php
include "class.php";

$empregado_1 = new empregado("João","Silva",1200);


echo $empregado_1->get_nome();
echo "<br>";
echo $empregado_1->get_sobrenome();
echo "<br>";
echo $empregado_1->get_salario();
echo "<br>";
echo $empregado_1->dez();
echo "<br>";
echo $empregado_1->set_nome("Ruan");
echo $empregado_1->get_nome();

?>