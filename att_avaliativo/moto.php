<?php

class moto extends veiculo
{

    private $cilindrada;


    function __construct($cili, $marca, $modelo, $ano)
    {
        parent::__construct($marca, $modelo, $ano);
        $this->set_cilin($cili);
    }

    function set_cilin($x)
    {

        $this->cilindrada = $x;
    }

    function get_cilin()
    {
        echo "Cilindrada: " . $this->cilindrada;
    }

    function exibirInformacoes()
    {
        parent::exibirInformacoes();
        $this->get_cilin();
    }
}
