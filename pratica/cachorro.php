<?php

class Cachorro extends animal{

    function __construct($nome)
    {
        $this->nome = $nome;
    }
    function latir(){
        echo "O $this->nome está latindo.";
    }
}

?>