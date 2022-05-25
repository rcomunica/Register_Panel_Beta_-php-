
<?php

    # Declaracion de variables
    $nombre = basename($_SERVER['PHP_SELF'], ".php");
    
?>
<? require('biblioteca.php')?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo "$nombre - Dashboard" ?></title>
    <meta name="robots" content="noindex">
    <link rel="stylesheet" type="text/css" href="..\..\styles\style_plantillauser.css">
    <link rel="stylesheet" type="text/css" href="..\styles\style_plantillauser.css">
    <?php include('header.php') ?>
</head>

<body class='body'>
        <?php
        echo "<div class='container_details'>";
        echo "<img src='http://localhost/PraticandoAndo/Register/src/profile_icon.png' width='150px' style='margin-left: 8vh' class='details__img'>";
        echo "<h1>", "Hola $nombre </h1>";

        require_once('../admins.php');

         if($nombre == $mods[1] or $mods[0] or $mods[2]){
              echo '<h4>Nivel de usuario: <b style="color: red;font-size:20px"> admin </b> </h4> '; 
        }
        ?>
</body>
</html>
<head>





