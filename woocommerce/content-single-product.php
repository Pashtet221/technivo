<?php
defined( 'ABSPATH' ) || exit;

global $product;
?>

<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>

	<?php
	// Custom product gallery. Do not use the WooCommerce gallery hook here: some plugins
	// replace that hook/markup, so the gallery is rendered directly from theme code.
	if ( function_exists( 'technivo_product_gallery_shortcode' ) ) {
		echo technivo_product_gallery_shortcode(); // phpcs:disable WordPress.XSS.EscapeOutput.OutputNotEscaped
	}
	do_action( 'woocommerce_before_single_product' );

	// ÃÀËÅÐÅß + SALE
	do_action( 'woocommerce_before_single_product_summary' );
	?>

	<div class="summary entry-summary">
		<?php
		do_action( 'woocommerce_single_product_summary' );
		?>
	</div>

	<?php
	do_action( 'woocommerce_after_single_product_summary' );
	?>

</div>