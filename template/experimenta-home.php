<div id="experimenta_home" class="destaque">
	<article class="flexslider">
		<ul class="slides">
		<?php
		query_posts(array('category_name' => 'experimenta', 'posts_per_page' => 10));
		if(have_posts()) : while(have_posts()) : the_post();
		?>
			<li>
				<a href="<?the_permalink(); ?>">
					<? the_post_thumbnail( 'slider2', array( 'title' => ''.get_the_title().'' )); // Imagem do Slider ?>
				</a>
				<h2 class="titulo_home">Experimenta</h2>
				<h3 class="gallery-title titulo_home_desc"><a href="<?the_permalink(); ?>" title="<? the_title(); ?>"><? echo the_title(); ?></a></h5>

			</li>
			<?php endwhile;endif; wp_reset_query(); ?>
		</ul>
	</article>
	
</div>