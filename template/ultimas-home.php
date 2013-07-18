<?php //echo TCHPCSCarousel(); ?>
<?php //echo get_touchcarousel(1); ?>

<ul id="mycarousel" class="jcarousel-skin-tango">
	<?php
		$myposts = get_posts('numberposts=3');
		foreach($myposts as $post) :
	?>

	<li id="post-<?php the_ID(); ?>" class="ultimas_home_li">
		<a href="<?php the_permalink(); ?>">
			<?php if ( has_post_thumbnail() ) {
				the_post_thumbnail( 'category-pages', array( 'title' => ''.get_the_title().'' ));
			} ?>
			<h3><?php the_title(); ?></h3>
		</a>
	</li>
	<?php endforeach; ?>
		
</ul>