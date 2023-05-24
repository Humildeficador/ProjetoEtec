<?php
	function insertProd($connect, $cadProd) {
		try {
			$command = $connect->prepare('INSERT INTO produto (codProd, descricao, valor, vencimento) VALUES (?, ?, ?, ?)');

			$command->bindValue(1,$cadProd->getCodProd());
			$command->bindValue(2,$cadProd->getDescricao());
			$command->bindValue(3,$cadProd->getValor());
			$command->bindValue(4,$cadProd->getVencimento());

			if ($command->execute()) {
				$return = 'Produto cadastrado com sucesso!';
			}
		} catch (PDOException $e) {
			$return = 'Ocorreu um erro ao cadastrar o produto: ' . $e->getMessage();
		}

		return $return;
	}