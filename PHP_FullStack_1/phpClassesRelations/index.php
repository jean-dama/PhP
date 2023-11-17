<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <div>
            <h1>Lutinha</h1>
            <pre>
                <?php require_once 'Lutador.php';
                      require_once 'Luta.php';
                     
                     $l = array();
                     $l[0] = new Lutador('Nome','Franca','31',1.65,68.9,'Leve',11,3,1);
                     $l[1] = new Lutador('Nome','Brasil','21',1.85,68.9,'Leve',11,3,1);
                     $l[2] = new Lutador('Nome','Haiti','41',1.77,68.9,'Leve',11,3,1);
                     $l[3] = new Lutador('Nome','Zumva','35',1.78,68.9,'Leve',11,3,1);
                     $l[4] = new Lutador('Nome','Chile','37',1.91,68.9,'Leve',11,3,1);
                     $l[5] = new Lutador('Nome','Argentina','33',1.85,68.9,'Leve',11,3,1);

                     $l[1]->Apresentar();
                     $l[1]->Status();

                    $UC01 = new Luta();
                    $UC01->marcarLuta($l[0], $l[1]);
                    $l[0]->Status();
                    $l[1]->Status();

                    ?>
            </pre>
        </div>
    </body>
</html>