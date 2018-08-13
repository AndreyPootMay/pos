<?php 

require "../controllers/UsersController.php";
require "../models/Users.php";

class AjaxUsers{
	public $idUsuario;

	public function ajaxUsersUpdate(){
		$item = "id";
		$value = $this->idUsuario;
		$response = UsersController::ctrShowUsers($item, $value);
		echo json_encode($response);
	}
}

if(isset($_POST["idUsuario"])){
	$update = new AjaxUsers();
	$update -> idUsuario = $_POST["idUsuario"];
	$update -> ajaxUsersUpdate();
}

?>