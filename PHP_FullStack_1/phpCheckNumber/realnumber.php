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
        <h2 id="header">Análise</h2>
    </header>
    <section>
        <h1 id="titulo">Resultado:</h1>
        <div> 
            <?php 
                $num = $_POST['real'] ?? 0;//aqui estamos pegando o valor do form
                    echo "Número " . number_format($num, 3, ",");//aqui estamos printando o resultado recebido e formatando em 3 casas e virgula
                
                $inteiro = (int)$num; //aqui usamos o int default do php para receber o valor
                $fraci = $num - $inteiro; //aqui para o fracional diminuimos o numero recebido menos o inteiro do int default do php
                    echo"<ul><li> Parte inteira " . number_format($inteiro, 0 , ",",".") . "</li>"; //aqui printamos
                    echo"<li> Parte frácionada é " . number_format($fraci, 3, ",", ".") . "</li></ul>";//aqui printamos

                ?>
        </div>
            <button onclick="javascript:history.go(-1)" id="submit">Voltar</button>
    </section>
</body>
</html>
