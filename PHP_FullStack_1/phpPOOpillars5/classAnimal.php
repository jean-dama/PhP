<?php 

    abstract class Animal {//aqui estamos delimitando que a classe é abstrata e os metodos podem ser sobescritos
        protected $peso;
        protected $idade;
        protected $membros;
        
        abstract function Locomover ();
        abstract function Alimentar ();
        abstract function EmitirSom ();

        public function getPeso () {
            return $this->peso;            
        }
        public function getIdade () {
            return $this->idade;
        }
        public function getMembros () {
            return $this->membros;
        }
        public function setPeso ($peso) {
            $this->peso = $peso;
        }
        public function setIdade ($idade) {
            $this->idade = $idade;
        }
        public function setMembros ($membros) {
            $this->membros = $membros;
        }
    }

    ?>