<?php 
    //modelo
    class Funcionario {
        //atributos
        public $nome = null;
        public $telefone = null;
        public $numFilhos = 0;

        //setters
        function setNome($nome){
            $this->nome = $nome;
        }

        function setTelefone($telefone){
            $this->telefone = $telefone;
        }

        function setNumFilhos($numFilhos){
            $this->numFilhos = $numFilhos;
        }

        //getters
        function getNome(){
            return $this->nome;
        }

        function getTelefone(){
            return $this->telefone;
        }

        function getNumFilhos(){
            return $this->numFilhos;
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
    $func1->setNome('Daniel');
    $func1->setTelefone('11 948307817');
    $func1->setNumFilhos(1);

    echo $func1->resumirCadFunc();
    '<br>';
    /////////////////////////////////
    $func2 = new Funcionario();
    $func2->setNome('Gustavo');
    $func2->setTelefone('37747305');
    $func2->setNumFilhos(0);

    echo $func2->resumirCadFunc();
?>