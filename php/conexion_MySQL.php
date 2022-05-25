<?php

    $servername = "localhost";
    $UID = "root";
    $PWD = "";
    $Database = "usuarios";
    $CharacterSet = "UTF-8";
        
    $con = mysqli_connect("localhost", "root", "", "usuarios");

    if($con){
        echo "Base de datos a sido conectada";
    }else{
        echo "NO SE HA PODIDO CONECTAR";
    }
    
?>