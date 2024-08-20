<?php

class data {

    private $dia;
    private $mes;
    private $ano;

    function __construct($dia,$mes,$ano)
    {   
        $this->trocarDia($dia);   
        $this->trocarMes($mes);    
        $this->trocarAno($ano);    
        
    }

    function exibirData(){
        echo $this->exibirDia()."/". $this->exibirMes()."/".$this->exibirAno();
    }

    function trocarMes($mes){
       // seta o mês
        
       if($mes > 0 and $mes < 13)
       {
           $this ->mes = $mes;
       }
       if($mes < 0 or $mes > 13)
       {
           echo "Data inválida";
       }

    }

    function trocarDia($dia){
        if($dia > 0 and $dia < 31)
        {
            $this ->dia = $dia;
        }
        if($dia < 0 or $dia > 31)
        {
            echo "Data inválida";
        }

    }

    function trocarAno($ano){
        // seta o ano
        
        if(strlen($ano) == 4 )
        {
            $this ->ano = $ano;
        }else{
            echo "Ano Inválido.";
        }
    }

    function exibirDia(){
        return $this->dia;
    }

    function exibirMes(){
        return $this->mes;
    }

    function exibirAno(){
        return $this->ano;
    }

    function AvancaData(){

        if($this->dia == 31){
            $this->dia = 1;
        }

        if($this->mes == 12){
            $this->mes = 1;
            $this->ano = $this->ano + 1;
        }

        $this->exibirData();
    }

}

?>