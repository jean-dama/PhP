<?php 
    
    interface Publicacao {
        public function abrir();
        public function fechar();
        public function Folhear($p);
        public function avancarPag();
        public function voltarPag();
    }
    
    ?>