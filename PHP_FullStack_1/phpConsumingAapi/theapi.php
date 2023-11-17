<div>
    <?php 

    $inicio = date('m-d-Y') ;//se eu quiser retirar o retroceder alguns dias da para usar strotime('-10 days'); por exemplo

    $fim = date('m-d-Y') ;

    $url = "https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial='&$inicio'&@dataFinalCotacao='&$fim'&$top=100&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao";
    
    $dados = json_decode(file_get_contents($url),true);

    //var_dump($dados); aqui estavamos testando a variavel e o valor que ela esta recebendo

    $cotacao = $dados['value'][0]['cotacaoCompra'];

    echo('Cotação'. $cotacao);

    ?>
</div>