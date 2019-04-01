<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<table class="table table-dark">
<thead>
<tr>
<th>Numeros Pares</th>
<th>Numeros Impares</th>
</tr>
</thead>
<tbody>
<tr>

<?php
/**Escriba  un Script en  PHP que  genere  aleatoriamente
 *   10  números enteros  positivos  y  los  muestre  por  pantalla,
 *   y visualice  además  el siguiente reporteen una tabla
 *  HTML:-Total de números pares generados.
 * -Total de números impares generados */

  echo " <label><h2>Reporte de Números Aleatorios</h2></label>";


  for ($i=0; $i <10 ; $i++) { 
      $n=rand(1,100);
    if ($n%2==0) {
        echo " <td>".$n."</td>";
        echo "<td> "." </td></tr>";
        $pares[$i]=$n;
    }else {
        echo " <td> "." </td>";
        echo " <td>".$n."</td></tr>";
        $impares[$i]=$n;
    }

  }
  echo "</tbody>
  </table>";

  echo "<table class='table table-dark'>
  <thead><tr>
  <th>Total de Números Pares:   ".count($pares)."</th>
  <th>Total de Números Impares:   ".count($impares)."</th>
  </tr></thead></table>";


?>
</body>
</html>