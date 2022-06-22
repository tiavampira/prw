<?php 

   $numero1 = $_GET["numero1"];
   $numero2 = $_GET["numero2"];
   $op = $_GET["op"];

   if(($numero1 == 0 ) || ($numero2==0)){
    echo "Número inválido";
        } else if($op == 1){
    echo "Adição = ". $numero1+$numero2;
        } else if($op == 2){
    echo "Subtração = ". $numero1-$numero2;
        } else if($op == 3){
    echo "Multiplicação = ". $numero1*$numero2;
        }else if($op == 4){
    echo "Divisão = ". $numero1/$numero2 ;
        } else echo "Não foi possível fazer a sua operação";
    
        
?>