<?php
add_action( 'wp_head', 'wntr_customstyle' );
function wntr_customstyle() { 
global $webi; 
$wntr_bodyfont = (isset($webi['wntr_bodyfont']) && !empty($webi['wntr_bodyfont']) ) ? $webi['wntr_bodyfont']:null;
?>
<?php if(!empty($webi)) { ?>
<style>

	.service-list:hover .icon-image{
		border: none;
	}
	.owl-carousel .owl-nav button:hover svg , .slick-slider button:hover svg{
		stroke: <?php echo esc_attr($webi['wntr_button_color']); ?>;
	}
	.header-search .header-toggle li:hover svg, .header-cart:hover .shopping-svg use{
		stroke: <?php echo esc_attr($webi['wntr_hoverlink_color']); ?>;
	}
	.owl-carousel .owl-nav svg, .slick-slider button svg{
		stroke: <?php echo esc_attr($webi['wntr_button_hover_color']); ?>;
	}
    .blog-read-more .read-more-link svg {
		fill: <?php echo esc_attr($webi['wntr_hoverlink_color']); ?>;
	}
	.blog-read-more .read-more-link:hover{
		color: <?php echo esc_attr($webi['wntr_button_hover_color']) ; ?> ;
	}
	.cms-banner-item.style-1 .link-text{
		color: <?php echo esc_attr($webi['wntr_button_text_color']) ; ?> ;
	}
	.cms-banner-item.style-1 .link-text:hover{
		color: <?php echo esc_attr($webi['wntr_button_hover_text_color']) ; ?> ;
	}
	.mc4wp-form-fields p input[type="submit"], .footer-top .widget input[type="submit"]{
		background-color: <?php echo esc_attr($webi['wntr_button_color']) ; ?> ; 
	}
	.bnr_text .winter_link a{
		border: 1px solid <?php echo esc_attr($webi['wntr_hoverlink_color']); ?>;
		color:<?php echo esc_attr($webi['wntr_hoverlink_color']); ?>;
	}
	.header-cart:hover .mycart, .wntr_headerbottom_sec_text a, .topbar-account .topbar-link:hover .account-block .account-label, .header-search:hover .account-block .account-label , .mc4wp-form-fields p input[type="submit"]{
		color:<?php echo esc_attr($webi['wntr_hoverlink_color']); ?>;
	}
	.footer-middle .fifth-widget .tagcloud a:hover{  
		color:<?php echo esc_attr($webi['wntr_button_hover_text_color']); ?> !important;
		border-color:<?php echo esc_attr($webi['wntr_button_hover_text_color']); ?> !important;
	}
	.home_bnr_3 .style-1 .static-wrapper .text-button , .home_bnrs .cms-banner-item.style-1 .link-text , .contact-block li:first-child, .header-search .header-toggle li , .excerpt .read-more-link ,.reset_variations{
		background-color:<?php echo esc_attr($webi['wntr_button_color']) ; ?> ; 
	}
	.woocommerce span.onsale,.woocommerce-page span.onsale, .resp-tabs-list li.resp-tab-active, #categorytab .resp-tabs-list li:hover{
		background-color:<?php echo esc_attr($webi['wntr_button_color']) ; ?>  !important; 
	}
	.footer-top .widget input[type="submit"]:hover, .mc4wp-form-fields p input[type="submit"]:hover ,.woocommerce .shop_table.cart.wishlist_table td.product-add-to-cart a:hover,
	 .excerpt .read-more-link:hover , .reset_variations:hover, .woocommerce ul.products li.product .product_type_simple:hover{
		background-color:<?php echo esc_attr($webi['wntr_button_hover_color']) ; ?> !important;
		color:<?php echo esc_attr($webi['wntr_button_hover_text_color']); ?>;
	}
	.treaco-blog .blog-button a:hover{
		background-color:<?php echo esc_attr($webi['wntr_button_hover_color']) ; ?> !important;
		box-shadow: 0 0px 3px #a3a3a3;
	}
	.shopping_cart .shopping-svg, .shopping_cart:hover .shopping-svg{
		background-color: transparent ;
	}
	 .slider_btn , .full_bnr .winter_link a , .full_bnr .winter_link a:hover , .home_bnrs .cms-banner-item.style-1 .link-text , .excerpt .read-more-link , .reset_variations{
		color :<?php echo esc_attr($webi['wntr_button_text_color']) ; ?> ;
	}
	.mc4wp-form-fields p input[type="submit"]:hover , .slider_btn:hover , .excerpt .read-more-link:hover , .reset_variations:hover{
		color: <?php echo esc_attr($webi['wntr_button_hover_text_color']) ; ?>;
	}
	.box-category , .winter_title h2::before , .bnr_text .winter_link a:hover, .wmc-currency:hover{
		background-color:<?php echo esc_attr($webi['wntr_hoverlink_color'])  ; ?>; 
	}
	.flex-control-paging li a.flex-active{
		background-color:<?php echo esc_attr($webi['wntr_button_color'])  ; ?> !important; 
	}
	#menu-mainmenu .current-menu-item > a, #menu-mainmenu > li:hover > a span{
		color:<?php echo esc_attr($webi['wntr_top_menu_texthover_color'])  ; ?> !important; 
	}
	.product-tab-filter li.filter-item .tab-title::before , body .woo-multi-currency .wmc-list-currencies .wmc-currency.wmc-active, body .woo-multi-currency .wmc-list-currencies .wmc-currency:hover, body .woo-multi-currency.wmc-price-switcher a:hover{
		background:<?php echo esc_attr($webi['wntr_hoverlink_color']); ?> !important; 
	}
	.testimonial-carousel .owl-dots .active span , .address-container .icon::after{
		background-color: <?php echo esc_attr($webi['wntr_hoverlink_color']); ?>; 
	}
	.owl-theme .owl-buttons div:hover, .products .slick-prev:hover::before, .products .slick-next:hover::before, .product_list_widget .slick-prev:hover::before, .product_list_widget .slick-next:hover::before{
		color: #000;
	}
	.winter_link a, .style-2 .link-text, .slider_btn a.button {
		background-color :<?php echo esc_attr($webi['wntr_button_color']); ?>;
		color :<?php echo esc_attr($webi['wntr_button_text_color']); ?>;
	}
	.style-2 .link-text:hover{
		background-color :<?php echo esc_attr($webi['wntr_button_hover_color']); ?>;
		color :<?php echo esc_attr($webi['wntr_button_hover_text_color']); ?>;
		box-shadow: 0 0px 3px #a3a3a3;
	}
	.winter_link a:hover, .blog-read-more .read-more-link:hover,.slider_btn a.button:hover {
		background-color :<?php echo esc_attr($webi['wntr_button_hover_color']); ?>;
		color :<?php echo esc_attr($webi['wntr_button_hover_text_color']); ?>;
	}
	.site-footer a:hover,.blog-posts-content .container .container-inner .post-title a:hover,  a:hover ,.woocommerce .woocommerce-breadcrumb span a:hover, .woocommerce-page .woocommerce-breadcrumb span a:hover, .breadcrumbs a:hover,.entry-header .entry-title a:hover,
	.custom-testimonial .style-1 .testimonial-title a:hover,.brands li:hover h3.title, .brands li:hover mark.count,.woocommerce ul.products li.product .product-name:hover, .woocommerce-page ul.products li.product .product-name:hover,
	.cat_img_block:hover .category,.service-block a:hover,.category_link .link-text,.primary-sidebar li.current-cat a,.woocommerce-loop-category__title:hover,.woocommerce-loop-category__title:hover mark,.woocommerce-MyAccount-navigation ul li.is-active a,.woocommerce-MyAccount-navigation ul li a:hover ,.home-featured-carousel .product_title a:hover ,.woocommerce a.button.br_compare_button:hover , .woocommerce .entry-summary .yith-wcwl-add-to-wishlist a.add_to_wishlist:hover , .woocommerce .entry-summary .br_compare_button:hover::before, .woocommerce .entry-summary .yith-wcwl-add-to-wishlist .add_to_wishlist:hover::before , .woocommerce-tabs ul.tabs li a:hover  , .primary-sidebar .widget ul li.recentcomments,.widget_wpmegamenu_widget .wpmm-sub-menu-wrapper.wpmm-menu1 ul li:hover a span.wpmm-mega-menu-href-title ,
	.meta-inner:hover a ,.testimonial-top h3,.blog-read-more .read-more-link,.style-1.cms-banner-item .text1,.product-tag,.product-tag a,
	.owl-theme .owl-buttons div:hover::before , .staff-page .staff-social .icon .fa ,
	.primary-sidebar .product-title:hover , .meta-inner:hover .fa  , .custom-testimonial-inner:hover .testimonial-top h3,
	.treaco-blog .btm-catagory a:hover , .treaco-blog .btm-catagory a:hover , .relatd-post .related-post-title a:hover , .treaco-blog-details .blog-title a:hover , .treaco-blog-details .post-cate a:hover, .slider_fst_row span
	{
		color:<?php echo esc_attr($webi['wntr_hoverlink_color']); ?>;
	}
	.staff-page .staff-social .icon svg path{
		fill:<?php echo esc_attr($webi['wntr_hoverlink_color']); ?>;
	}
	.woocommerce-tabs ul.tabs li a::after {
		background-color :<?php echo esc_attr($webi['wntr_hoverlink_color']); ?>;
		color :<?php echo esc_attr($webi['wntr_hoverlink_color']); ?>;
	}
	.product-with-tab .product-tab-filter ul li.active {
		border-color: <?php echo esc_attr($webi['wntr_button_hover_border_color']); ?> !important;
		color :<?php echo esc_attr($webi['wntr_button_hover_color']); ?>;
	}
	.product-with-tab .product-tab-filter ul li{
		border-bottom: 1px solid transparent !important;
		color :<?php echo esc_attr($webi['wntr_button_text_color']); ?>;
	}
	.blog .btm-catagory a{
		border: 1px solid <?php echo esc_attr($webi['wntr_hoverlink_color']); ?>;
	}
	.woocommerce-tabs ul.tabs li.active a{
		color :<?php echo esc_attr($webi['wntr_hoverlink_color']); ?>;
	}	
	.woocommerce ul.products.list li:hover .product-block-inner, .hot-pro .elementor-column-gap-default .home-featured-carousel .item:hover, #secondary .widget-title , .widget_block h2, .links .icon, .gallery-zoom .icon, .gallery-redirect .icon, .blog-posts-content .block_hover .icon ,.wpcf7 form.invalid .wpcf7-response-output, .wpcf7 form.unaccepted .wpcf7-response-output{
		border-color :<?php echo esc_attr($webi['wntr_hoverlink_color']); ?>;
	}
	.blog-posts-content .post-date, .custom-testimonial .testimonial-wrapper:hover .testimonial-title a, .main-content .wp-megamenu-main-wrapper.wpmm-ctheme-wrapper.wpmega-default-theme ul.wpmm-mega-wrapper > li > a:hover , .wpmm_megamenu .wp-megamenu-main-wrapper.wpmm-ctheme-wrapper.wpmega-default-theme ul ul li a:hover, .wpmm_megamenu .wp-megamenu-main-wrapper.wpmm-ctheme-wrapper.wpmega-default-theme ul ul li a:focus{
		color:<?php echo esc_attr($webi['wntr_hoverlink_color']) ; ?> !important ;		
	}
	.woocommerce ul.products li.product .product_type_grouped:hover, .woocommerce-page ul.products li.product .product_type_grouped:hover, .woocommerce ul.products li.product .product_type_external:hover, .woocommerce-page ul.products li.product .product_type_external:hover, .woocommerce ul.products li.product .product_type_variation:hover, .woocommerce .yith-wcwl-add-to-wishlist a.add_to_wishlist:hover , .woocommerce .button.yith-wcqv-button:hover , 
	.header-search .woocommerce-product-search input[type="submit"], .header-search .search-form #searchsubmit , 
	.links a.icon:hover, .gallery-zoom .icon:hover, .gallery-redirect .icon:hover, .blog-posts-content .block_hover .icon:hover,
	.single-product div.product .woocommerce-product-gallery .woocommerce-product-gallery__trigger:hover,
	.primary-sidebar .tagcloud a:hover, .tagcloud a:hover,
	.woocommerce .widget_price_filter .ui-slider .ui-slider-handle, .woocommerce-page .widget_price_filter .ui-slider .ui-slider-handle,
	.wp-megamenu-main-wrapper.wpmm-ctheme-wrapper.wpmega-default-theme .wpmm-mega-menu-label ,
	.woocommerce-pagination span.current, .woocommerce-pagination a:hover ,
	.woocommerce ul.products li.product .yith-wcwl-add-button a:hover, .woocommerce-page ul.products li.product .yith-wcwl-add-button a:hover,
	.woocommerce ul.products li.product .yith-wcwl-wishlistexistsbrowse a:hover, .woocommerce-page ul.products li.product .yith-wcwl-wishlistexistsbrowse a:hover, .woocommerce ul.products li.product .yith-wcwl-wishlistaddedbrowse a:hover, .woocommerce-page ul.products li.product .yith-wcwl-wishlistaddedbrowse a:hover  , .woocommerce ul.products li.product .button.add_to_cart_button.added ,
	.owl-pagination .owl-page.active span ,
	.team-posts-content.posts-content .container-inner:hover .staff-content , .woocommerce-page ul.products li.product .product_type_simple:hover,.cms-banner-item.style-1 .link-text,
	.pricing_wrapper:hover .pricing_heading, .pricing_wrapper .selected .pricing_heading, .pricing_wrapper:hover .pricing_top, .pricing_wrapper .selected .pricing_top, .pricing_wrapper:hover .pricing_button a#pricing-btn, .pricing_wrapper .selected .pricing_button a#pricing-btn , .woocommerce .product-block-outer a.br_compare_button:hover ,.woocommerce .list .product-block-outer a.br_compare_button:hover , .products_block a.add_to_cart_button.button.br_compare_button:hover , .treaco-blog .blog-button a{
		background-color:<?php echo esc_attr($webi['wntr_hoverlink_color']) ; ?>;
	}
	.cms-banner-item.style-1 .link-text:hover, .woocommerce-page ul.products.grid li.product .product_type_simple:hover, .woocommerce ul.products li.product.grid .button.add_to_cart_button.added:hover, .woocommerce-page ul.products li.product .product_type_variable:hover, .woocommerce ul.products li.product .product_type_variable:hover {
		background-color:<?php echo esc_attr($webi['wntr_button_hover_color']) ; ?> !important ;
		border-color :<?php echo esc_attr($webi['wntr_button_hover_color']) ; ?> !important ;
	}
	.entry-summary .br_compare_button:hover {
		color:<?php echo esc_attr($webi['wntr_hoverlink_color']); ?>;
	}
	.site-footer .widget-title {color:<?php echo esc_attr($webi['wntr_footer_title_color']); ?>; }	
	.topbar-outer {background:<?php echo esc_attr($webi['wntr_topbar_bkg_color']); ?>;color:<?php echo esc_attr($webi['wntr_topbar_text_color']); ?>; }
	.topbar-text,.topbar-outer .nav-menu-right li a, .header-search .account-block .account-label   {color:<?php echo esc_attr($webi['wntr_top_menu_text_color']); ?>;}
	.topbar-outer .nav-menu-right li a:hover,.login-out:hover,.nav-menu-right li a::before,.account-label::before,.topbar-text::before,.nav-menu-right li:hover {color:<?php echo esc_attr($webi['wntr_hoverlink_color']); ?>;}	
	.header-cart .cart-contents span , .contact-block .contact-inner.number{color:<?php echo esc_attr($webi['wntr_topbar_link_color']); ?>; }
	.mega-menu ul li:hover a , .mega-menu ul li:focus a , .mega-menu ul li:hover a.dc-mega::after, .admin-bar .header-bottom.sticky-menu .mega-menu ul li a:hover{color:<?php echo esc_attr($webi['wntr_top_menu_texthover_color']); ?>; }
	.mega-menu ul li .sub a, .wntr-topbar-menu-links .sub-menu li a{color:<?php echo esc_attr($webi['wntr_sub_menu_link_text_color']); ?>; }
	.mega-menu ul li .sub a:hover, .wntr-topbar-menu-links .sub-menu li a:hover,#menu-header-custom-links > li > a:hover{color:<?php echo esc_attr($webi['wntr_sub_menu_link_text_hover_color']); ?>; }	
	.header-top {
		<?php if($webi['wntr_header_background_upload'] != ''){ ?>
		background-image: url("<?php echo esc_attr($webi['wntr_header_background_upload']['url']); ?>");
		background-position:<?php echo esc_attr(str_replace('+',' ',$webi['wntr_header_back_position'])); ?>;
		background-repeat:<?php echo esc_attr($webi['wntr_header_back_repeat']); ?>;
		background-attachment:<?php echo esc_attr($webi['wntr_header_back_attachment']); ?>;
		<?php } ?>
	}
	.site-header{
		background-color:<?php echo esc_attr($webi['wntr_header_bkg_color']); ?>;
	}
	.header-bottom{
		background-color:<?php echo esc_attr($webi['wntr_footer_bottom_bkg_color']); ?>;
	}
	.theme-container, .full-width .inner-container, .site-footer .inner-container, .main-inner-container{
	    max-width:<?php echo esc_attr($webi['wntr_container_size']); ?>;
	}
	.site-footer {
		background-color:<?php echo esc_attr($webi['wntr_footer_bkg_color']); ?>;
	} 
	.footer-top{background-color:<?php echo esc_attr($webi['wntr_footer_top_bkg_color']); ?>;} 

	.footer-bottom{background-color:<?php echo esc_attr($webi['wntr_footer_bottom_bkg_color']); ?>;}
	.footer-bottom{
		<?php if($webi['wntr_footer_bottom_background_upload'] != ''){ ?>
		background-image: url("<?php echo esc_attr($webi['wntr_footer_bottom_background_upload']['url']); ?>");
		background-position:<?php echo esc_attr(str_replace('+',' ',$webi['wntr_footer_bottom_back_position'])); ?>;
		background-repeat:<?php echo esc_attr($webi['wntr_footer_bottom_back_repeat']); ?>;
		background-attachment:<?php echo esc_attr($webi['wntr_footer_bottom_back_attachment']); ?>;
		<?php } ?>
	}
	.footer-middle{
		<?php if($webi['wntr_footer_middle_background_upload'] != ''){ ?>
		background-image: url("<?php echo esc_attr($webi['wntr_footer_middle_background_upload']['url']); ?>");
		background-position:<?php echo esc_attr(str_replace('+',' ',$webi['wntr_footer_middle_back_position'])); ?>;
		background-repeat:<?php echo esc_attr($webi['wntr_footer_middle_back_repeat']); ?>;
		background-attachment:<?php echo esc_attr($webi['wntr_footer_middle_back_attachment']); ?>;
		<?php } ?>
	}
	.footer-top{
		<?php if($webi['wntr_footer_top_background_upload'] != ''){ ?>
		background-image: url("<?php echo esc_attr($webi['wntr_footer_top_background_upload']['url']); ?>");
		background-position:<?php echo esc_attr(str_replace('+',' ',$webi['wntr_footer_top_back_position'])); ?>;
		background-repeat:<?php echo esc_attr($webi['wntr_footer_top_back_repeat']); ?>;
		background-attachment:<?php echo esc_attr($webi['wntr_footer_top_back_attachment']); ?>;
		<?php } ?>
	}
	.footer a,.site-footer a, .site-footer .wntr-about-description {color:<?php echo esc_attr($webi['wntr_footerlink_color']); ?>;}
	
	.wpmm-sub-menu-wrapper.wpmm-menu1 ul li a span.wpmm-mega-menu-href-title , .wpmm_megamenu .wp-megamenu-main-wrapper.wpmm-ctheme-wrapper.wpmega-default-theme .wpmm-sub-menu-wrap ul li , .wpmm_megamenu ul.wp-mega-sub-menu li a{
		font-family: <?php echo esc_html( $wntr_bodyfont['font-family'] ); ?>, sans-serif !important;
	}

