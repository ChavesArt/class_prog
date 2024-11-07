<?php
include "itemBiblioteca.php";
include "livro.php";
include "revista.php";

echo "<pre>";
$l1 = new livro("Dom Quixote","16/01/1605","Miguel de Ceravantes");
$l1->getInformacoesCompleta();

echo "<hr>";

$r1= new revista("Dom Quixote","12/06/1605","13454542343232");
$r1->getInformacoesCompleta();

echo "</pre>"
?>