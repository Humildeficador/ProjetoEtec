<?php
	function insertMov($connect, $cadMov) {
		try {
			$command = $connect->prepare('INSERT INTO movimento (codProd, tipo, qnt) VALUES (?, ?, ?)');

// 
			$command->bindValue(1,$cadMov->getCodProd());
			$command->bindValue(2,$cadMov->getTipo());
			$command->bindValue(3,$cadMov->getQnt());

			if ($command->execute()) {
				$return = 'Produto cadastrado com sucesso!';
			}
		} catch (PDOException $e) {
			$return = 'Ocorreu um erro ao cadastrar o produto: ' . $e->getMessage();
		}

		return $return;
	}