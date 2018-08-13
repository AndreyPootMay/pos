<?php
/**
 *
 */
class UsersController
{
	public function ctrLoginUser()
	{
		if (isset($_POST['ingUsuario'])) {
			if (preg_match('/^[a-zA-Z0-9]+$/', $_POST['ingUsuario']) &&
					preg_match('/^[a-zA-Z0-9]+$/', $_POST['ingPassword'])) {

				$item  = 'user';
				$value = $_POST['ingUsuario'];

				$respuesta = Users::findUser($item, $value);

				if ($respuesta['password'] == $_POST['ingPassword']) {

					$_SESSION['iniciarSesion'] = 'ok';

					echo '<script> window.location = "home"; </script>';

				} else {
					echo '<br><div class="alert alert-danger">Error al ingresar, intente de nuevo</div>';
				}
			}
		}
	}

	public function ctrCreateUser()
	{
		if (isset($_POST['nuevoUsuario'])) {
			if (preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST['nuevoNombre']) &&
					preg_match('/^[a-zA-Z0-9]+$/', $_POST['nuevoUsuario']) &&
					preg_match('/^[a-zA-Z0-9]+$/', $_POST['nuevoPassword'])) {

				$datos = [
					'nombre' => $_POST['nuevoNombre'],
					'usuario' => $_POST['nuevoUsuario'],
					'password' => $_POST['nuevoPassword'],
					'perfil' => $_POST['nuevoPerfil']
				];

				$respuesta = Users::addUser($datos);

				if ($respuesta) {
					echo '<script>
						swal({
							type: "success",
							title: "¡El usuario ha sido guardado correctamente!",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
						}).then((result)=> {
							if (result.value) {
								window.location = "users";
							}
						});
					</script>';
				} else {
					echo '<script>
						swal({
							type: "error",
							title: "¡El usuario no se pudo guardar!",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							closeOnConfirm: false
						}).then((result)=> {
							if (result.value) {
								window.location = "users";
							}
						});
					</script>';
				}

			} else {
				echo '<script>
					swal({
						type: "error",
						title: "¡El usuario no puede ir vacío o llevar caracteres especiales!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar",
						closeOnConfirm: false
					}).then((result)=> {
						if (result.value) {
							window.location = "users";
						}
					});
				</script>';
			}
		}
	}

	static public function ctrShowUsers($item, $value){
		$response = Users::findUser($item, $value);
		return $response;
	}
}
