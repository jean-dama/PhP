<?php 
    require_once'Controlador.php';

    class Controle implements Controlador{
        private $volume;
        private $ligado;
        private $tocando;

        public function __construct(){
            $this->volume = 50;
            $this->ligado = false;
            $this->tocando = false;
        }
        
        private function getVolume() {
            return $this->volume;
        }
        private function getLigado() {
            return $this->ligado;
        }
        private function getTocando() {
            return $this->tocando;
        }
        private function setVolume($volume) {
            $this->volume = $volume;
        }
        private function setLigado($ligado) {
            $this->ligado = $ligado;
        }
        private function setTocando($tocando) {
            $this->tocando = $tocando;
        }
        /////////
        public function ligar() {
            $this->getLigado(true);
        }
        public function desligar(){
            $this->getLigado(false);
        }
        public function abrirMenu(){
            echo '----Menu de test----';
            echo "ligado" . ($this->getLigado()? "Sim":"Nao");
            echo "tocando" . ($this->getTocando()? "Sim":"Nao");
            echo "volume" . $this->getVolume();
            for($i=0; $i <= $this->getVolume(); $i+=5){
                echo "|";
            }
            echo"</br>";
        }
        public function fecharMenu(){
            echo"Fechar";
        }
        public function maisVolume(){
            if ($this->getLigado()){
                $this->setVolume($this->getVolume() + 5);
            }
        }
        public function menosVolume(){
            if ($this->getLigado()){
                $this->setVolume($this->getVolume()- 5);
            }   
        }
        public function ligarMudo(){
            if ($this->getLigado() && $this->getVolume()>0){
                $this->setVolume(0);
            }
        }
        public function desligarMudo(){
            if ($this->getLigado() && $this->getVolume()==0){
                $this->setVolume(50);
            }
        }
        public function play(){
            if ($this->getLigado() && !($this->getTocando())){
                $this->setTocando(true);
            }
        }
        public function pause(){
            if ($this->getLigado() && $this->getTocando()){
                $this->setTocando(false);
            }
        }
    }

?>