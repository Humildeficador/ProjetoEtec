<?php 
	function listCliente($connect) {
		try {
			$command = $connect->prepare('SELECT * FROM cliente ORDER BY codCliente ASC');
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
				echo "<th>Código do Cliente";
				echo "<th>Nome";
				echo "<th>CPF";
				echo "<th>Celular";
				echo "<th>CEP";
				echo "<th>Rua";
				echo "<th>Número";
				echo "<th>Complemento";
				echo "<th>Bairro";
				echo "<th>Cidade";
				echo "<th>UF";
				echo "<tbody>";
				$result = $command->fetchAll(PDO::FETCH_OBJ);

				foreach ($result as $cliente) {
					echo "
					<tr>
						<td>$cliente->codCliente
						<td>$cliente->nome
						<td>$cliente->cpf
						<td>$cliente->cel
						<td>$cliente->cep
						<td>$cliente->rua
						<td>$cliente->numero
						<td>$cliente->complemento
						<td>$cliente->bairro
						<td>$cliente->cidade
						<td>$cliente->UF
					<tr/>"; 
				}
			}
		} catch (PDOException $err) {
			echo 'Erro' . $err->getMessage();
		}
	}
?>