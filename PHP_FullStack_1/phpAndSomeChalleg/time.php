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
        $valor = $_POST['valor'] ?? 0;
        ?>
    <section id="one1">
        <div>
            <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
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

                    $semana = (int) ($valor / 604800);
                    $valor = $valor % 604800;

                    $dia = (int) ($valor / 86400);
                    $valor = $valor % 86400;

                    $hora = (int) ($valor / 3600);
                    $valor = $valor % 3600;

                    $minuto = (int) ($valor / 60);
                    $valor = $valor % 60;

                    $segundo = $valor;

                    echo "Valores " . $semana . " semanas " . $dia . "  dias da semana " . $hora . " horas " . $minuto . " minutos " . $segundo . " segundo "
                    /* 1min em seg 60seg
                       1hora em seg 60min * 60 = 3600seg
                       1dia em seg 24h * 60 = 1440min * 60 = 86400seg
                       1semana em seg 7dias * 24hrs = 168h * 60 = 10080min * 60 = 604800seg

                       supondo que voce quer saber sobre 2000000 quantas semanas vai ser, tu pega 
                       2000000/604800 | divisao inteira 3 
                       1814400
                       depois subtraimos
                       2000000
                      -1814400 = 185600 ai se eu quiser saber por dia, basta dividir pelo valor em segundos para dia que ja temos acima

                       185600/86400 | divisao inteira 2
                       172800
                       depois subtraimos
                       185600
                      -172800 = 12800 

                       horas
                       12800/3600 | divisao inteira 3 
                       10800
                       depois subtraimos
                       12800
                      -10800 = 2000

                       min
                       2000/60 | divisao inteira 33 e 20 
                       1980
                       depois subtraimos
                       2000
                      -1980 = 20

                       qualquer coisa faz o calculo no papel
                    */

                    ?>
            </p>
        </div>
        <div>
            <p>Valor segundos equivalem a :</p>
            <ul>
                <li><?php $semana ?> semanas</li>
                <li><?php $dia ?> dias</li>
                <li><?php $hora ?> horas</li>
                <li><?php $minuto ?> minutos</li>
                <li><?php $segundo ?> segundos</li>
            </ul>
        </div>
    </section>
 </body>
</html>
