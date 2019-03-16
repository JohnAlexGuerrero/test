<?php
    $numero1 = $_POST['num1'];
    $numero2 = $_POST['num2'];
    $operacion = $_POST['tipo_opr'];
    $result = 0;

    echo "Numero 1: ".$numero1."<br>";
    echo "Numero 2: ".$numero2."<br>";
    echo "Tipo de Operacion: ".$operacion."<br>";

    switch($operacion){
        case 1: $result = $numero1+$numero2;break;
        case 2: $result = $numero1-$numero2;break;
        case 3: $result = $numero1*$numero2;break;
        case 4: $result = $numero1/$numero2;break;
    }

    echo "resultado es: ".$result;
?>