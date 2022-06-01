<?php
    include('conexao_agenda.php');

    $id_agenda = $_GET['id_agenda'];

    $sql = 'DELETE FROM agenda2 WHERE id_agenda='.$id_agenda;

    echo "<h1> <font color=#FF0000>Exclusão de Contato</font></h1> ";

	$result = mysqli_query($con, $sql);

	if($result)

        echo "<h4><font color=#32CD32>Registro excluído com sucesso!<br><br></font></h4>";

	else

        echo "<h4><font color=#FF0000>Erro ao tentar excluir o contato!<br><br></font></h4>" .mysqli_error($con)."<br>";
  
?>

<a href='listar_agenda.php'> Voltar</a>