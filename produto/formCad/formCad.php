<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Menu Mercado</title>
	<link rel="stylesheet" href="css/formCad-style.css">
</head>

<body>
	<div class="container">
		<main class="main-content">
			<header class="logo">
				CADASTRO
			</header>
			<form class="content" action="../back-end/cadastroProd.php" method="GET">
				<div class="input-group">
					<div class="input-box">
						<label for="codProd">Código do produto</label>
						<input type="number" name="codProd" min="1" max="9999999" required>
					</div>
					<div class="input-box">
						<label for="descricao">Descrição</label>
						<input type="text" name="descricao" maxlength="100" required>
					</div>
				</div>

				<div class="input-group">
					<div class="input-box">
						<label for="valor">Valor</label>
						<input type="number" name="valor" step="0.01" min="0" max="9999999" required>
					</div>
					<div class="input-box">
						<label for="vencimento">Vencimento</label>
						<input type="date" name="vencimento"required>
					</div>
				</div>

				<div class="button-group">
					<button type="submit" name="insertProd">Cadastrar</button>
					<button type="submit" name="removeProd">Remover</button>
					<a class="back" href="javascript:history.back()"><i class='bx bx-arrow-back'></i>Voltar</a>
				</div>
			</form>
		</main>
	</div>
</body>
<script src="js/script.js"></script>
</html>