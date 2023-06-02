<?php 
	function listSaida($connect) {
		try {
			$command = $connect->prepare('SELECT * FROM movimento WHERE tipo = "S" ORDER BY codProd');
			$command->execute();

			if($command->execute()) {
				echo '<html lang="pt-BR">';
				echo '<link rel="stylesheet" href="css/tableList-style.css">';
				echo '<div class="container">';
				echo '<main class="main-content">';
				echo '
				<header class="logo"><p><a class="back" href="javascript:history.back()">
					<i class="bx bx-arrow-back"></i>
				</a>CADASTRO</p></header>';
				echo '<div class="content">';
				echo "<table>";
				echo "<thead>";
				echo "<tr>";
				echo "<th>Código do Produto";
				echo "<th>Tipo";
				echo "<th>Quantidade";
				echo "<th>Cod Cliente";
				echo "<th>Data de Movimento";
				echo "<tbody>";
				$result = $command->fetchAll(PDO::FETCH_OBJ);

				foreach ($result as $produto) {
					echo "
					<tr>
						<td>$produto->codProd
						<td>$produto->tipo
						<td>$produto->qnt
						<td>$produto->codCliente
						<td>" . date('d/m/Y',  strtotime($produto->dataMov));"
					<tr/>"; 
				}
			}
		} catch (PDOException $err) {
			echo 'Erro' . $err->getMessage();
		}
	}