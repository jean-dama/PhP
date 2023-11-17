<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <pre>
            <?php require_once 'Caneta.php';
                $caneta = new Caneta("Another Test","Azul",5.9);

                //$caneta->modelo = "TESTANDO";

                //$caneta->ponta = "465487";
                //outra forma
                
                //$caneta->setModelo("Another One");
                //$caneta->setPonta(5.7);


                    print_r($caneta);

                ?>
        </pre>
    </div>
</body>
</html>