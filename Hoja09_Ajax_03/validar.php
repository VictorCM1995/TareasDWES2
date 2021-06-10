<?php
function validarNombre($nombre){
	if(strlen($nombre) >= 4){
		return true;
	} else {
		return false;
	}
}

function validarDNI($dni){
	$letra = substr($dni, -1);
	$numeros = substr($dni, 0, -1);
	if(substr("TRWAGMYFPDXBNJZSQVHLCKE", $numeros%23, 1) == $letra && strlen($letra)== 1 && strlen($numeros) == 8){
		return true;
	} else {
		return false;
	}
}

function validarPasswords($pass1,$pass2){
	if(strlen($pass1)>=6 && strlen($pass2)>=6 && $pass1 == $pass2){
		return true;
	} else {
		return false;
	}
}

function validar($valores){
	$respuesta = array();
	if(!validarNombre($valores['nombre']))
		$respuesta['errorNombre'] = utf8_encode("Error 1");
	if(!validarDNI($valoresT['dni']))
		$respuesta['errorDNI'] = utf8_encode("Error 2");
	if(!validarPasswords($valores['pass1'], $respuesta['pass2']))
		$respuesta['errorPassword'] = utf8_encode("Error 3");
	return $respuesta;
}
echo json_encode(validar($respuesta));
?>