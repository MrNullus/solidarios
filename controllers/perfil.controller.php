<?php
// @ iniciar as dependencias @
$user = new User($pdo);

$user_logged = json_decode($_SESSION['user_logged']);
$id_usuario = $user_logged->id->id_usuario;
$data = $user->getUser($id_usuario);
?>

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
							<?php if (isset($data['nome'])) { ?>
								<?php echo $data['nome']; ?>
							<?php } else { ?>
								<?php echo 'Default'; ?>
							<?php } ?>
						</td>

						<td style="border-bottom-width: 3px;">
							<?php if (isset($data['nasc'])) { ?>
								<?php echo $data['nasc']; ?>
							<?php } else { ?>
								<?php echo 'Default'; ?>
							<?php } ?>
						</td>
					</tr>
					<tr>
						<th colspan="2">CEP</th>
						<th>Número da residência</th>
					</tr>
					<tr>
						<td colspan="2" style="border-bottom-width: 3px;">
							<?php if (isset($data['cep'])) { ?>
								<?php echo $data['cep']; ?>
							<?php } else { ?>
								<?php echo 'Default'; ?>
							<?php } ?>
						</td>
						<td style="border-bottom-width: 3px;">
							<?php if (isset($data['num'])) { ?>
								<?php echo $data['num']; ?>
							<?php } else { ?>
								<?php echo 'Default'; ?>
							<?php } ?>
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
							<?php if (isset($data['email'])) { ?>
								<?php echo $data['email']; ?>
							<?php } else { ?>
								<?php echo 'Default'; ?>
							<?php } ?>
						</td>
						<td>
							<?php if (isset($data['fixo'])) { ?>
								<?php echo $data['fixo']; ?>
							<?php } else { ?>
								<?php echo 'Default'; ?>
							<?php } ?>
						</td>
						<td>
							<?php if (isset($data['cel'])) { ?>
								<?php echo $data['cel']; ?>
							<?php } else { ?>
								<?php echo 'Default'; ?>
							<?php } ?>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<?php
	if (!isset($data_product['imgperfil'])) {
		echo "<img src='".URL_BASE_IMGS."/profile_default/perfilbase.png' alt='Foto de perfil' id='fotoperfil' />";
	} else {
		$imglink = $data_product['imgperfil'];
		$path = URL_BASE_IMGS."/profile_user/".$imglink;

		if (file_exists($path)) {
			echo "<img src='".URL_BASE_IMGS."/profile_user/".$imglink."' id='fotoperfil' alt='fotoperfil' />";
		} else {
			echo "<img src='".URL_BASE_IMGS."/presente.jpg' alt='Foto de perfil' id='fotoperfil' />";
		}
	}
	?>
	<pre> <a href="<?php echo URL_BASE_LINK_VIEWS; ?>alter_photo.php" id="altft"> Alterar foto </a> <br/></pre>

</div>