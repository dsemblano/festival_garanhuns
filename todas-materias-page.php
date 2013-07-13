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
			$the_query = new WP_Query($args);
			while ( $the_query->have_posts() ) : $the_query->the_post();
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
				<h3><?php the_title(); the_category(); ?><?php //echo ($wp_query->request); ?></h3>
				
				
				<h4><?php //(is_single() ? echo 'sim' : echo 'nao'); ?>
					<?php if (($wp_query->post_name) == 'todas-materias') { echo 'sim'; } else { echo 'nao';} ?>
				</h4>
			</a>
		</article>
		
<?php endwhile; wp_reset_postdata(); ?>

<!-- then the pagination links -->
<?php wp_paginate(); ?>
		
	</div>
	<?php get_template_part('template/sidebar_direita'); ?><!-- #sidebar direita -->

</div>
<?php get_footer(); ?>
