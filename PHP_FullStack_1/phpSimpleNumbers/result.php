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
    <main>
        <?php $numero = $_REQUEST['numerin'];
              $numeroAdd = $numero + 1;
              $numeroMinus = $numero - 1;
              /*ou --$numero e ++$numero*/
              echo("O número é: ". $numero);
              echo(" sucessor é :". $numeroAdd);
              echo(" e o antecessor é: ". $numeroMinus);
            /* outra forma possivel é echo "frase" . $numero . " frase " . ($numero - 1) .*/
            /* outra forma possivel é echo "frase" . $numero . " frase " . ($numero + 1) .*/
            ?>
        <p>
            <a href="/projeto/ex7/number.html">Voltar ao inicio</a>
            <button onclick="javascript:history.go(-1)" >&xcirc;Voltar</button>
        </p>
    </main>
</body>
</html>
