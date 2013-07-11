<div id="roteiro_home" class="destaque">
	<article class="flexslider">
		<ul class="slides">
		<?php
			$args = array(
			'post_type' => 'roteiro',
			'posts_per_page' => 10	
			);
			query_posts ($args);
			
			if(have_posts()) : while(have_posts()) : the_post();
		?>
			<li>
				<a href="<?the_permalink(); ?>">
					<? the_post_thumbnail( 'slider2', array( 'title' => ''.get_the_title().'' )); // Imagem do Slider ?>
				</a>
				<h2 class="titulo_home">Roteiro</h2>
				<h3 class="gallery-title titulo_home_desc"><a href="<?the_permalink(); ?>" title="<? the_title(); ?>"><? echo the_title(); ?></a></h5>

			</li>
			<?php endwhile;endif; wp_reset_query(); ?>
		</ul>
	</article>
	
</div>