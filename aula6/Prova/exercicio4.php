<?php

$nome = $_GET['nome'];

$rg = $_GET['rg'];

$cpf = $_GET['cpf'];


$saldo = $_GET['saldo'];
echo $saldo;

$valor = $_GET['valor'];
echo $valor;

$genero = $_GET['genero'];
echo $genero;

$estado = $_GET['estado'];
echo $estado;


if(isset($_GET['nome'])) {

   
    for($nome = 0; $nome < count($_GET['nome']); $nome++) {
    
    echo "Nome:" .$GET['nome'][$cpf];
    }
    
    } else {
    
    echo "o nome não está em branco!";
    
    }

    readfile('exercicio4.html');


    if(isset($_GET['cpf'])) {

   
        for($cpf = 0; $cpf < count($_GET['cpf']); $cpf++) {
        
        echo "CPF:" .$GET['cpf'][$cpf];
        }
        
        } else {
        
        echo "o cpf não está em branco!";
        
        }
    
        readfile('exercicio4.html');
        
        if(isset($_GET['rg'])) {

   
            for($rg = 0; $rg < count($_GET['rg']); $rg++) {
            
            echo "RG:" .$GET['rg'][$rg];
            }
            
            } else {
            
            echo "o RG não está em branco!";
            
            }
        
            readfile('exercicio4.html');
        

$_GET['genero'] = ( isset($_GET['genero']) ) ? $_GET['genero'] : null;

  if (isset($_GET['genero'])) {
    var_dump("escolheu " . $_GET['masculino']);
} else {
    if(isset($_GET['genero'])){
    var_dump("escolheu " .$_GET['feminino']);
    } else{
        if(isset($_GET['genero'])){
            var_dump("escolheu " .$_GET['nao_binario']);
    } else{
        var_dump("Não escolheu nenhum genero");
    }

}
if(isset($_GET['estado'])) {

   
    for($estado = 0; $estado < count($_GET['estado']); $estado++) {
    
    echo "O estado é" .$GET['estado'][$estado]. "foi selecionado";
    }
    
    } else {
    
    echo "nenhum estado foi selecionado";
    
    }

    readfile('exercicio4.html');
}

        if($saldo > $valor){

            echo "A compra pode ser realizada";
        } else{
            if($saldo < $valor){

                echo "Saldo insulficiente para a realização da compra";
                readfile('menuProva.html');
            }
        }
?>