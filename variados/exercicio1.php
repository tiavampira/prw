<?php 

$salario = 300;

if($salario <= 300){

    $reajuste = $salario + 0.05;
    $reajuste++;

    echo $reajuste;
} 
    
else{
    
    if($salario > 300){

    $reajuste = $salario - 0.03;
    $reajuste++;

    echo $reajuste;
    
    }
}

?>