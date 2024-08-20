<?php
include 'livro.php';

class Biblioteca {
   private $nome;
   private $livros;

   public function __construct($nome) {
       $this->nome = $nome;
       $this->livros = [];
   }

   public function adicionarLivro(Livro $livro) {
       $this->livros[] = $livro;
       echo " Livro '{$livro->exibirTitulo()}' adicionado à biblioteca.<br>";
   }

   public function listarLivros($nome) {
        // CODIFICAR
        foreach($this->livros as $livro){
            echo $livro->exibirDetalhes()."<br>";
        }
        $nome->exibirTitulo();
   }

   public function emprestarLivro($titulo) {
    if(empty($this->livros)){
        echo "Nenhum livro disponível na biblioteca";
    }
       foreach ($this->livros as $livro) {
        echo $livro->exibirTitulo(); 
       }
   }

   public function devolverLivro($titulo) {
       foreach ($this->livros as $livro) {
           if ($livro->exibirTitulo() == $titulo) {
               $livro->devolver();
               return;
           }
       }
       echo " Livro '$titulo' não encontrado na biblioteca.<br>";
   }
} 
?>