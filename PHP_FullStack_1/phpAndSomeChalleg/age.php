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

        $atual = date('Y');
        $nascimento = $_GET['nasc'] ?? '2000'; //recebendo o ano inserido no input
        $ano = $_GET['ano'] ?? $atual;
        
        ?>
    <section id="one1">
        <div>
            <form action="<?php $_SERVER['PHP_SELF']?>" method="get">

                <label>Ano nascimento</label>
                <input type="date" name="nasc" value="<?php $nascimento ?>" min="1900"/>

                <label>Qual ano quer ver a idade?</label>
                <input type="date" name="ano" value="<?php $atual ?>" min="1900"/>

                <button type="submit" >Enviar</button>
            </form>
        </div>
    </section>
    <section id="two2">
        <div>
            Resultado:
                <?php
                    $age = $ano - $nascimento;    
                    
                    if ($nascimento >= $atual)
                        echo"Alto de errado";
                        else {
                            echo "Idade " . $age;
                        }
                      ?>
        </div>
    </section>
 </body>
</html>
