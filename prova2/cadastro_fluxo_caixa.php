    <?php
    
    include('conexao_prova2.php'); 


    // 


    $data = $_POST['data'];

    $tipo = $_POST['tipo'];

    $valor = $_POST['valor'];

    $historico = $_POST['historico'];

    $cheque = $_POST['cheque'];


    //


    echo "<h1> <font color=#FF0000>Cadastro de Fluxo de Caixa </font></h1> ";
    echo "<p> data: " . $data . "<br><br>";
    echo "tipo: " . $tipo . "<br><br>";
    echo "valor: " . $valor . "</p><br>";
    echo "historico: " . $historico . "</p><br>";
    echo "cheque " . $cheque . "</p><br>";


    //

    $sql = "INSERT INTO fluxo_caixa (data, tipo, valor, historico, cheque)
	        VALUES ('".$data."','".$tipo."','".$valor."', '".$historico."', '".$cheque."')";
	    
	$result = mysqli_query($con, $sql);

    //

	if($result)

    echo "<h4> <font color=#32CD32>Dados inseridos com sucesso!<br><br></font></h4>";

        else

                echo "<h4> <font color=#FF0000>Erro ao tentar inserir dados no banco de dados!<br><br></font></h4> ".mysqli_error($con);

    ?>