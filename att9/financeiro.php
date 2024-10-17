<?php

class conta
{
    protected $saldo;

    function __construct($s)
    {
        $this->saldo = $s;
    }

    function depositar($d)
    {
         $this->saldo += $d;
    }

    function sacar($s)
    {
        if($s > $this->saldo)
        {
        echo "Você está sacando mais do que você possue na CONTA.<br>";
        
        }else
        {
            $this->saldo -= $s;
        }
    }

    function get_saldo()
    {
        return $this->saldo;
    }
    
}

?>