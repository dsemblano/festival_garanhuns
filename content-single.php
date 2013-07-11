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
