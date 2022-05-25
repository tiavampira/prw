<?php
include ('conexao.php');

//UPLOAD

$fotoNome = $_FILES['foto']['name'];
$target_dir = "upload/";
$target_file = $target_dir . basename($_FILES["foto"]["name"]);
// selectt file type
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Valed file extension
$extensions_arr= array("jpg", "jpeg", "png", "gif");
// Check extension 
if(in_array($imageFileType,$extensions_arr)){
    //uploaud file
    if(move_uploaded_file($_FILES['foto']['tmp_name'], $target_dir.$fotoNome)){
        $fotoBlob = addslashes(file_get_contents($target_dir.$fotoNome));

    }
}

 $nome = $_POST['nome'];
 $email = $_POST['email'];
 $telefone = $_POST['telefone'];

 echo "<p>Nome do usuario: ".$nome."<br>";
 echo "<p>E-mail: ".$email."<br>";
 echo "<p>Telefone: ".$telefone."<br>";

 $sql = "INSERT INTO usuario (nome_usuario, email_usuario,telefone_usuario, foto_blob, foto_nome)
            VALUES ('".$nome."','".$email."', '".$telefone."', '".$fotoBlob."', '".$fotoNome."')";


$result = mysqli_query($con, $sql);
if($result)


    echo "Dados inseridos dos sucessos";

    else 
    echo "Erro ao inserir no banco de dados".mysqli_error($con);
    

?>