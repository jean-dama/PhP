<?php 

    class Caneta {

        public $modelo;
        public $ponta;
        private $carga;
        public $cor;
        public $tampada;


        public function __construct($m,$c,$p) {//estamos estabelecendo que todas as tampas serao criadas com cor azul e tampadas true
            $this->cor = $c;
            $this->modelo = $m;
            $this->ponta = $p;
            //$this->cor = "Azul";
            $this->Tampar();
        }

        public function Tampar () {
            $this->tampada = true;
        }

        public function getModelo() {
            return $this->modelo;
        }

        public function setModelo($m) {
            $this->modelo = $m;
        }

        public function getPonta() {
            return $this->ponta;
        }

        public function setPonta($p) {
            $this->ponta = $p;
        }

    }
    
    
    ?>