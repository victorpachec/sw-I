<?php
class Auluno{
    private $Nome;
    private $Nota1;
    private $Nota2;

    public function __construct($nome,$n1,$n2){
        $this->Nome = $nome;
        $this->Nota1 = $n1;
        $this->Nota2 = $n2;
    }

    public function getNome(){
        return $this->Nome;
    }

    public function getNota1(){
        return $this->Nota1;
    }

    public function getNota2(){
        return $this->Nota2;
    }

    public function media($n1,$n2){
        $media = ($n1 + $n2)/2;
        return $media;
    }

    public function VerificarSituacao($media){
        if ($media>=7){
            
            return "APROVADO";
        }else{
        return "reprovado";
        }
    }
}

?>