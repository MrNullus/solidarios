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
				<?php 
				if ($_SESSION['certo']=="errado") {
					echo "<center><h1>Login já utilizado, por favor crie um diferente</h1></center>";
				}
				?>
				<form name="cproduto" id="cproduto" method="post" action="cproduto.php" enctype="multipart/form-data">
					<input type="hidden" name="doador" value=<?php
											include("conexao.php");
											$consulta=mysqli_query($conexao,"select * from usuario where nick='". $_SESSION['username'] ."'");
											while($dados=mysqli_fetch_array($consulta)){
												$_SESSION['id_usuario']=$dados['id_usuario'];
											}
											echo "'".$_SESSION['id_usuario']."'";
										?>>
					<fieldset>
						<div class="campos" id="campo1">
							<label>Nome do produto</label><br/>
							<input type="text" name="nome" id="nome" required><br/>
							<label>Data de Validade</label><br/>
							<input type="date" name="valido" id="valido" required><br/><br/>
							<label for="imagem" style="border-style: dashed; border-color: black; padding: 3px; background-color: white;">Selecionar imagem</label>
							<input type="file" name="imagem" id="imagem" style="display: none;" /><br/><br/>

						</div>
					</fieldset>
					<div style="margin-right: auto; margin-left: auto;" id="manda"><input type="submit" id="enviar" name="enviar" value="enviar" /></div>
				</form>
			</div>

		</div>
			
	</body>
</html>