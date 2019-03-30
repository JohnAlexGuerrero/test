<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Formulario y Script PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="contenedor">
        <div class="container">
          <h2>Tablas de Multiplicar</h2>
          <p>Ingrese un número  N,  y  de   ese   número  ingresado  se   visualice  la  tabla  de multiplicar</p>
        </div>
        <form action="formulario_scritp.php" method="post">
        
            <div class="form-group">
                <label for="number">Número:</label>
                <input type="number" class="form-control" id="numero" placeholder="Ingrese un Número" name="num">
            </div>
            <button type="submit" class="btn btn-default">Crear</button>
        </form>
    </div>
</body>
</html>

<div class='container'>
 <table class='table table-bordered'>
 <thead>
 <tr>
 <th>numero</th>
 <th>Multiplicador</th>
 <th>Producto</th>
 </tr>
 </thead>
 <tbody>

<?php
/**Escriba  un Scripten  PHPque  solicite  por  pantalla  al  
 * usuario  un número  N,  y  de   ese   número  ingresado  se   visualice  la  tabla  de multiplicar  respectiva
 *   con  una  serie  de  1  a  10.(Haga  uso 
 *  de  un  solo archivo para crear formulario html y Scriptphp) */

 $number = $_POST['num'];

 for ($i=1; $i <=10 ; $i++) {
     
    echo "<tr>";
    echo "<td>".$i."</td>";
    echo "<td>".$number."</td>";
    echo "<td>".($i*$number)."</td>";
 }
    echo "</tr>
    </tbody>";
    echo "</table>
    </div>";


?>