<?php
	function removeProd($connect, $cadProd) {
		try {
			$comando = $connect->prepare('DELETE FROM produto WHERE codProd = ?');
			$comando->bindValue(1,$cadProd->getCodProd());

			if ($comando->execute()) {
				$retorno = "Produto excluido com sucesso";
			}
		} catch (PDOException $err) {
			$retorno = 'Erro: ' . $err->getMessage();
		}

		return $retorno;
	}