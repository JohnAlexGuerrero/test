<table border="1">
<?php
    echo "impresion de numeros con ciclos: <br><br>";
    echo "<label >bulce for</label><br><br>";

    for ($i=1; $i <=10 ; $i++) {
         echo "<tr><td>nùmero: ".$i."<br></tr></td>";
        }
    echo "</table>"
?>

<table border="1">
<?php
    
    echo "<label >bulce While</label><br><br>";

    $cont=1;
    while ($cont <= 10) {
        echo "<tr><td>nùmero: ".$cont."<br></tr></td>";
        $cont++;
    }
    
    echo "</table>"
?>

<table border="1">
<?php
    
    echo "<label >bulce Do While</label><br><br>";

    $cont=1;
    do {
        echo "<tr><td>nùmero: ".$cont."<br></tr></td>";
        $cont++;
    } while ($cont <= 10);
    
    echo "</table>"
?>