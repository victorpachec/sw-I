<?php
    include_once "Conta.class.php";

    $conta1 = new Conta();


    $conta1->Nome = "fulano de tal";
    $conta1->Cpf = "123.456.789-19";
    $conta1->Saldo = "500";

    $conta1->Consultarsaldo();
    echo "<hr>";

    echo $conta1->Depositar(250);
    echo "<hr>";

     
    echo $conta1->Sacar(800);
    echo "<hr>";

?>