<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="serie.php" method="post">
    <div class="container">
        <input type="number" name="numero" placeholder="Enter Number">
    </div>
    <div class="container">
        <br>
        <select name="option" id="">
            <option value="0">Seleccione</option>
            <option value="1">Descendente</option>
            <option value="2">Ascendente</option>
        </select>
    </div>
    <div class="container">
    <br>
    <button value="Procesar">Procesar</button>
    </div>
    </form>
    <table>
</body>
</html>

<?php

/** */
    $number = $_POST['numero'];
    $seleccion = $_POST['option'];

    switch ($seleccion) {
        case 1:
        echo "<label>Descendente<label>";
            for ($i=$number; $i >=1 ; $i--) { 
                if ($i%2==0) {
                    echo "<td bgcolor='yellow'>nùmero: ".$i."</td>";
                }else {
                    echo "<td bgcolor='orange'>nùmero: ".$i."</td>";
                }
            }
            break;
        case 2:
        echo "<label>Ascendente<label>";
            for ($i=1; $i <=$number ; $i++) { 
                if ($i%2==0) {
                    echo "<td bgcolor='yellow'>nùmero: ".$i."</td>";
                }else {
                    echo "<td bgcolor='orange'>nùmero: ".$i."</td>";
                }
            }
            break;
        default:
            # code...
            break;
    }

    echo "</table>";

?>