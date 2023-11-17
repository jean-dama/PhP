<div>
    <?php 
        $result = base_convert(254 ,10 , 8);
        print("$result");
        /*base_convert é uma funcao que faz o calculo, ja default do php, 
        outros exemplos de funcoes default, ceil(), floor(),round(),hypot(),intdiv()*/
        $result1 = base_convert(254 ,10 , 2);
        print("$result1");
        $result2 = intdiv(5,2);
        print("$result2");
        /*min() e max() sao outras funcoes default do php tambem, para encontrar o maior ou menor valor*/
        $result3 = min(5,2);
        print("$result3");
        /*min() e max() sao outras funcoes default do php tambem, para encontrar o maior ou menor valor*/
        $result4 = "4" + "4";
        print("$result4");
        /*o php converte auto a string para numero e soma*/
        /*$result4 = "4" . "4"; esta e a forma para concatenar */
    ?> 
</div>