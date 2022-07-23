<!doctype html>
<html>
	<head>
		<title>Cadastro - Solidários</title>
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
						session_start();
						if (empty($_SESSION['logged'])) {
							$_SESSION['logged']=0;
						}
						if ($_SESSION['logged']==1) {
							header("location: index.php");
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
				<?php
					if ($_SESSION['certo']=="errado2") {
							echo "<center><h1>Cadastro Não realizado</h1></center>";
							echo "<br/>";
					}elseif ($_SESSION['certo']=="certo") {
						echo "<center><h1>Cadastro realizado com sucesso</h1>";
						echo "<br/>";
						echo "<a href='login.php'>Realizar login</a>
						</center>";
					}
				
				?>				
			</div>

		</div>
			
	</body>
</html>