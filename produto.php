<!doctype html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Perfil</title>
		<link rel="stylesheet" type="text/css" href="css/index.css"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="icon" href="https://www.seekpng.com/png/full/222-2223215_cookies-biscoitos-bolacha-minecraft-comida-minecraft-cookie.png"/>
	</head>
	<body>
		<div id="corpo" style="text-align: left;">
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
			<div id="lipsum">
				<!--receber o id de usuário para saber qual foto será alterada caso o usuário queira
				salvar o caminho da foto de perfil do usuário em $imglink
				alterar a foto de perfil com o mouse sendo arrastado por cima da padrão, revelando o botão assim https://www.w3schools.com/howto/howto_css_image_overlay.asp
				-->
				<div id="fotop">
					<div id="dados" style="position: absolute; left:25%;right: 25%;align-items: center; display: flex;justify-content: center;">
						<table BORDERCOLOR="black" rules="all" border="3" cellpadding="3" style="background: rgb(166,183,227);background: linear-gradient(90deg, rgba(166,183,227,1) 0%, rgba(167,205,214,1) 100%);text-align: center;">
							<tbody>
								<tr>
									<th colspan="2">Nome do doador</th>
									<th>Disponibilidade</th>
								</tr>
								<tr>
									<td colspan="2" style="border-bottom-width: 3px;">lorem ipsum</td>
									<td style="border-bottom-width: 3px;">Disponivel</td>
								</tr>
								<tr>
									<th colspan="3">Local da entrega</th>
									
								</tr>
								<tr>
									<td colspan="3" style="border-bottom-width: 3px;">Lorem ipsum</td>
								</tr>

								<tr>
									<th>
										Email
										<?php
										//$email=email;
										?>	
									</th>
									<th>
										Telefone fixo
									</th>
									<th>
										Telefone Celular
									</th>
								</tr>
								<tr>
									<td>
										Lorem ipsum
										<?php
										//$email=email;
										?>	
									</td>
									<td>
										Lorem ipsum
									</td>
									<td>
										dolor sit
									</td>
								</tr>
								<?php
									/*$cel=10;
									$fixo=10;
									if (empty($fixo)) {
										echo "
										<tr>
											Telefone fixo:
											<td>Sem Telefone fixo informado</td>
										</tr>";
									}else{
										echo "
										<tr>
											Telefone fixo:
											<td>$fixo</td>
										</tr>";
									}
									if (empty($cel)) {
										echo "
										<tr>
											Telefone celular: 
											<td>Sem celular informado</td>
										</tr>";
									}else
									echo "
										<tr>
											Telefone celular: 
											<td>$cel</td>
										</tr>";
									echo "
										
									";*/
								?>
								
							</tbody>
						</table>
					</div>
				</div>
				<?php
				//colocar um if, se o usuario estiver sem login essa página redireciona pra fazer login
				//$imglink="https://www.w3schools.com/howto/img_avatar.png";
					if (empty($imglink)) {
						echo "<img src='imagens/presente.jpg' alt='Foto de perfil' id='fotoperfil'/>";
					}else{
						echo "<img src='$imglink' alt='Foto de perfil' id='fotoperfil'/>";
					}
				?>
				<pre> <A HREF="altpro.php" id="altft"> Alterar imagem </A> <br/></pre>
			</div>
		</div>
	</body>
</html>