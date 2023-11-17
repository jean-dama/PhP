<?php 
    require_once('Lutador.php');
    class Luta {

        private $desafiado;
        private $desafiante;
        private $rounds;
        private $aprovada;

        function marcarLuta ($l1,$l2) {
            if($l1->getCategoria() === $$l2->getCategoria() && ($l1 != $l2) ) {
                $this->aprovada = true;
                $this->desafiado = $l1;
                $this->desafiante = $l2;  
            }else {
                $this->aprovada = false;
                $this->desafiado = null;
                $this->desafiante = null;
            }
        }

        function Lutar () {
            if($this->aprovada){
                $this->desafiado->Apresentar();
                $this->desafiante->Apresentar();
                $vencedor = rand (0,2);
                switch($vencedor) {
                    case 0: 
                            echo 'Empate';
                            $this->desafiado->empatarLuta();
                            $this->desafiante-> empatarLuta();
                            break;
                    case 1:
                            echo 'Vitoria do desafiado '. $this->desafiado->getNome();
                            $this->desafiado->ganharLuta();
                            $this->desafiante->perderLuta();
                            break;
                    case 2: 
                            echo 'Vitoria do desafiante'. $this->desafiante->getNome();
                            $this->desafiado->ganharLuta();
                            $this->desafiante->perderLuta();
                            break;
                }
            }
        }
        //get
        function getDesafiado () {
            return $this->desafiado;
        }
        function getDesafiante () {
            return $this->desafiante;
        }
        function getRounds () {
            return $this->rounds;
        }
        function getAprovada () {
            return $this->aprovada;
        }
        ///set
        function setDesafiado ($desafiado) {
            $this->desafiado = $desafiado;
        }
        function setDesafiante ($desafiante) {
            $this->desafiante = $desafiante;
        }
        function setRounds ($rounds) {
            $this->rounds = $rounds;
        }
        function setAprovada ($aprovada) {
            $this->aprovada = $aprovada;
        }
    }
    
    ?>