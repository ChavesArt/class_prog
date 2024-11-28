<?php

class pagamento{
    protected $valor;
    protected $data;


    function __construct($valor,$data){

        $this->set_valor($valor);
        $this->set_data($data);
    }

    function get_valor(){
        echo $this->valor;
    }

    function get_data(){
        echo $this->data;
    }

    function set_valor($valor){
        $this->valor = $valor;
    }
    
    function set_data($data){
        $this->data = $data;
    }

    protected function processarProduto(){
        echo "Processar pagamento no valor de {$this->valor}";
    }
    
}