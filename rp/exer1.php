<?php 

    $num1 = 9;
    $num2 = 5;

    if(($num1 == 0 ) || ($num2==0)){
        echo "Número inválido";
    } else {
        echo "Adição = ", $num1+$num2;
        echo "<br> Subtração = ", $num1-$num2;
        echo "<br> Multiplicação = ", $num1*$num2;
        echo "<br> Divisão = ", $num1/$num2;

    }

        echo "<br>Programa Finalizado com sucesso :)";

?>