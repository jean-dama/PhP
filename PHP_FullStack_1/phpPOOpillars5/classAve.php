<?php 

    require_once('classAnimal.php');
     class Ave extends Animal {

        private $corpena;

        public function Alimentar() {
            echo 'Milho';
        }
        public function Locomover() {
            echo 'Voando';
        }
        public function EmitirSom() {
            echo 'Piu';
        }

     }

    ?>