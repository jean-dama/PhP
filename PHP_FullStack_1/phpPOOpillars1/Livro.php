<?php 
    require_once 'Pessoa.php';
    require_once 'Publicacao.php';
    class Livro  implements Publicacao{
        
        public $titulo;
        public $autor;
        public $totPaginas;
        public $pagAtual;
        public $aberto;
        public $leitor;

        public function __construct ($titulo, $autor, $totPaginas, $aberto, $leitor){
            $this->titulo = $titulo;
            $this->autor = $autor;
            $this->totPaginas= $totPaginas;
            $this->aberto= false;
            $this->leitor = $leitor;
            $this->pagAtual = 0;
        }
        public function detalhes() {
                echo 'Livro ' . $this->titulo . ' escrito ' . $this->autor;
                echo ' Paginas: ' . $this->totPaginas . ' atual ' . $this->pagAtual;
                echo ' Leitor ' . $this->leitor->getNome;
        }
        ////
        function getTitulo () {
            return $this->titulo;
        }
        function getAutor () {
            return $this->autor;
        }
        function getTotPaginas () {
            return $this->totPaginas;
        }
        function getAberto () {
            return $this->aberto;            
        }
        function getLeitor () {
            return $this->leitor;
        }
        ////
        function setTitulo ($titulo) {
            $this->titulo = $titulo;
        }
        function setAutor ($autor) {
            $this->autor = $autor;
        }
        function setTotPaginas ($totPaginas) {
            $this->totPaginas = $totPaginas;
        }
        function setAberto ($aberto) {
            $this->aberto = $aberto;
        }
        function setLeitor ($leitor) {
            $this->leitor = $leitor;
        }
        ///
        public function abrir() {
            $this->aberto = true;
        }
        public function avancarPag() {
            $this->pagAtual ++;
        }
        public function fechar() {
            $this->aberto = false;
        }
        public function Folhear($p) {
            if($p>$this->totPaginas) {
                $this->pagAtual = 0; 
            }else {
                $this->pagAtual = $p;
            }
        }
        public function voltarPag() {
            $this->pagAtual --;
        }

    }


    ?>