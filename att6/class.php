<?php

class empregado{

   public $nome;
   public $sobrenome;
   public $sal_mensal;

  function __construct($n,$sobnome,$salario){
    $this->nome = $n;
    $this->sobrenome = $sobnome;
    $this->set_sal_mensal($salario);
   }

   function set_nome($n){
     $this->nome = $n;
   }

   function set_sobrenome($s){
     $this->sobrenome = $s;
   }

   function set_sal_mensal($m){
    
    if($m <0){  $this->sal_mensal = 0;}
    
    else{ $this->sal_mensal = $m;}
    
   }

   function dez(){
   if($this->sal_mensal <0){$this->sal_mensal = 0;}
    return $porcentagem = $this->sal_mensal * (10/100) + $this->sal_mensal;
   }

   function get_nome(){
       return $this->nome;
    }

    function get_sobrenome(){
        return $this->sobrenome;
    }

    function get_salario(){
        return $this->sal_mensal;
    }
}
    ?>