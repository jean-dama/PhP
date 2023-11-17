<?php 
    require_once('classAnimal.php');
     class Peixe extends Animal {
        private $cor;
        public function Alimentar(){
            echo 'Coisas do mar';
        }
        public function Locomover() {
            echo 'Nadando';
        }
        public function EmitirSom() {
            echo 'Nao faz som';
        }
        public function getCor () {
            return $this->cor;
        }
        public function setCor ($cor) {
            $this->cor = $cor;
        }

     }
    ?>