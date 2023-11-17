<?php  

    class Usuario {//classe

        public $name;//atributo publico
        protected $email;//atributo protegido e so pode ser acessado por classes que sejam filhas
        public $job;

        public function __construct($name, $email) {//construct, falando os atributos default da classe 
            $this->name = $name;
            $this->email = $email; 
        }

        public function __destrusct() {//destruct é criado para limpar uma instancia
            echo "$this->name . foi removida";
        }

        public function __clone () {//aqui estamos utilizando o clone, e assim que algo for clonado ele vai adicionar uma mensagem
          $this->name = $this->name . '(cloned)';
        }

        public function addPessoa () { //funcoes com mensagens ou verificacao de email
            return "$this->email .  pessoa adicionada";
        }
        public function Menssagem () {
            return "$this->email . enviada mensagem";
        }
        public function getEmail () {
            return $this->email;
        }
        public function setEmail ($email) {
            if (strpos($email, '@')> -1) {//erstamos verificando se o valor dentro de email tem o arroba
                $this->email = $email;
            }
        }
    }

    class Admin extends Usuario { ///outra classe extentendo da classe Usuario/pai 
        public $nivel;
        public $job = 'administrador';

        public function __construct($name, $nivel, $email, $job) {
            $this->nivel = $nivel;
            parent::__construct($name,$email);//chamando o construct da classe que esta extendendo
        }
        public function Message() {
            return "$this->email .  admin mandou uma mensagem";
        }
    }

    $userOne = new Usuario ('martin','martin@martin.com');//criamos o user e informamos os dados
    $userTwo = new Usuario ('marcin','marcin@martin.com');

    //unset($userOne);//vai remover a referencia da instancia do userOne

    $userFive = clone $userOne;
    echo $userFive->name;
    
    ?>