.widget button, .widget input[type="button"], .widget input[type="reset"], .widget input[type="submit"], a.button, button, .contributor-posts-link, input[type="button"], input[type="reset"], input[type="submit"], .button_content_inner a, .woocommerce #content input.button, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce-page #content input.button, .woocommerce-page #respond input#submit, .woocommerce-page a.button, .woocommerce-page button.button, .woocommerce-page input.button, .woocommerce .wishlist_table td.product-add-to-cart a,.woocommerce .wc-proceed-to-checkout .checkout-button:hover,
.woocommerce-page input.button:hover,.woocommerce #content input.button.disabled,.woocommerce #content input.button:disabled,.woocommerce #respond input#submit.disabled,.woocommerce #respond input#submit:disabled,.woocommerce a.button.disabled,.woocommerce a.button:disabled,.woocommerce button.button.disabled,.woocommerce button.button:disabled,.woocommerce input.button.disabled,.woocommerce input.button:disabled,.woocommerce-page #content input.button.disabled,.woocommerce-page #content input.button:disabled,.woocommerce-page #respond input#submit.disabled,.woocommerce-page #respond input#submit:disabled,.woocommerce-page a.button.disabled,.woocommerce-page a.button:disabled,.woocommerce-page button.button.disabled,.woocommerce-page button.button:disabled,.woocommerce-page input.button.disabled,.woocommerce-page input.button:disabled,.loadgridlist-wrapper .woocount:hover,#primary .entry-summary .single_add_to_cart_button,.loadgridlist-wrapper .woocount{
	background-color:<?php echo esc_attr($webi['wntr_button_color']); ?>;
	color:<?php echo esc_attr($webi['wntr_button_text_color']); ?>;
	border-color:<?php echo esc_attr($webi['wntr_button_border_color']); ?>;
	}
