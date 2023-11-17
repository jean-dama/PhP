<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Small Form</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <header>
        <h2>Salario</h2>
    </header>
    <?php
        $valor = $_GET['valor'] ?? 0;
        ?>
    <section id="one1">
        <div>
            <form action="<?php $_SERVER['PHP_SELF']?>" method="get">
                <label>Insira um valor e descubra</label>
                <input type="number" name="valor" value="<?php $valor ?>"/>
                <button type="submit" >Enviar</button>
            </form>
        </div>
    </section>
    <section id="two2">
        <div>
            Resultado:
            <p>
                <?php

                    $raizq = sqrt($valor);//calculando o valor da raiz quadrada com a funcao default do php
                    $raizc = $valor ** (1/3);//calculando o valor da raiz cubica com o um pequeno calculo valor elevado a 1 terço

                        echo"Raiz quadrada" . number_format($raizq,2,",") ;
                        echo"Raiz cubica" . $raizc ;
                    ?>
            </p>
        </div>
    </section>
 </body>
</html>
