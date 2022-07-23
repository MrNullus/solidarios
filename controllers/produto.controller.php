<?php  
// @ iniciar as dependencias @
$user = new User($pdo);
$product = new Product($pdo);

// @ verificar se existe algum param na URL @
if (isset($_GET['id']) && !empty($_GET['id'])) {
	#= pegar dados do usuario =#
	$user_logged = json_decode($_SESSION['user_logged']);
	$id_usuario = addslashes($user_logged->id->id_usuario);
	$nickname = addslashes($user_logged->username);
	$data_user = $user->getUser($id_usuario);

	#= pegar dados vindo da requisição =#
	$id_product = addslashes($_GET['id']);
	$name_product = addslashes($_GET['name']);

	#= verificação de produto =#
	if ($product->verify_product($name_product, $id_usuario)) {
		#= pegar dados do produto referente ao id passado pelo param da URL 'id' =#
		$data_product = $product->getProduct($id_product);
	} else {
		$data_product = array();
	}
} else {
	header("Location: ".URL_BASE."index.php");
	exit;
}
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
							<?php if (isset($data_product['doador'])) { 
								echo $data_product['doador']; 
							} else { 
								echo 'Default'; 
							} ?>
						</td>
						<td style="border-bottom-width: 3px;">
							<?php if (isset($data_product['disponivel'])) { 
								echo $data_product['disponivel']; 
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
							<?php if (isset($data_product['descricao'])) { 
								echo $data_product['descricao']; 
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
							<?php if (isset($data_product['ender_entrega'])) { 
								echo $data_product['ender_entrega']; 
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
							<?php if (isset($data_user['email'])) { 
								echo $data_user['email'];
							} else { 
									echo 'Default';
							} ?>
						</td>
						<td>
							<?php if (isset($data_user['fixo'])) { 
								echo $data_user['fixo'];
							} else { 
									echo 'Default';
							} ?>
						</td>
						<td>
							<?php if (isset($data_user['cel'])) { 
								echo $data_user['cel'];
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
	if (!isset($data_product['imgperfil'])) {
		echo "<img src='".URL_BASE_IMGS."/presente.jpg' alt='Foto de perfil' id='fotoperfil' />";
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

	<pre> 
	<?php echo '
	<a 
		href="'.URL_BASE_LINK_VIEWS.'".alter_image_product.php?id="'.$data_product['id'].'&'.$data_product['nome'].'" id="altpro"> Alterar Imagem</a> <br/>
	';?>
	</pre>
</div>