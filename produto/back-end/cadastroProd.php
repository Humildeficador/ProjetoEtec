<?php
	include_once "./includes.php";

	$cadProd = new CadProd();

	$cadProd->setCodProd(filter_input(INPUT_GET, 'codProd', FILTER_SANITIZE_NUMBER_INT));
	$cadProd->setDescricao(filter_input(INPUT_GET, 'descricao', FILTER_SANITIZE_SPECIAL_CHARS));
	$cadProd->setValor(filter_input(INPUT_GET, 'valor', FILTER_VALIDATE_FLOAT));
	$cadProd->setVencimento(filter_input(INPUT_GET, 'vencimento'));
	$cadProd->setVencimento1(filter_input(INPUT_GET, 'vencimento1'));

// index
	if (isset ($_GET['listCod'])) {
		echo listCod($connect);
	} elseif (isset ($_GET['listProd'])) {
		echo listDesc($connect);
	}

// formProd
	if (isset ($_GET['insertProd'])) {
		echo insertProd($connect, $cadProd);
	} elseif (isset ($_GET['removeProd'])) {
		echo removeProd($connect, $cadProd);
	}

// formVenc
	if (isset ($_GET['listVenc'])) {
		echo listVenc($connect, $cadProd);
	}