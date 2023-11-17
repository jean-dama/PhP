<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <div>
            <?php 
                require_once 'Pessoa.php';
                require_once 'Livro.php';

                $p[0] = new Pessoa('Teste',22,'aaaaaafw');

                $p[1] = new Pessoa('SAae',88,'ASaf');


                $l[0] = new Livro('PHP basico','jose sin', 300,false, 'asda', $p[0]);
                $l[1] = new Livro('PHP intermediario','jose sao', 400,true, 'asda', $p[1]);
                
                $l[0]->abrir();
                $l[0]->folhear(200);
                
                $l[0]->detalhes();
                $l[1]->detalhes();
                $l[2]->detalhes();

                ?>
        </div>
    </body>
</html>