<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see 	    http://docs.woothemes.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
get_header( 'shop' ); 
	?>
	<div class="page-title"><div class="page-title-inner"><h1 class="entry-title-main"><?php  the_title();?></h1>
		<?php wntr_breadcrumbs(); ?>
		</div>
	</div>
<div class="<?php echo esc_attr(wntr_page_layout()); ?>">

<?php if ($webi['wntr_sidebar_disable_single_page'] == '1'): 
	 do_action( 'woocommerce_sidebar' ); ?>
<!-- <div class="single-product-sidebar"> -->
<?php else: ?>
<div class="main-content-inner-full single-product-full">
<?php endif; ?>
	<?php
		/**
		 * woocommerce_before_main_content hook
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
	?>
			
	<?php while ( have_posts() ) : the_post(); ?>
		<?php wc_get_template_part( 'content', 'single-product' ); ?>
		<?php endwhile; // end of the loop. ?>
	<?php
		/**
		 * woocommerce_after_main_content hook
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 * @hooked woocommerce_output_related_products - 20
		 */
		do_action( 'woocommerce_after_main_content' );
	?>
</div>

<?php
add_action( 'wp_footer', function() {
?>
<script>
document.addEventListener('DOMContentLoaded', function() {
    if (typeof PhotoSwipe !== 'undefined') {
        document.addEventListener('pswpBeforeOpen', function(e) {
            if (e.detail && e.detail.options) {
                e.detail.options.arrowEl = true;
            }
        });
    }
});
</script>
<?php
});
?>

<?php get_footer( 'shop' ); ?>