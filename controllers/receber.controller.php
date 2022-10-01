<?php 
if (!isset($_SESSION['user_logged']) && empty($_SESSION['user_logged'])) {
    header("Location: index.php");
    exit;
}
?>  

<?php 
if (isset($_GET['p']) && !empty($_GET['p'])) {
    $product = new Product($pdo);
    $id_product = strval($_GET['p']);
    
    $p = $product->getProduct($id_product);
?>

<div id="lipsum">
	<!--receber o id de usuário para saber qual foto será alterada caso o usuário queira
	salvar o caminho da foto de perfil do usuário em $imglink
	alterar a foto de perfil com o mouse sendo arrastado por cima da padrão, revelando o botão assim https://www.w3schools.com/howto/howto_css_image_overlay.asp
	-->

	<div id="fotop">

		<div 
			id="dados" 
			style="position: absolute; left:25%;right: 25%;align-items: center; display: flex;justify-content: center;">

			<table BORDERCOLOR="black" rules="all" border="3" cellpadding="3" style="background: rgb(166,183,227);background: linear-gradient(90deg, rgba(166,183,227,1) 0%, rgba(167,205,214,1) 100%);text-align: center;">
				<tbody>
					<tr>
						<th colspan="2">Nome do doador</th>
						<th>Disponibilidade</th>
					</tr>
					<tr>
						<td colspan="2" style="border-bottom-width: 3px;">
							<?php if (isset($p['doador'])) { 
								echo $p['doador']; 
							} else { 
								echo 'Default'; 
							} ?>
						</td>
						<td style="border-bottom-width: 3px;">
							<?php if (isset($p['disponivel'])) { 
								echo $p['disponivel']; 
							} else { 
								echo 'Disponivel'; 
							} ?>
						</td>
					</tr>

					<tr>
						<th colspan="3">
							Descrição
						</th>
					</tr>
					<tr>
						<td colspan="3" style="border-bottom-width: 3px;">
							<?php if (isset($p['descricao'])) { 
								echo $p['descricao']; 
							} else { 
								echo 'Default'; 
							} ?>
						</td>
					</tr>

					<tr>
						<th colspan="3">
							Local da entrega
						</th>
					</tr>
					<tr>
						<td colspan="3" style="border-bottom-width: 3px;">
							<?php if (isset($p['ender_entrega'])) { 
								echo $p['ender_entrega']; 
							} else { 
								echo 'Local da entrega'; 
							} ?>
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
							<?php if (isset($p['email'])) { 
								echo $p['email'];
							} else { 
									echo 'Default';
							} ?>
						</td>
						<td>
							<?php if (isset($p['fixo'])) { 
								echo $p['fixo'];
							} else { 
									echo 'Default';
							} ?>
						</td>
						<td>
							<?php if (isset($p['cel'])) { 
								echo $p['cel'];
							} else { 
									echo 'Default';
							} ?>
						</td>
					</tr>

				</tbody>

			</table>

		</div>

	</div>

	<?php
	if (!isset($p['imgperfil'])) {
		echo "<img src='".URL_BASE_IMGS."/presente.jpg' alt='Foto de perfil' id='fotoperfil' />";
	} else {
		$imglink = $p['imgperfil'];
		$path = URL_BASE_IMGS."/profile_user/".$imglink;

		if (file_exists($path)) {
			echo "<img src='".URL_BASE_IMGS."/profile_user/".$imglink."' id='fotoperfil' alt='fotoperfil' />";
		} else {
			echo "<img src='".URL_BASE_IMGS."/presente.jpg' alt='Foto de perfil' id='fotoperfil' />";
		}
	}
	?>

	<pre> 
	<a href="#" id="altpro">Adicionar</a>
	</pre>
</div>

<?php } else {
    header("Location: index.php");
    exit;
} 
?>