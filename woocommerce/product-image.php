<?php
/**
 * Single Product Image
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-image.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 9.7.0
 */

use Automattic\WooCommerce\Enums\ProductType;

defined( 'ABSPATH' ) || exit;

// Note: `wc_get_gallery_image_html` was added in WC 3.3.2 and did not exist prior. This check protects against theme overrides being used on older versions of WC.
if ( ! function_exists( 'wc_get_gallery_image_html' ) ) {
	return;
}

global $product;

$columns           = apply_filters( 'woocommerce_product_thumbnails_columns', 4 );
$post_thumbnail_id = $product->get_image_id();
$attachment_ids    = $post_thumbnail_id ? array_merge( array( $post_thumbnail_id ), $product->get_gallery_image_ids() ) : $product->get_gallery_image_ids();
$attachment_ids    = array_values( array_unique( array_filter( array_map( 'absint', $attachment_ids ) ) ) );
$wrapper_classes   = apply_filters(
	'woocommerce_single_product_image_gallery_classes',
	array(
		'woocommerce-product-gallery',
		'woocommerce-product-gallery--' . ( $post_thumbnail_id ? 'with-images' : 'without-images' ),
		'woocommerce-product-gallery--columns-' . absint( $columns ),
		'images',
	)
);
?>
<div class="<?php echo esc_attr( implode( ' ', array_map( 'sanitize_html_class', $wrapper_classes ) ) ); ?>" data-columns="<?php echo esc_attr( $columns ); ?>" style="opacity: 0; transition: opacity .25s ease-in-out;">
	<div class="woocommerce-product-gallery__wrapper">
		<?php
		if ( $post_thumbnail_id ) {
			$html = wc_get_gallery_image_html( $post_thumbnail_id, true );
		} else {
			$wrapper_classname = $product->is_type( ProductType::VARIABLE ) && ! empty( $product->get_available_variations( 'image' ) ) ?
				'woocommerce-product-gallery__image woocommerce-product-gallery__image--placeholder' :
				'woocommerce-product-gallery__image--placeholder';
			$html              = sprintf( '<div class="%s">', esc_attr( $wrapper_classname ) );
			$html             .= sprintf( '<img src="%s" alt="%s" class="wp-post-image" />', esc_url( wc_placeholder_img_src( 'woocommerce_single' ) ), esc_html__( 'Awaiting product image', 'woocommerce' ) );
			$html             .= '</div>';
		}

		echo apply_filters( 'woocommerce_single_product_image_thumbnail_html', $html, $post_thumbnail_id ); // phpcs:disable WordPress.XSS.EscapeOutput.OutputNotEscaped
		?>
	</div>

	<?php
	if ( function_exists( 'wntr_sale_percentage' ) ) {
		wntr_sale_percentage();
	}
	?>

	<?php if ( count( $attachment_ids ) > 1 ) : ?>
		<ol class="flex-control-nav flex-control-thumbs technivo-product-gallery-thumbs">
			<?php foreach ( $attachment_ids as $index => $attachment_id ) : ?>
				<?php
				$full_src   = wp_get_attachment_image_src( $attachment_id, 'full' );
				$single_src = wp_get_attachment_image_src( $attachment_id, 'woocommerce_single' );
				$thumb_src  = wp_get_attachment_image_src( $attachment_id, 'woocommerce_gallery_thumbnail' );

				if ( ! $full_src || ! $single_src || ! $thumb_src ) {
					continue;
				}

				$srcset = wp_get_attachment_image_srcset( $attachment_id, 'woocommerce_single' );
				$sizes  = wp_get_attachment_image_sizes( $attachment_id, 'woocommerce_single' );
				$alt    = trim( wp_strip_all_tags( get_post_meta( $attachment_id, '_wp_attachment_image_alt', true ) ) );
				$alt    = '' !== $alt ? $alt : get_the_title( $attachment_id );
				?>
				<li>
					<img
						src="<?php echo esc_url( $thumb_src[0] ); ?>"
						alt="<?php echo esc_attr( $alt ); ?>"
						class="<?php echo 0 === $index ? 'flex-active' : ''; ?>"
						data-technivo-gallery-thumb
						data-full="<?php echo esc_url( $full_src[0] ); ?>"
						data-full-width="<?php echo esc_attr( $full_src[1] ); ?>"
						data-full-height="<?php echo esc_attr( $full_src[2] ); ?>"
						data-single="<?php echo esc_url( $single_src[0] ); ?>"
						data-srcset="<?php echo esc_attr( $srcset ); ?>"
						data-sizes="<?php echo esc_attr( $sizes ); ?>"
						data-alt="<?php echo esc_attr( $alt ); ?>"
					/>
				</li>
			<?php endforeach; ?>
		</ol>
	<?php endif; ?>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
	document.querySelectorAll('.technivo-product-gallery-thumbs').forEach(function(thumbs) {
		var gallery = thumbs.closest('.woocommerce-product-gallery');
		var mainLink = gallery ? gallery.querySelector('.woocommerce-product-gallery__wrapper .woocommerce-product-gallery__image a') : null;
		var mainImage = gallery ? gallery.querySelector('.woocommerce-product-gallery__wrapper .woocommerce-product-gallery__image img') : null;

		if (!gallery || !mainImage) {
			return;
		}

		thumbs.addEventListener('click', function(event) {
			var thumb = event.target.closest('[data-technivo-gallery-thumb]');

			if (!thumb) {
				return;
			}

			event.preventDefault();

			var singleSrc = thumb.getAttribute('data-single');
			var fullSrc = thumb.getAttribute('data-full');
			var srcset = thumb.getAttribute('data-srcset');
			var sizes = thumb.getAttribute('data-sizes');
			var alt = thumb.getAttribute('data-alt') || '';

			if (!singleSrc || !fullSrc) {
				return;
			}

			mainImage.setAttribute('src', singleSrc);
			mainImage.setAttribute('alt', alt);
			mainImage.setAttribute('data-src', singleSrc);
			mainImage.setAttribute('data-large_image', fullSrc);
			mainImage.setAttribute('data-large_image_width', thumb.getAttribute('data-full-width') || '');
			mainImage.setAttribute('data-large_image_height', thumb.getAttribute('data-full-height') || '');

			if (srcset) {
				mainImage.setAttribute('srcset', srcset);
			} else {
				mainImage.removeAttribute('srcset');
			}

			if (sizes) {
				mainImage.setAttribute('sizes', sizes);
			} else {
				mainImage.removeAttribute('sizes');
			}

			if (mainLink) {
				mainLink.setAttribute('href', fullSrc);
			}

			thumbs.querySelectorAll('[data-technivo-gallery-thumb]').forEach(function(item) {
				item.classList.remove('flex-active');
			});
			thumb.classList.add('flex-active');
		});
	});
});
</script>
