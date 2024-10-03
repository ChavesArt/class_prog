<?php
include_once ("animal.php");
include_once ("cachorro.php");

$cao = new Cachorro('Rex');
$cao->latir();
echo "<br>";
$cao->dormir();
?>