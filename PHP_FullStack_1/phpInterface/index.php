<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <h1>Teste Herança</h1>
        <pre>
            <?php   
                require_once 'Controle.php';
                $cont = new Controle();
                $cont->ligar();
                $cont->abrirMenu();

                ?>
        </pre>
    </body>
</html>