<?php 
    require_once('Mamifero.php');    
    class Cachorro extends Mamifero {
        function emitirSom()
        {
            echo 'Som';
        }
        function reagirFrase ($frase) {
            if($frase == 'Comida' || $frase == 'Ola') {
                echo 'Abanar';
            }else {
                echo 'Rosnar';
            }
        }
        function reagirHora ($hora, $min) {
            if($hora<12) {
                echo 'Abanar';
            } else if ($hora>=18){
                echo 'Ignorar';
            } else {
                echo 'Nao faz nada';
            }
        }
        function reagirIdadePeso ($idade, $peso) {
            if($idade <5 ) {
                echo 'Lati';
            } else if($idade < 5 && $peso < 15) {
                echo 'Ta';
            }
        }
    }
    
    ?>