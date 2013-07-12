<?php
/**
 * @package garanhuns
 */
?>

		
<article id="post-<?php the_ID(); ?>">
	<a href="<?php the_permalink(); ?>">
		<figure class="img-busca">
				<?php if ( has_post_thumbnail() ) {
					the_post_thumbnail( 'category-pages', array( 'title' => ''.get_the_title().'' ));
				} ?>			
		</figure>
		<time datetime="<?php the_time('d/m/y G:i'); ?>"><?php the_time('d/m/y G:i'); ?></time><br>
		<h3>			
			<?php the_title(); ?>
		</h3>
		
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
