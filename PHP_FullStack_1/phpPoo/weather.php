<?php 

    class Tempo {

        public static $condicoes = ['frio','umido','quente'];//com o static podemos acessar diretamente

        public static function Celsius($c) {
            return $c;
        }

        public static function Clima($f) {
            if ($f < 40) {
                return self::$condicoes[0];
            } else if ($f < 30) {
                return self::$condicoes[1];
            } else {
                return self::$condicoes[2];
            }
        }
    }

    echo Tempo::Celsius(20);
    print_r(Tempo::$condicoes);
    echo Tempo::Clima(50);

    ?>