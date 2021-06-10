<?php
	$url_servicio = "http://localhost/proyecto-zoo/public/rest";
	$curl = curl_init($url_servicio);
	//Peticion mostrar
	curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	$respuesta_curl = curl_exec($curl);
	curl_close($curl);

	$respuesta_decodificada = json_decode($respuesta_curl);
	var_dump($respuesta_decodificada);
?>