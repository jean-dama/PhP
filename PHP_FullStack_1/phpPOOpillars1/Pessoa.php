<?php 

    class Pessoa {

        public $nome;
        public $sexo;
        public $idade;

        function __construct($nome, $sexo, $idade) {
            $this->nome = $nome;
            $this->sexo = $sexo;
            $this->idade = $idade;
        }

        public function fazerAniver() {
            $this->idade ++;
        }
        //
        function getNome () {
            return $this->nome; 
        }
        function getSexo () {
            return $this->sexo;
        }
        function getIdade () {
            return $this->idade;
        }
        ///
        function setNome ($nome) {
            $this->nome = $nome;
        }
        function setSexo ($sexo) {
            $this->sexo = $sexo;
        }
        function setIdade ($idade) {
            $this->idade = $idade;
        }
    }


    ?>