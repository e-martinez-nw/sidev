<?php get_header(); ?>
	<div id="slider-index">
		<?php putRevSlider("slider1","homepage") ?>
	</div><!--.slider-index -->

	<section id="forjando">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="titulo">
						<?php dynamic_sidebar( 'index-titulo' ); ?>
					</div><!-- .forjando -->
					<div class="clearfix"></div>
				</div><!-- col-sm-12 -->
				<div class="col-sm-6">
					<div class="automatizacion">
						<?php dynamic_sidebar( 'automatizacion' ); ?>
					</div><!-- .automatizacion -->
				</div><!-- col-sm-6 -->
				<div class="col-sm-6">
					<div class="intelligent-smart">
						<?php dynamic_sidebar( 'intelligent-smart' ); ?>
					</div><!-- .tecnologias -->
					<div class="tecnologias">
						<?php dynamic_sidebar( 'tecnologias' ); ?>
					</div><!-- .tecnologias -->
				</div><!--col-sm-6-->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- .forjando -->

	<section id="certificado">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<?php dynamic_sidebar( 'certificaciones'); ?>
				</div><!--col-sm-12-->
			</div><!--row-->
		</div><!--container-->
	</section><!--certificado-->

<?php get_footer(); ?>