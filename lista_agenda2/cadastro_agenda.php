<?php
    include('conexao_agenda.php');

    //UPLOAD

$foto_nome = $_FILES['foto']['name'];
$target_dir = "upload/";
$target_file = $target_dir . basename($_FILES["foto"]["name"]);
// selectt file type
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Valed file extension
$extensions_arr= array("jpg", "jpeg", "png", "gif");
// Check extension 
if(in_array($imageFileType,$extensions_arr)){
    //uploaud file
    if(move_uploaded_file($_FILES['foto']['tmp_name'], $target_dir.$foto_nome)){
        $foto_blob = addslashes(file_get_contents($target_dir.$foto_nome));

    }
}

    $nome = $_POST['nome'];
    $apelido = $_POST['apelido'];
    $endereco = $_POST['endereco'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $telefone = $_POST['telefone'];
    $celular = $_POST['celular'];
    $email = $_POST['email'];

    //

    echo "<h1> <font color=#FF0000>Cadastro da Agenda</font></h1> ";
    echo "<p> Nome: " . $nome . "<br><br>";
    echo "Apelido: " . $apelido . "<br><br>";
    echo "Endereço: " . $endereco . "</p><br>";
    echo "Bairro: " . $bairro . "</p><br>";
    echo "Cidade: " . $cidade . "</p><br>";
    echo "Estado: " . $estado . "</p><br>";
    echo "Telefone: " . $telefone . "</p><br>";
    echo "Celular: " . $celular . "</p><br>";
    echo "E-mail: " . $email . "</p><br>";

	//

	$sql = "INSERT INTO agenda2 (nome, apelido, endereco, bairro, cidade, estado, telefone, celular, email, foto_blob, foto_nome) 
	        VALUES ('".$nome."','".$apelido."','".$endereco."', '".$bairro."', '".$cidade."', '".$estado."', '".$telefone."', '".$celular."', '".$email."', '".$foto_blob."', '".$foto_nome."')";
	    
	$result = mysqli_query($con, $sql);

    //

	if($result)

        echo "<h4> <font color=#32CD32>Dados inseridos com sucesso!<br><br></font></h4>";

	else

		echo "<h4> <font color=#FF0000>Erro ao tentar inserir dados no banco de dados!<br><br></font></h4> ".mysqli_error($con);

?>

<a href='index.php'> Voltar</a>