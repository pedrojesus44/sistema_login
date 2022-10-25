<?php
	require_once("../sistema_login/controller/ControllerCadastro.php");

	$controller = new cadastroController();
	$result = $controller->excluir($_GET['id']);

?>