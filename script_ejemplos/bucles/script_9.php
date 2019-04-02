<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body >
<table class="table table-hover">
    <thead>
      <tr>
        <th>Negativos</th>
        <th>Positivos</th>
      </tr>
    </thead>
    <tbody>

    <?php
    /**Escriba  un Scripten  PHP que  genere  aleatoriamente
     *   10  números enteros  positivos y negativos,  y 
     *  los  muestre  por  pantalla,  y  visualice además 
     * el siguiente reporteen una tabla HTML:
     * -Total de números positivosparesgenerados.
     * -Total de números positivos impares generados.
     * -Total de números negativos pares generados.
     * -Total de números negativos impares generados */

    for ($i=0; $i <10 ; $i++) { 
        $n=rand(-100,100);
      if ($n<0) {
          echo " <td>".$n."</td>";
          echo "<td>  </td></tr>";
          $negativos[$i]=$n;
      }else if($n>=0){
          echo " <td> "." </td>";
          echo " <td>".$n."</td></tr>";
          $positivos[$i]=$n;
      }
    }

      $count_p_par=0;
      $count_p_impar=0;
      $count_n_impar=0;
      $count_n_par=0;

      for ($i=0; $i <count($negativos) ; $i++) { 
      if (abs($negativos[$i])%2==0) {
        $count_n_par++;    
      }else {
          $count_n_impar++;
      }
    }
      for ($i=0; $i <count($positivos) ; $i++) { 
        if ($positivos[$i]%2==0) {
          $count_p_par++;    
        }else {
            $count_p_impar++;
        }
  
    }

    echo "</tbody>
    </table>";
    
    echo "<table class='table table-dark'>
    <thead><tr>
    <th>Total de números negativos pares generados:   ".$count_n_par."</th>
    <th>Total de números negativos impares generados:   ".$count_n_impar."</th>
    <th>Total de números positivos pares generados:   ".$count_p_par."</th>
    <th>Total de números positivos impares generados:   ".$count_p_impar."</th>
    
    </tr></thead></table>";
  
    ?>


</body>
</html>