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
			<form class="content" action="../back-end/cadastroMov.php" method="GET">
				<div class="input-group">
					<div class="input-box">
						<label for="codProd">Código do produto</label>
						<input type="number" name="codProd" min="1" max="9999999" required>
					</div>
					<div class="input-box">
						<label for="qnt">Quantidade</label>
						<input type="number" name="qnt" min="1" max="9999999" required>
					</div>
				</div>

				<div class="radio-date">
					<div class="radio-group">
						<div class="radio-box">
							<input type="radio" name="tipo" id="e" value="E">
							<label for="e">Entrada</label>
						</div>
						<div class="radio-box">
							<input type="radio" name="tipo" id="s" value="S">
							<label for="s">Saída</label>
						</div>
					</div>
					<div class="date">
						<script lang="javascript">
							now = new Date;
							document.write (`
							Hoje é dia: ${now.getDate()}/${(now.getMonth()<10?'0':'') + now.getMonth()}/${now.getFullYear()}<br>
							Hora Atual: ${now.getHours()}:${(now.getMinutes()<10?'0':'') +now.getMinutes()}`)
						</script>
					</div>
				</div>

				<div class="button-group">
					<button type="submit" name="insertMov">Confirmar</button>
					<button type="submit" name="removeMov">Deletar</button>
					<a class="back" href="javascript:history.back()"><i class='bx bx-arrow-back'></i>Voltar</a>
				</div>
			</form>
		</main>
	</div>
</body>
<script src="js/script.js"></script>
</html>