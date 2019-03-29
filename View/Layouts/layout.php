<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <title>Music Streaming</title>
    <link rel="icon" type="image/ico" href="icons/icon_music.png">
</head>
<body>
<header>
        <?php 
            require_once('header.php');
        ?>
    </header>
<div class=alert alert-success>
        <img src="images/linkin.jpg"  width="1086" alt="">
    </div>
    
    <section>
        <?php
            require_once('routing.php');
        ?>
    </section>
    
</body>
</html>