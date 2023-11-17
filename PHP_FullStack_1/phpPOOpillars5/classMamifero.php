<?php 
    require_once('classAnimal.php');
    class Mamifero extends Animal {
        private $corpelo;
        public function Alimentar() {
            echo 'Mama';
        }
        public function Locomover(){
            echo 'Corre';
        }
        public function EmitirSom() {
            echo 'Som com a garganta';
        }
        public function getCorPelo ()  {
            return $this->corpelo;
        }
        public function setCorPelo ($corpelo) {
            $this->corpelo = $corpelo;
        }
    }
    
    ?>