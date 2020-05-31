<?php
	
	
	session_start();

	require_once "config/templateMethod.php";

	require_once "controllers/controller.php";
	require_once "models/modelo.php";

	require_once "controllers/usuarioController.php";
	require_once "models/usuarioModel.php";

	require_once "controllers/sitiosController.php";
	require_once "models/sitiosModel.php";

	require_once "controllers/ofertasController.php";
	require_once "models/ofertasModel.php";

	require_once "controllers/serviciosController.php";
	require_once "models/serviciosModel.php";

	require_once "controllers/gestorGaleria.php";
	require_once "models/gestorGaleriaModel.php";
	


	$mvc = new MvcController();
	$mvc -> enlacesPaginasController();
?>