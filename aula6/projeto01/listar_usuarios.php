<?php

include('conexao.php');
    $sql = "SELECT * FROM usuarios";

    // retorna todos os dados da consulta 
    $result = mysqli_query($con, $sql);

    // retorna a primeira linha 
    $row = mysqli_fetch_array($result)


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Listagem de Usuarios </title>
    </head>
<body>

<h1>Listagem de usuarios </h1>
<table align="center" border="3" width=500;

        <tr>
            <th>Codigo</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Tekefone</th>

        </tr>
        <?php

    while($row = mysqli_fetch_array($result))
    {

        echo "<tr>";
        echo "<td>" . $row['id_usuario'] . '</td>';
        echo "<td>" . $row['nome_usuario'] . '</td>';
        echo "<td>" . $row['email.usuario'] . '</td>';
        echo "<td>" . $row['relefone_usuario'] . '</td>';
        echo "</tr>";
    }
        ?>

</body>
</html>