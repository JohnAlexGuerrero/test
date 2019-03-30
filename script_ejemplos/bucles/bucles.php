<table border="1">
<?php
    echo "impresion de numeros con ciclos: <br><br>";
    echo "<label >bucle for</label><br><br>";

    for ($i=1; $i <=10 ; $i++) {

        if ($i%2==0) {
            echo "<td bgcolor='yellow'>nùmero: ".$i."</td>";
        }else {
            echo "<td bgcolor='orange'>nùmero: ".$i."</td>";
        }

         
        }
    echo "</table>"
?>

<table border="1">
<?php
    
    echo "<label >bucle While</label><br><br>";

    $cont=1;
    while ($cont <= 10) {
        
        if ($i%2==0) {
            echo "<td bgcolor='while'>nùmero: ".$cont."</td>";
        }else {
            echo "<td bgcolor='orange'>nùmero: ".$cont."</td>";
        }
        $cont++;
    }
    
    echo "</table>"
?>

<table border="1">
<?php
    
    echo "<label >bucle Do While</label><br><br>";

    $cont=1;
    do {
        echo "<tr><td>nùmero: ".$cont."<br></tr></td>";
        $cont++;
    } while ($cont <= 10);
    
    echo "</table>"
?>