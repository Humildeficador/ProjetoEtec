<?php
	function insertMov($connect, $cadMov) {
		try {
			if ($cadMov->getTipo() === "E") {
				$command = $connect->prepare('INSERT INTO movimento (codProd, tipo, qnt, codFornecedor) VALUES (?, ?, ?, ?)');
				$command->bindValue(1,$cadMov->getCodProd());
				$command->bindValue(2,$cadMov->getTipo());
				$command->bindValue(3,$cadMov->getQnt());
				$command->bindValue(4,$cadMov->getCod());
			} else {
				$command = $connect->prepare('INSERT INTO movimento (codProd, tipo, qnt, codCliente) VALUES (?, ?, ?, ?)');
				$command->bindValue(1,$cadMov->getCodProd());
				$command->bindValue(2,$cadMov->getTipo());
				$command->bindValue(3,$cadMov->getQnt());
				$command->bindValue(4,$cadMov->getCod());
			}
			
			if ($command->execute()) {
				$return = 'Produto cadastrado com sucesso!';
			}
		} catch (PDOException $e) {
			$return = 'Ocorreu um erro ao cadastrar o produto: ' . $e->getMessage();
		}

		return $return;
	}