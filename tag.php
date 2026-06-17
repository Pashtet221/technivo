<?php
/**
 * The template for displaying Tag pages
 * Used to display archive-type pages for posts in a tag.
 * @link http://codex.wordpress.org/Template_Hierarchy
 * @package WordPress
 * @subpackage Webibazaar
 * @since Webibazaar 1.0
 */
get_header(); ?>
<div class="page-title">
	<div class="page-title-inner">
		<h1 class="entry-title-main"><?php printf( esc_html__( 'Tag Archives: %s', 'technivo' ), single_tag_title( '', false ) ); ?></h1>
	</div>
</div>
<div class="main-content-inner theme-container">
	<div id="main-content" class="main-content blog-page blog-list">
		<section id="primary" class="content-area col-sm-12 col-md-9 col-sm-8">
			  <div id="content" class="site-content" role="main">
			  	<div id="container" class="blog-list-container row">
					<?php if ( have_posts() ) : ?>   
						<?php			
							while ( have_posts() ) : the_post(); ?>
								<div class="item col-6">
									<?php get_template_part( 'content', get_post_format() ); ?>
								</div>
							<?php								 
							endwhile;							
						else :
							get_template_part( 'content', 'none' ); 							
						endif;
						?>
				</div>
				  <?php the_posts_pagination(); ?>
		  	</div><!-- #content -->
		</section><!-- #primary -->
		<?php
			get_sidebar(); ?>
	</div><!--main-content-inner -->
</div><!-- main-content -->
<?php 
get_footer(); ?>