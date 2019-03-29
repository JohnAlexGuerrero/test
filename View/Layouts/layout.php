<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <title>Aprendiendo Front End</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="icon" type="image/ico" href="icons/icon_music.png">
</head>
<body>
    <header>
    <?php
        require_once('View/Layouts/cabecera.php');
    
    ?>
    </header>
    <?php 
        //require_once('View/paginas/bienvenida.php');
        //require_once('View/paginas/login.php');
        require_once('View/paginas/singup.php');
      
    ?>
    
   
    
</body>
</html>