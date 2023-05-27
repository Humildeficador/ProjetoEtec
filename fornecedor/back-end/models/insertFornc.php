<?php
	function insertFornc($connect, $cadCliente) {
		try {
			$command = $connect->prepare('INSERT INTO cliente (codCliente, nome, cpf, cel, cep) VALUES (?, ?, ?, ?, ?)');

			$command->bindValue(1,$cadCliente->getcodFornc());
			$command->bindValue(2,$cadCliente->getNome());
			$command->bindValue(3,$cadCliente->getCnpj());
			$command->bindValue(4,$cadCliente->getCel());
			$command->bindValue(5,$cadCliente->getCep());
			
			if ($command->execute()) {
				$return = 'Cliente cadastrado com sucesso!';
			}
		} catch (PDOException $e) {
			$return = 'Ocorreu um erro ao cadastrar o Cliente: ' . $e->getMessage();
		}

		return $return;
	}