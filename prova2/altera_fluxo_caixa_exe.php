<?php
    $id = $_POST["id"];

    $data = date("Y-m-d");

    $data = implode("/",array_reverse(explode("-",$data)));

    $tipo = $_POST['tipo'];

    $valor = $_POST['valor'];

    $historico = $_POST['historico'];

    $cheque = $_POST['cheque'];

    echo "<h1><font color=#FF0000>Alterar Contato</font></h1>";
    
    echo "<p> Nome Usuário: " . $nome . "<p>";
    
    echo "data: $data
    <br><br>Tipo: $tipo
    <br><br>Valor: $valor
    <br><br>Historico: $historico
    <br><br>Cheque: $cheque ";


    
    $sql = "UPDATE fluxo_caixa SET
            data='$data',
            tipo='$tipo',
            valor='$valor',
            historico='$historico',
            cheque='$cheque',
            estado='$estado'
            WHERE id=" . $id;

    
    $result = mysqli_query($con, $sql);

    if ($result) 
    {
        echo "<h4><font color=#32CD32>Dados alterados com sucesso!<br><br></font></h4>";
    } 
    else 
    {
        echo "<h4><font color=#FF0000>Erro ao tentar alterar os dados<br><br></font></h4>" .mysqli_error($con)."<br>";
    }
?>

<a href="index_fluxo.php">Voltar</a>