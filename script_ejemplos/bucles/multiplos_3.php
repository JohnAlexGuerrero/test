<label for="">Multiplos de 3</label>
<table border="1">

<?php
/**muestre por pantalla los multiplos del 3 comprendidos entre 1 a 100 */

for ($i=1; $i <=100 ; $i++) { 

    echo "<tr><td>".($i*3)."</td></tr>";
    
}

echo "</table>";
?>