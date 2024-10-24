<?php

class veiculo
{
    protected $marca;
    protected $modelo;
    protected $ano;

    function __construct($m, $mo, $a)
    {
        $this->set_marca($m);
        $this->set_modelo($mo);
        $this->set_ano($a);
    }

    function set_marca($x)
    {
        return $this->marca = $x;
    }

    function get_marca()
    {
        echo "Marca: " .$this->marca . "<br>";
    }

    function set_modelo($x)
    {
        return $this->modelo = $x;
    }

    function get_modelo()
    {
        echo "Modelo: " . $this->modelo . "<br>";
    }

    function set_ano($x)
    {
        return $this->ano = $x;
    }

    function get_ano()
    {
        echo "Ano:" .  $this->ano . "<br>";
    }

    function exibirInformacoes()
    {
        $this->get_marca();
        $this->get_modelo();
        $this->get_ano();
    }
}
