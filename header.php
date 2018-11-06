<!doctype html>
<html <?php language_attributes(); ?> class="no-js">

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title>
		<?php wp_title(''); ?>
		<?php if(wp_title('', false)) { echo ' :'; } ?>
		<?php bloginfo('name'); ?>
	</title>

	<link href="//www.google-analytics.com" rel="dns-prefetch">
	<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
	<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php bloginfo('description'); ?>">

	<?php wp_head(); ?>

</head>

<body <?php body_class('noScroll'); ?>>

	<div id="loader" style="position:fixed; top:0; left:0; width:100%; height:100%; z-index:9999; background-color:#ECE9E7; display:flex; justify-content: center; align-items: center;">
		<p>Chargement...</p>
	</div>

	<!-- header -->
	<header class="header clear" role="banner">

		<div class="bg"></div>

		<!-- logo -->
		<div class="logo">
			<a href="<?php echo home_url(); ?>">
				<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
				<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" class="logo-img">
			</a>
		</div>
		<!-- /logo -->

		<!-- bt burger -->
		<div class="btBurger" id="btBurger">
			<span></span>
			<span></span>
			<span></span>
		</div>
		<!-- bt burger -->

		<div class="vue360">
			<a href="https://www.hdmedia.fr/visite-virtuelle/hd/cbpXfpiLh-manoir-des-lys.html" onclick="window.open(this.href); return false;">

				<img src="<?php echo get_template_directory_uri(); ?>/img/360-view.svg" alt="Vue 360 du Manoir des Lys" title="Visite 360 du Manoir des Lys" class="vue360-img">

			</a>
		</div>

		<div class="catalogue">
		<?php $catalogue = get_field('catalogue_pdf', 'option'); ?>
		<a href="<?php echo $catalogue['url']; ?>" onclick="window.open(this.href); return false;">

			<img src="<?php echo get_template_directory_uri(); ?>/img/catalogue-pdf.svg" alt="Catalogue du Manoir des Lys" title="Catalogue du Manoir des Lys">

		</a>
		</div>

	</header>
	<!-- /header -->

	<!-- nav -->
	<nav class="nav" role="navigation">
		<?php html5blank_nav(); ?>
		<div class="load "id="load"></div>
	</nav>
	<!-- /nav -->