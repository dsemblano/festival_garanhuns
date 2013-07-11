<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package garanhuns
 */
?>

<?php get_search_form(); ?>
<article id="post-0" class="post no-results not-found">	
	<header class="entry-header">		
		<h1 class="entry-title"><?php _e( 'Nenhum Resultado Encontrado', 'garanhuns' ); ?></h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'garanhuns' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php elseif ( is_search() ) : ?>
			
			<p><?php _e( 'Por favor, tente novamente usando outros termos.', 'garanhuns' ); ?></p>			

		<?php else : ?>

			<p><?php _e( 'N&atilde;o conseguimos encontrar o que voc&ecirc; estava procurando. Usar a busca pode ajudar.', 'garanhuns' ); ?></p>

		<?php endif; ?>
	</div><!-- .entry-content -->
</article><!-- #post-0 .post .no-results .not-found -->
