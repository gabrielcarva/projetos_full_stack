<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Exercício 01</title>
	<style>
		body {
			color: #f2f2f2;
			background-color: #fff; /* Fundo branco fora da div */
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100vh;
			margin: 0;
		}

		.container {
			background-color: #3295a8; /* Cor de fundo da div */
			padding: 20px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
		}

		h1 {
			color: black;
            text-align: center;
		}

		p {
			color: #e2ebeb;
			font-size: 16px;
		}

		/* Estilos para os botões */
		button {
			background-color: #f2f2f2;
			border: none;
			border-radius: 5px;
			padding: 10px 20px;
			font-size: 16px;
			margin: 5px;
			cursor: pointer;
		}
	</style>
</head>

<body>
	<div class="container">
		<?php
			echo "<h1>TRILHA</h1>";
			echo "<p>Página sobre o jogo <strong>TRILHA</strong> desenvolvido usando as tecnologias <em>PHP, HTML e CSS</em></p>";
			echo "<p>Nesta tela de início do jogo, você poderá escolher uma das opções principais: <strong>Começar o jogo ou Como Jogar</strong></p>";
			echo "<a href=\"http://www.wikipedia.org/wiki/Trilha_(jogo)\">Conheça sobre o jogo na internet</a>";
			echo "<br><br>";
			echo "<button>COMEÇAR A JOGAR</button><button>COMO JOGAR</button>";
		?>
	</div>
</body>

</html>
