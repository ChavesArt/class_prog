<?php

include 'biblioteca.php';

// Testes das classes

$biblioteca = new Biblioteca("Biblioteca IFFAR");
$livro1 = new Livro("PHP Programando com a Orientação a Objetos", "Pablo Dall´Oglio", 2018);
$livro2 = new Livro("Algoritmos - Teoria e Prática", "Thomas H. Cormen", 2012);
$livro3 = new Livro("Entendo Algoritmos", "Aditya y. Bhargava", 2017);

$biblioteca -> adicionarLivro($livro1);
$biblioteca -> adicionarLivro($livro2);
$biblioteca -> adicionarLivro($livro3);

echo "<br> Lista de livros na biblioteca:<br>";
$biblioteca->listarLivros($livro1);
// echo"<br>";
// $biblioteca->listarLivros($livro2);
// echo"<br>";
// $biblioteca->listarLivros($livro3);

echo "<br>Empréstimo de livro:<br>";
$biblioteca ->emprestarLivro("Algoritmos - Teoria e Prática");
$biblioteca ->emprestarLivro("Entendo Algoritmos");

echo "<br>Lista de livros após empréstimos:<br>";
$biblioteca->listarLivros($livro1,$livro2,$livro3);

echo "<br>Devolução de livro:<br>";
$biblioteca->devolverLivro("Entendo Algoritmos");

echo "<br> Lista de livros após devolução:<br>";
$biblioteca->listarLivros($livro1,$livro2,$livro3);
