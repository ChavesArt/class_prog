<?php

class Livro{
    private $titulo;
    private $autor;
    private $anoPublic;
    private $disponivel;

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
    }else{

    }

    }
    function devolver($disponivel){
            $this->disponivel = true;
            echo "O '$this->titulo' foi devolvido.";
    }

    function exibirDetalhes(){
        if($this->disponivel){
            $status = 'Disponível';
        }else{
            $status = 'emprestado';
        }
        echo $this->titulo;
        echo $this->autor;
        echo $this->anoPublic;
    }

    function exibirTitulo(){
        echo $this->titulo;
    }

}
?>