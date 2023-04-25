<?php 
    //modelo
    class Funcionario {
        //atributos
        public $nome = null;
        public $telefone = null;
        public $numFilhos = null;
        public $cargo = null;
        public $salalrio = null;

        //getters setters (overloading / sobrecarga)
        function __set($atributo, $valor) {
            $this->$atributo = $valor;
        }

        function __get($atributo) {
            return $this->$atributo ;
        }

        //mêtodos
        function resumirCadFunc(){
            return "$this->nome possui $this->numFilhos filhos <br>";
        }
        function modificarNumFilhos($numFilhos){
            //afetar um atributo do objeto
            $this->numFilhos = $numFilhos;
        }
        
    }

    $func1 = new Funcionario();
    $func1->__set('nome', 'Andrade');
    $func1->__set('numFilhos', 1);
    $func1->__set('cargo', 'Impressor');
    $func1->__set('salario', 2400);

    echo $func1->__get('nome').' tem '.$func1->__get('numFilhos'). 'filho'. ', trabalha como ' . $func1->__get('cargo') . ', com um salário de R$ ' . $func1->__get('salario');
?>