<?php
	function insertFornc($connect, $cadFornc) {
		try {
			$cep = $cadFornc->getCep();
			$cep = preg_replace("/[^0-9]/", "", $cep);
			$url = "http://viacep.com.br/ws/$cep/xml/";
			$xml = simplexml_load_file($url);

			$command = $connect->prepare('INSERT INTO fornecedor (codFornecedor, nome, cnpj, cel, cep, rua, numero, complemento, bairro, cidade, UF) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');

			$command->bindValue(1,$cadFornc->getcodFornc());
			$command->bindValue(2,$cadFornc->getNome());
			$command->bindValue(3,$cadFornc->getCnpj());
			$command->bindValue(4,$cadFornc->getCel());
			$command->bindParam(5,$cep);
			$command->bindParam(6,$xml->logradouro);
			$command->bindValue(7, $cadFornc->getNumero());
			$cadFornc->getComplemento() != '' ? $command->bindValue(8, $cadFornc->getComplemento()) : $command->bindValue(8, null);
			$command->bindParam(9,$xml->bairro);
			$command->bindParam(10,$xml->localidade);
			$command->bindParam(11,$xml->uf);
			
			if ($command->execute()) {
				$return = 'Fornecedor cadastrado com sucesso!';
			}
		} catch (PDOException $e) {
			$return = 'Ocorreu um erro ao cadastrar o Cliente: ' . $e->getMessage();
		}

		return $return;
	}