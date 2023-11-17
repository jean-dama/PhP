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
        <?php require_once 'classFour.php';
            $new = new aPen;
            $new->model = 'Nani';

            $new->rabisco(); //aqui estamos manipulando os atributos protegidos com a funcao publica

            $new->tampar(); //aqui estamos manipulando os atributos protegidos com a funcao publica
            
            var_dump($new);

            ?>
    </div>
</body>
</html>