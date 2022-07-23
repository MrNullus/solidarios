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

		<!--+++++++++++ icon +++++++++++-->
		<link rel="icon" href="https://www.seekpng.com/png/full/222-2223215_cookies-biscoitos-bolacha-minecraft-comida-minecraft-cookie.png" />

		<!--+++++++++++ google font +++++++++++-->
		<!-- link -->
		
		<title>Cadastro || Solidários</title>

		<!--+++++++++++ link for css files +++++++++++-->
		<link 
			rel="stylesheet" 
			href="<?php echo URL_BASE_CSS.'index.css'; ?>"
		/>
	</head>
	<body>
		<!--+++++++++++ header +++++++++++-->
		<?php 	
			require_once('header.php');
		?>
		<!--+++++++++++ /header +++++++++++-->

		<!--+++++++++++ page +++++++++++-->
			<div id="lipsum">
				<?php 
				#= verificar os feedbacks retornados na SESSION =#
				if (empty($_SESSION['feedback_actions'])) {
					$_SESSION['feedback_actions'] = "pendding";
				} 
				if ($_SESSION['feedback_actions'] == "error1") {
					echo "<center><h1>Login já utilizado, por favor crie um diferente</h1></center>";
				} 
				?>

				<form name="cadastrar" id="cadastrar" method="post" action="../<?php echo URL_BASE_CONTROLLERS; ?>cadastro.controller.php">
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
							<input type="password" name="password" id="password" required><br/>
						</div>
					</fieldset>
					<br/>
					<div style="margin-right: auto; margin-left: auto;" id="manda"><input type="submit" id="enviar" name="enviar" value="enviar" /></div>
				</form>
			</div>
		</main>

		<!--+++++++++++ footer +++++++++++-->
		<?php
			require_once('footer.php');
		?>
		<!--+++++++++++ /footer +++++++++++-->
	</body>
</html>