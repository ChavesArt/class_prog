<?php

class ItemBiblioteca{
    private $titulo;
    private $anoPublicacao;

    
    function __construct($t,$ano){
        $this->set_titulo($t);
        $this->set_anoPublicacao($ano);
    }
    
    function get_titulo(){
        return  $this->titulo;
    }

    function get_anoPublicacao(){
        return $this->anoPublicacao;
    }

    function set_titulo($x){
        $this->titulo = $x;
    }

    function set_anoPublicacao($x){

       $data = explode("/",$x);
       if($data[2]<1450){
        echo "Data inválida";
        die;
       }else{
           $this->anoPublicacao = $x;
       }
    }

    function get_informacoes(){
        echo "Título: ".$this->get_titulo().".<br>";
        echo "Ano: ".$this->get_anoPublicacao().".<br>";
    }
}

?>