.widget input[type="button"]:hover,.widget input[type="button"]:focus,.widget input[type="reset"]:hover,.widget input[type="reset"]:focus,.widget input[type="submit"]:hover,.widget input[type="submit"]:focus,a.button:hover,a.button:focus,button:hover,button:focus,.contributor-posts-link:hover,input[type="button"]:hover,input[type="button"]:focus,input[type="reset"]:hover,input[type="reset"]:focus,input[type="submit"]:hover,input[type="submit"]:focus,.calloutarea_button a.button:hover,.calloutarea_button a.button:focus,.button_content_inner a:hover,.button_content_inner a:focus,.woocommerce #content input.button:hover , .woocommerce #respond input#submit:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .woocommerce-page #content input.button:hover, .woocommerce-page #respond input#submit:hover, .woocommerce-page button.button:hover, .woocommerce #content table.cart .checkout-button:hover,#primary .entry-summary .single_add_to_cart_button:hover,.woocommerce .wc-proceed-to-checkout .checkout-button{
		background-color:<?php echo esc_attr($webi['wntr_button_hover_color']); ?>;
		color:<?php echo esc_attr($webi['wntr_button_hover_text_color']); ?>;
		border-color:<?php echo esc_attr($webi['wntr_button_hover_border_color']); ?>;
	}	
	.header-main .wp-megamenu-main-wrapper.wpmm-ctheme-wrapper.wpmega-default-theme .wpmm-mega-wrapper > li.current-menu-item > a, #wpmm-wrap-megamenu ul.wpmm-mega-wrapper > li > a:hover{
		color:<?php echo esc_attr($webi['wntr_top_menu_texthover_color']); ?> !important;
	}
	.wpmm_megamenu .wp-megamenu-main-wrapper.wpmm-ctheme-wrapper.wpmm-orientation-horizontal ul.wpmm-mega-wrapper > li > a, 
	.wpmm_megamenu .wp-megamenu-main-wrapper.wpmm-ctheme-wrapper.wpmm-orientation-vertical ul.wpmm-mega-wrapper > li > a,.wp-megamenu-main-wrapper,.wp-megamenu-main-wrapper.wpmm-ctheme-wrapper.wpmega-default-theme.wpmm-orientation-horizontal ul.wpmm-mega-wrapper > li > a, .wp-megamenu-main-wrapper.wpmm-ctheme-wrapper.wpmega-default-theme.wpmm-orientation-vertical ul.wpmm-mega-wrapper > li > a ,.widget_wpmegamenu_widget .wp-megamenu-main-wrapper ul ul li a{
		font-family: <?php echo esc_html( $wntr_bodyfont['font-family'] ); ?>, sans-serif !important;
		font-style: <?php echo empty( $wntr_bodyfont['font-style'] ) ? 'normal' : $wntr_bodyfont['font-style']; ?>!important;	
	}
	body{
		font-family: <?php echo esc_html( $wntr_bodyfont['font-family'] ); ?>, sans-serif;
		font-style: <?php echo empty( $wntr_bodyfont['font-style'] ) ? 'normal' : $wntr_bodyfont['font-style']; ?>;
		background-color:<?php echo esc_attr($webi['wntr_bkg_color']); ?> !important;
		<?php if($webi['wntr_background_image'] == 'predefined'){ ?>
		background-image: url("<?php echo esc_url(get_template_directory_uri()); ?>/images/webi/colorpicker/pattern/<?php echo esc_attr( $webi['wntr_texture']); ?>")!important;
		<?php } else { ?>
		background-image: url("<?php echo esc_attr($webi['wntr_background_upload']['url']); ?>")!important;
		background-position:<?php echo esc_attr(str_replace('+',' ',$webi['wntr_back_position'])); ?>!important;
		background-repeat:<?php echo esc_attr( $webi['wntr_back_repeat']); ?>!important;
		background-attachment:<?php echo esc_attr($webi['wntr_back_attachment']); ?>!important;
		<?php } ?>
	}		
	.widget button, .widget input[type="button"], .widget input[type="reset"], .widget input[type="submit"], a.button, button, .contributor-posts-link, input[type="button"], input[type="reset"], input[type="submit"], .button_content_inner a, .woocommerce #content input.button, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce-page #content input.button, .woocommerce-page #respond input#submit, .woocommerce-page a.button, .woocommerce-page button.button, .woocommerce-page input.button, .woocommerce .wishlist_table td.product-add-to-cart a,.woocommerce .wc-proceed-to-checkout .checkout-button:hover,
	.woocommerce-page input.button:hover,.woocommerce #content input.button.disabled,.woocommerce #content input.button:disabled,.woocommerce #respond input#submit.disabled,.woocommerce #respond input#submit:disabled,.woocommerce a.button.disabled,.woocommerce a.button:disabled,.woocommerce button.button.disabled,.woocommerce button.button:disabled,.woocommerce input.button.disabled,.woocommerce input.button:disabled,.woocommerce-page #content input.button.disabled,.woocommerce-page #content input.button:disabled,.woocommerce-page #respond input#submit.disabled,.woocommerce-page #respond input#submit:disabled,.woocommerce-page a.button.disabled,.woocommerce-page a.button:disabled,.woocommerce-page button.button.disabled,.woocommerce-page button.button:disabled,.woocommerce-page input.button.disabled,.woocommerce-page input.button:disabled,.loadgridlist-wrapper .woocount:hover,#primary .entry-summary .single_add_to_cart_button,.loadgridlist-wrapper .woocount{
		font-family: <?php echo esc_html( $wntr_bodyfont['font-family'] ); ?>, sans-serif;
	}
	.footer-bottom-right i.social-icon {
		font: normal normal normal 18px/1 FontAwesome;
		text-rendering: auto;
		-webkit-font-smoothing: antialiased;
	}	
	.treaco-blog.animate__fadeInUp {
     animation-name:fadeInUp;
	}
	.treaco-blog.animate__animated {
    animation-duration: var(--animate-duration);
    animation-fill-mode: both;
	}
	<?php if(!empty($webi['wntr_background_color'])) : ?>
		body.single-post, body.blog, body.archive, body.single-services, body.single-mp-event,body .treaco-blog{
			background:<?php echo sanitize_hex_color($webi['wntr_background_color']); ?>;					
		}
	<?php endif; ?>	
	.site-header .topbar-text{
		color:<?php echo esc_attr($webi['wntr_topbar_link_color']); ?>;
	}
	.site-header .topbar-text a:hover , .wntr-topbar-menu-links ul li a:hover , .wmc-currency-wrapper:hover .wmc-current-currency > span , .wmc-currency-wrapper:hover span.wmc-current-currency::after{
		color:<?php echo esc_attr($webi['wntr_top_menu_texthover_color']); ?>;
	}	
	.main-content-inner,.header-main .container ,.home .elementor-section.elementor-section-boxed > .elementor-container {
		max-width:<?php echo esc_attr($webi['wntr_container_size']); ?>;
		padding-right:15px;
		padding-left:15px;
	}
	
	.elementor-section.elementor-section-boxed > .elementor-container{
		max-width: 100%;
	}	
	<?php if(!empty($webi['wntr_show_cart_icon_menu'])){ ?>
			.header-cart{
				display:none;
			}
		<?php } ?>	
		<?php 
			$output = '';
			if(isset($webi['custom-css'])){
				$output = $webi['custom-css'];
				echo esc_attr($output);
			}
	?> 
	<?php if(!empty($webi['wntr_shop_banner']['url'])){ ?>
		.shop-page-title {
			text-align: center;
		    background-image: url(<?php echo esc_attr($webi['wntr_shop_banner']['url']); ?>) !important;
		    background-size:cover;
			background-position: center;
		    background-repeat: repeat;
		}
	<?php } ?>
	.shop-page-title .shop-entry-title-main{
		font-size: 24px;
		color:#000;
	}
	.shop-page-title .page-title-inner {
		padding: 10px 0;
		text-align: center;
		border-bottom: 1px solid #e4e4e4;
	}
	.main-content-inner{
	margin-top: 30px;
	}
	.shop-post nav.woocommerce-breadcrumb{
		margin: 5px 0 10px;
	}
	.page-title , .shop-page-title{
		 background-color:#f5f5f5;
	}
	<?php if(!empty($webi['wntr_blog_page_banner']['url'])){ ?>
		.page-title{
			text-align: center;
		    background-image: url(<?php echo esc_attr($webi['wntr_blog_page_banner']['url']); ?>) !important;
		    background-size:cover;
			background-position: center;
		    background-repeat: repeat;
		}
	<?php } ?>
	.page-title .page-title-inner{
		padding: 10px 0;
		text-align: center;
		border-bottom: 1px solid #e4e4e4;
	}
	.page-title .entry-title-main{
		font-size: 24px;
	}
	.treaco-blog .padding-full-layout .contents-sticky .blog-post-content.col-sm-12 {
		padding: 0 20% 0 20%;
	}
	.treaco-blog-details .padding-full-layout .single-post{
		flex: 0 0 100%;
		max-width: 100%;
	}	
	.product-content .content-area.full-layout-right,.product-content .content-area{
		float:left;
	}
	.product-content .content-area.full-layout-left{
		float:right;
	}
	.product-content .content-area.full-layout{
		max-width:100%
	}
	.breadcrumbs, .woocommerce .woocommerce-breadcrumb, .woocommerce-page .woocommerce-breadcrumb {
		float: none;
		line-height: 13px;
		margin: 5px 0 10px;
		color: #000;
		font-weight: 300;
	}
	.topbar-outer.container-fluid{
		max-width:100%;
	}
	.product-content , .main-content.right-sidebar , .main-content.left-sidebar {
		margin-right: -15px;
		margin-left: -15px;
	}
	@media (min-width: 768px) and (max-width: 1024px) {
		.contents-sticky{
			flex: 0 0 68%;
		}
		.contents-sticky .blog-meta{
			font-size:12px;
		}
		.treaco-blog .padding-full-layout .contents-sticky{
			flex: 0 0 100%;
		}
		.treaco-blog .blog-post-content.col-sm-3,.treaco-blog .blog-post-content.col-sm-4,.treaco-blog .blog-post-content.col-sm-6{
			flex: 0 0 100%;
			max-width:100%;
		}
		.search .site-content .blog, .site-content .blog, .blog-list.left-sidebar #container, .blog-list.right-sidebar #container, .blog-list.full-width #container, .archive.author #content, .archive.category #content, .archive.date #content, .home.blog #content, .archive.tag #content {
			-moz-column-count: 1;
			-webkit-column-count: 1;
			column-count: 1;
		}
		.treaco-blog .padding-full-layout .contents-sticky .blog-post-content.col-sm-12 {
			padding: 0;
		}
		.row{
			padding-left:0;
		}
		.product-content #secondary{
			padding-left: 15px;
    		padding-right: 15px;
		}
		.product-content {
			padding-left:0;
		}
		
		.treaco-blog-details .single-post{
			flex: 0 0 68%;
		}		
   }
	@media only screen and (max-width: 767px) {
		.main-content-inner {
			margin-top: 15px;
		}
		.product-content , .main-content.right-sidebar , .main-content.left-sidebar , .main-content {
			margin-right: 0;
			margin-left: 0;
		}
		.product-content{
			display: block !important;
		}
		.product-content .woocommerce-result-count{
			margin: 5px 10px 0;
		}
		.product-content .woocommerce-ordering{
			float: right !important;
		}
		.product-content {
			padding-left:0;
		}
		.treaco-blog .padding-full-layout .contents-sticky .blog-post-content.col-sm-12 {
			padding: 0;
		}
		.blog-related-post .related-blog-post{
			display:block !important;
		}
	}
</style>
<?php } }