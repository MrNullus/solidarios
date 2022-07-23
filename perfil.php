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
				<!--receber o id de usuário para saber qual foto será alterada caso o usuário queira
				salvar o caminho da foto de perfil do usuário em $imglink
				não colocar nada ao lado da foto de perfil
				alterar a foto de perfil com o mouse sendo arrastado por cima da padrão, revelando o botão assim https://www.w3schools.com/howto/howto_css_image_overlay.asp
				-->

				<div id="fotop">
					<div id="dados" style="position: absolute; left:25%;right: 25%;align-items: center; display: flex;justify-content: center;">
						<table BORDERCOLOR="black" rules="all" border="3" cellpadding="3" style="background: rgb(166,183,227);background: linear-gradient(90deg, rgba(166,183,227,1) 0%, rgba(167,205,214,1) 100%);text-align: center;">
							<tbody>
								<tr>
									<th colspan="2">Nome</th>
									<th>Data de nascimento</th>
								</tr>
								<tr>
									<td colspan="2" style="border-bottom-width: 3px;">
										<?php
											include("conexao.php");
											$consulta=mysqli_query($conexao,"select * from usuario where nick='". $_SESSION['username'] ."'");
											while($dados=mysqli_fetch_array($consulta)){
												$nome=$dados['nome'];
												$nasc=$dados['nasc'];
												$cep=$dados['cep'];
												$num=$dados['num'];
												$email=$dados['email'];
												$fixo=$dados['fixo'];
												$cel=$dados['cel'];
												$_SESSION['id_usuario'];
											}
											if (!isset($nome)) {
												echo "Nulo";
											}else{
												echo $nome;
												
											}
										?>
									</td>
									<td style="border-bottom-width: 3px;">
										<?php
											if (!isset($nasc)) {
												echo "Nulo";
											}else{
												echo $nasc;
												
											}
										?>
									</td>
								</tr>
								<tr>
									<th colspan="2">CEP</th>
									<th>Número da residência</th>
								</tr>
								<tr>
									<td colspan="2" style="border-bottom-width: 3px;">
										<?php
											if (!isset($cep)) {
												echo "Nulo";
											}else{
												echo $cep;
												
											}
										?>
									</td>
									<td style="border-bottom-width: 3px;">
										<?php
											if (!isset($num)) {
												echo "Nulo";
											}else{
												echo $num;
												
											}
										?>
									</td>
								</tr>

								<tr>
									<th>
										Email
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
										<?php
											if (!isset($email)) {
												echo "Nulo";
											}else{
												echo $email;
												
											}
										?>
									</td>
									<td>
										<?php
											if (!isset($fixo)) {
												echo "Nulo";
											}else{
												echo $fixo;
												
											}
										?>
									</td>
									<td>
										<?php
											if (!isset($cel)) {
												echo "Nulo";
											}else{
												echo $cel;
												
											}
										?>
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
				<pre> <A HREF="altft.php" id="altft"> Alterar foto </A> <br/></pre>

			</div>
		</div>
	</body>
</html>