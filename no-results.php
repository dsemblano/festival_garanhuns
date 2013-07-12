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
		
		<p><?php _e( 'Ou tente uma das categorias ou mat&eacute;rias mais recentes abaixo, ou talvez novamente a busca acima?', 'garanhuns' ); ?></p>
					
		<?php if ( garanhuns_categorized_blog() ) : // Lista categorias e termos - Only show the widget if site has multiple categories. ?>
		
			<ul class="widget widget_categories">
				<ol class="widgettitle"><?php _e( 'Categorias: ', 'garanhuns' ); ?>
			<?php
				// Lista categorias dos posts
				wp_list_categories( array(
					'orderby'    => 'count',
					'order'      => 'DESC',
					'title_li'   => '',
					'number'     => 5,
				) );
					
				$termsquery = get_terms( 'tipo' );						
				foreach ($termsquery as $terms) {							
					echo '<li>' . '<a href="' . get_term_link( $terms->slug, 'tipo' ) . '">' . $terms->name . '</a>' . '</li>';
				}							
			?>
				</ol>
			</ul>
		
		<?php endif; ?>

		<?php //the_widget( 'WP_Widget_Recent_Posts', 'title= ' ); ?>
		
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Nao Encontrado') ) : // Posts?><?php endif; ?>
		
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
