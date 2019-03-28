<?php
/** */
    class usuarioController{

        function __construct(){

        }

        function index(){
            require_once('View/paginas/bienvenida.php');
        }
        function register(){
            require_once('View/paginas/register.php');
        }
        
    }
?>