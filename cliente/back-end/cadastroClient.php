<?php
include_once "./includes.php";

$cadCliente = new CadCliente();

$cadCliente->setcodCliente(filter_input(INPUT_GET, 'codCliente', FILTER_VALIDATE_INT));
$cadCliente->setNome(filter_input(INPUT_GET, 'nome', FILTER_SANITIZE_SPECIAL_CHARS));
$cadCliente->setCpf(filter_input(INPUT_GET, 'cpf', FILTER_VALIDATE_INT));
$cadCliente->setCel(filter_input(INPUT_GET, 'cel', FILTER_VALIDATE_INT));
$cadCliente->setCep(filter_input(INPUT_GET, 'cep', FILTER_SANITIZE_NUMBER_INT));
$cadCliente->setNumero(filter_input(INPUT_GET, 'numero', FILTER_SANITIZE_NUMBER_INT));
$cadCliente->setComplemento(filter_input(INPUT_GET, 'complemento', FILTER_SANITIZE_SPECIAL_CHARS));

// index
if (isset($_GET['listClient'])) {
	echo listCod($connect);
}

// formProd
if (isset($_GET['insertCliente'])) {
	echo insertCliente($connect, $cadCliente);
} elseif (isset($_GET['removeCliente'])) {
	echo removeProd($connect, $cadCliente);
}