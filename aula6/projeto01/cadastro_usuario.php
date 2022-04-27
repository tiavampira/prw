<?php
include ('conexao.php');
 $nome_usuario = $_POST['nome_usuario'];
 $email_usuario = $_POST['email_usuario'];
 $telefone_usuario = $_POST['telefone_usuario'];

 echo "<p>Nome do usuario: ".$nome_usuario."<br>";
 echo "<p>E-mail: ".$email_usuario."<br>";
 echo "<p>Telefone: ".$telefone_usuario."<br>";

 $sql ="insert into usuario ('nome_usuario', 'email_usuario', 'telefone_usuario')
        values ('".$nome_usuario. '" ,"'.$email_usuario. '" ,"'.$telefone_usuario. "')";

$result = mysqli_query($con, $sql);
if($result)
    echo "Dados inseridos dos sucessos";

    else 
    echo "Erro ao inserir no banco de dados".mysqli_error($con);
    

?>