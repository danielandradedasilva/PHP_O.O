<?php 

    class Pai{
        private $nome = 'Daniel';
        protected $sobrenome = 'Andrade';
        public $humor = 'Alegre';
    }

    $pai = new Pai();
    echo $pai->humor;
    $pai->humor = 'Triste';
    echo '<hr>';
    echo $pai->humor;

?>