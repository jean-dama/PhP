<?php class aPerson {

    var $nome;
    var $altura;
    var $peso;
    var $idade;
    var $sexo;
    var $corolhos;

    function adulto() {
        if($this->idade > 18) {
            echo "<p> Adulto </p>";
        }else {
            echo "<p> Menor de idade </p>";
        }
    }

}

?>