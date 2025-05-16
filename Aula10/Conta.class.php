<?php
    class Conta{
        public $Nome;
        public $Cpf;
        public $Saldo;

        public function Sacar($valor){
            if($valor>$this->Saldo){
                return "saldo insuficiente";
            }else{
                $this->Saldo = $this->Saldo - $valor;
            $texto = "op realizado com sucesso. saldo atual e R$ ".$this->Saldo;
            return $texto;

            }
            $this->Saldo = $this->Saldo - $valor;
            return $this->Saldo;
        }
        public function Depositar($valor){
            $this->Saldo = $this->Saldo + $valor;
            $texto = "op realizado com sucesso. saldo atual e R$ ".$this->Saldo;
            return $texto;
        }
        public function Consultarsaldo(){
            echo "NOME: " . $this->Nome . "<br>";
            echo "CPF: " . $this->Cpf . "<br>";
            echo "Saldo: " . $this->Saldo . "<br>";
        }
    }






?>