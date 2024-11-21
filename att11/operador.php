<?php

class operador extends funcionario{

    function __construct($salario,$nome){
        parent::__construct($salario,$nome);
    }
    function calcularBonus()
    {
        echo $bonus = $this->salario * (10/100)+ $this->salario;
    }
}