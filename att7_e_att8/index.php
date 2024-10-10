<?php


include_once "funcionario.php";
include "amigo.php";

// att 7

$a1 = new amigo("João","Masculino","33","12/01");
echo "<pre>";
echo "att7";
echo "<br>";
echo "<br>";
echo "Amigo.";
echo "<br>";
echo "nome: " . $a1->get_nome();
echo "<br>";
echo "sexo: " . $a1->get_sexo();
echo "<br>";
echo "idade: ". $a1->get_idade()." anos";
echo "<br>";
echo "data de aniversário: " . $a1->get_aniversario();
echo "</pre>";
echo "<hr>";

//att 8

$f1 = new funcionario("Zé","Masculino",25,"2013311122",1000);
echo "<pre>";
echo "att 8";
echo "<br>";
echo "<br>";
echo "Funcionario.";
echo "<br>";
echo "nome: " . $f1->get_nome();
echo "<br>";
echo "sexo: " . $f1->get_sexo();
echo "<br>";
echo "idade: ". $f1->get_idade()." anos";
echo "<br>";
echo "Matricula: " .$f1->get_matricula();
echo "<br>";
echo "Sálario do funcionario: ".$f1->get_salario()."R$";
echo "<br>";
echo "Primeira parcela: ".$f1->primeira_parcela()."R$";
echo "<br>";
echo "Segunda parcela: ".$f1->segunda_parcela()."R$";
echo "</pre>";

?>













