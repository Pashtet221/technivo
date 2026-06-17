<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Webibazaar
 * @since Webibazaar 1.0
 */
get_header();
?>

<div id="main-content" class="main-content <?php echo esc_attr(wntr_sidebar_position()); ?> <?php echo esc_attr(wntr_page_layout()); ?> ">
<div id="primary" class="content-area col-sm-12 col-md-9 col-sm-8">

	<div id="content" class="site-content" role="main">
      <?php	// Start the Loop.
		while ( have_posts() ) : the_post();
			// Include the page content template.
			get_template_part( 'content', 'page' ); ?>
			<?php ?>  <?php // If comments are open or we have at least one comment, load up the comment template.
			if ( is_user_logged_in() ){
				if ( comments_open() || get_comments_number() ) {
				comments_template();
				}
			} ?>
      <?php  endwhile;	?>
    </div> <!-- #content -->
  </div> <!-- #primary -->
	<?php get_sidebar();?>  
</div><!-- #main-content -->
<div class="home_last"></div>
<?php get_footer(); ?>