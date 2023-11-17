<?php 

    require_once('UmAnimal.php');

    class Mamifero extends UmAnimal {
        protected $corpelo;
        public function emitirSom()
        {
            echo 'Som';
        }
    }

    ?>