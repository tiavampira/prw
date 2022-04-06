<?php 

$palavra= "Doutor Estranho é melhor filme de superação da Marvel";

echo "A variável contém:" . strlen($palavra) . "caracteres" . "<br>";
$palavra = trim($palavra);
echo "A variável agora contém:" . strlen($palavra) . "caracteres";
?>