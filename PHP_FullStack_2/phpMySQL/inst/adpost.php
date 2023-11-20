<?php 
    require('config/db.php');
    require('config/config.php');

        if(isset($_POST['submit'])) {
            //capturando os dados do form
            $title = mysqli_real_escape_string($connection, $_POST['title']);
            $body = mysqli_real_escape_string($connection, $_POST['body']);
            $author = mysqli_real_escape_string($connection, $_POST['author']);
            $dedicated = mysqli_real_escape_string($connection, $_POST['dedicated']);

            //query para inserir os dados no banco de dados
            $query = "INSERT INTO posts(title, author, body) VALUES('$title','$body','$author','$dedicated')";

            //aqui vamos verificar a query do banco de dados
            if (mysqli_query($connection, $query)){
                header('Location: '. ROOT_URL .'');
            }else {
                echo ('ERROR') . mysqli_error($connection);
            }
        }
    
    ?>
    <!-- primeira forma de fazer-->
    <?php include('inst/header.php'); //chamando os arquivos complementares?>
        <div class="container">
            <h1>Form</h1>
            <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control"/>
                </div>
                <div class="form-group">
                    <label>Author</label>
                    <input type="text" name="title" class="form-control"/>
                </div>
                <div class="form-group">
                    <label>Body</label>
                    <input name="body" class="form-control"/>
                </div>
                <div class="form-group">
                    <label>Dedicated</label>
                    <input type="text" name="title" class="form-control"/>
                </div>
                <input type="submit" name="submit" value="submit" class="btn btn-primary">
            </form>
        </div>
    <?php include('inst/footer.php'); //chamando os arquivos complementares?>