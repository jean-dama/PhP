<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Form</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <header>
    </header>
    <section>
        <div> 
            <pre>
                <?php 
                    setcookie("dia-da-semana","Segunda", time()+3600); //aqui estamos setando o coolkie 

                    session_start();
                        $_SESSION['test'] = "Funciona";

                        echo "Super Global ENV default PHP";
                        var_dump($_ENV);

                        echo "Super Global GET default PHP";
                        var_dump($_GET);

                        echo "Super Global POST default PHP";
                        var_dump($_POST);

                        echo "Super Global REQUEST default PHP";
                        var_dump($_REQUEST);

                        echo "Super Global COOKIE default PHP";
                        var_dump($_COOKIE);

                        echo "Super Global FILES default PHP";
                        var_dump($_FILES);

                        echo "Super Global SESSION default PHP";
                        var_dump($_SESSION);

                        echo "Super Global ENV default PHP";
                        var_dump($_ENV);

                        echo "Super Global SERVER default PHP";
                        var_dump($_SERVER);

                        echo "Super Global GLOBALS default PHP";
                        var_dump($GLOBALS);
                    
                    ?>
            </pre>
        </div>
    </section>
</body>
</html>
