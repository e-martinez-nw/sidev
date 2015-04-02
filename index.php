<?php get_header(); ?>
	<section id="forjando">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="titulo">
						<?php dynamic_sidebar( 'forjando-titulo' ); ?>
					</div><!-- .forjando -->
				</div><!-- col-sm-12 -->
				<div class="col-sm-6">
					<div class="automatizacion">
						<?php dynamic_sidebar( 'automatizacion' ); ?>
					</div><!-- .automatizacion -->
					<div class="tecnologias">
						<?php dynamic_sidebar( 'tecnologias' ); ?>
					</div><!-- .tecnologias -->
				</div><!-- col-sm-6 -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- .forjando -->

<?php get_footer(); ?>