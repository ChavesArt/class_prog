<?php
// include "financeiro.php";

class poupanca extends conta
{
    private $diaRendimento;

    function __construct($saldo,$dr)
    {
        $this->set_saldo($saldo);
        $this->diaRendimento = $dr;
    }

    function set_saldo($s)
    {
        if($s < 0)
        {
            echo "Saldo não suficiente para a poupança.";
        }else
        {
            $this->saldo = $s;
        }
    }

    function sacar($s)
    {
        if($s > $this->saldo)
        {
        echo "Você está sacando mais do que você possue da poupança.<br>";
        }else
        {
           $this->saldo -= $s;
        }
    }

    function get_diaRendimento()
    {
        return $this->diaRendimento;
    }
}
?>