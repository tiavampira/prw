<?php
    include("conexao_agenda.php");

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

    $id_agenda = $_POST["id_agenda"];

    $nome = $_POST['nome'];

    $apelido = $_POST['apelido'];

    $telefone = $_POST['telefone'];

    $celular = $_POST['celular'];

    $email = $_POST['email'];

    $estado = $_POST['estado'];

    $cidade = $_POST['cidade'];

    $endereco = $_POST['endereco'];

    $bairro = $_POST['bairro'];

    $data_cadastro = date("Y-m-d");

    $data = implode("/",array_reverse(explode("-",$data_cadastro)));

    echo "<h1><font color=#FF0000>Alterar Contato</font></h1>";
    
    echo "<p> Nome Usuário: " . $nome . "<p>";
    
    echo "Nome: Nome: $nome
    <br><br>Apelido: $apelido
    <br><br>Telefone: $telefone
    <br><br>Celular: $celular
    <br><br>E-mail: $email
    <br><br>Estado: $estado
    <br><br>Cidade: $cidade
    <br><br>Endereco: $endereco
    <br><br>Bairro: $bairro
    <br><br>Data: $data";


    if( strlen($foto_nome) > 0){
        $sql = "UPDATE agenda2 SET
            nome='$nome',
            apelido='$apelido',
            telefone='$telefone',
            celular='$celular',
            email='$email',
            estado='$estado',
            cidade='$cidade',
            endereco='$endereco',
            bairro='$bairro',
            data_cadastro='$data_cadastro'
            foto_blob='".$foto_blob."',
            foto_nome'".$foto_nome."'
            WHERE id_agenda" . $id_agenda;

}
else {
    
    $sql = "UPDATE agenda2 SET
            nome='$nome',
            apelido='$apelido',
            telefone='$telefone',
            celular='$celular',
            email='$email',
            estado='$estado',
            cidade='$cidade',
            endereco='$endereco',
            bairro='$bairro',
            data_cadastro='$data_cadastro'
        WHERE id_agenda" . $id_agenda;
}

    
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

<a href="index.php">Voltar</a>