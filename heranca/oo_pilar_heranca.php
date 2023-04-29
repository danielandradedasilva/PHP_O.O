<?php 

    class Carro extends Veiculo{

        function __construct($placa, $cor){
            $this->placa = $placa;
            $this->cor = $cor;
        }

        public $tetoSolar = true;

        function acelerar(){
            echo 'Acelerar';
        }
        function abrirTetoSolar(){
            echo 'Abrir Teto Solar';
        }
        function alterarPosicaoVolante(){
            echo 'Alterar Posicao Volante';
        }
    }

    class Moto extends Veiculo{  

          function __construct($placa, $cor){
            $this->placa = $placa;
            $this->cor = $cor;
        }
        
        public $contraPesoGuidao = true;

        function acelerar(){
            echo 'Acelerar';
        }
        function empinar(){
            echo 'Empinar';
        }
    }

    class Veiculo{
        public $placa = null;
        public $cor = null;

        function acelerar(){
            echo 'Acelerar';
        }
        function freiar(){
            echo 'Freiar';
        }
    }


    $carro = new Carro('Abcd123','Azul Escuro');
    $moto = new Moto('dcba321','Vermelho');

    echo'<pre>';
    print_r($carro);
    echo'<br>';
    print_r($moto);
    echo'</pre>';

    echo'<hr>';
    echo 'Moto <br>';
    $moto->acelerar();
    echo '<br>';
    $moto->empinar();
    echo '<br>';
    $moto->freiar();
    echo'<hr>';
    echo 'Carro <br>';
    $carro->acelerar();
    echo '<br>';
    $carro->abrirTetoSolar();
    echo '<br>';
    $carro->freiar();

?>