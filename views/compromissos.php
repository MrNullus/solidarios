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
		
		<title>Compromissos || Solidários</title>

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
				
				<center>
					<img src="https://static-cdn.jtvnw.net/emoticons/v2/emotesv2_e2843fb5e9de49b68304d1849b92829d/animated/light/3.0"/><br/>
					Essa página está em Manutenção
				</center>
				
				<div id="dr" style="width: 90%; margin-right: auto; margin-left: auto;">
					<center>
					<a href="<?php echo URL_BASE_LINK_VIEWS; ?>doar.php">
						<img  style="text-align: left; height: 200px;" src="<?php echo URL_BASE_IMGS; ?>buttons/doar.png">
					</a>
					<a href="<?php echo URL_BASE_LINK_VIEWS; ?>receber.php/">
						<img  style="text-align: right; height: 200px;" src="<?php echo URL_BASE_IMGS; ?>buttons/receber.png">
					</a>
					</center>
				</div>
			
			</div>
			<!--+++++++++++ /lipsum +++++++++++-->
			<br><br>

			<?php 
				require('../'.URL_BASE_CONTROLLERS.'compromissos.controller.php'); 
			?>

		</main>		
		<!--+++++++++++ /page +++++++++++-->

		<!--+++++++++++ footer +++++++++++-->
		<?php
			require_once('footer.php');
		?>
		<!--+++++++++++ /footer +++++++++++-->

	</body>
</html>