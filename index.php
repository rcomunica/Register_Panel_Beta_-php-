<!DOCTYPE html>
<html>
<head>
	<title>Register panel </title>
	<meta charset="utf-8">
	<meta http-equiv="Expires" content="0">
	<meta http-equiv="Last-Modified" content="0">
	<meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
	<meta http-equiv="Pragma" content="no-cache">

	<link rel="icon" type="icon" href="src/logo.ico">
	<link rel="stylesheet" type="text/css" href="styles/style-index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Square+Peg&display=swap" rel="stylesheet">
</head>
<script src="https://kit.fontawesome.com/03b0ac721b.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/app.js"></script>
<body>

	<div class="container">
        <div class="titlecontainer">
			<h2 class="border">register </h2>
			<h2 class="wave">register </h2>
        </div>
		<div class="formcontaineruser">
			<div class="search-div">
				<a href="buscar.php" class="search__a-icon"> Buscar Info <i class="fa-solid fa-magnifying-glass"></i></a>
			</div>
			<p class="p__text"><b>Personal Details</b>   </br> 
			-----------------------------------------</p>
			<form class="responsive__formpersonaldate">

			<div class="form__name-div">	
				<input type="text" required="" placeholder="Nombre(s)" name="nombre" class="form__name-input">
			</div>

			<div class="form__lastname-div">
				<input type="text" required="" placeholder="Apellido(s)" name="apellido" class="form__lastname-input">
			</div>	

			<div class="form__email-div">
				<input type="text" required="" autocomplete="username" placeholder="Correo" name="correo" class="form__email-input">
			</div>

			<div class="form__number-div">
				<input type="text" required="" placeholder="Numero telefonico" value="+57 " name="numero" class="form__number-input">
			</div>

			<div class="form__adress-div">
				<input type="text" required="" placeholder="direccion" name="direccion" class="form__adress-input">
			</div>

			<div class="form__password-div">
				<input type="password" autocomplete="new-password" required="" placeholder="contraseña" name="contraseña" class="form__password-input" class="new-password">
			</div>

			<div class="form__passwordconfirm-div">
				<input type="password" required="" placeholder="confirme contraseña" name="contraseñaconfirm" class="form__passwordconfirm-input">
			</div>

			<div class="form__file-div">
				<input type="file" accept=".pdf,.doc,.docx" name="archivo" class="form__file-input">
			</div>

			<div class="form_submit-div">
				<input type="submit" required="" value="Aceptar" name="enviar" class="form__submit-input">
			</div>

			<div class="form_submit-div">
				<input type="button" required="" value="Borrar formulario" name="enviar" class="form__button-input" onclick='window.location.reload()'">
			</div>
			</form>


			
			<?php
				require('php/biblioteca.php');
			?>




	</div>

</body>
</html>