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
    <?php
        $valor1 = $_GET['numeros'] ?? 0;
        $valor2 = $_GET['numeros1'] ?? 0;

        ?>
    <section id="one1">
        <div>
            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
                <label>Dividendo</label>
                <input type="number" name="numeros" value="<?php $valor1 ?>"/>
                <label>Divisor</label>
                <input type="number" name="numeros1" value="<?php $valor2 ?>"/>
                <button type="submit" >Enviar</button>
            </form>
        </div>
    </section>
    <section id="two2">
        <div>
            Divisão:
            <p>
                <?php
                    $another = $valor1;
                    $anotherone = $valor2;
                    $resulta = (int)($valor1 / $valor2);
                    $resulta2 = $another % $anotherone;

                        echo "<div>O valor <p>" . $valor1 . "</p>";
                        echo "Divido pelo valor <p>" . $valor2 . "</p>";
                        echo "Divido pelo valor <p>" . $resulta2 . "</p>";
                        echo "Resulta em <p>" . $resulta . "</p></div>";

                    echo "<ul>";
                    echo "Valor <li>" . $valor1 . "</li>";
                    echo "Divisor <li>" . $valor2 . "</li>";
                    echo "Quociente <li>" . $resulta2 . "</li>";
                    echo "Resto <li>" . $resulta . "</li>";
                    echo "</ul>";
                    ?>
            </p>
            <table class="divisao">
                <tr>
                    <td><?php $valor1?></td>
                    <td><?php $valor2?></td>
                </tr>
                <tr>
                    <td><?php $resulta2?></td>
                    <td><?php $resulta?></td>
                </tr>
            </table>
        </div>
    </section>
 </body>
</html>
