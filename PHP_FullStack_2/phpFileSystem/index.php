<?php 

    $file = 'file.txt';
    $path = '/var/file.php';

        echo basename($path);//retornando o nome do arquivo

        echo basename($path, '.php');//retornando sem a extensao do arquivo

        echo dirname($path);//aqui mostramos o caminho do arquivo

        echo file_exists('file.txt'); //retornando um arquivo
        
        echo file_exists($file); //retornando um arquivo dentro de uma variavel

        echo realpath($file);//mostra o caminho do arquivo atual

        echo is_file($file);//verificando se o arquivo existe

        echo is_writable($file);//verificando se o arquivo é editavel, isso é delimitado dentro das propriedades do arquivo

        echo filesize($file);//verificando o tamanho do arquivo
        
        mkdir('testing');//para criar um diretorio

        rmdir('testing');//vai deletar o diretorio, se o mesmo estiver vazio

        echo copy('file.txt', 'file2.txt'); //vai copiar o arquivo e criar um de acordo com o nome que delimitamos

        unlink('testing.txt'); //assim conseguimos delimitar um arquivo

        echo file_get_contents('file.txt');// vai printar o conteudo do arquivo.
        
        echo file_put_contents($file, 'test');// vai inserir um conteudo no arquivo

        $another_text = 'testing';

        file_put_contents($file, $another_text);//vai substituir o conteudo de um arquivo por outro

        $handle = fopen($file, 'r');//aqui delimitamos que queremos abrir o arquivo e ler
        $data = fread($handle, filesize($file));//aqui informamos que queremos ler o arquivo
        echo $data; //aqui printamos o solicitado anteriormente

    ?>