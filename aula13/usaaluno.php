<?php
    include_once 'Auluno.class.php';

    $fulano = new Auluno("Fulano da silva",5,7);

    

    $nota1 = $fulano->getNota1();
    $nota2 = $fulano->getNota2();
    $media = $fulano->Media($nota1,$nota2);
    echo $fulano->VerificarSituacao($media);

    echo "Aluno" . $fulano->getNome() . "<br>";
    echo "Media: $media<br>";
    echo "Situação: $situacao<br>";




?>