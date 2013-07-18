<?php
/**
 * @package garanhuns
 */
?>

<?php get_search_form(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>	
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<div class="entry-meta">
			<?php garanhuns_posted_on(); ?>
		</div><!-- .entry-meta -->
		<div class="fb-like" data-href=<?php the_permalink()?> data-send="true" data-layout="button_count" data-width="450" data-show-faces="false"></div>
	
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php $content = get_the_content(); ?>
		<?php //print_r ($content); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'garanhuns' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
