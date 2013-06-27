<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package garanhuns
 */

get_header(); ?>

	<div id="primary" class="content-area meio">
		<div id="content" class="site-content" role="main">
		
			<?php 
			$args = array( 'post_type' => 'comida', 'posts_per_page' => 10 );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
				the_title();
				echo '<div class="entry-content">';
				the_content();
				echo '</div>';
			endwhile;
			?>
			
		</div><!-- #content -->	
		<?php get_template_part('sidebar'); ?><!-- #sidebar direita -->
		
	</div><!-- #primary -->	

<?php get_footer(); ?>