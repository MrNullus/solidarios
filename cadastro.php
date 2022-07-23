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
				if ($_SESSION['certo']=="errado") {
					echo "<center><h1>Login já utilizado, por favor crie um diferente</h1></center>";
				}
				?>
				<form name="cadastrar" id="cadastrar" method="post" action="cadastrot.php">
					<fieldset>
						<div class="campos" id="campo1">
							<label>Nome completo:</label><br/>
							<input type="text" name="nome" id="nome" required><br/>
							<label>Data de nascimento:</label><br/>
							<input type="date" name="idade" id="idade" max=<?php $data=date('Y/m/d'); echo "'$data'";?> required><br/>
						</div>
					</fieldset>
					<br/>
					<fieldset>
						<div class="campos" id="campo2">
							<label>CEP:</label><br/>
							<input type="text" name="cep" id="cep" required><br/>
							<label>Número da sua residência:</label><br/>
							<input type="text" name="end" id="end" required><br/>
						</div>
					</fieldset>
					<br/>
					<fieldset>
						<div class="campos" id="campo3">
							<b>Digite pelo menos um número de telefone ou celular</b><hr style="border-color: black" />
							<label>E-mail:</label><br/>
							<input type="text" name="mail" id="mail" required><br/>
							<label>Telefone fixo:</label><br/>
							<input type="text" name="tel" id="tel" ><br/>
							<label>Celular:</label><br/>
							<input type="text" name="cel" id="cel" ><br/>
							
						</div>
					</fieldset>
					<br/>
					<fieldset>
						<div class="campos" id="campo4">
							<label>Nome de usuário</label><br/>
							<input type="text" name="user" id="user" required><br/>
							<label>Senha:</label><br/>
							<input type="password" name="senha" id="senha" required><br/>
						</div>
					</fieldset>
					<br/>
					<div style="margin-right: auto; margin-left: auto;" id="manda"><input type="submit" id="enviar" name="enviar" value="enviar" /></div>
				</form>
			</div>

		</div>
			
	</body>
</html>