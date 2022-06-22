<?php
   include('conexao_prova2.php');

   $id = $_GET['id'];

   $sql = 'SELECT * FROM fluxo_caixa where id='.$id;

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
    <title>Cadastro de Fluxo de Caixa</title>
    <link rel="stylesheet" href="estilo.css">

</head>

<body>
    <h1><font color="#FF0000">Alteraração de Algum Campo:</font></h1>
    <div id="teste">

        <form method="post" action="altera_fluxo_caixa_exe.php" enctype="multipart/form-data">
            <fieldset>
                <legend><h1>Alteração</h1></legend>
        
                <div class="form-item">
                    <label for="data">Data:</label>
                    <input type="text" id="data" name="data" placeholder="coloque a data"><p></p>
                </div>


                <div>
                    <label for="tipo">Escolha o tipo: </label>
                    <input type="radio" name"tipo" id="tipo1" value="entrada" >Entrada
                    <input type="radio" name"tipo" id="tipo2" value="saida" >Saida
                </div>


                <div class="form-item">
                    <label for="valor">Valor:</label>
                    <input type="text" id="valor" name="valor" placeholder="Digite o valor"><p></p>
                </div>


                <div class="form-item">
                    <label for="historico">Historico :</label>
                    <input type="text" id="historico" name="historico" placeholder="Digite o historico"><p></p>
                </div>
                <div >
                    <label for="cheque">Cheque:</label>
                    <input type="radio" name"cheque" id="chque1" value="sim" >Entrada
                    <input type="radio" name"cheque" id="cheque2" value="não" >Saida
                <div class="form-item">
                
                <div class="form-item">
                    <input id="btn" type="submit" value="Enviar" ><p></p> 
                    <a href='listar_fluxo_caixa.php'> Voltar</a><p></p>
                </div>
                <input name="id" type="hidden" value="<?php echo $row['id']?>">
                
            </fieldset>
        </form>

    </div>
</body>
</html>