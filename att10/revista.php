<?php

class revista extends ItemBiblioteca{

    private $edicao;

    function __construct($t,$ano,$edicao)
    {
        parent::__construct($t,$ano);
        $this->set_edicao($edicao);
    }

    function get_edicao(){
        return $this->edicao;
    }

    function set_edicao($x){
        
        if($x < 0){
            echo "Número inválido.";
            die;
        }else{
            $this->edicao = $x;
        }
    }

    function getInformacoesCompleta(){
        parent::get_informacoes();
        echo"Edição: ".$this->get_edicao().".<br>";
    }
}


?>