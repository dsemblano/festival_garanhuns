<?php
/*
Template Name: Todas Materias
*/
?>

<?php get_header(); ?>

<div id="primary" class="content-area meio">
	<div id="todas-materias" class="site-content">
	<h2><?php the_title(); ?></h2>
			<?php
				while(have_posts()) : the_post();
				$myposts = get_posts('numberposts=-1');
				foreach($myposts as $post) :
			?>
			<article id="post-<?php the_ID(); ?>">
				<a href="<?php the_permalink(); ?>">
						<figure class="img-busca">
								<?php if ( has_post_thumbnail() ) {
									the_post_thumbnail( 'category-pages', array( 'title' => ''.get_the_title().'' ));
								} ?>			
						</figure>
						<time datetime="<?php the_time('d/m/y G:i'); ?>">
							<?php the_time('d/m/y G:i'); ?>
							<h3><?php the_title(); ?></h3>
						</time>
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
		<?php endforeach; endwhile; ?>
		
		<?php if ($wp_query->max_num_pages > 5) : ?>
			<nav id="post-nav"><? wp_paginate(); ?></nav>
		<?php endif; ?>
		
	</div>
	<?php get_template_part('template/sidebar_direita'); ?><!-- #sidebar direita -->

</div>
<?php get_footer(); ?>
