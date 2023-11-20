<?php 
    require('config/db.php');
    require('config/config.php');
        //id
        $id = mysqli_real_escape_string($connection, $_GET['id']);
        //criando uma query
        $query = 'SELECT * FROM posts ORDER BY created_at DESC';
        //pegando o resultado
        $result = mysqli_query($connection, $query);
        //Fetch Data, uma das formas é usando a funcao default do php e repassando a forma que queremos os dados que é o MYSQLI_ASSOC
        $post = mysqli_fetch_all($result);//($result, MYSQLI_ASSOC);
            //para visualizar o resultado que esta em posts
            //var_dump($posts);
            //Resultado
            mysqli_free_result($result);
            //fechando a conexao
            mysqli_close($connection);

    ?>
    <!-- primeira forma de fazer-->
    <?php include('inst/header.php'); //chamando os arquivos complementares?>
    <div class="container">
            <?php foreach($posts as $post) : //aqui estamos pegando cada um dos posts do resultado de posta acima?>
                <div class="well">
                    <h1><?php echo $post['title']; //aqui estamos coletando o titulo?></h1>
                    <span>Create at <?php echo $post['create_at']; //aqui a data?> by <?php echo $post['athor'];//aqui o autor ?> </span>
                    <p><?php echo $post['body']; //aqui o conteudo?></p>
                    <a class="btn btn-default" href="post.php?id=< ?php echo $post['id']; //redirecionamento para o post especifico?>"></a>
                <div>
            <?php endforeach ?>  
        </div>
    <?php include('inst/footer.php'); //chamando os arquivos complementares?>
    <!-- segunda forma de fazer
    < ?php include('inst/header.php'); ?>
        <div class="container">
            <a href="/" class="btn btn-default">Back</a>
            <div class="well">
                <h1>< ?php echo $post['title']; //aqui estamos coletando o titulo?></h1>
                <span>Create at < ?php echo $post['create_at']; //aqui a data?> by < ?php echo $post['athor'];//aqui o autor ?> </span>
                <p>< ?php echo $post['body']; //aqui o conteudo?></p>
                <a class="btn btn-default" href="post.php?id=< ?php echo $post['id']; //redirecionamento para o post especifico?>"></a>
            <div>
        </div>
    < ?php include('inst/footer.php'); ?>-->