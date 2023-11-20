<?php 

    $frutas[] = 'Banana';
    $frutas[] = 'Morango';
    $frutas[] = 'Melancia';
    $frutas[] = 'Uva';
    $frutas[] = 'Abacaxi';
    $frutas[] = 'Melao';
    $frutas[] = 'Abacate';
    $frutas[] = 'Pessego';
    $frutas[] = 'Maracuja';
    $frutas[] = 'Maça';
    $frutas[] = 'Kiwi';
    $frutas[] = 'Ameixa';
    $frutas[] = 'Mamao';
    $frutas[] = 'Manga';
    $frutas[] = 'Açai';
    $frutas[] = 'Tamara';
    $frutas[] = 'Laranja';
    $frutas[] = 'Mexerica';
    $frutas[] = 'Pocan';
    $frutas[] = 'Limao';
    $frutas[] = 'Pitanga';
    $frutas[] = 'Cupuacu';
    $frutas[] = 'Butia';
    $frutas[] = 'Naranja';
    $frutas[] = 'Caturra';
    $frutas[] = 'Ania';
    $frutas[] = 'Yamero';
    $frutas[] = 'Nani';
    $frutas[] = 'Baka';
    $frutas[] = 'Ykize';

    $query = $_GET['q'];//criamos uma variavel e setamos o coletado

    $suggestion = ''; //aqui setamos uma variavel em branco

    if($query !== '') {// estamos verificando se a query coletada não esta vazia
        $query = strtolower($query);//aqui estamos mudando tudo para lowercase
        $length = strlen($query);//aqui usando a funcao default do php para verificar o length
        foreach($frutas as $frutas){//aqui analisamos cada um dos valores das frutas
            if(stristr($query, substr($frutas, 0 , $length))) {//aqui usamos funcoes default do php para verificar o conteudo recebido da query e o valor da variavel fruta
                if($suggestion === '') {//aqui se o valor de sugestao for igual a nada
                    $suggestion = $frutas;//vai receber o valor de fruta
                }else {//se nao
                    $suggestion .= ',$frutas';//vamos receber o valor da variavel fruta
                }
            }
        }
    }
    echo $suggestion === '' ? 'Sem sugestão' : $suggestion;//aqui estamos verificando se a sugestão esta vazia, se estiver, nao tem sugestao, se tiver conteudo, vai verificar a funcao a cima e dar uma sugestao com base no array das frutas
    ?>