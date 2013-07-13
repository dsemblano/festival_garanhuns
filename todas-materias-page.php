<?php
/*
Template Name: Todas Materias
*/
?>

<?php get_header(); ?>

<div id="primary" class="content-area meio">
	<div id="todas-materias" class="site-content internas">
	<?php get_search_form(); ?>
	
	<h1 class="page-title"><?php the_title(); ?></h1>
	
		<?php
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			$args = array( 'post_type' => array('post', 'roteiro'), 'posts_per_page' => 10, 'paged' => $paged );
			$wp_query = new WP_Query($args);
			while ( have_posts() ) : the_post();
		?>
		
		<article>
			<a href="<?php the_permalink(); ?>">
					<figure class="img-busca">
							<?php if ( has_post_thumbnail() ) {
								the_post_thumbnail( 'category-pages', array( 'title' => ''.get_the_title().'' ));
							} ?>			
					</figure>
				<time datetime="<?php the_time('d/m/y G:i'); ?>"><?php the_time('d/m/y G:i'); ?></time>
				<br>
				<h3><?php the_title(); ?><?php //echo ($wp_query->request); ?></h3>
				
				
				<h4><?php 
						if ((is_category()) == 'cloche') {
							echo 'sim';
						}
						else {
							echo 'nao';
						}
					?>
				</h4>
				
				<div class="entry-content">
					<?php
					if (empty($post -> post_excerpt)) {
						$rapidas_resumo = get_the_excerpt();
						//echo ucfirst(strtolower(string_limit_words($rapidas_resumo, 10))) . ("<span class=leiamais>... Leia mais</span>");
					} else { echo get_the_excerpt();
					}
			?>
				</div>
			</a>
		</article>
		
<?php endwhile; ?>

<!-- then the pagination links -->
<?php wp_paginate(); ?>
		
	</div>
	<?php get_template_part('template/sidebar_direita'); ?><!-- #sidebar direita -->

</div>
<?php get_footer(); ?>
