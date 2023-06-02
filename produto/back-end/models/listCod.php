<?php 
	function listCod($connect) {
		try {
			$command = $connect->prepare('SELECT * FROM produto ORDER BY codProd ASC');
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
				echo "<th>Descrição";
				echo "<th>Valor";
				echo "<th>Vencimento";
				echo "<tbody>";
				$result = $command->fetchAll(PDO::FETCH_OBJ);

				foreach ($result as $produto) {
					echo "
					<tr>
						<td>$produto->codProd
						<td>$produto->descricao
						<td>R$ $produto->valor
						<td>" . date('d/m/Y',  strtotime($produto->vencimento));"
					<tr/>"; 
				}
			}
		} catch (PDOException $err) {
			echo 'Erro' . $err->getMessage();
		}
	}
?>