<?php 

    require_once('classPessoa.php');

    class Aluno extends Pessoa {
        public $matricula;
        public $curso;

        public final function pagarMensalidade ( ) {
            echo 'Mensalidade' . $this->nome;
        }
        public function getMatricula () {
            return $this->matricula;
        }
        public function getCurso () {
            return $this->curso;
        }
        public function setMatricula ($matricula) {
            $this->matricula = $matricula;
        }
        public function setCurso ($curso) {
            $this->curso = $curso;
        }
    }
        
    ?>