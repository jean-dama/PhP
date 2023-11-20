<?php 
    //aqui estamos usando uma funcao default do php para criar a conexao com o banco de dados
    $connection = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

    if (mysqli_connect_errno()){//aqui estamos verificando a conexxao do banco de dados, se esxistir um erro no banco, ele vai pŕintar na mensagem a abaixo.
        echo'Conexao falhou com o banco de dados' . mysqli_connect_errno();
    }

    ?>