<div id="experimenta_home" class="destaque">
	<article class="flexslider">
		<ul class="slides">
		<?php
			$args = array( 'post_type' => 'post', 'category_name' => 'experimenta' );
			$the_query = new WP_Query($args);
			while ( $the_query->have_posts() ) : $the_query->the_post();
		?>
			<li>
				<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail( 'slider2', array( 'title' => ''.get_the_title().'' )); // Imagem do Slider ?>
				</a>
				<h2 class="titulo_home"><?php the_category(); ?></h2>
				<h3 class="gallery-title titulo_home_desc"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo the_title(); ?></a></h5>

			</li>
			<?php endwhile; wp_reset_postdata(); ?>
		</ul>
	</article>
	
</div>