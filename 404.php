<?php get_header(); ?>

<div id="error" class="main-content">
	<div class="container">
		<div class="row">
			<div class="col-sm-8">
				<h1><span>Error:</span> 404</h1>

				<h3>La página que buscas no existe.</h3>
				<p>Utiliza el navegador para encontrar contenido o intenta con nuestro buscador:</p>

				<div class="search-form">
					<?php get_search_form(); ?>
				</div><!--,search-form-->
			</div><!--col-sm-8-->
		</div><!--row-->
	</div><!--.container-->
</div><!-- /#main-content -->

<?php get_footer(); ?>
