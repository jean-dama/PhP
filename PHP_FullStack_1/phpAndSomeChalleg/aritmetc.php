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
        $pondera = $_GET['valor1'] ?? 0;
        $valor1 = $_GET['valor2'] ?? 0;
        $ponderada = $_GET['valor3'] ?? 0;
        ?>
    <section id="one1">
        <div>
            <form action="<?php $_SERVER['PHP_SELF']?>" method="get">
                <label>Insira um valor e descubra</label>
                <input type="number" name="valor" value="<?php $valor ?>"/>
                <label>Insira um valor e descubra</label>
                <input type="number" name="valor1" value="<?php $pondera ?>"/>
                <label>Insira um valor e descubra</label>
                <input type="number" name="valor2" value="<?php $valor1 ?>"/>
                <label>Insira um valor e descubra</label>
                <input type="number" name="valor3" value="<?php $ponderada ?>"/>
                <button type="submit" >Enviar</button>
            </form>
        </div>
    </section>
    <section id="two2">
        <div>
            Resultado:
                <?php
                    $media = ($valor + $valor1) / 2;
                    $media_ponderada = ($valor*$pondera + $valor1*$ponderada)/($pondera+$ponderada)
                      ?>
            <ul>
                <li><?php number_format($media, 2, ",") ?></li>
                <li><?php number_format($media_ponderada, 2, ",") ?></li>
            </ul>
        </div>
    </section>
 </body>
</html>
