<?php class aPen {

    var $model;
    var $cor;
    var $carga;
    var $ponta;
    var $tampada;

    function rabisco() {
        if($this->tampada == true) {
            echo "<p> Caneta Tampada </p>";
        }else {
            echo "<p> Rabiscando </p>";
        }
    }

    function tampar() {
        $this->tampada = true;
    }

    function destampar() {
        $this->tampada = false;
    }

    }

    ?>