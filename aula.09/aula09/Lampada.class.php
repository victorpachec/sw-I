<?php
    class Lampada{

        public $Fabricante;
        public $Tensao;
        public $Potencia;
        public $Cor;
        public $Status;

        public function Ligar(){
            $this->Status = True;

        }
        public function Desligar(){
            $this->Status = False;
            
            
        }
        public function MostrarDados(){
            echo "FABRICANTE: " . $this->Fabricante . "<br>";
            echo "Tensao: " . $this->Tensao . "<br>";
            echo "Potencia: " . $this->Potencia . "<br>";
            echo "Cor: " . $this->Cor . "<br>";
            if($this->Status == 1){
                echo "status da lampada ligada <br>";
            }else{
                echo "status da lampada desligada <br>";
            }
               echo "status da lampada ligada";
               
               echo "Status: " . $this->Status . "<br>";

            
        }
    }  


?>