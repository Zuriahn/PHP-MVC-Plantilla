<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>BDM</title>
</head>
<body>
    <div id="header"> 
        <ul>
            <li> <a href="<?php echo constant('ROUTE_URL')?>home"> Home </a> </li>
            <li> <a href="<?php echo constant('ROUTE_URL')?>home/show"> Home show </a> </li>
            <li> <a href="<?php echo constant('ROUTE_URL')?>usuario"> Usuario </a> </li>
            <li> <a href="<?php echo constant('ROUTE_URL')?>usuario/insertar"> Usuario insertar </a> </li>
            <li> <a href="<?php echo constant('ROUTE_URL')?>usuario/mostrar/1"> Usuario mostrar </a> </li>
        </ul>
    </div>
</body>
</html>