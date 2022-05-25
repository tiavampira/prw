<?php
   include('conexao_agenda.php');

   $id_agenda = $_GET['id_agenda'];

   $sql = 'SELECT * FROM agenda where id_agenda='.$id_agenda;

   $result = mysqli_query($con, $sql);

   $row = mysqli_fetch_array($result);

   $data_cadastro = date('d/m/Y');


?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro da Agenda</title>
    <link rel="stylesheet" href="estilo.css">

</head>

<body>
    <h1><font color="#FF0000">Alterar Contato</font></h1>
    <div id="teste">

        <form method="post" action="altera_agenda_exe.php">
            <fieldset>
                <legend><h1>Alteração</h1></legend>
                <div class="form-item">
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome" value="<?php echo $row['nome']?>" placeholder="Digite o nome"><p></p>
                </div>
                <div class="form-item">
                    <label for="apelido">Apelido</label>
                    <input type="apelido" id="apelido" name="apelido" value="<?php echo $row['apelido']?>" placeholder="Digite o apelido"><p></p>
                </div>
                <div class="form-item">
                    <label for="endereco">Endereço:</label>
                    <input type="endereco" id="endereco" name="endereco" value="<?php echo $row['endereco']?>" placeholder="Digite o endereco"><p></p>
                </div>
                <div class="form-item">
                    <label for="bairro">Bairro:</label>
                    <input type="text" id="bairro" name="bairro" value="<?php echo $row['telefone']?>" placeholder="Digite o Telefone"><p></p>
                </div>
                <div class="form-item">
                    <label for="cidade">Cidade:</label>
                    <input type="cidade" id="cidade" name="cidade" value="<?php echo $row['cidade']?>" placeholder="Digite a cidade"><p></p>
                </div>
                <div class="form-item">
                    <label for="estado">Estado:</label>
                    <input type="estado" id="estado" name="estado" value="<?php echo $row['estado']?>" placeholder="Digite o estado"><p></p>
                </div>
                <div class="form-item">
                    <label for="telefone">Telefone:</label>
                    <input type="telefone" id="telefone" name="telefone" value="<?php echo $row['telefone']?>" placeholder="Digite o telefone"><p></p>
                </div>
                <div class="form-item">
                    <label for="celular">Celular:</label>
                    <input type="celular" id="celular" name="celular" value="<?php echo $row['celular']?>" placeholder="Digite o celular"><p></p>
                </div>
                <div class="form-item">
                    <label for="email">E-mail:</label>
                    <input type="email" id="email" name="email" value="<?php echo $row['email']?>" placeholder="Digite o email"><p></p>
                </div>
                <div class="form-item">
                    <label for="data_cadastro">Data de Cadastro:</label>
                    <input type="data_cadastro" id="data_cadastro" name="data_cadastro" value="<?php echo $data_cadastro ?>" placeholder="Digite a data de cadastro"><p></p>
                </div>
                
                <div class="form-item">
                    <input id="btn" type="submit" value="Enviar" ><p></p> 
                    <a href='listar_agenda.php'> Voltar</a><p></p>
                </div>
                <input name="id_agenda" type="hidden" value="<?php echo $row['id_agenda']?>">
                
            </fieldset>
        </form>

    </div>
</body>
</html>