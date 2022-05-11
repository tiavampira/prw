<?php
include ('conexao.php');
 $nome = $_POST['nome'];
 $email = $_POST['email'];
 $telefone = $_POST['telefone'];

 echo "<p>Nome do usuario: ".$nome."<br>";
 echo "<p>E-mail: ".$email."<br>";
 echo "<p>Telefone: ".$telefone."<br>";

 $sql ="insert into usuario ('nome', 'email', 'telefone')
        values ('".$nome. '" ,"'.$email. '" ,"'.$telefone. "')";

$result = mysqli_query($con, $sql);
if($result)
    echo "Dados inseridos dos sucessos";

    else 
    echo "Erro ao inserir no banco de dados".mysqli_error($con);
    

?>