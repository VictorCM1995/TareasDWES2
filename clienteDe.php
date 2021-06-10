<?php
	$animal = [
		"especie"=>"tiburon",
		"peso"=>1000,
		"altura"=>100,
		"fechaNacimiento" => "2014-09-07",
		"imagen"=>"perro.jpg",
		"alimentacion"=>"carnivoro",
		"descripcion"=>"Triturador"
	];
	$url_servicio = "http://localhost/proyecto-zoo/public/rest/".$animal["especie"]."/borrar";
	$curl = curl_init($url_servicio);
	//Peticion insert
	curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	$respuesta_curl = curl_exec($curl);
	curl_close($curl);
	echo $respuesta_curl;
?>