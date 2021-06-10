$(document).ready(function(){
	function validarNombre(){
		if(nombre.val().length < 4){
			errorNombre.removeClass("oculto");
			errorNombre.css('color','red');
			return false;
		}
		errorNombre.addClass("oculto");
		return true;
	}

	function validarDNI(){
		var letra = dni.val().substring(8,9);
		var numeros = dni.val().substring(0,8);
		if(dni.val().length < 9){
			errorDNI.removeClass("oculto");
			errorDNI.css('color','red');
			return false;
		}
		errorDNI.addClass("oculto");
		return true;
	}

	function validarPasswords(){
		if(pass1.val().length < 5 && pass2.val().length < 5 || (pass1.val() != pass2.val())){
			errorPassword.removeClass("oculto");
			errorPassword.css('color','red');
			return false;
		}
		errorPassword.addClass("oculto");
		return true;
	}

	function validar(){
		return validarNombre() && validarDNI() && validarPasswords();
	}

	var nombre = $("#nombre");
	var errorNombre = $("#errorNombre");
	var dni = $("#dni");
	var errorDNI = $("#errorDNI");
	var pass1 = $("#pass1");
	var pass2 = $("#pass2");
	var errorPassword = $("#errorPassword");
	/*$("#datos").submit(function(){
		return validar();
	});*/


	$.ajax({
		url : 'validar.php';
		data : {
			"nombre": nombre, 
			"dni": dni, 
			"pass1": pass1, 
			"pass2": pass2
		},
		type : 'post',
		dataType : 'json',
		success : function (datos){
			if(datos.errorNombre){
				alert("REALIZADO1");
			}
			if(datos.errorDNI){
				alert("REALIZADO2");
			}
			if(datos.errorPassword){
				alert("REALIZADO3");
			}
		},
		error : function(xhr,status){
			alert("Disculpe, existio un problema");
		} 
	});
});