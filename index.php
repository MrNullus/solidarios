<!doctype html>
<html>
	<head>
		<title>Solidários</title>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="css/index.css"/>
		<link rel="icon" href="https://www.seekpng.com/png/full/222-2223215_cookies-biscoitos-bolacha-minecraft-comida-minecraft-cookie.png"/>
	</head>
	<body>
		<div id="corpo">
			<header>
				<div id="logo">
					<a href="index.php">
						<img src="imagens/logo.gif" height="150px" alt="Solidários" id="logoimg"/>
					</a>
					<br/>
				</div>
				
				<div id="barra">
					<a href="index.php">Home</a>
					<?php  
						include("header.php");
					?>
				</div>
			</header>
			<div id="bemvindo">
				<h2>
					Seja bem vindo
				</h2>
				<p>
					Nosso Site foi desenvolvido para realização de atividades solidárias relacionadas ao Projeto Trote solidário, realizado pela Etec de Francisco morato
				</p>
				<p>
					Ampliando Nossos horizontes resolvemos intermediar doações não apenas recebendo na escola, assim unindo quem precisa e quem irá receber através de nosso site
				</p>
			</div>
			<hr style="border-color: #A7CDD6;" />
			<center>
				<?php
					include("carro.php");
				?>
			</center>
			<hr style="border-color: #A7CDD6;" />
		</div>
	</body>
</html>