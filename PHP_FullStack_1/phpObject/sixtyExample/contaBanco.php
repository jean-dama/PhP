<?php class contaBanco {
    
    protected $numConta;
    public $tipo;
    public $dono;
    public $saldo;
    public $status;

    public function __construct() {//estamos estabelecendo
        $this->setStatus(false);
        $this->setSaldo(0);
        echo("Sucesso.");
    }

    function abrirConta($t) {
        $this->setTipo($t);
        $this->setStatus(true);
        if ($t == "CC"){
            $this->setSaldo(50);
        }elseif ($t == "CP") {
            $this->saldo = 150.00;
        }
    }

    function fecharConta() {
        if ($this->getSaldo() > 0) {
            echo ("tem Dinheiro");
        }elseif($this->getSaldo() < 0){
            echo ("tem Débito");
        }else {
            $this->setStatus(false);//conta desabilitada 
        }
    }

    function depositar($v) {
        if($this->getStatus()) {
            $this->getSaldo($this->getSaldo() + $v);
        }else {
            echo("Erro");
        }
    }

    function sacar($v) {
        if($this->getStatus()) {
            if ($this->getSaldo() >= $v) {
                $this->getSaldo($this->getSaldo()- $v);
            } else {
                    echo('Saldo insuficiente');
            }
        } else {
            echo ("Conta inativa");
        }
    }

    function pagarMensalidade() {
        if ($this->getTipo() == "CC") {
            $v = 12;
        } elseif ($this->getTipo() == "CP") {
            $v = 20;
        } if ($this->getStatus()){
            $this->setSaldo($this->getSaldo() - $v);
        }
    }
    /*Conta*/
    public function setnumConta($numConta) {
        $this->numConta = $numConta;
    }

    public function getnumConta() {
        return $this->numConta;
    }
    /*Tipo*/
    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    public function getTipo() {
        return $this->tipo;
    }
    /*Dono*/
    public function setDono($dono) {
        $this->dono = $dono;
    }

    public function getDono() {
       return $this->dono;
    }
    /*Saldo*/
    public function setSaldo($saldo) {
        $this->saldo = $saldo;
    }

    public function getSaldo() {
        return $this->saldo;
    }
    /*Status*/
    public function setStatus($status) {
        $this->status = $status;
    }

    public function getStatus() {
        return $this->status;
    }

    }   
    ?>