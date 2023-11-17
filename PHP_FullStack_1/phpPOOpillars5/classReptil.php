<?php 
    require_once('classAnimal.php');    
        class Reptil extends Animal {
            private $corescama;
            public function Alimentar() {
                echo 'Insetos';
            }
            public function Locomover() {
                echo 'Correndo em 4 patas';
            }
            public function EmitirSom() {
                echo 'Gritinho';
            }

            public function setCorEscama () {
                return $this->corescama;
            }
            public function getCorEscama ($corescama) {
                $this->corescama = $corescama;
            }
        }

    ?>