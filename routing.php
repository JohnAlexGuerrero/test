<?php
    $controllers =array('usuario'=>['index','usuario','save','register','Login','update','delete','search','error']);
    
    if(array_key_exists($controller, $controllers)){
        if(in_array($action, $controllers[$controller])){
            call($controller, $action);
        }else{
            call('usuario','error');
        }

    }else{
        call('usuario','error');
    }

    function call($controller, $action){
        require_once('Controller/'.$controller.'/Controller.php');

        switch ($controller) {
            case 'usuario':
                require_once('Model/Usuario.php');
                $controller=new UsuarioController();
                print "hola friend";
                break;
            
            default:
                # code...
                break;
        }

        $controller->{$action}();
    }
        ?>