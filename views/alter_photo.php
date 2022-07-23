<?php 
require '../minerva.lock.php';
require '../'.URL_BASE_CONTROLLERS.'alter_photo.controller.php'; 

$imglink = $user->getImgProfile($id_usuario);
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<!--+++++++++++ meta tags +++++++++++-->
		<meta name="author" content="BlackPrism" />
		<meta name="description" content="Nosso Site foi desenvolvido para realização de atividades solidárias relacionadas ao Projeto Trote solidário, realizado pela Etec de Francisco morato" />
		<meta name="keywords" content="Francisco Morato, Etec de Francisco Morato, Trote Solidario, Doações, Ajuda" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta charset="utf-8" />

		<!--+++++++++++ icon +++++++++++-->
		<link rel="icon" href="https://www.seekpng.com/png/full/222-2223215_cookies-biscoitos-bolacha-minecraft-comida-minecraft-cookie.png" />

		<!--+++++++++++ google font +++++++++++-->
		<!-- link -->
		
		<title>Alterar Foto de Perfil || Solidários</title>

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

			<center>
				<div id="fotop">
					<?php 
					$imglink="https://www.w3schools.com/howto/img_avatar.png";

					if (!isset($imglink)) { ?>
						<img 
							src='<?php echo URL_BASE_IMGS;?>/profile_default/perfilbase.png'
							alt='Foto de perfil' 
							id='fotoperfil' 
						/>
					<?php } else { ?>
						<img 
							src='<?php echo URL_BASE_IMGS;?>/profile_img/lorem.png'
							alt='<?php echo $nickname;?>' 
							id='fotoperfil' 
						/>
					<?php } ?>

					<hr style="width: 100px; border-style: solid; border-color: black;" />
					Foto atual
					<hr style="width: 100px; border-style: solid; border-color: black;" />
				</div>
				
				<form name="teste" action="<?php echo URL_BASE_CONTROLLERS; ?>alter_photo.controller.php" method="post" enctype="multipart/form-data">
					<label for="imagem" style="border-style: dashed; border-color: black; padding: 3px; background-color: white;">Selecionar imagem</label>
					<input type="file" name="imagem" id="imagem" style="display: none;" /><br/><br/>
					<input type="submit" value="Enviar imagem" name="enviar" style="background-color: white;" />
				</form>
			</center>

		</main>
		
		<!--+++++++++++ footer +++++++++++-->
		<?php
			require_once('footer.php');
		?>
		<!--+++++++++++ /footer +++++++++++-->

	</body>
</html>