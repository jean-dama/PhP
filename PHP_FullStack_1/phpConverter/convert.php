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
        <?php /*var_dump($_GET); comando para verificar a variavel get esta sendo enviado no get, poderia ser post ou request(request é uma juncao de $_GET, $_POST e $_REQUEST)*/ 
            $thenumberbrl = $_REQUEST['numero'];
            $thenumberusd = $_REQUEST['numero1'];
            
            $cotacao = 4.72;

            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            $convertido = $thenumberbrl / $cotacao;

                echo ("<div>O valor convertido em dólares são: R\$" . number_format($convertido, 2) . "</div>");
                /*com o numero formatado, pode usar assim*/
                /*echo ("<div>O valor convertido em dólares são: R\$" . number_format($convertido,2) . "</div>");*/
                /*ou desta forma echo ("<div>O valor convertido em dólares são: R\$" . number_format($convertido,2, ",",".") . "</div>");*/
                /*e outra forma é*/
                /* criar uma variavel  $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);*/
                /*echo ("<div>O valor convertido em dólares são: " . numfmt_format_currency($padrao, $convertido, "BRL") . "</div>");*/
                /*echo ("<div>O valor convertido em dólares são: " . numfmt_format_currency($padrao, $dolares, "USD") . "</div>");*/
                /*ele usa a biblioteca intl de internacionalizacao*/
                /*caso não funcione ou diga que a funcao numfmt nao exista, basta ir no php.ini e verificar se o intl esta comentando e descomentar*/
            
            $convertido1 = $thenumberusd * $cotacao;

                echo ("<div>O valor convertido em reais são: R\$" . number_format($convertido1, 2) . "</div>")

            ?>
        <p>
            <a href="javascript:history.go(-1)">Voltar ao inicio</a>
        </p>
    </main>
</body>
</html>
