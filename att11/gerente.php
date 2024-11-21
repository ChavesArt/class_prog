<?php

class gerente extends funcionario{

    function __construct($salario,$nome)
    {
        parent::__construct($salario,$nome);
    }
    function calcularBonus()
    {
        echo $bonus = $this->salario * (20/100) + $this->salario;
    }
}