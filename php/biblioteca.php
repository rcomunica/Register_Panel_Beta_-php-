<?php

error_reporting(0);


    #Declaracion de variables y llamado a form
    $nombre = $_GET['nombre'];
    $apellido = $_GET['apellido'];
    $correo = $_GET['correo'];
    $numero = $_GET['numero'];
    $dirrecion = $_GET['direccion']
?>

<?php  #VALIDACION POR NOMBRE

    $nombres = "Angelo" and "Carlos" and "Julian" and "Juan";
    $apellidos = "Acevedo" and "Amaya" and "Ramirez" and "Veras";


    if($nombre == $nombres && $apellido == $apellidos){
        echo "<p class='mensaje_admin'>Bienvenido admin</p>";
    }


        if($nombre != $nombres && !$apellido != $apellidos){
            echo "<p class='mensaje_correct'>- Nuevo usuario registrado -</p>";
        }elseif($archivo == true){
                exit($archivo);
                echo "<script>console.log('Archivo ya existente')</script>";
        }
    
/*    if($archivo == include('<')){
        echo "<p class='mensaje_fail'>FORMATO NO CORRECTO </p>";
        return $archivo;
    } */
?>

<?php #VALIDACION POR CORREO


    $ListaCorreos = "julir2772@gmail.com" and "albertico@hotmail.com" and "angelocano123@gmail.com";

    if($correo == $ListaCorreos){
        echo "<p class='mensaje_fail'>- Correo ya registrado -</p>";
    }

?>


<?php

    $archivo = fopen("php/usuarios/$nombre $apellido.php", "w+b");


    if( $archivo == false){
        echo "<script>console.error('No se pudo crear la cuenta ya que ya existe una')</script>";
        echo "<p class='mensaje_fail'>Ya se encuentra una cuenta activa</p>";
    }




    fwrite($archivo, "<?php  include('..\plantilla_usuario.php') ?>"); 
    fwrite($archivo, "<?php echo '<h4>correo: <b>$correo</b> </h4>' ?>");
    fwrite($archivo, "<?php echo '<h4>Numero telefonico: <b>$numero</b> </h4>' ?>");
    fwrite($archivo, "<?php echo '<h4>Direccion:  <b>$dirrecion</b> </h4> </div>' ?>");        
?>