<!doctype html>
<html>
	<head>
		<title>Compromissos</title>
		<meta charset="utf-8"/>
		<link rel="stylesheet" type="text/css" href="css/index.css"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
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
						session_start();
						if (!$_SESSION['logged']==1) {
							header("location: login.php");
						}
						if (empty($_SESSION['logged']) || $_SESSION['logged'] == 0) {
							echo"
								<a href='login.php'>Login</a>
								<a href='cadastro.php'>Cadastre-se</a>
								<a href='compromisso.php'>Compromissos</a>
								<a href='perfil.php'>Perfil</a>
							";
						}elseif ($_SESSION['logged'] == 1) {
							echo"			
								<a href='compromisso.php'>Compromissos</a>
								<a href='perfil.php'>Perfil</a>
								<a href='sair.php'>sair</a>
							";
						}
					?>
				</div>
			</header>
			<div id="lipsum"> 
				<!--
				<center>
					<img src="https://static-cdn.jtvnw.net/emoticons/v2/emotesv2_e2843fb5e9de49b68304d1849b92829d/animated/light/3.0"/><br/>
					Essa página está em Manutenção
				</center>
				-->
				<div id="dr" style="width: 90%; margin-right: auto; margin-left: auto;">
					<center>
					<a href="doar.php"><img  style="text-align: left; height: 200px;" src="imagens/doar.png"></a>
					<a href="receber.php"><img  style="text-align: right; height: 200px;" src="imagens/receber.png"></a>
					</center>
				</div>
			</div>
		</div>

	</body>
</html>