<!--<?php
/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylorotwell@gmail.com>
 */

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our application. We just need to utilize it! We'll simply require it
| into the script here so that we don't have to worry about manual
| loading any of our classes later on. It feels nice to relax.
|
*/

require __DIR__.'/../bootstrap/autoload.php';

/*
|--------------------------------------------------------------------------
| Turn On The Lights
|--------------------------------------------------------------------------
|
| We need to illuminate PHP development, so let us turn on the lights.
| This bootstraps the framework and gets it ready for use, then it
| will load up this application so that we can run it and send
| the responses back to the browser and delight our users.
|
*/

$app = require_once __DIR__.'/../bootstrap/app.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request
| through the kernel, and send the associated response back to
| the client's browser allowing them to enjoy the creative
| and wonderful application we have prepared for them.
|
*/

$kernel = $app->make('Illuminate\Contracts\Http\Kernel');

$response = $kernel->handle(
	$request = Illuminate\Http\Request::capture()
);
$response->send();
$kernel->terminate($request, $response);

?>-->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Mi primer formulario</title>
	<link rel="stylesheet" href="css/Practica.css">
</head>
<body>
	<div align="center">
	<form  method="post" action="validador.php" accept-chaset="utf-8" class="form" onsubmit="return validarForm();">
			<div class="tab">
				<ul>
					<li><a href="" title="" id="identificacion" onclick="">Identificación</a></li>

					<li><a href="" title="" onclick="" >Domicilio</a></li>

					<li><a href="" title="" onclick="">Otros</a></li>
				</ul>
			</div>
			<div>
				<label class="label">Dni:</label><input type="text" id="dni" name="dni">
			</div>
			<div>
				<label class="label">Nombre:</label><input type="text" id="nombre" name="nombre">			
			</div>
			<div>
				<label class="label">Apellido:</label><input type="text" id="apellido" name="apellido">
			</div>
			<div>
			<label class="label">Telefono:</label><input type="text" id="telefono" name="telefono">
			</div>	
			<div>
				<label class="label">Celular:</label><input type="text" id="celular" name = "celular">	
			</div>
			<div> 
				<label class="label">E-Mail:</label><input type="text" id="mail" name="mail">
			</div>
			<input type="submit" name="" value="Guardar">

			<script type="text/javascript" charset="utf-8" async defer>
					function validarForm()
					{
						//debugger;
						//cargo las variables con los datos ingresados
						var dni = document.getElementById("dni").value;
						var nombre = document.getElementById("nombre").value;
						var apellido = document.getElementById("apellido").value;
						var telefono = document.getElementById("telefono").value;
						var celular = document.getElementById("celular").value;
						var mail = document.getElementById("mail").value;
						//variables para validaciones
						var validMail = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
						var validVacio= /^\s+$/;

						if(dni == null || dni.length == 0){
							alert("[ERROR] El campo dni es obligatorio");
							return false;
						}
						if(validVacio.test(dni) || dni.length != 8 || isNaN(dni)){
							alert("[ERROR] El dni ingresado no es valido");
							return false;
						}
						if(nombre == null || nombre == ""){
							alert("[ERROR] El campo nombre es obligatorio");
							return false;
						}
						if(validVacio.test(nombre)){
							alert("[ERROR] El nombre ingresado no es valido");
							return false;
						}
						if(apellido == null || apellido == ""){
							alert("[ERROR] El campo apellido es obligatorio");
							return false;
						}
						if(validVacio.test(apellido)){
							alert("[ERROR] El apellido ingresado no es valido");
							return false;
						}
						if(telefono == null || telefono == ""){
							alert("[ERROR] El campo telefono es obligatorio");
							return false;
						}
						if(isNaN(telefono) || validVacio.test(telefono)){
							alert("[ERROR] El telefono ingresado no es valido");
							return false;
						}
						if(celular == null || celular == ""){
							alert("[ERROR] El campo celular es obligatorio");
							return false;
						}
						//debugger;
						if(isNaN(celular) || validVacio.test(celular) || celular.length != 10){
							alert("[ERROR] El celular ingresado no es valido");
							return false;
						}
						if(!validMail.test(mail)){
							alert("[ERROR] El E-Mail ingresado no es valido");
							return false;
						}
					}
			</script>
	</form>
	</div>
</body>
</html>
