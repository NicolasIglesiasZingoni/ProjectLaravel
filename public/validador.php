<?php 

use Illuminate\Contracts\Validation\Validator as ValidatorContract;

//declaracion de variables y mapeo de los datos mediante GET
 $dni = $_POST['dni'];
 $nombre = $_POST['nombre']; 
 $apellido = $_POST['apellido']; 
 $telefono = $_POST['telefono'];
 $celular = $_POST['celular'];
 $mail = $_POST['mail'];

$validaciones = array('dni' => array('required','min:8'),
					'nombre' => array('required','min:4','alpha'),
					'apellido' => array('required','min:4','alpha'),
					'telefono' => array('required','integer'),
					'celular' => array('required','integer'),
					'mail' => array('required','min:7','in:@,.,com'));
$datos = array('dni' => $dni,'nombre' => $nombre,'apellido' => $apellido,
			'telefono' => $telefono,'celular' => $celular,'mail' => $mail);
$validator = Validator::make($datos,$validaciones);

echo $apellido;

 ?>