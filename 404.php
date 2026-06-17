<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Webibazaar
 * @since Webibazaar 1.0
 */
get_header(); ?>
<div class="page-title"><div class="page-title-inner"><?php the_archive_title( '<h1 class="entry-title-main">', '</h1>' ); ?><?php wntr_breadcrumbs(); ?></div></div>
<div class="main-content-inner">	
<?php if (get_option('wntr_page_sidebar') == 'yes') : ?>
<div id="primary" class="content-area col-sm-12 col-md-9 col-sm-8">
<?php else : ?>
<div id="primary" class="main-content-inner-full">
<?php endif; ?>

  <div id="content" class="site-content" role="main">
    <div class="page-content">
		<div class="error_image"></div>
		<h2 class="page_not_found">Page Not Found</h2>
      <p>
        <?php esc_html_e( 'Sorry, the page you’ve requested is not available. Please try searching for something else or Maybe try a search?', 'technivo' ); ?>
      </p>
      <?php get_search_form(); ?>
    </div><!-- .page-content -->
  </div><!-- #content -->
</div><!-- #primary -->
<?php
if (get_option('wntr_page_sidebar') == 'yes') : 
	get_sidebar( 'content' );
	get_sidebar();
endif;  ?>
<?php get_footer(); ?>