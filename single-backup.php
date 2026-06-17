<?php
/**
 * @author  rs-theme
 * @since   1.0
 * @version 1.0 
 */
get_header();
global $webi;
    $post_id      = get_the_id();
    $author_id    = get_post_field ('post_author', $post_id);
    $display_name = get_the_author_meta( 'display_name' , $author_id );
	$col         = '';
    $blog_layout = ''; 
    $column      = ''; 
    $blog_grid   = '';
    if(!empty($webi['wntr_blog_single_layout']) || !is_active_sidebar( 'sidebar-1' ))
      {
        $blog_layout = !empty($webi['wntr_blog_single_layout']) ? $webi['wntr_blog_single_layout'] : '';        
		if($blog_layout == 'full' || !is_active_sidebar( 'sidebar-1' ))
            {
              $layout ='full-layout';
              $col    = '-full';
              $column = 'sidebar-none';  
            }          
        elseif($blog_layout == '2left')
            {
              $layout = 'full-layout-left';  
            }    
            elseif($blog_layout == '2right')
            {
              $layout = 'full-layout-right'; 
            } 
            else{
                $col = '';
                $blog_layout = ''; 
            }
        }
        else{
            $col         ='';
            $blog_layout =''; 
            $layout      ='';
        }
    ?>
        <div id="content">  
          <!-- Blog Detail Start -->
            <div class="treaco-blog-details pt-70 pb-70">
                <div class="row padding-<?php echo esc_attr( $layout) ?>">
				<?php
                if( $layout == 'full-layout-left' ):     
                    get_sidebar();    
            	 endif;?> 
                    <div id="primary" class="single-post col-sm-12 col-md-9 col-lg-9<?php echo esc_attr($col); ?> <?php echo esc_attr($layout); ?>">
                        <?php
                        	while ( have_posts() ) : the_post();
                        ?>       
						<div class="single-blog-title">
							<h3 class="blog-title">
								<a href="<?php the_permalink();?>">
									<?php the_title();?>
								</a>
							</h3>
						</div>

						 <div class="single-posts-meta">
							 <span class="p-date">
								 <i class="fa fa-calendar-check-o" aria-hidden="true"></i> <?php $post_date = get_the_date(); echo esc_attr($post_date);?>
							 </span>
							 <span class="post-comment">
								 <i class="fa fa-comments-o" aria-hidden="true"></i> <?php echo get_comments_number( '0', '1', '%' ); ?> 
							 </span>
							 <span class="post-cate">                                                      
								 <?php $seperator = ', '; // blank instead of comma
								 $after = '';
								 $before = '';?>
								 <i class="fa fa-book"></i>
								 <?php the_category(', '); ?> 
							 </span>
							 <span class="p-user">                                        
								 <i class="fa fa-user-o" aria-hidden="true"></i> <?php echo esc_html($display_name); ?>
							 </span>
						</div>
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <?php if(has_post_thumbnail()){ ?>
                            <div class="bs-img">
                              <?php the_post_thumbnail('wntr-blog-posts-list')?>
                            </div>
                            <?php } ?>
                            <?php if(!empty($webi['blog-author']) ){ ?>
                              
                            <?php } else { ?>

                                   
									
									<div class="blog-desc">   
										<?php echo the_content(15);?>                                     
									</div>
                            <?php } ?>
                            <?php
                              get_template_part( 'template-parts/post/content', get_post_format() );         
                            ?>
                            <div class="clearfix"></div> 
                                       
                        </article> 
                        
                        <?php       
                        $author_meta = get_the_author_meta('description'); 
                        if( !empty($author_meta) ){
                        ?>
                            <div class="author-block">
                              <div class="author-img"> <?php echo get_avatar(get_the_author_meta( 'ID' ), 200);?> </div>
                              <div class="author-desc">
                                <h3 class="author-title">
                                  <?php the_author();?>
                                </h3>
                                <p>
                                  <?php   
                                    echo wpautop( get_the_author_meta( 'description' ) );
                                  ?>
                                </p>
                                <a href="<?php echo esc_url(get_the_author_meta('user_url'))?>" target="_blank">
                                  <?php echo esc_url(get_the_author_meta( 'user_url'))?></a> 
                                </div>
                            </div>
                            <!-- .author-block -->
                        <?php }
                          get_template_part( 'pagination' );        
                        ?>
                        <?php 
                        $blog_author = '';
                        if($blog_author == ""){
                            if ( comments_open() || get_comments_number() ) :
                                comments_template();
                            endif;
                        }
                        else
                            {
                            $blog_author = $webi['blog-comments'];
                            if($blog_author == 'show'){     
                            // If comments are open or we have at least one comment, load up the comment template.
                            if ( comments_open() || get_comments_number() ) :
                              comments_template();
                            endif;
                            }
                        }
                        endwhile; // End of the loop.
                        ?>                  
				</div>
					<?php
                            if( $layout == 'full-layout-right' ):     
                                get_sidebar(); 
                            else: ?> 
                                <div id="secondary" class="primary-sidebar col-lg-3">
                                    
                                    <?php if ( is_active_sidebar( 'sidebar-1' ) ) : 
                                    dynamic_sidebar( 'sidebar-1' ); 
                                    endif; ?>
                                </div>
                        <?php endif;?>
                </div>
					
            </div> 


            <?php if (get_field('vklyuchit_li_sekcziyu_s_tovarami') == 1): ?>
                <h3 id="you-can-buy-for-less-than-a-college-degree"><?php the_field('zagolovok_tovarov_iz_stati'); ?></h3>
                <p><?php the_field('sale_etiketka_pod_zagolovkom'); ?></p>
<div class="woocommerce"><ul class="products columns-4 grid">
                <?php if (have_rows('tovary_iz_stati')): ?>
                    <?php while (have_rows('tovary_iz_stati')):
                        the_row(); ?>
                        <?php
                        $tovar_iz_stati = get_sub_field('tovar_iz_stati');
                        ?>
                        <?php if ($tovar_iz_stati): ?>
                            <div class="single_post_products">
                                <?php foreach ($tovar_iz_stati as $post): ?>
                                    <?php setup_postdata($post); ?>

<?php wc_get_template_part( 'content', 'product' ); ?>

                                <?php endforeach; ?>
                                <?php wp_reset_postdata(); ?>
                            </div>
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
	</ul></div>
	
            <?php endif; ?>
            <style>
                .single_post_products .col-md-4:first-child {
                    padding-left: 0;
                }
            </style>


          <!-- Blog Detail End --> 
        </div>
<!-- .container -->
<?php
get_footer();