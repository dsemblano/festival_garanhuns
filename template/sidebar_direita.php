<aside id="sidebar_direita">
	<div id="patrocinio">
	</div>
	
	<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
	
<?php if(is_home()) : ?>
<div id="cloche_home">
	<article class="flexslider">
		<ul class="slides">
		<?php
		query_posts(array('category_name' => 'cloche', 'posts_per_page' => 10));
		if(have_posts()) : while(have_posts()) : the_post();
		?>
			<li>
				<a href="<?the_permalink(); ?>">
					<? the_post_thumbnail( 'slider2_cloche', array( 'title' => ''.get_the_title().'' )); // Imagem do Slider ?>
				</a>
				<h5 class="gallery-title titulo_home"><a href="<?the_permalink(); ?>" title="<? the_title(); ?>"><? echo the_title(); ?></a></h5>
				<div class="flex-caption">						
					<a href="<?php the_permalink(); ?>">
					</a>
				</div>
			</li>
			<?php endwhile;endif; wp_reset_query(); ?>
		</ul>
	</article>
	
	<h2 class="titulo_home">Cloche</h2>
	<h3 class="titulo_home_desc"><?php echo category_description( 5 ); ?></h3>
	
</div>
<?php endif; ?>
	
	<div id="facebook">
		<div class="fb-like-box" data-href="https://www.facebook.com/gastroonline" data-width="350px" data-show-faces="true" data-stream="false" data-show-border="false" data-header="false"></div>
	</div>
	
</aside>