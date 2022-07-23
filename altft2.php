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
				include("conexao.php");
				$nome=$_SESSION['username'];
				$nomea=$_FILES['imagem']['name'];
				$arquivo=$_FILES['imagem']['tmp_name'];
				$ext=substr($nomea,-3);
				echo $novonome="$nome.$ext";
				move_uploaded_file($arquivo,'imgperfil/'.$novonome);
				mysqli_query($conexao,"update usuario set imgperfil='$novonome' where nick='". $_SESSION['username'] ."'");
				?>
			</div>
		</div>
		
	</body>
</html>