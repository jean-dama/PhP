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
        $reajuste = $_GET['reajus'] ?? 0;
        ?>
    <section id="one1">
        <div>
            <form action="<?php $_SERVER['PHP_SELF']?>" method="get">
                <label>Insira um valor e descubra</label>
                <input type="number" name="valor" value="<?php $valor ?>" step="0.01"/>
                <label for=reajus>Percentual de reajuste?(<b><span id="porcentage">?%</span></b>)</label>
                <input type="range" name="reajus" id="reajus" min="0" oninput="Valor()" value="<?php $reajuste ?>"/>
                <button type="submit" >Enviar</button>
            </form>
        </div>
    </section>
    <section id="two2">
        <div>
            Resultado:
            <p>
                <?php 

                    $aumento = $valor * $reajuste / 100;
                    $novopreco = $valor + $aumento ;

                    echo"O valor ficou " . $aumento . " e o novo valor" . $novopreco;

                    ?>
                
                <p><?php number_format($aumento, 2 , ",") ?></p>
                <p><?php number_format($novopreco, 2 , ",") ?></p>

            </p>
        </div>
    </section>
    <script>
        Valor()//declaração auto, chamando a função primeiro
        function Valor() {
            porcentage.innerText = reajus.value
        }
    </script>
 </body>
</html>
