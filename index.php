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
				<a class="prod">Produtos</a>
				<a class="mov">Movimento</a>
			</div>
			<div class="form-box">
				<form action="./produto/back-end/cadastroProd.php" method="GET" class="cont-menu formProd">
					<ul class="menu">
						<li><a href="./produto/formCad/formCad.php">Cadastro</a></li>
						<li class="list">
							<a href="#">Listar <i class='bx bx-chevron-down'></i></a>
							<ul class="sub-menu list-menu">
								<li><button name="listCod">por Código</button></li>
								<li><button name="listProd">por Descrição</button></li>
							</ul>
						</li>
						<li><a href="./produto/formVenc/formVenc.php">Listar por vencimento</a></li>
					</ul>
				</form>
				<form action="./movimento/back-end/cadastroMov.php" class="cont-menu formMov">
					<ul class="menu">
						<li><a href="./movimento/formMov/formMov.php">Cadastro</a></li>
						<li class="est">
							<a href="#">Listar Est. <i class='bx bx-chevron-down'></i></a>
							<ul class="sub-menu est-menu">
								<li><button name="listEntrada">Estrada</button></li>
								<li><button name="listSaida">Saída</button></li>
							</ul>
						</li>
					</ul>
				</form>
			</div>
		</main>
	</div>
</body>
<!-- <script src="./produto/js/script.js"></script> -->
<script src="./produto/js/script.js"></script>

</html>