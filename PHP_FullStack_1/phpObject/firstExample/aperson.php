<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php require_once 'classPerson';//aqui carregamos a classe
          $person1 = new aPerson; //aqui instanciamos a classe 
          
            $person1->nome = "Jao";//definindo os atributos
            $person1->altura = "1.80";
            $person1->peso = "80";
            $person1->idade = "17";
            $person1->corolhos = "Verdes";

            $person1->adulto();//chamando metodo

            var_dump($person1);//verificando valor dos atributos no objeto
          
        $person2 = new aPerson; //aqui instanciamos a classe 
          
            $person2->nome = "Jao";
            $person2->altura = "1.80";
            $person2->peso = "80";
            $person2->idade = "17";
            $person2->corolhos = "Verdes";

            $person2->adulto();

            var_dump($person2);

            ?> 
</body>
</html>