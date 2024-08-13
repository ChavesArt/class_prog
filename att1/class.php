<?php

class Caneta{
    // atributos (características)
    var $modelo,$cor,$ponta,$carga,$tampada;
    // metodos(comportamentos)
    function rabiscar(){
        if($this->tampada == true){
            echo"<br> Impossível rabiscar";
        }else{

            echo "<br>Estou rabiscando..";
        }
            
    }
    function tampar(){
        $this ->tampada = true;
        
    }
    function destampar(){
        $this ->tampada = false;
        
    }
 }
?>