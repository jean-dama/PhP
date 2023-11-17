<?php 

    require('Validacao');//chamando a classe

    if(isset($_POST['submit'])){//validacao de clique no envio
        echo 'Enviado';
        $validacao = new Validacao($_POST);
        $erros = $validacao->ValidacaoForm();


    }

    class Validacao {//classe de validacao
        private $dados;//atributos da classe
        private $erro = [];//array
        private static $campos = ['name','email'];//array

        public function __construct($post_info){
            $this->dados = $post_info;
        }
        public function ValidacaoForm () {//aqui estamos verificando campos vieram nos dados metodo
            foreach(self::$campos as $campos){
                if (!in_array($campos, $this->dados)) { 
                    trigger_error('Erro');
                    return;
                }
            }
            $this->ValidacaoNome();
            $this->ValidacaoEmail();
            return $this->erro;
        }
        public function ValidacaoNome () {//aqui estamos verificando se o campo esta vazio metodo
            $val = trim($this->dados['name']);
            if (empty($val)) {
                $this->AddErro('name',' nao pode estar vazio');
            } else {
                if (!preg_match('/^[a-zA-Z0-9]{6,12}$/', $val)) {// verificando se o campo bate com esse padrao
                    $this->AddErro('name' , 'tem que ter entre 6-12 caracteres alpa numericos');
                }
            }
        }
        public function ValidacaoEmail () { //metodo de validacao de campo email 
            $val = trim($this->dados['email']);
            if(empty($val)){
                $this->AddErro('Erro',' campo vazio');
            } else {
                if(filter_var($val, FILTER_VALIDATE_EMAIL)){//verificando se o email é valido
                    $this->AddErro('email' , 'use um valido');
                }
            }   
        }
        private function AddErro ($chave, $val) {//aqui estamos atribuindo o valor de mensagem de erro
            $this->erro[$chave] = $val;
        }
    }

    ?>
<html>
<head>
    <meta>
</head>
<body>
    <div>
        <h1>Form</h1>
        <form action="" method="POST">
            <label>Texto</label>
            <input type="text" name="name" value="<?php echo htmlspecialchars($_POST['name'])?>">
            <label>Texto</label>
            <input type="text" name="email" value="<?php echo htmlspecialchars($_POST['email'])?>">
            <label>Texto</label>
            <input type="text" name="text">
            <div>
                <?php //verificando se a erros, se nao, vai printar nada
                    echo $erros['name'] ?? '';
                    ?>
            </div>
            <input type="submit" value="submit">
        </form>
    </div>
</body>
</html>