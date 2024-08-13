<?php

class Livro{
    public $titulo;
    public $autor;
    public $anoPublic;
    public $disponivel;

    function __construct($titulo,$autor,$anoPublic){
       $this->titulo = $titulo;
       $this->autor = $autor;
       $this->anoPublic = $anoPublic;
       $this->disponivel = true;
    }

    function emprestar($disponivel){
       if($this->disponivel){
        
        $this->disponivel = false;

        echo" O '$this->titulo' foi emprestado.<br>";
    }

    }
    function devolver($disponivel){
        if($this->disponivel == false){
            $this->disponivel = true;
            echo "O '$this->titulo' foi devolvido.";
        }
    }

    function exibirDetalhes(){
        echo $this->titulo;
        echo $this->autor;
        echo $this->anoPublic;
    }

    function exibirTitulo(){
        echo $this->titulo;
    }

}
?>