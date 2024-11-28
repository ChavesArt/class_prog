<?php

class boleto extends pagamento{

    function __construct($valor,$data)
    {
        parent::__construct($valor,$data);
    }

    function processarProduto()
    {
        echo "O pagamento no valor de {$this->valor} realizado via boleto com vencimento em {$this->data}.";
    }
}