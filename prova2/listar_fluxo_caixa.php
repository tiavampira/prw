<?php 

    include ('conexao_prova2.php');
    $sql = 'SELECT * FROM fluxo_caixa';

    //retorna todos os dados da consulta
    $result = mysqli_query($con, $sql);

    $data_cadastro = date('d/m/Y');

    //retorna a primeira linha
    //$row = mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Fluxo de Caixa</title>
    <link rel="stylesheet" href="estilo.css">
    
</head>
<body>

    <h1 align="center"><font color="#FF0000">Listagem de Fluxo de Caixa</font></h1><br>
    <table align="center" border="1" width="600">

        <tr>
            <th>Código</th>
            <th>Data</th>
            <th>Tipo</th>
            <th>Valor</th>
            <th>Historico</th>
            <th>Cheque</th>
        </tr>

        <?php 
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" .$row['id']. "</td>";
                echo "<td>" .$row['data']. "</td>";
                echo "<td>" .$row['tipo']. "</td>";
                echo "<td>" .$row['valor']. "</td>";
                echo "<td>" .$row['historico']. "</td>";
                echo "<td>" .$row['cheque']. "</td>";  //DEPOIS SELECIONAR O EXCLUIR CERTO!!!!
                echo "<td><a href='excluir_agenda.php?id".$row['id']."'>Excluir</a></td>";                
                echo "</tr>";
            }
        ?>

    </table>

</body>

<h3>
    <a href='index_fluxo.php'> Voltar</a>
</h3>

</html>