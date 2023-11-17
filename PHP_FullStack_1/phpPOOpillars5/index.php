<?php 
    //polimorfismo de sobreposicao tem a mesma assinatura, ou seja a funcao tem o mesmo nome e atributos mas pode ser utilizada em classes diferentes
    //polimorfismo de sobrecarga tem assinaturas diferentes, ou seja a funcao tem o mesmo nome, mas os atributos sao diferentes e pode ser utilizado na mesma classe
    require_once('classMamifero.php');
    require_once('classAnimal.php');
    require_once('classAve.php');
    require_once('classPeixe.php');
    require_once('classReptil.php');

        $mamifero = new Mamifero();
        $ave = new Ave();
        $lagarto = new Reptil();

        $mamifero->setCorPelo('preto');
        $ave->Locomover();
        $lagarto->Locomover();
    
        ?>