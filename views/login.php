<?php require '../minerva.lock.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<!--+++++++++++ meta tags +++++++++++-->
		<meta name="author" content="BlackPrism" />
		<meta name="description" content="Nosso Site foi desenvolvido para realização de atividades solidárias relacionadas ao Projeto Trote solidário, realizado pela Etec de Francisco morato" />
		<meta name="keywords" content="Francisco Morato, Etec de Francisco Morato, Trote Solidario, Doações, Ajuda" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta charset="utf-8" />

		<!--+++++++++++ favicon +++++++++++-->
		<link rel="apple-touch-icon" href="./public/assets/imgs/favicon/touch-icon-iphone.png" />
		<link rel="icon" sizes="16x16" href="./public/assets/imgs/favicon/favicon-16x16.png" />
		<link rel="icon" sizes="32x32" href="./public/assets/imgs/favicon/favicon-32x32.png" />

		<!--+++++++++++ google font +++++++++++-->
		<!-- link -->
		
		<title>Login || Solidários</title>

		<!--+++++++++++ link for css files +++++++++++-->
		<link 
			rel="stylesheet" 
			href=<?php echo URL_BASE_CSS."index.css"; ?> 
		/>
	</head>
	<body>
		<!--+++++++++++ header +++++++++++-->
		<?php 	
			require_once('header.php');
		?>
		<!--+++++++++++ /header +++++++++++-->

		<!--+++++++++++ page +++++++++++-->
		<main id="corpo" class="page">

			<!--+++++++++++ lipsum +++++++++++-->
			<div id="lipsum">

				<form name="entrar" id="entrar" method="post" action="../<?php echo URL_BASE_CONTROLLERS; ?>login.controller.php">
					<fieldset>
						<legend>
							Login
						</legend>
						<?php
							if (!empty($_SESSION['failed_login']) &&
$_SESSION['failed_login'] == 'y') {
								echo "<center><hr style='border-width:50%;border-color:red'/>Você digitou algo errado, tente novamente<hr style='border-width:50%;border-color:red'/></center>";
							}
						?>
						<label for="login">Digite seu login:</label><br/>
						<input type="text" name="login" id="login"/><br/><br/>
						<label for="senha">Digite sua senha:</label><br/>
						<input type="password" name="password" id="password"/><br/>

						<center>
							<a href="<?php echo URL_BASE_LINK_VIEWS; ?>cadastro/">
								Não possuí cadastro? clique aqui
							</a>
							<br/>
							<input type="submit" value="Entrar"/>
						</center>
					</fieldset>
				</form>

			</div>
			<!--+++++++++++ /lipsum +++++++++++-->

		</main>

		<!--+++++++++++ footer +++++++++++-->
		<?php
			require_once('footer.php');
		?>
		<!--+++++++++++ /footer +++++++++++-->

	</body>
</html>