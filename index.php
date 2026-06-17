<?php
	get_header(); ?>
	<div class="main-content-blog">
	<div id="treaco-blog" class="treaco-blog blog-page animate__animated animate__fadeInUp">
	   <?php
	    //checking blog layout form option  
	    $col         = '';
	    $blog_layout = ''; 
	    $column      = ''; 
	    $blog_grid   = '';

	    if(!empty($webi['wntr_blog_style']) || !is_active_sidebar( 'sidebar-1' ))
	      {
	        $blog_layout = !empty($webi['wntr_blog_style']) ? $webi['wntr_blog_style'] : '';	        
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
	            //$blog_grid   ='6';
	        }
	    ?>
		<div class="theme-container">			
				<div id="content">
				<div class="row padding-<?php echo esc_attr( $layout) ?>"> 

						<?php
							if( $layout == 'full-layout-left'):
								get_sidebar();
							endif;
						?>
						<div id="primary" class="contents-sticky  col-sm-8 col-md-12 col-lg-9<?php echo esc_attr($col); ?> <?php echo esc_attr($layout); ?>">
							<div class="row main-blog-page">            
								<?php if ( have_posts() ) :           
									/* Start the Loop */
									while ( have_posts() ) : the_post();
									$post_id = get_the_id();?>
								<?php $no_thumb = "";
									if ( !has_post_thumbnail() ) {
									  $no_thumb = "no-thumbs";
									}?>
								<div class="blog-post-content col-sm-<?php echo !empty($webi['wntr_blog_grid']) ? $webi['wntr_blog_grid'] : '' ; ?> col-xs-12">
									<article <?php post_class();?>>
										<div class="blog-item<?php echo esc_attr($no_thumb); ?>">
										<?php if ( has_post_thumbnail() ) {?>
											<div class="blog-img">
											   <a href="<?php the_permalink();?>">
												<?php the_post_thumbnail('wntr-blog-posts-list');?></a>
											   		<div class="blog-date">                                                  
														<div class="blog_day"><?php echo get_the_date('d'); ?></div> 
														<div class="blog_month"><?php echo get_the_date('M'); ?></div>
													</div> 
											</div><!-- .blog-img -->
										<?php } ?> 
										<div class="full-blog-content">
										  <div class="title-wrap">
											  <h3 class="blog-title">
													  <a href="<?php the_permalink();?>">
														  <?php echo wp_trim_words( get_the_title(), 10, '' ); ?>
													  </a>
												  </h3>
										  <div class="blog-meta">
											<?php if(!empty($webi['wntr-blog-author-post'])){
														 if ($webi['wntr-blog-author-post'] == 'show'): ?>	
															  <div class="author">
																<?php echo get_avatar(get_the_author_meta('ID')); ?>
																<?php echo get_the_author(); ?>
																 <?php echo wntr_comments_link(); ?>
																</div>
														  <?php endif; }
														  else{ ?>
															  <div class="author">
																	<?php echo get_avatar(get_the_author_meta('ID')); ?>
																	<?php echo get_the_author(); ?>
																	<?php echo wntr_comments_link(); ?>
															</div>
														 <?php }; ?>														  
										    </div>
											<div class="meta-categories-wrapp">
													  <span class="btm-catagory">
															<?php if(!empty($webi['wntr-blog-category'])){
																	if($webi['wntr-blog-category'] == 'show'){
																	  if(get_the_category()): ?>                                                     
																		  <?php echo '<span class="tag-line">';?>

																			<?php the_category(', '); 
																			echo '</span>';?> 
																	<?php endif;}
															  }else{
																 if(get_the_category()): ?>                                             
																	<?php
																		//tag add
																		$seperator = ', '; // blank instead of comma
																		$after = '';
																		$before = '';
																		echo '<span class="tag-line">';?>

																		<?php the_category(', '); 
																		echo '</span>';?> 
																  <?php endif;} ?>
													  </span>
											</div>
											  </div>
												<div class="blog-desc">
													<?php
													$webi_content ="";
													$moreLink ="";
													$webi_content = apply_filters( 'the_content', get_the_content() );
													$webi_content = wp_strip_all_tags($webi_content);
													// echo wp_trim_words( $webi_content, 20, $moreLink);
													echo wp_trim_words( $webi_content, 0, $moreLink);
													?>
												</div>
												<?php 
													$no_view = "";
													if ( !empty($webi['view-comments']) && $webi['view-comments'] == 'hide'){
														$no_view = "left-btn";
													}
													if(!empty($webi['wntr_blog_readmore_text'])):?>
														<div class="blog-button <?php echo esc_attr($no_view); ?>">
															<a href="<?php the_permalink();?>">
															Подробнее	
															</a>
														</div>
												<?php endif; ?>
											  <?php if(empty($webi['wntr_blog_readmore_text'])):?>
												  <div class="blog-button <?php echo esc_attr($no_view); ?>">
													<a href="<?php the_permalink();?>"><?php esc_html_e('Continue Reading', 'technivo');?></a>
												  </div>
											  <?php endif; ?>
										</div>
									  </div>
									</article>
								</div>
								<?php  
								  endwhile;  
								  wp_reset_postdata();                      
								?>

							</div>
							<div class="pagination-area">
								<?php the_posts_pagination();?>
							</div>
							<?php else :
							get_template_part( 'template-parts/content', 'none' );
							endif; ?>
						</div>
						<?php
							if ($layout == 'full-layout-right' || $layout == ""):
								get_sidebar();
							endif;
						?>
					</div>
				</div>
		</div>
	</div>
	<?php
	get_footer();
