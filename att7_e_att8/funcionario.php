<?php
include "pessoa.php";
class funcionario extends pessoa
{
    private $matricula;
    private $salario;

    function __construct($nome, $sexo, $idade, $matricula, $sal)
    {
        parent::__construct($nome, $sexo, $idade);
        $this->set_matricula($matricula);
        $this->set_salario($sal);
    }
    function get_matricula()
    {
        return $this->matricula;
    }

    function set_matricula($matricula)
    {
        $this->matricula = $matricula;
    }

    function get_salario()
    {
        return $this->salario;
    }

    function set_salario($sal)
    {
        if ($sal < 0) {
            $this->salario = 0;
        } else {
            $this->salario = $sal;
        }
    }

    function primeira_parcela()
    {
        if ($this->salario == 0) {
            echo "Não há parcela";
            die("Coloque um valor válido no sálario");
        } else {
            $primeiro_salario = $this->salario * (60 / 100);
        }
        return $primeiro_salario;
    }

    function segunda_parcela()
    {
        if($this->salario == 0){
            echo "Coloque um valor válido no sálario";
        }else{
           return $segunda_parcela = $this->salario * (40/100);
        }
    }
}

?>