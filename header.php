<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Quatro_Rodas
 * @since Quatro Rodas
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<script>(function(){document.documentElement.className='js'})();</script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="site-wrapper">
	<div class="content-wrapper">

<section>
	<div class="row banner">
	<div class="col-md-12">
		<center>

						<a href="#"><img alt="Marca Quatro Rodas" src="<?php bloginfo('template_url'); ?>/img/top-banner.jpg" ></a>

		</center>
	</div>
	</div>
</section>
		
<header>
	<div class="row">
		<nav class="navbar navbar-default menu_principal">
			<div class="navbar-header">
				<button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<h1><a href="#"><img alt="Marca Quatro Rodas" src="<?php bloginfo('template_url'); ?>/img/marca.png"></a></h1>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav">

					<li class="dropdown">
						<a aria-expanded="false" aria-haspopup="true" role="button" data-toggle="dropdown" class="dropdown-toggle" href="#">Carros<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li>
								<a href="#">Nacionais</a>
							</li>
							<li>
								<a href="#">Importados</a>
							</li>
						</ul>
					</li>
					<li class="dropdown">
						<a aria-expanded="false" aria-haspopup="true" role="button" data-toggle="dropdown" class="dropdown-toggle" href="#">Testes<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li>
								<a href="#">Comparativos</a>
							</li>
							<li>
								<a href="#">Impressões</a>
							</li>
							<li>
								<a href="#">Longa duração</a>
							</li>
						</ul>
					</li>

					<li class="dropdown">
						<a aria-expanded="false" aria-haspopup="true" role="button" data-toggle="dropdown" class="dropdown-toggle" href="#">Notícias<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li>
								<a href="#">Clássicos</a>
							</li>
							<li>
								<a href="#">Novidades</a>
							</li>
						</ul>
					</li>
					<li class="dropdown">
						<a aria-expanded="false" aria-haspopup="true" role="button" data-toggle="dropdown" class="dropdown-toggle" href="#">Auto-Serviço<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li>
								<a href="#">Teste</a>
							</li>
							<li>
								<a href="#">Teste</a>
							</li>
						</ul>
					</li>
					
					<li class="dropdown">
						<a aria-expanded="false" aria-haspopup="true" role="button" data-toggle="dropdown" class="dropdown-toggle" href="#">Guia de Compras<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li>
								<a href="#">Teste</a>
							</li>
							<li>
								<a href="#">Teste</a>
							</li>
						</ul>
					</li>
					
					<li class="dropdown">
						<a aria-expanded="false" aria-haspopup="true" role="button" data-toggle="dropdown" class="dropdown-toggle" href="#">Tabela FIPE<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li>
								<a href="#">Teste</a>
							</li>
							<li>
								<a href="#">Teste</a>
							</li>
						</ul>
					</li>
					
					<li class="search-box">
						<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
							<?php if (strlen(get_search_query()) > 0) {
							?>
							<input type="text" onfocus="if (this.value == '<?php the_search_query(); ?>') {this.value = '';}" onblur="if (this.value == '') {this.value = '<?php the_search_query(); ?>';}" value="<?php the_search_query(); ?>" name="s" id="s" />
							<?php } else { ?>
							<input type="text" onfocus="if (this.value == 'Pesquisar') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Pesquisar';}" value="Pesquisar" name="s" id="s" />
							<i class="glyphicon glyphicon-search"></i>
							<?php } ?>
						</form>
					</li>

				</ul>
			</div><!--/.nav-collapse -->
		</nav>
	</div>
	<div class="row">
		<nav class="menu_mais-acessados">
			<ul>
				<li class="menu-titulo">
					+ acessados
				</li>
				<li>
					<a href="#about">Salão do Automóvel</a>
				</li>
				<li>
					<a href="#about">Renegade</a>
				</li>
				<li>
					<a href="#about">Novo sandero</a>
				</li>
				<li>
					<a href="#about">Nono FOX</a>
				</li>
				<li>
					<a href="#about">Nono KA</a>
				</li>
				<li>
					<a href="#about">HB20</a>
				</li>
				<li>
					<a href="#about">Duster</a>
				</li>
				<li>
					<a href="#about">Golf</a>
				</li>
				<li>
					<a href="#about">Corolla</a>
				</li>
				<li>
					<a href="#about">Civic</a>
				</li>
				<li>
					<a href="#about">IA-ZI</a>
				</li>
			</ul>
		</nav>
	</div>
</header>
