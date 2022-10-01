<?php require '../minerva.lock.php'; ?>

<!DOCTYPE html>
<html>
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
		
		<title>Perfil || Solidários</title>

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

			<?php require '../'.URL_BASE_CONTROLLERS.'perfil.controller.php'; ?>
			
		</main>

		<!--+++++++++++ footer +++++++++++-->
		<?php
			require_once('footer.php');
		?>
		<!--+++++++++++ /footer +++++++++++-->
	</body>
</html>