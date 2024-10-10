<?php
include_once ("pessoa.php");

class amigo extends pessoa{

    private $diaDoAniversario;

    function __construct($nome,$sexo,$idade,$aniversario)
    {
        parent::__construct($nome,$sexo,$idade);
     
            $this->set_aniversario($aniversario);
        
    }

    function get_aniversario(){
        return $this->diaDoAniversario;
    }

    function set_aniversario($aniversario){
        $this->diaDoAniversario = $aniversario;
    }
}
?>