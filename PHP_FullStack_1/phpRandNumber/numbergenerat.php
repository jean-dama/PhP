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
        <h2>Clique e gere um numero</h2>
    </header>
    <main>
        <section>
            <form method="get">
                <div>
                    <label> Gerador de números :</label>
                    <button type="submit" name="thebutton">Clique Aqui</button>
                </div>
            </form>
        </section>
            <div>
                <?php if (isset($_GET['thebutton'])) {
                    echo(rand());
                }
                /*Outra forma
                    $min = 0;
                    $max = 100;
                    $num = rand($min, $max);
                    pois assim ele vai gerar numeros aleatorios entre 0 e 100
                    a funcao usa um algoritmo linear congretial generator, de 1951
                    uma mais moderna é a mt_rand(), mersenne twister, e mais rapido e mais confiavel que o rand()
                    e existe tambem o random_int() que gera numeros criptos e seguros, usados para ids de sistemas, senhas e etc
                */
                ?>
            </div>
    </main>
</body>
</html>
