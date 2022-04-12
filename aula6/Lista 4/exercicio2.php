<?php 
  
  $textinho = $_GET['textinho'];
  $nome = $_GET['nome']; 
  echo $nome; "<br>";
  echo $textinho; "<br>";

  $_POST['altura'] = ( isset($_POST['altura']) ) ? $_POST['altura'] : null;

  if (isset($_POST['altura'])) {
    var_dump("escolheu " . $_POST['altura']);
} else {
    var_dump("não escolheu nenhuma altura");
}

  if(isset($_POST[“cor”])) {

    // Faz um loop no Array de checkbox
    
    // A função count retorna a quantidade de checkbox selecionado
    
    for($i = 0; $i < count($_POST[“cor”]); $i++) {
    
    
    echo “A cor “.$_POST[“cor”][$i].” foi selecionada!<br />”;
    
    }
    
    } else {
    
    echo “Nenhuma cor foi selecionada!”
    
    }

    readfile('menu.html');
    
    
?>