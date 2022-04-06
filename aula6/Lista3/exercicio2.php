<?php 

$vogais = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");

$palavra = "Batman";
    echo $palavra;

$Novapalavra = str_replace($vogais, "x", $palavra);
    echo $Novapalavra;

?>