<?php

use Veiculo as GlobalVeiculo;

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
        function trocarMarcha(){
            echo 'Desengatar embreagem com a mão e trocar de marcha com o pé';
        }
    }

    class Caminhao extends Veiculo{}

    
    class Veiculo{
        public $placa = null;
        public $cor = null;

        function acelerar(){
            echo 'Acelerar';
        }
        function freiar(){
            echo 'Freiar';
        }
        function trocarMarcha(){
            echo 'Desengatar embreagem com o pé e engatar marcha com a mão';
        }
    }



    $carro = new Carro('Abcd123','Azul Escuro');
    $carro->trocarMarcha();
    echo ' Carro';
    echo '<hr>';
    $moto = new Moto('dcba321','Vermelho');
    $moto->trocarMarcha();
    echo ' Moto';
    echo '<hr>';
    $caminhao = new Caminhao('fghi4567','Preto');
    $caminhao->trocarMarcha();
    echo ' Caminhão';
?>