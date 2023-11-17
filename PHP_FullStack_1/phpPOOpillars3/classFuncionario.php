<?php 
    require_once('classPerson.php');
    class Funcionario extends Person{

        public $setor;
        public $trabalhando;

        public function MudarFuncao () {
            $this->trabalhando = ! $this->trabalhando;
        }
         
        public function getSetor () {
            return $this->setor;
        }
        public function setSetor ($setor) {
            $this->setor = $setor;
        }
        public function getTrabalhando () {
            return $this->trabalhando;
        }
        public function setTrabalhando ($trabalhando) {
            $this->trabalhando = $trabalhando;
        }   

    }


    ?>