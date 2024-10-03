<?php
include "amigo.php";
$a1 = new amigo("João","Masculino","33","12/01");

echo $a1->get_nome();
echo "<br>";
echo $a1->get_sexo();
echo "<br>";
echo $a1->get_idade();
echo "<br>";
echo $a1->get_aniversario();
?>