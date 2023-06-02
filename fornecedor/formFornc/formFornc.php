<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Menu Mercado</title>
	<link rel="stylesheet" href="css/formFornc-style.css">
</head>

<body>
	<div class="container">
		<main class="main-content">
			<header class="logo">
				CADASTRO
			</header>
			<form class="content" action="../back-end/cadastroFornc.php" method="GET">
				<div class="input-main">
					<div class="input-group">
						<div class="input-box">
							<label for="nome">Nome</label>
							<input type="text" name="nome" maxlength="60" required autocomplete="off">
						</div>
						<div class="input-box">
							<label for="cnpj">CNPJ</label>
							<input type="number" name="cnpj" max="99999999999" required autocomplete="off">
						</div>
						<div class="input-box">
							<label for="cel">Celular</label>
							<input type="number" name="cel" max="999999999999" required autocomplete="off">
						</div>
						<div class="input-box">
							<label for="codFornc">Código do fornecedor</label>
							<input type="number" name="codFornc" min="1" max="9999999" required autocomplete="off">
						</div>
					</div>

					<div class="input-group">
						<div class="input-box">
							<label for="cep">CEP</label>
							<input type="number" name="cep" max="99999999" required onchange="buscarCep(this.value)" autocomplete="off">
						</div>
						<div class="input-box">
							<label for="numero">Número</label>
							<input type="number" name="numero" max="9999999" required autocomplete="off">
						</div>
						<div class="input-box">
							<label for="complemento">Complemento</label>
							<input type="text" name="complemento" maxlength="30" autocomplete="off">
						</div>
					</div>
				</div>

				<div class="button-group">
					<button type="submit" name="insertCliente">Cadastrar</button>
					<button type="submit" name="removeCliente">Remover</button>
					<a class="back" href="javascript:history.back()"><i class='bx bx-arrow-back'></i>Voltar</a>
				</div>
			</form>
		</main>
		<div class="text-area"></div>
	</div>
</body>
<script src="js/script.js"></script>

</html>