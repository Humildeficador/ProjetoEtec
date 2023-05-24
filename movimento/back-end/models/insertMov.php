<?php
	function insertMov($connect, $cadProd) {
		try {
			$command = $connect->prepare('INSERT INTO movimento (codProd, tipo, qnt) VALUES (?, ?, ?)');

// 
			$command->bindValue(1,$cadProd->getCodProd());
			$command->bindValue(2,$cadProd->getTipo());
			$command->bindValue(3,$cadProd->getQnt());

			if ($command->execute()) {
				$return = 'Produto cadastrado com sucesso!';
			}
		} catch (PDOException $e) {
			$return = 'Ocorreu um erro ao cadastrar o produto: ' . $e->getMessage();
		}

		return $return;
	}