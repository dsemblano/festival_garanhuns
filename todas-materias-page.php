<?php
/*
Template Name: Todas Materias
*/
?>

<?php get_header(); ?>

<h2><?php the_title(); ?></h2>
<div id="primary" class="content-area">
	<div id="content" class="site-content" role="main">
			<?php
				while(have_posts()) : the_post();
				$myposts = get_posts('numberposts=-1');
				foreach($myposts as $post) :
			?>
			<article id="post-<?php the_ID(); ?>" <?php post_class('category-page'); ?>>
				<section id="categoria-destaque-foto">
					<div class="img-busca">
						<a href="<?the_permalink();?>">
							<?php if ( has_post_thumbnail() ) {
								the_post_thumbnail( 'category-pages', array( 'title' => ''.get_the_title().'' ));
							} ?>			
						</a>
					</div>
				</section>
				<header>
					<?php the_time('d/m/y') ?> - <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>					
				</header>
				<div class="entry-content">
					<?php
					if (empty($post -> post_excerpt)) {
						$rapidas_resumo = get_the_excerpt();
						//echo ucfirst(strtolower(string_limit_words($rapidas_resumo, 10))) . ("<span class=leiamais>... Leia mais</span>");
					} else { echo get_the_excerpt();
					}
			?>
				</div>
			</article>
		<?php endforeach; endwhile; ?>
		
		<?php if ($wp_query->max_num_pages > 5) : ?>
			<nav id="post-nav"><? wp_paginate(); ?></nav>
		<?php endif; ?>
		
	</div>
</div>
		
<?php get_footer(); ?>
