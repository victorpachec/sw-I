<?php
    include_once 'pessoa.class.php';
    
    //instanciar um objeto (nova pessoa)
    $pessoa1 = new pessoa;
    $pessoa2 = new pessoa;


    //atribuir alguns valores
    $pessoa1->nome = 'fulano da silva';
    $pessoa->peso = 85.3;
    $pessoa-> altura = 1.82;

    $pessoa2->nome = 'maria';
    $pessoa->peso = 50.3;
    $pessoa-> altura = 1.60;



    //chamando um jmetodo da classe pessoa
    $pessoa1->mostrardados();
