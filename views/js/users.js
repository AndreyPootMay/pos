$(".btnEditarUsuario").click(function(){
	var idUsuario = $(this).attr("idUsuario");
	
	var datos = new FormData();
	datos.append("idUsuario", idUsuario);

	$.ajax({
		url: "ajax/users.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){
			$("#editarNombre").val(respuesta["name"]);
			$("#editarUsuario").val(respuesta["user"]);
			switch(respuesta["profile"]){
				case '1':
					$("#editarPerfil").html("Administrador");
					break;
				case '2':
					$("#editarPerfil").html("Especial");
					break;
				case '3':
					$("#editarPerfil").html("Administrador");
					break;
				default:
					$("#editarPerfil").html("");
					break;
			}
		}
	});
})