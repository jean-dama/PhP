<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" >
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <div>
            <?php $name = 'Jeanzin'; /*<?php ?> é um super tag php, mas existem outras formas também como <? ?>*/
                    echo '<h2>Olá ', $name , '</h2>' ?>
        </div>
        <div>
            <?php echo '<h1> Hoje é </h1>' .date("d/m/y") ?>
            <?php echo '<h4> e a hora é </h4>' .date('g:i:s') ?>

            <?php const X = 'Brasil';
                  $estao = 'Paraná';
                  $cidade = 'Curitiba';

                  echo "$cidade , $estao ,". X  
                ?>
        </div>
        <div>
            <?php 
                $name = "Jao";
                $sobrenome = "Mane";
                $apelido = "Ze";

                echo "$name $apelido $sobrenome";

                echo "$name \"$apelido\" $sobrenome";

                echo '$name \'$apelido\' $sobrenome';

                echo "$name \t\t \"$apelido\" \tat $sobrenome";
                ?>
        </div>
    </body>
</html>