<?php  
// @ iniciar as dependencias @
require '../minerva.lock.php';

$user = new User($pdo);
$user_logged = json_decode($_SESSION['user_logged']);
$id_usuario = addslashes($user_logged->id);

if (isset($id_usuario)) {
	$data = $user->getUser($id_usuario);
	$_SESSION['id_user'] = $data['id_usuario'];
}

$_VALUE_INPUT = (isset($_SESSION['id_user'])) ? $_SESSION['id_user'] : "";
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
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

			<title>Doar || Solidários</title>

			<!--+++++++++++ link for css files +++++++++++-->
			<link rel="stylesheet" href=<?php echo URL_BASE_CSS . "index.css"; ?> />
		</head>
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
				<?php
				if (isset($_SESSION['feedback_cadastro_product']) && $_SESSION['feedback_cadastro_product'] == "error2") {
					echo "<center><h3>Cadastro não realizado</h3></center>";
				}
				if (isset($_SESSION['feedback_cadastro_product']) && $_SESSION['feedback_cadastro_product'] == "success") {
					echo "<center><h3>Cadastro realizado com sucesso!</h3></center>";
				} 
				?>

				<form 
					name="cadastrar-produto" id="cadastroProduto" 
					method="post" 
					action="../<?php echo URL_BASE_CONTROLLERS; ?>cadastro_product.controller.php"
					enctype="multipart/form-data"
				>
					<input type="hidden" name="doador" value="<?php echo $_VALUE_INPUT; ?>" />

					<div class="input-field">
						<label>Nome do produto</label><br />
						<input type="text" name="nome" id="nome" required><br />
					</div>

					<div class="input-field">
						<label>Descrição do produto</label><br />
						<textarea name="descricao" id="descricao" required></textarea><br />
					</div>

					<div class="input-field">
						<label>Data de Validade</label><br />
						<input type="date" name="valido" id="valido" required><br /><br />	
					</div>

					<div class="input-field">
						<label for="imagem" style="border-style: dashed; border-color: black; padding: 3px; background-color: white;">Selecionar imagem</label>
						<input type="file" name="imagem" id="imagem" style="display:none;" /><br /><br />
					</div>

					<div class="input-field">
						<label>Senha</label><br />
						<input type="password" name="senha" id="senha" required><br />
					</div>

					<input 
						class="btn donate__button" 
						type="submit" id="enviar" 
						name="enviar" value="Enviar" 
					/>
				</form>
			</div>
			<!--+++++++++++ /lipsum +++++++++++-->

		</main>
		<!--+++++++++++ /page +++++++++++-->

		<!--+++++++++++ footer +++++++++++-->
		<?php
			require_once('footer.php');
		?>
		<!--+++++++++++ /footer +++++++++++-->

	</body>
</html>