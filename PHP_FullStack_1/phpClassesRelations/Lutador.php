<?php 
    
    class Lutador {
        //atributos
        private $nome;
        private $nacionalidade;
        private $idade;
        private $altura;
        private $peso;
        private $categoria;
        private $vitorias;
        private $empates;
        private $derrotas;
        //
        public function __construct ($no, $nacio, $id, $alt, $pe, $cat, $vit, $emp, $der){
            $this->nome = $no;
            $this->nacionalidade = $nacio;
            $this->idade = $id;
            $this->altura = $alt;
            $this->setPeso($pe);
            $this->categoria = $cat;
            $this->vitorias = $vit;
            $this->empates = $emp;
            $this->derrotas = $der;
        }
        ////////////metodos////////////////////
        function ganharLuta () {
            $this->setVitorias($this->getVitorias() + 1);
        }
        function perderLuta () {
            $this->setDerrotas($this->getDerrotas() + 1);
        }
        function empatarLuta () {
            $this->setEmpates($this->getEmpates() + 1);
        }

        function Apresentar () {
            echo ' ' . $this->getNome();
            echo ' ' . $this->getNacionalidade();
            echo ' ' . $this->getIdade();
            echo ' ' . $this->getAltura();
            echo ' ' . $this->getPeso();
            echo ' ' . $this->getVitorias();
            echo ' ' . $this->getDerrotas();
            echo ' ' . $this->getEmpates();
        }
        function Status () {
            echo ' ' . $this->getNome();
            echo ' ' . $this->getCategoria();
            echo ' ' . $this->getVitorias();
            echo ' ' . $this->getDerrotas();
            echo ' ' . $this->getEmpates();
        }
        //get
        function getNacionalidade() {
            return $this->nacionalidade;
        }
        function getIdade() {
            return $this->idade;
        }
        function getAltura() {
            return $this->altura;
        }
        function getCategoria() {
            return $this->categoria;
        }
        function getVitorias() {
            return $this->vitorias;
        }
        function getEmpates() {
            return $this->empates;
        }
        function getDerrotas() {
            return $this->derrotas;
        }
        function getNome () {
            return $this->nome;
        }
        function getPeso () {
            return $this->peso;
        }
        ////set
        function setNome ($nome) {
            $this->nome = $nome;
        }
        function setNacionalidade($nacionalidade) {
            $this->nacionalidade = $nacionalidade;
        }
        function setIdade($idade){
            $this->idade = $idade;
        }
        function setAltura($altura) {
            $this->altura = $altura;
        }
        private function setCategoria() {
            if($this->peso<=52.2){
                $this->categoria = 'Invalido';
            } elseif ($this->peso<=70.3){
                $this->categoria = 'Leve';
            } elseif ($this->peso<=83.9){
                $this->categoria = 'Medio';
            } elseif ($this->peso<=120.2){
                $this->categoria = 'Pesado';
            }else {
                $this->categoria = 'Invalido';
            }
        }
        function setVitorias ($vitorias){
            $this->vitorias = $vitorias;
        }
        function setDerrotas ($derrotas) {
            $this->derrotas = $derrotas;
        }
        function setEmpates ($empates) {
            $this->empates = $empates;
        }
        function setPeso($peso) {
            $this->peso = $peso;
            $this->setCategoria();
        }
        ////////////////////////////////
    }
    
    ?>