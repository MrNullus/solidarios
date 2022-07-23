<header class="page-header">
	<div id="logo" class="logo">
		<a href="<?echo URL_BASE; ?>index.php">
			<img 
				src="<?php echo URL_BASE_IMGS; ?>logo/logo.gif"
				height="150px" alt="Solidários" id="logoimg" 
			/>
		</a>
		<br />
	</div>  

	<navbar id="barra" class="navbar">
		<ul class="nav-links">
			<li class="nav-link">
				<a href="<?php echo URL_BASE; ?>index.php">Home</a>
			</li>

			<?php 
			if (empty($_SESSION['user_logged'])) { 
				$arr_links = array(
					"cadastro" => "cadastro.php",
					"login" => "login.php"
				);

				display_links($arr_links);
			} else { 
				$arr_links = array(
					// "produtos" => "produtos.php",
					"compromissos" => "compromissos.php",
					"perfil" => "perfil.php",
					"sair" => "sair.php"
				);

				display_links($arr_links);
			} 
			?>
		</ul>

	</navbar>
</header>