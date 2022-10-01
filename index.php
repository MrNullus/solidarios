<?php require_once('minerva.lock.php'); ?>

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
		
		<title>Solidários</title>

		<!--+++++++++++ link for css files +++++++++++-->
		<link 
			rel="stylesheet" 
			href=<?php echo URL_BASE_CSS."index.css"; ?> 
		/>
		<link 
			rel="stylesheet" 
			href="<?php echo URL_BASE_CSS."carrousel.css"; ?>"  
		/>
		<!--+++++++++++ link for OWL css files +++++++++++-->
		<link 
			rel="stylesheet" 
			href="<?php echo URL_BASE_CSS."owl/owl.carousel.min.css"; ?>"
		/>
		<link 
			rel="stylesheet" 
			href="<?php echo URL_BASE_CSS."owl/owl.theme.default.min.css"; ?>"
		/>
	</head>

	<body>
		<!--+++++++++++ header +++++++++++-->
		<?php 
			require(URL_BASE_VIEWS.'header.php'); 
		?>
		<!--+++++++++++ /header +++++++++++-->

		<!--+++++++++++ page +++++++++++-->
		<main id="corpo" class="page">

			<!--+++++++++++ hero +++++++++++-->
			<section id="bemvindo" class="hero-container">
				<article class="hero__content">
					<h2 class="hero__title">
						Seja bem vindo
					</h2>
					<p>
						Nosso Site foi desenvolvido para realização de atividades solidárias relacionadas ao Projeto Trote solidário, realizado pela Etec de Francisco morato
					</p>
					<p>
						Ampliando Nossos horizontes resolvemos intermediar doações não apenas recebendo na escola, assim unindo quem precisa e quem irá receber através de nosso site
					</p>
				</article>
			</section>
			<!--+++++++++++ /hero +++++++++++-->
			<hr style="border-color: #A7CDD6;" />

			<!--+++++++++++ section some compromises +++++++++++-->			
			<section class="some-compromises">
				<h2 class="some-compromises__title">
					Alguns de nossos compromissos
				</h2>

				<article class="some-compromises__content">
					<h3 class="some-compromises__subtitle">
						Ampliar o horizonte de doações
					</h3>
					<p>
						Ampliando nossos horizontes resolvemos intermediar doações não apenas recebendo na escola, assim unindo quem precisa e quem irá receber através de nosso site
					</p>
				</article>

				<article class="some-compromises__content">
					<h3 class="some-compromises__subtitle">
						Ampliar o horizonte de doações
					</h3>
					<p>
						Ampliando nossos horizontes resolvemos intermediar doações não apenas recebendo na escola, assim unindo quem precisa e quem irá receber através de nosso site
					</p>
				</article>

				<article class="some-compromises__content">
					<h3 class="some-compromises__subtitle">
						Ampliar o horizonte de doações
					</h3>
					<p>
						Ampliando nossos horizontes resolvemos intermediar doações não apenas recebendo na escola, assim unindo quem precisa e quem irá receber através de nosso site
					</p>
				</article>
			</section>
			<!--+++++++++++ /section some compromises +++++++++++-->			

			<!--+++++++++++ section about +++++++++++-->
			<section id="about" class="about">
				<article class="about__content">
					<h2 class="about__title">
						Sobre nós
					</h2>

					<p>
						Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis optio fugit ipsum suscipit laudantium doloremque iusto aperiam laborum pariatur minima voluptate ea officiis, dolor qui veritatis officia.
					</p>
					<p>
						Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis optio fugit ipsum suscipit laudantium doloremque iusto aperiam laborum pariatur minima voluptate ea officiis, dolor qui veritatis officia.
					</p>

					<button class="button about__button">
						Saiba mais
					</button>
				</article>

				<!--+++++++++++ carrousel +++++++++++-->
				<article>
					<center>
						<?php
							require(URL_BASE_VIEWS.'carrousel.php');
						?>
					</center>
				</article>
				<!--+++++++++++ /carrousel +++++++++++-->
				<hr style="border-color: #A7CDD6;" />
			</section>
			<!--+++++++++++ /section about +++++++++++-->
		</main>
		<!--+++++++++++ /page +++++++++++-->

		<!--+++++++++++ footer +++++++++++-->
		<?php
			require(URL_BASE_VIEWS.'footer.php');
		?>
		<!--+++++++++++ /footer +++++++++++-->

		<!--+++++++++++ link for lib JQUERY +++++++++++-->
		<script 
			src="<?php echo URL_BASE_LIBS.'jquery/jquery.min.js'; ?>">
		</script>
		<!--+++++++++++ link for lib OWL +++++++++++-->
    	<script 
			src="<?php echo URL_BASE_LIBS.'owl/owl.carousel.min.js'; ?>">
		</script>
		<!--+++++++++++ link for js files +++++++++++-->
		<script 
			src="<?php echo URL_BASE_JS.'carrousel.js'; ?>">
		</script>
		

	</body>

</html>