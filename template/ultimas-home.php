<?php //echo TCHPCSCarousel(); ?>
<?php //echo get_touchcarousel(1); ?>

<ul id="ultimas_home">
		<?php
			// Custom Post Type
			$args = array(
			'post_type' => 'roteiro',
			'posts_per_page' => 3
			);
			query_posts ($args);
			
			if(have_posts()) : while(have_posts()) : the_post();
		?>
		
		<li id="post-<?php the_ID(); ?>" class="ultimas_roteiro">
			<a href="<?php the_permalink(); ?>">
				<?php if ( has_post_thumbnail() ) {
					the_post_thumbnail( 'category-pages', array( 'title' => ''.get_the_title().'' ));
				} ?>
				
				<?php $short_title = get_the_title("", "", false);
					$short_title_2 = substr($short_title, 0, 35);
					echo $short_title_2;
					if ($short_title_2 != $short_title) {
						echo "...";
					}
				?>
				
			</a>
		</li>
		
		<?php endwhile;endif; wp_reset_query(); ?>
	
		<?php
			// Categorias
			$myposts = get_posts('numberposts=3');
			foreach($myposts as $post) :
		?>

		<li id="post-<?php the_ID(); ?>" class="ultimas_categorias">
			<a href="<?php the_permalink(); ?>">
				<?php if ( has_post_thumbnail() ) {
					the_post_thumbnail( 'category-pages', array( 'title' => ''.get_the_title().'' ));
				} ?>
				
				<?php $short_title = get_the_title("", "", false);
					$short_title_2 = substr($short_title, 0, 35);
					echo $short_title_2;
					if ($short_title_2 != $short_title) {
						echo "...";
					}
				?>
				
			</a>
		</li>
		
		<?php endforeach; ?>		
</ul>