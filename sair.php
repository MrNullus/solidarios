<!doctype html>
<html>
	<head>
		<title>Sair</title>
		<meta charset="utf-8"/>
		<link rel="stylesheet" type="text/css" href="css/index.css"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="icon" href="https://www.seekpng.com/png/full/222-2223215_cookies-biscoitos-bolacha-minecraft-comida-minecraft-cookie.png"/>
		<meta http-equiv="refresh" content="0;url=index.php" />
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
						$_SESSION['logged']=0;
						
					?>
				</div>
			</header>
		</div>

	</body>
</html>