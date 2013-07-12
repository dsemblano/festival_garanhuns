<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package garanhuns
 */

get_header(); ?>

	<div id="primary" class="content-area meio">
		<div id="content" class="site-content nao_encontrado" role="main">
		<?php get_search_form(); ?>
			<article id="post-0" class="post not-found">
				<header class="entry-header">
					<h1 class="entry-title"><?php _e( '404 - P&aacute;gina n&atilde;o encontrada', 'garanhuns' ); ?></h1>
				</header><!-- .entry-header -->

				<div class="entry-content">
					<p><?php _e( 'Tente uma das categorias ou mat&eacute;rias mais recentes abaixo, ou talvez a busca acima?', 'garanhuns' ); ?></p>
					
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

				</div><!-- .entry-content -->
			</article><!-- #post-0 .post .not-found -->

		</div><!-- #content -->
		<?php get_template_part('template/sidebar_direita'); ?><!-- #sidebar direita -->
	</div><!-- #primary -->

<?php get_footer(); ?>