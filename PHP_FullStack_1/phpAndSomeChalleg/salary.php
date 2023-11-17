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
        $valor = $_GET['salario'] ?? 0;
        ?>
    <section id="one1">
        <div>
            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
                <label>Salário(R$)</label>
                <input type="number" name="salario" value="<?php $valor1 ?>" step="0.01"/>
                <p>Salário minimo de R$<strong><?php number_format($min, 2, ",", ".") ?></strong></p>
                <button type="submit" >Enviar</button>
            </form>
        </div>
    </section>
    <section id="two2">
        <div>
            Resultado:
            <p>
                <?php

                    $min = 1_320.60 ;
                    //$sal = 5000.00 ;

                    $total = intdiv($min , $valor); //aqui estamos calculando o valor de numero de salarios minimos

                    $diferenca = $valor % $min;//aqui estamos pegando o resto

                    echo "quem ganha". $valor . "por mes, ganha total" . $total . "de salarios minimos" . number_format($diferenca,2,",",".");

                    ?>
            </p>
        </div>
    </section>
 </body>
</html>
