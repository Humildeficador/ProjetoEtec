<?php
	function insertCliente($connect, $cadCliente) {
		try {
			$cep = $cadCliente->getCep();
			$cep = preg_replace("/[^0-9]/", "", $cep);
			$url = "http://viacep.com.br/ws/$cep/xml/";
			$xml = simplexml_load_file($url);

			$command = $connect->prepare('INSERT INTO cliente (codCliente, nome, cpf, cel, cep, rua, numero, complemento, bairro, cidade, UF) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');

			$command->bindValue(1,$cadCliente->getcodCliente());
			$command->bindValue(2,$cadCliente->getNome());
			$command->bindValue(3,$cadCliente->getCpf());
			$command->bindValue(4,$cadCliente->getCel());
			$command->bindParam(5,$cep);
			$command->bindParam(6,$xml->logradouro);
			$command->bindValue(7, $cadCliente->getNumero());
			$cadCliente->getComplemento() != '' ? $command->bindValue(8, $cadCliente->getComplemento()) : $command->bindValue(8, null);
			$command->bindParam(9,$xml->bairro);
			$command->bindParam(10,$xml->localidade);
			$command->bindParam(11,$xml->uf);
			
			if ($command->execute()) {
				$return = 'Cliente cadastrado com sucesso!';
			}
		} catch (PDOException $e) {
			$return = 'Ocorreu um erro ao cadastrar o Cliente: ' . $e->getMessage();
		}

		return $return;
	}