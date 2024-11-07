<?php

class livro extends ItemBiblioteca{
    private $autor;

    function __construct($titulo,$ano,$autor)
    {
        parent::__construct($titulo,$ano);
        $this->set_autor($autor);
    }

    function get_autor(){
        return  $this->autor;
    }

    function set_autor($x){
        
        $this->autor = $x;

    }

    function getInformacoesCompleta(){
        parent::get_informacoes();
        echo "Autor: ". $this->get_autor().".<br>";
    }

}