<?php 
  $num1 = $_GET['num1']; 
  $num2 = $_GET['num2'];
  echo "Seu número 1 é : " 
  echo $num1; "<br>";

  echo "Seu número 2 é: "
  echo $num2; "<br>";
  echo "<br /><br />";

  switch ($resultado){

    case 1($opcao1){
      $resultado = $num1 + $num2;
      echo $resultado++;
      break;

    }

    case 2($opcao2){
      $resultado = $num1 - $num2;
      echo $resultado++;
      break;

    }

    case 3($opcao3){
      $resultado = $num1 * $num2;
      echo $resultado++;
      break;

    }

    case 4($opcao4){
      $resultado =$num1 % $num2;
      echo $resultado++;
      break;

      default 
      echo "Erro, insira informações corretamentes";
    }
  }

?>