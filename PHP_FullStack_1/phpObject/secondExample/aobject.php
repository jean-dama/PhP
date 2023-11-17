<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php require_once 'classPen';//aqui carregamos a classe
          $caneta1 = new aPen; //aqui instanciamos a classe 
          
            $caneta1->cor = "Vermelha";
            $caneta1->ponta = "0.8";
            $caneta1->carga = "60%";
            $caneta1->tampada = false;

            $caneta1->destampar();
            $caneta1->tampar();

            $caneta1->rabisco();//chamando o metodo

            var_dump($caneta1);
          
            $caneta2 = new aPen;

            $caneta2->cor = "Azul";
            $caneta2->ponta = "0.5";
            $caneta2->carga = "80%";
            $caneta2->tampada = false;

            $caneta2->destampar();
            $caneta2->tampar();

            $caneta2->rabisco();//chamando o metodo

            var_dump($caneta2);

            ?> 
</body>
</html>