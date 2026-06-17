<?php 
// Add woocommerce support theme
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
// Disables woocommerce style
add_filter( 'woocommerce_enqueue_styles', '__return_false' );
// Ensure cart contents update when products are added to the cart via AJAX (place the following in functions.php)
add_filter('woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment'); 
function woocommerce_header_add_to_cart_fragment( $fragments ) {
	global $woocommerce;	
	ob_start();	
	?>
<a class="cart-contents" href="<?php echo esc_url(wc_get_cart_url()); ?>" title="<?php esc_attr_e('View your shopping cart', 'beaution4'); ?>">
	<span class="quanitity first_qty"><?php echo sprintf(_n('%d', '%d', $woocommerce->cart->cart_contents_count, 'beaution4'), $woocommerce->cart->cart_contents_count);?> </span>
	<span class="cart-subt"><?php echo get_woocommerce_currency_symbol(); ?><?php echo $woocommerce->cart->get_subtotal() ?>.00</span>
</a>
<?php	
	$fragments['a.cart-contents'] = ob_get_clean();	
	return $fragments;	
}
// Change the breadcrumb delimeter from '/' to '>'
add_filter( 'woocommerce_breadcrumb_defaults', 'wntr_change_breadcrumb_delimiter' );
function wntr_change_breadcrumb_delimiter( $defaults ) {
$defaults['delimiter'] = ' / ';
$defaults['before'] = '<span>';
$defaults['after'] = '</span>';
return $defaults;
}
?>
<?php
function wntr_wc_loop_shop_per_page(){
	global $webi;
	$layout = !empty($webi['wntr_no_product_per_page']) ? $webi['wntr_no_product_per_page'] : 9;
	return $layout;
}
add_action( 'loop_shop_per_page', 'wntr_wc_loop_shop_per_page');
// Change number or products per row 

if (!function_exists('wntr_loop_columns')) {
	function wntr_loop_columns() {
		global $webi;		
		$layout_col = !empty($webi['wntr_product_per_row_shop']) ? $webi['wntr_product_per_row_shop'] : 3;
		return $layout_col;
	}
}
add_filter('loop_shop_columns', 'wntr_loop_columns');

?>