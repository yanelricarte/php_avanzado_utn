	$("#email").change(function () {
	$(".alerta").remove();

	let email = $(this).val();
	// Para chequear que el script funciona
	//console.log("email", email)

	let datos = new FormData();
	datos.append("validarEmail", email);
	

	$.ajax({
		url: "ajax/formularios.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function (respuesta) {
		if (respuesta) {
			$("#email").val("");

			$("#email").parent().after(`
						
						<div class="alerta alerta-advertencia">

								<strong>ERROR:</strong>

								El correo electrónico ya existe en la base de datos,  por favor ingrese otro diferente
						</div>


					`);
		}
		},
	});
	});
