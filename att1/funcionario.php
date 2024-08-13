<?php 

class funcionario{
    public $nome = "Leandro";
    protected $salario = 1200;
    private $rg = '2487663115';

    public function exibeSalario(){
        echo $this->salario;
    }
    public function alterarSalario($sal){
        if($sal >=0){
            $this->salario = $sal;
            $this->exibeSalario();
        }
    }
}

$f = new funcionario;
echo "$f->nome";
$f->exibeSalario();
$f->alterarSalario(4000);




?>