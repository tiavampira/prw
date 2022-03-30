<?php
$soma = 0;

   for($num = 1 ; $num < 100 ; $num++)
   {
       if($num%2==0)
       {
        $soma= $soma+$num;
       }
   }

   echo $soma;

    

?>