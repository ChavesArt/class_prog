<?php

class cartaoCredito extends pagamento{


    function __construct($valor,$data)
    {
        parent::__construct($valor,$data);
    }
    function processarProduto()
    {
        echo "O pagamento no valor de {$this->valor} realizado com cartão de crédito na data " . $this->data . ".";
    }
}