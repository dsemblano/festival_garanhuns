<aside id="sidebar_direita">
	<div id="patrocinio">
		<img id="patrocinio" src="<?php echo get_template_directory_uri(); ?>/assets/banner_anuncie.jpg" alt="imagem anunncie aqui">
	</div>
	
	<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
	
<?php if(is_home()) : ?>
<div id="cloche_home">
	<article class="flexslider">
		<ul class="slides">
		<?php
			$args = array( 'post_type' => 'post', 'category_name' => 'cloche' );
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
<?php endif; ?>
	
	<div id="facebook">
		<div class="fb-like-box" data-href="https://www.facebook.com/gastroonline" data-width="350px" data-show-faces="true" data-stream="false" data-show-border="false" data-header="false"></div>
	</div>
	
</aside>