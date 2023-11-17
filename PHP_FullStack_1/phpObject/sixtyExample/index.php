<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        <div>
            <pre>
                <?php 
                    require_once 'contaBanco.php';
                    $pessoa1 = new contaBanco();
                    $pessoa2 = new contaBanco();  

                    $pessoa1->abrirConta("CC");
                    $pessoa1->setnumConta("8794");
                    $pessoa1->setDono("Nome");

                    $pessoa2->abrirConta("CP");
                    $pessoa2->setnumConta("4897987");
                    $pessoa2->setDono("Nome2");

                    $pessoa1->depositar(400);
                    $pessoa2->depositar(480);

                    $pessoa1->sacar(80);
                    $pessoa2->sacar(70);

                    $pessoa1->pagarMensalidade();
                    $pessoa2->pagarMensalidade();

                    $pessoa1->fecharConta();
                    $pessoa2->fecharConta();

                    print_r($pessoa1);
                    print_r($pessoa2);

                    ?>
            </pre>
        </div>
    </body>
</html>