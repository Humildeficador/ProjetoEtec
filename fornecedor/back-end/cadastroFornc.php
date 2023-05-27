<?php
include_once "./includes.php";

$cadFornc = new CadFornc();

$cadFornc->setcodFornc(filter_input(INPUT_GET, 'codFornc', FILTER_VALIDATE_INT));
$cadFornc->setNome(filter_input(INPUT_GET, 'nome', FILTER_SANITIZE_SPECIAL_CHARS));
$cadFornc->setCnpj(filter_input(INPUT_GET, 'cpnj', FILTER_VALIDATE_INT));
$cadFornc->setCel(filter_input(INPUT_GET, 'cel', FILTER_VALIDATE_INT));
$cadFornc->setCep(filter_input(INPUT_GET, 'cep', FILTER_SANITIZE_NUMBER_INT));

// index
if (isset($_GET['listFornc'])) {
	echo listCod($connect);
}

// formProd
if (isset($_GET['insertFornc'])) {
	echo insertFornc($connect, $cadFornc);
} /* elseif (isset($_GET['removeFornc'])) {
	echo removeFornc($connect, $cadFornc);
} */