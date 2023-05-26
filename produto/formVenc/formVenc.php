<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Menu Mercado</title>
	<link rel="stylesheet" href="css/formVenc-style.css">
</head>

<body>
	<div class="container">
		<main class="main-content">
			<header class="logo">
				LIST. VENCIMENTO
			</header>
			<form class="content" action="../back-end/cadastroProd.php" method="GET">
				<div class="input-group">
					<div class="input-box">
						<label for="vencimento">De:</label>
						<input type="date" name="vencimento" required>
					</div>
					<div class="input-box">
						<label for="vencimento1">Até:</label>
						<input type="date" name="vencimento1" required>
					</div>
				</div>

				<div class="button-group">
					<button type="submit" name="listVenc">Listar</button>
					<a class="back" href="javascript:history.back()"><i class='bx bx-arrow-back'></i>Voltar</a>
				</div>
			</form>
		</main>
	</div>
</body>
<script src="js/script.js"></script>
</html>