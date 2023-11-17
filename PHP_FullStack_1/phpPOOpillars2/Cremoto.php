<?php 
    require_once ('Control.php');
    class Cremoto implements Control{
        /////
        private $ligado;

        private $mais;

        private $menos;

        private $off;

        function __construct() {
            $this->ligado = false;
            $this->off = false;
            $this->mais ++;  
            $this->menos --;
        }   
        /////
        function getStart () {
            return $this->ligado;
        }
        function getMore() {
            return $this->mais;
        }
        function getLess () {
            return $this->menos;
        }
        function getOff () {
            return $this->off;
        }
        ////
        function setStart ($ligado) {
            $this->ligado = $ligado; 
        }
        function setLess ($menos) { 
            $this->menos = $menos;
        }
        function setMore ($mais) {
            $this->mais = $mais;
        }
        function setOff () {
            $this->ligado = false;
        }
        ///
        public function Start() {
            $this->ligado = true;   
        }
        public function Off() {
            $this->off = false;  
        }
        public function More() {
            if($this->Start()){
                $this->setStart($this->getMore() + 1);
            }
        }
        public function Less() {
            if($this->Off()){
                $this->setOff($this->getLess() -1 );
            }
        }
    }

    ?>