<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package garanhuns
 */

get_header(); ?>

	<section id="primary" class="content-area meio">
		<div id="content" class="site-content busca-pagina" role="main">

		<?php if ( have_posts() ) : ?>
			
			<?php get_search_form(); ?>
			<header class="page-header">			
				<h1 class="page-title"><?php printf( __( 'Resultados da busca por: %s', 'garanhuns' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'search' ); ?>

			<?php endwhile; ?>

			<?php garanhuns_content_nav( 'nav-below' ); ?>

		<?php else : ?>

			<?php get_template_part( 'no-results', 'search' ); ?>

		<?php endif; ?>

		</div><!-- #content -->
		
		<?php get_template_part('template/sidebar_direita'); ?><!-- #sidebar direita -->
	</section><!-- #primary -->

<?php get_footer(); ?>