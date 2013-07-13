<?php
/**
 * The Template for displaying all single posts.
 *
 * @package garanhuns
 */

get_header(); ?>

	<div id="primary" class="content-area meio">
		<div id="content" class="site-content single-page" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php garanhuns_content_nav( 'nav-below' ); ?>

		<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	
	<?php get_template_part('template/sidebar_direita'); ?><!-- #sidebar direita -->
	
	</div><!-- #primary -->

<?php get_footer(); ?>