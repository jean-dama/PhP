function Busca (str) {
    if(str.lengt == 0) {
        document.getElementById('output').innerHTML = '';//estamos verificando aqui se o input tem ao menos algum caracter ou nada
    } else {
        //Aqui estamos chamando o AJAX 
        let xmlHttp = new XMLHttpRequest();//aqui estamos setando um novo objeto aqui e abaixo estamos chamando o mesmo 
        xmlHttp.onreadystatechange = function() {//observando o onreadystatechange
            if(this.readyState == 4 && this.status == 200) {//aqui estamos confirmando que a reposta esta com a resposta 4 e o status 200
                document.getElementById('output').innerHTML = this.responseText;// aqui estamos coletando o input de novo e inserindo a resposta no input
            }
        }
        xmlHttp.open("GET","suggest.php?q="+str,true);//toda ver que a funcao busca, coletar algo sendo escrito no input, ela vai fazer uma request pelo metodo GET ao arquivo php que declaramos nesta linha com o conteudo inserido no input
        xmlHttp.send();
    }
}