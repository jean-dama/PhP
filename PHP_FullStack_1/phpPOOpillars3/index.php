
<?php 

    require_once('classPerson.php');
    require_once('Funcionario.php');
    require_once('classProf.php');
    require_once('Aluno.php');

    $p1 = new Person();
    $p2 = new Aluno();
    $p3 = new Prof();
    $p4 = new Funcionario();

    $p1->setNome('Pedro');
    $p2->setNome('Joao');
    $p3->setNome('Maria');
    $p4->setNome('Jose');

    $p2->setCurso('Test');
    $p3->setSalary(416587);
    $p4->setSetor('Estoque');
    
    print_r($p1);
    print_r($p2);
    print_r($p3);
    print_r($p4);

        ?>