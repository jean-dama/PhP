<?php class aPen {

public $model;
private $cor;
public $carga;
protected $ponta;
private $tampada;

function rabisco() {
    if($this->tampada == true) {
        echo "<p> Caneta Tampada </p>";
    }else {
        echo "<p> Rabiscando </p>";
    }
}

public function tampar() {
    $this->tampada = true;
}

public function destampar() {
    $this->tampada = false;
}

}

?>