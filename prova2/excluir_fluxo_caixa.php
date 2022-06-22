<?php
    include('conexao_prova2.php');

    $id = $_GET['id'];

    $sql = 'DELETE FROM fluxo_caixa WHERE id='.$id;

    echo "<h1> <font color=#FF0000>Exclusão de Contato</font></h1> ";

	$result = mysqli_query($con, $sql);

	if($result)

        echo "<h4><font color=#32CD32>Registro excluído com sucesso!<br><br></font></h4>";

	else

        echo "<h4><font color=#FF0000>Erro ao tentar excluir o contato!<br><br></font></h4>" .mysqli_error($con)."<br>";
  
?>

                <a href='listar_fluxo_caixa.php'> Voltar</a>