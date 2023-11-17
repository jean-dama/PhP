<?php 

    require_once('classAluno.php');

    class Bolsista extends Aluno {
        private $bolsa; 
        public function renovarBolsa () {
            echo 'BOlsa';
        }
        public function getBolsa () {
            return $this->bolsa;
        }
        public function setBolsa ($bolsa) {
            $this->bolsa = $bolsa;
        }
    }

    ?>