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
        <h2>Resultado</h2>
    </header>
    <?php 
        //para capturar os dados de form retro alimentado, puxando as variaveis do QUERY_STRING, post ou get
        $valor1 = $_GET['numeros'] ?? 0;
        $valor2 = $_GET['numeros1'] ?? 0;

        ?>
    <section>
        <div><!--aqui alimentamos com as variaveis o form -->
            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
                <label>Valor</label>
                <input type="number" name="numeros" value="<?php $valor1 ?>"/>
                <label>Valor</label>
                <input type="number" name="numeros1" value="<?php $valor2 ?>"/>
                <button type="submit" >Enviar</button>
            </form>
        </div>
        <div>
            Resultado:
            <p>
                <?php //aqui somamos os valores
                    $soma = $valor1 + $valor2;
                        echo "A soma dos valores inseridos são " . $soma ;
                    ?>
            </p>
        </div>
    </section>
 </body>
</html>
