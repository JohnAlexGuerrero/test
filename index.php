<?php

    require_once('connection.php');

    //isset isset(), dicha función comprueba si una variable está definida o no en el script de PHP que se está ejecutando.
    if(isset($_GET['controller'])&& isset($_GET['action'])){
        $controller=$_GET['controller'];
        $action=$_GET['action'];
    }else{
        $controller='usuario';
        $action='index';
    }
    require_once('View/Layouts/layout.php');

?> 
