<?php 
    //modelo
    class Funcionario {
        //atributos
        public $nome = 'Daniel';
        public $telefone = '11 948307817';
        public $numFilhos = 0;
        //mêtodos
        function resumirCadFunc(){
            return "$this->nome possui $this->numFilhos filhos";
        }
        function modificarNumFilhos($numFilhos){
            //afetar um atributo do objeto
            $this->numFilhos = $numFilhos;
        }
    }

    $funcionario1 = new Funcionario();
    $funcionario1->modificarNumFilhos(5);
    echo $funcionario1->resumirCadFunc();
?>