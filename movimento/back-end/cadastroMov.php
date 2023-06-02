<?php
	include_once "./includes.php";

	$cadMov = new CadMov();

	$cadMov->setCodProd(filter_input(INPUT_GET, 'codProd', FILTER_SANITIZE_NUMBER_INT));
	$cadMov->setQnt(filter_input(INPUT_GET, 'qnt', FILTER_SANITIZE_NUMBER_INT));
	$cadMov->setTipo(filter_input(INPUT_GET, 'tipo'));
	$cadMov->setCod(filter_input(INPUT_GET, 'cod', FILTER_SANITIZE_NUMBER_INT));

// FormCad 
	if(isset($_GET['insertMov'])) {
		echo insertMov($connect, $cadMov);
	} elseif(isset($_GET['listEntrada'])) {
		echo listEntrada($connect);
	} elseif(isset($_GET['listSaida'])) {
		echo listSaida($connect);
	}
// 