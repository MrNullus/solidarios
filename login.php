<!doctype html>
<html>
	<head>
		<title>Login - Solidários</title>
		<meta charset="utf-8"/>
		<link rel="stylesheet" type="text/css" href="css/index.css"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="icon" href="https://www.seekpng.com/png/full/222-2223215_cookies-biscoitos-bolacha-minecraft-comida-minecraft-cookie.png"/>
	</head>
	<body>
		<div id="corpo" style="text-align: left;">
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
						//include("logint.php");
						session_start();
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
				<form name="entrar" id="entrar" method="post" action="logint.php">
					<fieldset>
						<legend>
							Login
						</legend>
						<?php
							@$falha=$_SESSION['falha'];
							if ($falha=="falha") {
								echo "<center><hr style='border-width:50%;border-color:blue'/>Você digitou algo errado, tente novamente<hr style='border-width:50%;border-color:blue'/></center>";
							}

						?>
						<label for="login">Digite seu login:</label><br/>
						<input type="text" name="login" id="login"/><br/><br/>
						<label for="senha">Digite sua senha:</label><br/>
						<input type="password" name="senha" id="senha"/><br/>
						<input type="submit" id="enviar" name="enviar" value="enviar" />
						<center>
							<a href="cadastro.php">Não possuí cadastro? clique aqui</a><br/>
							<input type="submit" value="Enviar todos os dados inseridos"/>
						</center>
					</fieldset>
				</form>
			</div>
		</div>
	</body>
</html>