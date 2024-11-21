<?php

class funcionario{

    protected $nome;
    protected $salario;
    function __construct($salario,$nome)
    {
        $this->set_salario($salario);
        $this->set_nome($nome);
    }

    function get_nome(){
        echo $this->nome . "<br>";
    }

    function get_salario(){
        echo $this->salario . "<br>";
    }

    function set_salario($sal){
        $this->salario = $sal;
    }
    function set_nome($nome){
        $this->nome = $nome;
    }
    function calcularBonus(){
        echo 0;
    }
}