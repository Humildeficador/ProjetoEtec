<?php
	include_once "./includes.php";

	$cadProd = new CadProd();

	$cadProd->setCodProd(filter_input(INPUT_GET, 'codProd', FILTER_VALIDATE_INT));
	$cadProd->setQnt(filter_input(INPUT_GET, 'qnt', FILTER_VALIDATE_INT));
	$cadProd->setTipo(filter_input(INPUT_GET, 'tipo'));

// FormCad 
	if(isset($_GET['insertMov'])) {
		echo insertMov($connect, $cadProd);
	} elseif(isset($_GET['listEntrada'])) {
		echo listEntrada($connect);
	} elseif(isset($_GET['listSaida'])) {
		echo listSaida($connect);
	}
// 