<?php
/**
 * @package garanhuns
 */
?>

		
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>	
		<figure class="img-busca">
			<a href="<?the_permalink();?>">
				<?php if ( has_post_thumbnail() ) {
					the_post_thumbnail( 'category-pages', array( 'title' => ''.get_the_title().'' ));
				} ?>			
			</a>
		</figure>
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<div class="entry-content">
		<?php
		if (empty($post -> post_excerpt)) {
			$rapidas_resumo = get_the_excerpt();
			echo ucfirst(strtolower(string_limit_words($rapidas_resumo, 10))) . ("<span class=leiamais>... Leia mais</span>");
		} else { echo get_the_excerpt();
		}
		?>
	</div>
</article>
