<?php 
    require_once('classPerson.php');
    class Aluno extends Person {
        private $matricula;
        private $curso;

        public function cancelaMatricula () {
            echo 'Matricula Cancelada';
        }
        public function getMatricula () {
            return $this->matricula;
        }
        public function setMatricula ($matricula) {
            $this->matricula = $matricula;
        }
        public function getCurso () {
            return $this->curso;
        }
        public function setCurso ($curso) {
            $this->curso = $curso;
        }
    }
    
    ?>