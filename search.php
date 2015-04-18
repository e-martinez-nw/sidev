<?php get_header(); ?>
	<div id="search">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h1><span>Resultados de búsqueda Para:</span> <?php echo esc_attr(get_search_query()); ?></h1>
				</div><!--.col-sm-12-->
		<?php if (have_posts()) : ?> 
			<?php while (have_posts()) : the_post(); ?>
				<div class="col-sm-12">
					<article>
						<header>
							<h3>
								<a href="<?php the_permalink(); ?>">
									<div class="col-sm-3">
										<?php if (has_post_thumbnail() ) {
											the_post_thumbnail();
										}
										else {
											echo '<img src="' . get_bloginfo('template_url') . '/img/assets/no-thumb.jpg" />';
										} 
										?>
									</div><!--col-sm-3-->
									<div class="col-sm-9">
										<?php the_title(); ?>
									</div><!--.col-sm-9-->
								</a>
							</h3>
						</header>

						<section>
							<div class="col-sm-9">
								<?php the_excerpt( '<span class="read-more">' . __( 'Read more &raquo;', 'NuevaWeb' ) . '</span>' ); ?>
							</div><!--.col.sm.9-->
						</section>
					</article>
				</div><!--.col-sm-12-->
				<div class="clearfix"></div>
			<?php endwhile; ?>

			<div class="col-sm-12">
			<?php if (function_exists('nw_paginate_links')) { ?>
					<?php nw_paginate_links(); ?>
			<?php } else { ?>
					<nav class="wp-prev-next">
							<ul class="clearfix">
								<li class="prev-link"><?php next_posts_link( __( '&laquo; Older Entries', 'NuevaWeb' )) ?></li>
								<li class="next-link"><?php previous_posts_link( __( 'Newer Entries &raquo;', 'NuevaWeb' )) ?></li>
							</ul>
					</nav>
			<?php } ?>
			</div><!--col-sm-12-->

		<?php else : ?>
			<div class="col-sm-8 no-result">
				<h3>Lo sentimos, el termino buscado no se encuentra en este sitio, intenta con otra palabra.</h3>
					<?php get_search_form(); ?>
			</div>
		<?php endif; ?>
			</div><!--.row-->
		</div><!--.container-->
	</div><!--#search-->
<?php get_footer(); ?>
