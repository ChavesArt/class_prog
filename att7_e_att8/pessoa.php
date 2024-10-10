<?php

class pessoa
{

    protected $nome;
    protected $sexo;
    protected $idade;

    function __construct($nome, $sexo, $idade)
    {
        $this->set_nome($nome);
        $this->set_sexo($sexo);
        $this->set_idade($idade);
    }
    function get_nome()
    {
        return $this->nome;
    }
    function get_sexo()
    {
        return $this->sexo;
    }
    function get_idade()
    {
        return $this->idade;
    }

    function set_nome($nome)
    {
        $this->nome = $nome;
    }
    function set_sexo($sexo)
    {
        $this->sexo = $sexo;
    }
    function set_idade($idade)
    {
        $this->idade = $idade;
    }
}

