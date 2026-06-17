<?php
/**
 * The template for displaying Search Results pages
 *
 * @package WordPress
 * @subpackage Webibazaar
 * @since Webibazaar 1.0
 */
get_header(); ?>
	<div id="main-content" class="main-content blog-page blog-list">
		<section id="primary" class="content-area col-sm-12 col-md-9 col-sm-8">
			  <div id="content" class="site-content" role="main">
			  	<div id="container" class="blog-list-container row">
					<?php if ( have_posts() ) : ?>   
					<!-- .page-header -->
					<?php			// Start the Loop.
							while ( have_posts() ) : the_post(); ?>
								<div class="item col-6">
									<?php
									/*
									 * Include the post format-specific template for the content. If you want to
									 * use this in a child theme, then include a file called called content-___.php
									 * (where ___ is the post format) and that will be used instead.
									 */
									 get_template_part( 'content', get_post_format() ); ?>
								</div>
							<?php								 
							endwhile;
							// Previous/next page navigation.
							the_posts_pagination();
						else :
							// If no content, include the "No posts found" template.
							get_template_part( 'content', 'none' ); 							
						 endif;
					?>
				</div>
		  	</div><!-- #content -->
		</section><!-- #primary -->
		<?php
			get_sidebar( 'content' );
			get_sidebar(); ?>
</div><!-- main-content -->
<?php  get_footer(); ?>