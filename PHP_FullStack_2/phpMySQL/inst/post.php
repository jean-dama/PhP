<?php 
    require('config/db.php');
    require('config/config.php');

        if(isset($_POST['delete'])) {
            //capturando os dados do form
            $updated_id = mysqli_real_escape_string($connection, $_POST['delete_id']);
            $title = mysqli_real_escape_string($connection, $_POST['title']);
            $body = mysqli_real_escape_string($connection, $_POST['body']);
            $author = mysqli_real_escape_string($connection, $_POST['author']);
            $dedicated = mysqli_real_escape_string($connection, $_POST['dedicated']);

            //query para inserir os dados no banco de dados
            $query = "DELE FROM posts WHERE id = {$delete_id}";  

            //aqui vamos verificar a query do banco de dados
            if (mysqli_query($connection, $query)){
                header('Location: '. ROOT_URL .'');
            }else {
                echo ('ERROR') . mysqli_error($connection);
            }
        }
        //id
        $id = mysqli_real_escape_string($connection, $_GET['id']);
        //criando uma query
        $query = 'SELECT * FROM posts WHERE id = '.$id;
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
    <div>
        <a href="<?php echo ROOT_URL; ?>" class="btn btn-default">Back</a>
        <h1><?php echo $post['title']; //aqui estamos coletando o titulo?></h1>
        <span>Create at <?php echo $post['create_at']; //aqui a data?> by <?php echo $post['athor'];//aqui o autor ?> </span>
        <p><?php echo $post['body']; //aqui o conteudo?></p>
        <a class="btn btn-default" href="post.php?id=< ?php echo $post['id']; //redirecionamento para o post especifico?>"></a>]
        <!--Adicionando o campo de deletar-->    
        <form class="pull-right" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <input type="hidden" name="delete_id" value="<?php echo $post['id']; ?>" >
                <input type="submit" name="delete" class="btn btn-danger">
            </form>
        <a href="<?php echo ROOT_URL; ?>edipost.php?id=<?php echo $post['id']; ?>">Edit</a>
    </div>
<?php include('inst/footer.php'); //chamando os arquivos complementares?>