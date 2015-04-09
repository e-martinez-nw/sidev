<!Doctype html>
<!--[if lt IE 7]><html lang="es-mx" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html lang="es-mx" class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html lang="es-mx" class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html lang="es-mx" class="no-js"><!--<![endif]-->

<html>
<head>
	
	<meta charset="UTF-8">
	
	<meta name="author" content="The NuevaWeb Team">
	<title><?php bloginfo('name'); ?> | <?php is_home() ? bloginfo('description') : wp_title(''); ?></title>

	<?php //This is my custom stylesheet ?>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/style.css">
	<?php // icons & favicons ?>
	<link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/img/assets/apple-icon-touch.png">
	<link rel="icon" href="<?php bloginfo('template_url'); ?>/img/assets/favicon.png">
	<!--[if IE]>
		<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/img/assets/favicon.ico">
	<![endif]-->
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="<?php bloginfo('template_url'); ?>/img/assets/win8-tile-icon.png">

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); // wordpress admin-bar functions ?>

	<?php // Your Google Analytics goes here. ?>


</head>
<body>
	<header id="main-header">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<a href="<?php bloginfo('url'); ?>" class="logo">
						<img src="<?php bloginfo('template_url'); ?>/img/index/sidev.png" />
					</a>
					<div class="navbar-header">
				    	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
				      		<span class="sr-only">Toggle navigation</span>
				        	<span class="icon-bar"></span>
				        	<span class="icon-bar"></span>
				        	<span class="icon-bar"></span>
				    	</button>
						<a class="navbar-brand" href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>">
				      		<h1 class="none"><?php bloginfo('name'); ?></h1>
						</a>
			    	</div>
					<div class="dropdown_bg">
						<?php nw_main_nav(); ?>
					</div>
				</div><!-- col-sm-10 -->
			</div><!--row-->
		</div><!--container-->
	</header><!-- /#main-header -->
