<?php get_header(); ?>
<div id="category">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">

				<?php if (have_posts()) : ?> 
					<?php while (have_posts()) : the_post(); ?>
						<div class="col-sm-4">
							<article>
								<header>
									<?php if (has_post_thumbnail() ) {the_post_thumbnail();}; ?>
									<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
								</header>

								<section>
										<?php the_excerpt( '<span class="read-more">' . __( 'Read more &raquo;', 'NuevaWeb' ) . '</span>' ); ?>
								</section>

								<footer>
									<?php the_category('&bull;'); ?>
								</footer>
							</article>
						</div><!--.col-sm-4-->
					<?php endwhile; ?>

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

				<?php else : ?>

					<?php // A 404 answer goes here ?>

				<?php endif; ?>
			</div><!--.col-sm-12-->
		</div><!--.row-->
	</div><!--.container-->
</div><!--.category-->

<?php get_footer(); ?>
