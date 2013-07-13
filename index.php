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
		
		<?php get_search_form(); ?>
			
			<?php get_template_part('template/roteiro', 'home'); ?>
			<?php get_template_part('template/experimenta', 'home'); ?>			
			<?php get_template_part('template/ultimas', 'home'); ?>
			
		</div><!-- #content -->
		
		<?php get_template_part('template/sidebar_direita'); ?><!-- #sidebar direita -->
		
	</div><!-- #primary -->

<?php get_footer(); ?>