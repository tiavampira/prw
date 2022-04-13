<?php

$email = $_POST['email'];
$senha = $_POST['senha'];

$usuarios = array ('queirozellen@gmail.com' => 'ellen12345',
                    'nicoleyay@gmail.com' => 'nicole12345');

    
        if(array_key_exists($email, $email)){

            if($usuarios[$email == $senha]){

                echo 'Acesso permitido';
            }
            else{

                echo 'Senha incorreta';

            }
        } else{

            echo ' Usuário não encontrado, tente novamente';
        }



?>