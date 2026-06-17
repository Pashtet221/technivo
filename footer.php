<?php
/**
 * The template for displaying the footer
 * Contains footer content and the closing of the #main and #page div elements.
 * @package WordPress
 * @subpackage Webibazaar
 * @since Webibazaar 1.0
 */
global $webi;
?>
</div><!-- .main-content-inner -->
</div><!-- .main_inner -->
</div><!-- #main -->
<footer id="colophon" class="site-footer">
<div class="footer-top">
		<div class="theme-container">
			<?php if ( is_active_sidebar( 'footer-top-widget-area' ) ) : ?>
			<?php dynamic_sidebar( 'footer-top-widget-area' ); ?>
			<?php endif; ?>
		</div>
	</div>
	<div class="footer-middle">
		<div class="theme-container">
			<?php get_sidebar('footer'); ?>	
			<?php if ( has_nav_menu('footer-menu') ) { ?>
		</div>
	</div>
	<div class="footer-lc">
		<div class="theme-container">
			<?php if ( is_active_sidebar( 'logo-footer-widget-area' ) ) : ?>
			<?php dynamic_sidebar( 'logo-footer-widget-area' ); ?>
			<?php endif; ?>
		</div>
			<div class="footer-menu-links">
				<div class="theme-container">
				<?php
					echo wp_nav_menu(
						array(
							'menu' => esc_html__('WT Footer Menu Links','technivo'),
							'depth'=> 1,
							'echo' => false,
							'menu_class'      => 'footer-menu',
							'container'       => '',
							'container_class' => '',
							'theme_location' => 'footer-menu'
						)
					);
				?>
			</div>

			<?php } ?>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="theme-container">
			<div class="footer-bottom-left">
				<div class="site-info">
					<?php echo esc_attr_e( ' Copyright &copy;' ); echo date("Y") ;  ?> 
					<?php echo esc_attr_e( 'Kaywoon. Все права защищены.', 'technivo' ); ?>
				</div>
				<div class="footer-payment">
					<?php if ( is_active_sidebar( 'footer-bottom-widget-area' ) ) : ?>
					<?php dynamic_sidebar( 'footer-bottom-widget-area' ); ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- #colophon -->
</div>
<!-- #page -->
<?php wntr_go_top(); 
 wntr_get_widget('before-end-body-widget'); 
 wp_footer(); ?>


<style>
.woocommerce .single-product-full #content .product div.images {
        opacity: 1 !important;
}
</style>

</body>
</html>