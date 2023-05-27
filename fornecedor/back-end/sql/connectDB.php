<?php
	$db = 'mercado';
	$user = 'root';
	$pass = '';

	try {
		$connect = new PDO ("mysql:host=localhost;dbname=$db", $user, $pass);
		$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$connect->exec('set names utf8');
	} catch (PDOException $e) {
		echo 'Erro na conexão:' . $e->getMessage();
	}