<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Mercado</title>
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<div class="container">
		<main class="main-content">
			<header class="logo">MENU</header>
			<div class="content">
				<a class="buttons" data-form="prod">Produtos</a>
				<a class="buttons" data-form="mov">Movimento</a>
				<a class="buttons" data-form="cliente">Cliente</a>
				<a class="buttons" data-form="fornc">Fornecedor</a>
			</div>
			<div class="form-box">

				<form action="./produto/back-end/cadastroProd.php" method="GET" class="forms" id="prod">
					<div class="title">Produtos</div>
					<ul class="menu">
						<li><a href="./produto/formCad/formCad.php">Cadastro</a></li>
						<li class="subs-menus" data-list="list-prod">
							<a>Lista <i class='bx bx-chevron-down'></i></a>
							<ul class="lists-menus" id="list-prod">
								<li><button name="listCod">por Código</button></li>
								<li><button name="listProd">por Descrição</button></li>
								<li><a href="./produto/formVenc/formVenc.php">por Vencimento</a></li>
							</ul>
						</li>
					</ul>
				</form>

				<form action="./movimento/back-end/cadastroMov.php" method="GET" class="forms" id="mov">
					<div class="title">Movimento</div>
					<ul class="menu">
						<li><a href="./movimento/formMov/formMov.php">Cadastro</a></li>
						<li class="subs-menus" data-list="list-mov">
							<a>Lista <i class='bx bx-chevron-down'></i></a>
							<ul class="lists-menus" id="list-mov">
								<li><button name="listEntrada">por Estrada</button></li>
								<li><button name="listSaida">por Saída</button></li>
							</ul>
						</li>
					</ul>
				</form>

				<form action="./cliente/back-end/cadastroClient.php" method="GET" class="forms" id="cliente">
					<div class="title">Cliente</div>
					<ul class="menu">
						<li><a href="./cliente/formCliente/formCliente.php">Cadastro</a></li>
						<li class="subs-menus" data-list="list-cliente">
							<a>Listar <i class='bx bx-chevron-down'></i></a>
							<ul class="lists-menus" id="list-cliente">
								<li><button name="listClient">Clientes</button></li>
							</ul>
						</li>
					</ul>
				</form>

				<form class="forms" id="fornc">
					<div class="title">Fornecedores</div>
					<ul class="menu">
						<li><a href="./fornecedor/formFornc/formFornc.php">Cadastro</a></li>
						<li class="subs-menus" data-list="list-fornc">
							<a>Lista <i class='bx bx-chevron-down'></i></a>
							<ul class="lists-menus" id="list-fornc">
								<li><button name="listFornc">Fornecedores</button></li>
							</ul>
						</li>
					</ul>
				</form>

			</div>
		</main>
	</div>
</body>
<script src="./js/script.js"></script>

</html>