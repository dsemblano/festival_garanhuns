<?php
/**
 * The template for displaying search forms in garanhuns
 *
 * @package garanhuns
 */
?>

<span class="imagem_busca">
	<img id="cachecol_busca_frente" src="<?php echo get_template_directory_uri(); ?>/assets/cachecolfrente.png" alt="imagem cachecol">
	<img id="cachecol_busca_tras" src="<?php echo get_template_directory_uri(); ?>/assets/cachecoltras2.png" alt="imagem cachecol">
</span>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php _ex( 'Search for:', 'label', 'garanhuns' ); ?></span>
		<input type="search" class="search-field" placeholder="Pesquise no site" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="<?php _ex( 'Search for:', 'label', 'garanhuns' ); ?>" />
	</label>
	<input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'OK', 'submit button', 'garanhuns' ); ?>" />
</form>
