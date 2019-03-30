<?php
/**Escriba  un Scripten  PHPque  muestre  por  pantalla 
 *  los  primeros  100 números naturales de 2 en 2 */ 

 echo "<label>Numero naturales de 2 en 2</label>";
 $contador =2;

 while ($contador <= 100) {
     echo "<br>numero: ".$contador;
     $contador+=2;
 }


?>