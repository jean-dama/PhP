<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Small Form</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h2>Resultado</h2>
    </header>
    <main>
        <?php /*var_dump($_GET); comando para verificar a variavel get esta sendo enviado no get, poderia ser post ou request(request é uma juncao de $_GET, $_POST e $_REQUEST)*/ 
            $nome = $_REQUEST['nome'] ?? "Sem nome";
            $sobnome = $_REQUEST['sobnome'] ?? "Sem sobre nome";
                echo "<p>Um teste</p>"
            ?>
        <p>
            <a href="javascript:history.go(-1)">Voltar ao inicio</a>
        </p>
    </main>
</body>
</html>
