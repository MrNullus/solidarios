<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Alterar foto</title>
		<link rel="stylesheet" href="css/index.css">
		<link rel="icon" href="https://www.seekpng.com/png/full/222-2223215_cookies-biscoitos-bolacha-minecraft-comida-minecraft-cookie.png"/>
	</head>
	<body><div id="corpo">
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
			<center>
				<div id="fotop">
				<?php
				
					include("conexao.php");
					$consulta=mysqli_query($conexao,"select imgperfil from usuario where nick='". $_SESSION['username'] ."'");
					while($dados=mysqli_fetch_array($consulta)){
						$imglink=$dados['imgperfil'];
					}
					if (!isset($imglink)) {
						//$imglink="https://www.w3schools.com/howto/img_avatar.png";
						echo "<img src='imagens/perfilbase.png' alt='Foto de perfil' id='fotoperfil'/>";
					}else{
						echo "<img src='imgperfil/",$imglink,"' id='fotoperfil' alt='fotoperfil'> ";
						
					}
				?>
					<hr style="width: 100px; border-style: solid; border-color: black;" />
					Foto atual
					<hr style="width: 100px; border-style: solid; border-color: black;" />
				</div>
				<form name="teste" action="altft2.php" method="post" enctype="multipart/form-data">
					<label for="imagem" style="border-style: dashed; border-color: black; padding: 3px; background-color: white;">Selecionar imagem</label>
					<input type="file" name="imagem" id="imagem" style="display: none;" /><br/><br/>
					<input type="submit" value="Enviar imagem" name="enviar" style="background-color: white;" />
				</form>
			</center>
		</div>
		
	</body>
</html>