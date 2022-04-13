<?php 

$peso = $_GET['peso'];
$altura = $_GET['altura'];

$imc = ($altura * $altura)/$peso;

if($imc <17){

    echo 'seu imc indica que sua situação é de muito abaixo do peso! ';
}  
    
    else{

        if($imc =17 && $imc <=18.49){

            echo 'seu imc indica que sua situação é abaixo do peso!';

        }
        
            else{
                    
                if($imc = 18.50 && $imc <= 24.99 ){

                    echo 'seu imc indica que sua situação é de peso normal!';
                }  
                
                else {

                    if($imc = 25 && $imc <= 29.99){

                        echo 'seu imc indica que sua situação é de acima do peso';
                    }

                    else{

                        if($imc = 30 && $imc <=34.99){

                            echo ' seu imc indica que sua situação é de Obesidade I';
                        } 

                        else{

                            if($imc = 35 && 39.99){

                                echo 'seu imc indica que sua situação é de Obesidade II';
                            } 

                            else {

                                if($imc >40){

                                    echo ' seu imc indica que sua situação é de Obesidade III';
                                }
                            }
                        }
                    }
                }
        } 
        
       


}

?>