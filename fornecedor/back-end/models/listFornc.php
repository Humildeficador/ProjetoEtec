<?php 
	function listFornc($connect) {
		try {
			$command = $connect->prepare('SELECT * FROM cliente ORDER BY codCliente ASC');
			$command->execute();

			if($command->execute()) {
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
				echo "<th>Código do Fornecedor";
				echo "<th>Nome";
				echo "<th>CNPJ";
				echo "<th>Celular";
				echo "<th>CEP";
				echo "<tbody>";
				$result = $command->fetchAll(PDO::FETCH_OBJ);

				foreach ($result as $fornc) {
					echo "
					<tr>
						<td>$fornc->codFornecedor
						<td>$fornc->nome
						<td>$fornc->cnpj
						<td>$fornc->cel
						<td>$fornc->cep
					<tr/>"; 
				}
			}
		} catch (PDOException $err) {
			echo 'Erro' . $err->getMessage();
		}
	}
?>