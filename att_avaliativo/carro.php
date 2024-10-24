<?php

class carro extends veiculo
{

    private $numPortas;

    function __construct($num, $marca, $modelo, $ano)
    {
        parent::__construct($marca, $modelo, $ano);
        $this->set_numPortas($num);
    }

    function set_numPortas($x)
    {
        $this->numPortas = $x;
    }

    function get_numPortas()
    {


        echo "Número de portas: " . $this->numPortas . "<br>";
    }

    function exibirInformacoes()
    {
        parent::exibirInformacoes();
        // echo $this->get_marca();
        // echo $this->get_modelo();
        // echo $this->get_ano();
        echo  $this->get_numPortas();
    }
}
