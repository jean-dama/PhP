<?php 

    require_once('classPessoa.php');
    require_once('classVisitante.php');
    require_once('classAluno.php');
    require_once('classBolsista.php');

        //$pessoa1 = new Pessoa(); nao vai funcionar, a classe pessoa nao pode criar objeto pois é uma classe abstrata
        $pessoa1 = new Visitante('Nome',33,'Nani');
        $pessoa2 = new Visitante('Teste',41,'GEss');
        
        print_r($pessoa1 . $pessoa2);

        $aluno1 = new Aluno('Nome',12,'Sex','89798','cuirs');

        $bolsista = new Bolsista('ewgwe',12,'sex','18798','cawww','efewfwe');
    ?>