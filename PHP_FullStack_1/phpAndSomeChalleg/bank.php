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
        $saque = $_POST['valor'] ?? 0;
        ?>
    <section id="one1">
        <div>
            <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
                <label><sup>*</sup>Saque</label>
                <input type="number" name="valor" value="<?php $saque ?>" step="5"/>
                <button type="submit" >Enviar</button>
            </form>
        </div>
    </section>
    <section id="two2">
        <div>
            Resultado:
            <p>
                <?php 
                    $t100 = (int)($saque /100);
                    $saque %= 100;

                    $t50 = (int)($saque /50);
                    $saque %= 50;

                    $t20 = (int)($saque /20);
                    $saque %= 20;

                    $t10 = (int)($saque /10);
                    $saque %= 10;

                    $t5 = (int)($saque /5);
                    $saque %= 5;

                    ?>
            </p>
        </div>
        <div>
            <h1><?php number_format($saque, 2, ",", ".") ?></h1>
        </div>
        <div>
            <p>Notas::</p>
            <ul>
                <li><img src=""><?php $semana ?> semanas</li>
                <li><img src=""><?php $dia ?> dias</li>
                <li><img src=""><?php $hora ?> horas</li>
                <li><img src=""><?php $minuto ?> minutos</li>
            </ul>
        </div>
    </section>
 </body>
</html>
