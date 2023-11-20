<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="http://bootswatch.com/cerulean">
    </head>
    <body>
        <div class="container">
            <h1>Busca</h1>
            <form>
                Buscar: 
                <input type="text" class="form-control" onkeyup="Busca(this.value)">
            </form>
            <p>Sugestões:<span id="output"></span>
            </p>
        <div>
        <script src="search.js"></script>
    </body>
</html>