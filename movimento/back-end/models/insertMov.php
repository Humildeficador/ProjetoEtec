<?php
	function insertMov($connect, $cadMov) {
		try {
			$command = $connect->prepare('INSERT INTO movimento (codProd, tipo, qnt, codCliente, codFornecedor) VALUES (?, ?, ?, ?, ?)');

			$command->bindValue(1,$cadMov->getCodProd());
			$command->bindValue(2,$cadMov->getTipo());
			$command->bindValue(3,$cadMov->getQnt());
			if ($cadMov->getTipo() === "S") {
				$command->bindValue(4,$cadMov->getCod());
				$command->bindValue(5, null);
			} else {
				$command->bindValue(5,$cadMov->getCod());
				$command->bindValue(4, null);
			}

			
			if ($command->execute()) {
				$return = 'Produto cadastrado com sucesso!';
			}
		} catch (PDOException $e) {
			$return = 'Ocorreu um erro ao cadastrar o produto: ' . $e->getMessage();
		}

		return $return;
	}