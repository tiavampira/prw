<?php 


    include('conexao.php');
    $id_usuario = $_GET['id_usuario'];
    $sql = 'SELECT * FROM usuario where id_usuario ='.$id_usuario;
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html>
<body>
    <h2>Alteração de Dados </h2>
    
      </form>
      
        <p class="nome_usuario">
            <label for="nome_usuario">Nome:</label>
            <input type="text" id="nome" value="<?php echo $row['nome_usuario']?>" 
            placeholder="digite aqui seu nome";
        </p>

   
    <p class="email_usuario">
        <label for="email_usuario">Email:</label>
        <input type="text" id="email" value="<?php echo $row['email_usuario']?>"
        placeholder="digite aaqui seu email"; 
        
    </p>
    <p class="telefone_usuario">
        <label for="telefone_usuario">Telefone:</label>
        <input type="text" id="telefone" value="<?php echo $row['telefone usuario']?>" 
        placeholder="digite aqui seu telefone ";
    </p>
    <p class="submit">
        <input type="submit" value="Enviar" />
    </p>
    </form>
</body>
</html>
