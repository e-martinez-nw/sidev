<?php get_header(); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php
			$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'header-thumb' );
			$url = $thumb['0'];
		?>
	
			<article>
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							
							<header>
								<h1><?php the_title(); ?></h1>
							</header>
						</div><!-- col-sm-12 -->
					</div><!-- row -->
				</div><!-- container -->
					
				<div class="header-thumb" style="background-image:url(<?=$url?>); height:240px; background-position:center; background-size:cover;"></div>
					
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<?php the_content(); ?>
						</div><!--col-sm-12-->
					</div><!--row-->
				</div><!--container-->
			</article>

		<?php endwhile; else : ?>
	<?php endif; ?>

<?php get_footer(); ?>