<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Webibazaar
 */
global $webi;
$sticky_menu = "";
if(isset($webi['wntr_sticky_header'])){
	$sticky = $webi['wntr_sticky_header'];
	$sticky_menu = ($sticky == 1) ? 'header-fix' : '';
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>"> 
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11"/>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
 <?php wp_head();?> 
 <?php 
	$output = '';
	if(!empty($webi['custom-js'])){
		$output = $webi['custom-js'];
		esc_attr($output);
	}
 ?> 
</head>
<body <?php body_class(); ?>>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function(m,e,t,r,i,k,a){
        m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();
        for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
        k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)
    })(window, document,'script','https://mc.yandex.ru/metrika/tag.js?id=106514770', 'ym');

    ym(106514770, 'init', {ssr:true, webvisor:true, clickmap:true, ecommerce:"dataLayer", referrer: document.referrer, url: location.href, accurateTrackBounce:true, trackLinks:true});
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/106514770" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<svg style="display: none;">
	<symbol id="user" viewBox="0 0 22 22">
		  <path d="M11 5.5C10.3201 5.5 9.65552 5.70161 9.09023 6.07932C8.52494 6.45704 8.08434 6.99391 7.82417 7.62203C7.56399 8.25015 7.49592 8.94131 7.62855 9.60812C7.76119 10.2749 8.08858 10.8874 8.56932 11.3682C9.05007 11.8489 9.66257 12.1763 10.3294 12.309C10.9962 12.4416 11.6874 12.3735 12.3155 12.1133C12.9436 11.8532 13.4805 11.4126 13.8582 10.8473C14.2359 10.282 14.4375 9.61737 14.4375 8.9375C14.4375 8.02582 14.0753 7.15148 13.4307 6.50682C12.786 5.86216 11.9117 5.5 11 5.5ZM11 11C10.5921 11 10.1933 10.879 9.85414 10.6524C9.51496 10.4258 9.25061 10.1037 9.0945 9.72679C8.93839 9.34991 8.89755 8.93521 8.97713 8.53513C9.05671 8.13504 9.25315 7.76754 9.54159 7.47909C9.83004 7.19065 10.1975 6.99421 10.5976 6.91463C10.9977 6.83505 11.4124 6.87589 11.7893 7.032C12.1662 7.1881 12.4883 7.45246 12.7149 7.79164C12.9415 8.13081 13.0625 8.52958 13.0625 8.9375C13.062 9.48434 12.8445 10.0086 12.4578 10.3953C12.0711 10.782 11.5468 10.9995 11 11Z"/>
	<path d="M11 1.375C9.09636 1.375 7.23546 1.9395 5.65264 2.99711C4.06982 4.05471 2.83616 5.55793 2.10766 7.31667C1.37917 9.07541 1.18856 11.0107 1.55995 12.8777C1.93133 14.7448 2.84802 16.4598 4.1941 17.8059C5.54018 19.152 7.25519 20.0687 9.12226 20.4401C10.9893 20.8114 12.9246 20.6208 14.6833 19.8923C16.4421 19.1638 17.9453 17.9302 19.0029 16.3474C20.0605 14.7645 20.625 12.9036 20.625 11C20.6221 8.44819 19.6071 6.00172 17.8027 4.19731C15.9983 2.39291 13.5518 1.37791 11 1.375ZM6.87501 18.1342V17.1875C6.87555 16.6407 7.09302 16.1164 7.4797 15.7297C7.86638 15.343 8.39066 15.1255 8.93751 15.125H13.0625C13.6093 15.1255 14.1336 15.343 14.5203 15.7297C14.907 16.1164 15.1245 16.6407 15.125 17.1875V18.1342C13.8732 18.8651 12.4496 19.2503 11 19.2503C9.5504 19.2503 8.12683 18.8651 6.87501 18.1342ZM16.4945 17.1366C16.4808 16.2349 16.1134 15.3746 15.4714 14.7411C14.8295 14.1076 13.9644 13.7517 13.0625 13.75H8.93751C8.03563 13.7517 7.17052 14.1076 6.52857 14.7411C5.88661 15.3746 5.51921 16.2349 5.50551 17.1366C4.25877 16.0234 3.37957 14.5577 2.98433 12.9337C2.58909 11.3097 2.69645 9.60392 3.29219 8.04228C3.88794 6.48063 4.94397 5.13677 6.32045 4.18864C7.69693 3.24051 9.32893 2.73283 11.0003 2.73283C12.6718 2.73283 14.3038 3.24051 15.6803 4.18864C17.0567 5.13677 18.1128 6.48063 18.7085 8.04228C19.3043 9.60392 19.4116 11.3097 19.0164 12.9337C18.6211 14.5577 17.7419 16.0234 16.4952 17.1366H16.4945Z"/>
	  </symbol>

	  <symbol id="call" viewBox="0 0 512 512">
	    <path d="M477.679,222.71C473.752,99.221,375.854,0,256,0S38.248,99.221,34.321,222.71C14.387,226.709,0.032,244.202,0,264.533
		V384c0.028,23.553,19.114,42.639,42.667,42.667c0.049,42.395,34.405,76.751,76.8,76.8h79.173
		c3.024,5.262,8.624,8.514,14.693,8.533h76.8c9.422-0.009,17.057-7.645,17.067-17.067V460.8
		c-0.009-9.422-7.645-17.057-17.067-17.067h-76.8c-6.07,0.019-11.669,3.271-14.693,8.533h-79.173
		c-14.132-0.015-25.585-11.468-25.6-25.6h25.6c9.422-0.009,17.057-7.645,17.067-17.067V238.933
		c-0.009-9.422-7.645-17.057-17.067-17.067H85.745C90.03,127.028,164.639,51.2,256,51.2s165.97,75.828,170.255,170.667h-33.721
		c-9.422,0.009-17.057,7.645-17.067,17.067V409.6c0.009,9.422,7.645,17.057,17.067,17.067h76.8
		C492.886,426.639,511.972,407.553,512,384V264.533C511.968,244.202,497.613,226.709,477.679,222.71z M213.333,460.8h76.8
		l0.012,34.133h-76.812V460.8z M119.467,469.333h76.8V486.4h-76.8c-32.974-0.037-59.696-26.759-59.733-59.733H76.8
		C76.828,450.219,95.914,469.306,119.467,469.333z M119.467,238.933l0.012,170.667H42.667c-14.132-0.015-25.585-11.468-25.6-25.6
		V264.533c0.015-14.132,11.468-25.585,25.6-25.6H119.467z M256,34.133c-100.779,0-183.234,83.459-187.526,187.733H51.408
		c4.32-113.687,94.415-204.8,204.592-204.8s200.272,91.113,204.592,204.8h-17.066C439.234,117.593,356.779,34.133,256,34.133z
		M494.933,384c-0.015,14.132-11.468,25.585-25.6,25.6h-76.8V238.933h76.8c14.132,0.015,25.585,11.468,25.6,25.6V384z"  />
		<path d="M349.867,332.8H332.8v-21.333c0-4.713-3.82-8.533-8.533-8.533s-8.533,3.82-8.533,8.533V332.8h-36.162l43.446-72.408
		c1.569-2.614,1.624-5.867,0.145-8.532c-1.479-2.666-4.268-4.34-7.317-4.392c-3.048-0.052-5.893,1.527-7.462,4.141l-51.2,85.333
		c-1.582,2.636-1.623,5.919-0.109,8.595s4.351,4.33,7.425,4.33h51.233v25.6c0,4.713,3.82,8.533,8.533,8.533
		s8.533-3.82,8.533-8.533v-25.6h17.067c4.713,0,8.533-3.82,8.533-8.533S354.58,332.8,349.867,332.8z"  />
		<path d="M158.313,367.838c-3.535,1.773-5.389,5.743-4.48,9.592s4.345,6.568,8.3,6.57h76.8c4.713,0,8.533-3.82,8.533-8.533
		s-3.82-8.533-8.533-8.533H191.45c21.067-15.825,47.483-42.5,47.483-76.8c0-17.745-10.983-33.637-27.582-39.911
		c-16.599-6.274-35.348-1.619-47.085,11.69c-3.118,3.535-2.78,8.928,0.754,12.046c3.535,3.118,8.928,2.78,12.046-0.754
		c7.041-7.987,18.291-10.782,28.251-7.018c9.96,3.764,16.55,13.3,16.549,23.947C221.867,335.4,158.946,367.517,158.313,367.838z"  
		/>
	  </symbol>

	  <symbol viewBox="0 0 25 27" id="cart">
		<path d="M5.81188 7.9333H18.5754C20.1708 7.9333 21.5003 9.66664 21.7662 11.4L23.3617 21.8C23.6277 23.5342 21.7662 25.2666 20.1708 25.2666H4.21644C2.62101 25.2666 0.759524 23.5342 1.02557 21.8L2.62101 11.4C2.88691 9.66664 4.21644 7.9333 5.81188 7.9333Z" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/>
		<path d="M7.40723 11.4001V6.17992" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/>
		<path d="M16.98 6.19994V11.3999" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/>
		<path d="M1.33374 19.9928H23.0536" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/>
		<path d="M16.9798 6.2C16.9798 4.46667 16.0526 2.61926 14.5774 1.69397C13.1023 0.768677 11.2848 0.768677 9.80965 1.69397C8.3345 2.61926 7.40723 4.46667 7.40723 6.2" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/>
	  </symbol>
		

	  <symbol viewBox="0 0 486.982 486.982" id="tag">
	    <path d="M131.35,422.969c14.6,14.6,38.3,14.6,52.9,0l181.1-181.1c5.2-5.2,9.2-11.4,11.8-18c18.2,5.1,35.9,7.8,51.5,7.7
	    c38.6-0.2,51.4-17.1,55.6-27.2c4.2-10,7.2-31-19.9-58.6c-0.3-0.3-0.6-0.6-0.9-0.9c-16.8-16.8-41.2-32.3-68.9-43.8
	    c-5.1-2.1-10.2-4-15.2-5.8v-0.3c-0.3-22.2-18.2-40.1-40.4-40.4l-108.5-1.5c-14.4-0.2-28.2,5.4-38.3,15.6l-181.2,181.1
	    c-14.6,14.6-14.6,38.3,0,52.9L131.35,422.969z M270.95,117.869c12.1-12.1,31.7-12.1,43.8,0c7.2,7.2,10.1,17.1,8.7,26.4
	    c11.9,8.4,26.1,16.2,41.3,22.5c5.4,2.2,10.6,4.2,15.6,5.9l-0.6-43.6c0.9,0.4,1.7,0.7,2.6,1.1c23.7,9.9,45,23.3,58.7,37
	    c0.2,0.2,0.4,0.4,0.6,0.6c13,13.3,14.4,21.8,13.3,24.4c-3.4,8.1-39.9,15.3-95.3-7.8c-16.2-6.8-31.4-15.2-43.7-24.3
	    c-0.4,0.5-0.9,1-1.3,1.5c-12.1,12.1-31.7,12.1-43.8,0C258.85,149.569,258.85,129.969,270.95,117.869z"></path>
	  </symbol>

	  <symbol viewBox="0 0 21 21" id="head_search">
		<path d="M20 20L15.514 15.506M18 9.5C18 11.7543 17.1045 13.9163 15.5104 15.5104C13.9163 17.1045 11.7543 18 9.5 18C7.24566 18 5.08365 17.1045 3.48959 15.5104C1.89553 13.9163 1 11.7543 1 9.5C1 7.24566 1.89553 5.08365 3.48959 3.48959C5.08365 1.89553 7.24566 1 9.5 1C11.7543 1 13.9163 1.89553 15.5104 3.48959C17.1045 5.08365 18 7.24566 18 9.5Z" stroke-width="2" stroke-linecap="round"/>
	  </symbol>

	  <symbol id="arleft" viewBox="0 0 18 16">
			<path d="M8 1L1 8L8 15M1 8H17" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
			
	  </symbol>

	  <symbol id="arright" viewBox="0 0 18 16">
			<path d="M10 1L17 8M17 8L10 15M17 8H1" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
			
	  </symbol>

	   <symbol id="arrowright" viewBox="0 0 14 12">
			<path d="M1 6L13 6M7.75 11L13 6L7.75 1" stroke="black" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
	  </symbol>

	 <symbol id="hdrcalls" viewBox="0 0 32 32">
	     <path d="M16.0014 1.87005e-05C22.665 -0.00798129 27.1727 2.55202 30.3085 5.32001C31.6284 6.48401 32.2324 8.23601 31.9184 9.88001L31.6044 11.54C31.3085 13.092 29.8545 14.136 28.2086 13.976L24.9348 13.66C23.5069 13.522 22.449 12.48 22.001 11C21.3931 8.99001 21.0011 7.50001 21.0011 7.50001C19.422 6.82323 17.7193 6.48267 16.0014 6.50001C13.9735 6.50001 12.5256 6.93001 11.0017 7.50001C11.0017 7.50001 10.5937 8.99201 10.0018 11C9.6058 12.342 8.99383 13.514 7.59592 13.654L4.34212 13.98C3.54929 14.0561 2.7544 13.8572 2.09091 13.4165C1.42741 12.9759 0.935712 12.3203 0.698349 11.56L0.20238 9.90401C-0.0434323 9.11134 -0.0657701 8.26621 0.137826 7.46165C0.341421 6.6571 0.763055 5.92433 1.35631 5.34402C4.20413 2.57402 9.34781 0.0060187 16.0014 1.87005e-05ZM22.951 7.05401L23.003 7.24401L23.199 7.96001C23.3709 8.57201 23.6149 9.43201 23.9149 10.42C24.1889 11.32 24.6949 11.628 25.1268 11.67L28.4006 11.986C29.0926 12.052 29.5506 11.632 29.6406 11.166L29.9545 9.50601C30.0379 9.01237 29.9924 8.50556 29.8225 8.03465C29.6526 7.56373 29.364 7.14467 28.9846 6.81801C26.1348 4.30402 22.081 1.99202 16.0054 2.00002C9.85378 2.00802 5.21407 4.38402 2.74822 6.78001C2.41689 7.10555 2.18238 7.51666 2.07081 7.96757C1.95924 8.41848 1.97497 8.89151 2.11626 9.33401L2.61223 10.992C2.79422 11.604 3.45218 12.06 4.14014 11.992L7.39593 11.664C7.47393 11.656 7.49993 11.64 7.50393 11.638C7.5431 11.6111 7.577 11.5772 7.60392 11.538C7.74391 11.362 7.9099 11.026 8.08389 10.436C8.39758 9.36957 8.70356 8.30087 9.00183 7.23001L9.05583 7.03601C9.25982 6.30201 9.97177 5.79202 10.3018 5.62602C11.9397 5.01402 13.6415 4.50002 16.0014 4.50002C17.9799 4.48297 19.9407 4.87446 21.761 5.65001C22.063 5.77401 22.725 6.21801 22.935 6.99201L22.939 7.00601L22.951 7.05401ZM16.0014 20C16.0014 19.7348 15.8961 19.4804 15.7085 19.2929C15.521 19.1054 15.2667 19 15.0015 19C14.7363 19 14.4819 19.1054 14.2944 19.2929C14.1069 19.4804 14.0015 19.7348 14.0015 20V24C14.0015 24.2652 14.1069 24.5196 14.2944 24.7071C14.4819 24.8946 14.7363 25 15.0015 25H18.0113C18.2765 25 18.5308 24.8946 18.7183 24.7071C18.9059 24.5196 19.0112 24.2652 19.0112 24C19.0112 23.7348 18.9059 23.4804 18.7183 23.2929C18.5308 23.1054 18.2765 23 18.0113 23H16.0014V20ZM7.00196 23C7.00196 21.8181 7.23474 20.6478 7.687 19.5559C8.13926 18.4639 8.80216 17.4718 9.63783 16.636C10.4735 15.8003 11.4656 15.1374 12.5575 14.6851C13.6493 14.2328 14.8196 14 16.0014 14C17.1832 14 18.3535 14.2328 19.4453 14.6851C20.5372 15.1374 21.5293 15.8003 22.365 16.636C23.2006 17.4718 23.8635 18.4639 24.3158 19.5559C24.7681 20.6478 25.0008 21.8181 25.0008 23C25.0008 25.387 24.0527 27.6761 22.365 29.364C20.6772 31.0518 18.3882 32 16.0014 32C13.6146 32 11.3256 31.0518 9.63783 29.364C7.95011 27.6761 7.00196 25.387 7.00196 23ZM16.0014 16C14.145 16 12.3646 16.7375 11.052 18.0503C9.73929 19.363 9.00183 21.1435 9.00183 23C9.00183 24.8565 9.73929 26.637 11.052 27.9497C12.3646 29.2625 14.145 30 16.0014 30C17.8578 30 19.6382 29.2625 20.9508 27.9497C22.2635 26.637 23.001 24.8565 23.001 23C23.001 21.1435 22.2635 19.363 20.9508 18.0503C19.6382 16.7375 17.8578 16 16.0014 16Z" />
	 </symbol>

	 <symbol id="blognav" viewBox="0 0 18 18">
	<path fill-rule="evenodd" clip-rule="evenodd" d="M9 0.75C4.44375 0.75 0.75 4.44375 0.75 9C0.75 13.5563 4.44375 17.25 9 17.25C13.5563 17.25 17.25 13.5563 17.25 9C17.25 4.44375 13.5563 0.75 9 0.75ZM7.34475 6.53025C7.20813 6.3888 7.13254 6.19935 7.13425 6.0027C7.13595 5.80605 7.21483 5.61794 7.35389 5.47889C7.49294 5.33983 7.68105 5.26095 7.8777 5.25924C8.07435 5.25754 8.2638 5.33313 8.40525 5.46975L11.4053 8.46975C11.5459 8.6104 11.6248 8.80113 11.6248 9C11.6248 9.19887 11.5459 9.3896 11.4053 9.53025L8.40525 12.5303C8.2638 12.6669 8.07435 12.7425 7.8777 12.7408C7.68105 12.739 7.49294 12.6602 7.35389 12.5211C7.21483 12.3821 7.13595 12.1939 7.13425 11.9973C7.13254 11.8007 7.20813 11.6112 7.34475 11.4698L9.8145 9L7.34475 6.53025Z"/>
	</symbol>
		
			<symbol id="seller" viewBox="0 0 32 32">
				<path d="M10.9835 20.9858L20.9858 10.9835" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
				<path d="M11.817 12.6506C12.2774 12.6506 12.6506 12.2774 12.6506 11.817C12.6506 11.3567 12.2774 10.9835 11.817 10.9835C11.3567 10.9835 10.9835 11.3567 10.9835 11.817C10.9835 12.2774 11.3567 12.6506 11.817 12.6506Z" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
				<path d="M20.1522 20.9858C20.6126 20.9858 20.9858 20.6126 20.9858 20.1522C20.9858 19.6919 20.6126 19.3187 20.1522 19.3187C19.6919 19.3187 19.3187 19.6919 19.3187 20.1522C19.3187 20.6126 19.6919 20.9858 20.1522 20.9858Z" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
				<path d="M4.31532 7.98282C4.31532 7.01014 4.70172 6.0773 5.38951 5.38951C6.0773 4.70172 7.01014 4.31532 7.98282 4.31532H9.64986C10.6182 4.31477 11.5471 3.93124 12.2338 3.24841L13.4007 2.08148C13.7415 1.73874 14.1468 1.46675 14.5931 1.28115C15.0394 1.09555 15.5179 1 16.0013 1C16.4847 1 16.9633 1.09555 17.4096 1.28115C17.8559 1.46675 18.2611 1.73874 18.6019 2.08148L19.7688 3.24841C20.4555 3.93124 21.3844 4.31477 22.3527 4.31532H24.0198C24.9925 4.31532 25.9253 4.70172 26.6131 5.38951C27.3009 6.0773 27.6873 7.01014 27.6873 7.98282V9.64986C27.6878 10.6182 28.0714 11.5471 28.7542 12.2338L29.9211 13.4007C30.2639 13.7415 30.5359 14.1468 30.7215 14.5931C30.9071 15.0394 31.0026 15.5179 31.0026 16.0013C31.0026 16.4847 30.9071 16.9633 30.7215 17.4096C30.5359 17.8559 30.2639 18.2611 29.9211 18.6019L28.7542 19.7688C28.0714 20.4555 27.6878 21.3844 27.6873 22.3527V24.0198C27.6873 24.9925 27.3009 25.9253 26.6131 26.6131C25.9253 27.3009 24.9925 27.6873 24.0198 27.6873H22.3527C21.3844 27.6878 20.4555 28.0714 19.7688 28.7542L18.6019 29.9211C18.2611 30.2639 17.8559 30.5359 17.4096 30.7215C16.9633 30.9071 16.4847 31.0026 16.0013 31.0026C15.5179 31.0026 15.0394 30.9071 14.5931 30.7215C14.1468 30.5359 13.7415 30.2639 13.4007 29.9211L12.2338 28.7542C11.5471 28.0714 10.6182 27.6878 9.64986 27.6873H7.98282C7.01014 27.6873 6.0773 27.3009 5.38951 26.6131C4.70172 25.9253 4.31532 24.9925 4.31532 24.0198V22.3527C4.31477 21.3844 3.93124 20.4555 3.24841 19.7688L2.08148 18.6019C1.73874 18.2611 1.46675 17.8559 1.28115 17.4096C1.09555 16.9633 1 16.4847 1 16.0013C1 15.5179 1.09555 15.0394 1.28115 14.5931C1.46675 14.1468 1.73874 13.7415 2.08148 13.4007L3.24841 12.2338C3.93124 11.5471 4.31477 10.6182 4.31532 9.64986V7.98282" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
				</symbol>

				<symbol id="shop" viewBox="0 0 28 28">
						<g clip-path="url(#clip0_6_12)">
						<path d="M11.132 18.8678L14.9989 7.26682C15.1422 6.83703 14.9099 6.37246 14.4801 6.22918C14.0504 6.08595 13.5857 6.31821 13.4425 6.748L9.57551 18.349C9.43229 18.7788 9.66454 19.2434 10.0943 19.3867C10.1804 19.4153 10.2679 19.4289 10.3538 19.4289C10.6973 19.429 11.0173 19.2116 11.132 18.8678V18.8678Z" fill="#000" stroke="none"/>
						<path d="M16.9276 15.2689C18.2846 15.2689 19.3885 14.1649 19.3885 12.808C19.3885 11.451 18.2846 10.347 16.9276 10.347C15.5706 10.347 14.4667 11.451 14.4667 12.808C14.4667 14.1649 15.5706 15.2689 16.9276 15.2689ZM16.9276 11.9877C17.3799 11.9877 17.7479 12.3557 17.7479 12.808C17.7479 13.2603 17.3799 13.6283 16.9276 13.6283C16.4753 13.6283 16.1073 13.2603 16.1073 12.808C16.1073 12.3557 16.4753 11.9877 16.9276 11.9877Z" fill="#000" stroke="none"/>
						<path d="M7.64679 10.347C6.28983 10.347 5.18585 11.451 5.18585 12.808C5.18585 14.1649 6.28983 15.2689 7.64679 15.2689C9.00375 15.2689 10.1077 14.1649 10.1077 12.808C10.1077 11.451 9.0038 10.347 7.64679 10.347V10.347ZM7.64679 13.6283C7.19447 13.6283 6.82648 13.2603 6.82648 12.808C6.82648 12.3557 7.19447 11.9877 7.64679 11.9877C8.09911 11.9877 8.4671 12.3557 8.4671 12.808C8.4671 13.2603 8.09916 13.6283 7.64679 13.6283Z" fill="#000" stroke="none"/>
						<path d="M27.8362 10.1721L24.9756 6.35804L25.0873 5.57694C25.1237 5.32133 25.0378 5.06343 24.8552 4.88088L23.1151 3.14072L24.8552 1.40057C25.1755 1.08026 25.1755 0.56084 24.8552 0.24048C24.5349 -0.0798244 24.0154 -0.0798244 23.6951 0.24048L21.955 1.98064L20.2148 0.24048C20.0323 0.0578787 19.7744 -0.0277619 19.5188 0.00844121L11.398 1.16853C11.2223 1.19363 11.0595 1.27506 10.934 1.40057L0.879832 11.4548C-0.292942 12.6275 -0.292942 14.5357 0.879832 15.7085L9.38718 24.2159C9.5612 24.3899 9.75173 24.5375 9.95336 24.6598V24.9924C9.95336 26.6509 11.3027 28.0002 12.9612 28.0002H24.9924C26.6509 28.0002 28.0002 26.6509 28.0002 24.9924V10.6643C28.0002 10.4868 27.9427 10.3141 27.8362 10.1721V10.1721ZM2.03992 14.5484C1.50682 14.0153 1.50682 13.1479 2.03992 12.6148L11.9007 2.75403L19.3447 1.69063L20.7948 3.14078L19.6347 4.30086L19.0547 3.72079C18.7344 3.40049 18.215 3.40049 17.8946 3.72079C17.5742 4.0411 17.5742 4.56052 17.8946 4.88088L20.2148 7.20111C20.375 7.36129 20.5849 7.4414 20.7948 7.4414C21.0047 7.4414 21.2147 7.36129 21.3748 7.20111C21.6952 6.8808 21.6952 6.36138 21.3748 6.04102L20.7948 5.46095L21.9549 4.30086L23.405 5.75101L22.3416 13.195L12.4808 23.0558C12.2226 23.314 11.8792 23.4562 11.514 23.4562C11.1488 23.4562 10.8055 23.314 10.5473 23.0558L2.03992 14.5484ZM26.3596 24.9924C26.3596 25.7463 25.7463 26.3596 24.9924 26.3596H12.9612C12.2413 26.3596 11.65 25.8003 11.5981 25.0934C12.34 25.0728 13.0759 24.7809 13.6408 24.2159L23.695 14.1617C23.8205 14.0362 23.902 13.8734 23.9271 13.6977L24.6475 8.65492L26.3596 10.9377V24.9924Z" fill="#000" stroke="none"/>
						</g>
				</symbol>
					


</svg>
	<?php wp_body_open(); ?>
 	<div id="page-preloader" class="visible">
		<div class="preloader">
			<div id="loading-center-absolute">
			    <div class="object" id="object_one"></div>
			</div>
		</div>
	</div>  
<?php if ( get_option('wntr_control_panel') == 'yes' ) do_action('wntr_show_panel'); ?>
<div id="page" class="hfeed site">
<?php if ( get_header_image() ) : ?>
<div id="site-header"> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"> <img src="<?php header_image(); ?>" width="<?php echo esc_attr(get_custom_header()->width); ?>" height="<?php echo esc_attr(get_custom_header()->height); ?>" alt="<?php echo esc_attr_e('Siteheader','technivo'); ?>"> </a> </div>
<?php endif; ?>
<!-- Header -->
<header id="masthead" class="site-header  site-header-fix <?php echo "header".esc_attr(get_option('wntr_header_layout'));  ?> <?php echo esc_attr(wntr_sidebar_position()); ?>">
	<div class="header-main <?php echo esc_attr($sticky_menu);?>">
		<?php if(!empty($webi['wntr_show_topbanner']) && $webi['wntr_show_topbanner'] == 'yes') : ?>
		<div class="topbar-outer">
			<div class="<?php esc_html_e($webi['wntr_header_grid'], 'technivo');?>">
				<div class="topbar-main">		
				<div class="hdr-top-menu">
				<a href="about-us">about us</a>
				<div class="topbar-account">
					<!-- account -->
			<?php if ( has_nav_menu('account-menu') ) { ?>
						<div class="topbar-link">
							<span class="top-svg"><svg width="24px" height="24px"><use xlink:href="#user"></use></svg></span>			
							<p class="account-block">
								<span class="account-label"><?php echo esc_attr_e('My Account','technivo'); ?></span>
								<span class="account-sub"><?php echo esc_attr_e('Register & Login','technivo'); ?></span>
							</p>
							<div class="topbar-link-wrapper">
								<div class="account-menu-links">
									<?php
									// Woo commerce Header Cart
									$wntr_header_menu =array(
									'menu' => esc_html__('wt Acount Links','technivo'),
									'depth'=> 1,
									'echo' => false,
									'menu_class'      => 'account-menu',
									'container'       => '',
									'container_class' => '',
									'theme_location' => 'account-menu'
									);
										echo wp_nav_menu($wntr_header_menu);
									?>
									<?php
									$logout_url = '';
									if ( is_user_logged_in() ) {
										$myaccount_page_id = get_option( 'woocommerce_myaccount_page_id' );
										if ( $myaccount_page_id ) {
										$logout_url = wp_logout_url( get_permalink( $myaccount_page_id ) );
										if ( get_option( 'woocommerce_force_ssl_checkout' ) == 'yes' )
										if (is_ssl()) {
										$logout_url = str_replace( 'http:', 'https:', $logout_url );
										}
									} ?>
									<a class="login-out" href="<?php echo esc_url($logout_url); ?>" ><?php echo esc_attr_e('Logout','technivo'); ?></a>
									<?php }
									else { ?>
										<a class="login-out" href="<?php echo  get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>"><?php echo esc_attr_e('Login','technivo'); ?></a>
									<?php } ?>
								</div>
							</div>
						</div>
						<?php }else if(in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) )){ ?>
						<div class="topbar-link">
							<span class="top-svg"><svg width="26px" height="25px"><use xlink:href="#user"></use></svg></span>	
							<p class="account-block">
								<span class="account-label"><?php echo esc_attr_e('My Account','technivo'); ?></span>
								<span class="account-sub"><?php echo esc_attr_e('Register & Login','technivo'); ?></span>
							</p>
							<div class="topbar-link-wrapper">
								<div class="account-menu-links">											
									<?php
									$logout_url = '';
									if ( is_user_logged_in() ) {
										$myaccount_page_id = get_option( 'woocommerce_myaccount_page_id' );
										if ( $myaccount_page_id ) {
										$logout_url = wp_logout_url( get_permalink( $myaccount_page_id ) );
										if ( get_option( 'woocommerce_force_ssl_checkout' ) == 'yes' )
										if (is_ssl()) {
										$logout_url = str_replace( 'http:', 'https:', $logout_url );
										}
									} ?>
									<a class="login-out" href="<?php echo esc_url($logout_url); ?>" ><?php echo esc_attr_e('Logout','technivo'); ?></a>
									<?php }
									else { ?>
									<a class="login-out" href="<?php echo  get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>"><?php echo esc_attr_e('User Login','technivo'); ?></a>
									<?php } ?>
								</div>
							</div>
						</div>
	
						<?php } ?>
					</div>
					<!-- account -->
					<div class="wntr-topbar-menu-links">
						<div class="topbar-menu-toggle"></div>					
						<?php if (has_nav_menu('wishlist')) : ?>
							<div class="wishlist-menu">
								<?php wp_nav_menu( array( 'theme_location' => 'wishlist' ) ); ?>
							</div>
						<?php endif; ?>
					</div>
			</div>

				<div class="topbar-currancy">
					<?php if ($webi['wntr_show_topbanner_text'] == 'yes') : ?>
					<div class="topbar-middletext">
						<span title="<?php echo esc_html( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php echo esc_html(stripslashes($webi['wntr_Offer']));?></span>					
					</div>
					<?php endif; ?>

				<div class="wntr-topbar-menu-links">
					<div class="topbar-menu-toggle"></div>
				<?php if (is_active_sidebar('header-currency')) : ?>
					<div class="header-currency">
						
						<?php wntr_get_widget('header-currency');  ?>
					</div>
					<?php endif; ?>
				</div>
				</div>
			</div>	
		</div>		
		</div>
		<?php endif; ?>
		
		<div class="header-top">
			<div class="header-flex theme-container d-flex justify-content-between align-items-center <?php echo !empty($webi['wntr_header_grid']) ? $webi['wntr_header_grid'] : 'theme-container' ; ?>">

					<div class="header-left ">
						<!-- Header LOGO-->
						<div class="header-logo">
							<?php $wntr_logo_image = (isset($webi['wntr_logo_image']) && !empty($webi['wntr_logo_image']) ) ? $webi['wntr_logo_image']['url'] : ''; ?>
							<?php $wntr_logo_image_alt = (isset($webi['wntr_logo_image_alt']) && !empty($webi['wntr_logo_image_alt']) ) ? $webi['wntr_logo_image_alt'] : ''; ?>
							<?php if ($wntr_logo_image != '') : ?>
							<span class="site-icon">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="site-title">
									<img alt="<?php esc_html($wntr_logo_image_alt); ?>" class="site-logo" src="<?php echo esc_url($wntr_logo_image); ?>" />
								</a>
							</span>
							<?php else: ?>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="site-title">
									<img alt="logo" src='<?php echo esc_url( home_url( '/' )) ?>wp-content/themes/technivo/images/webi/logo.svg'>
								</a>
							<?php endif; ?>
							<?php if(!empty($webi['wntr_showsite_description']) && $webi['wntr_showsite_description'] == 'yes') : ?>
								<h2 class="site-description">
									<?php bloginfo( 'description' ); ?>
								</h2>
							<?php endif; // End wntr_showsite_description ?>
						</div>
						<!-- Header Mob LOGO-->
						<div class="header-mob-logo">
							<?php $wntr_mob_logo_image = (isset($webi['wntr_mob_logo_image']) && !empty($webi['wntr_mob_logo_image']) ) ? $webi['wntr_mob_logo_image']['url'] : ''; ?>
							<?php $wntr_mob_logo_image_alt = (isset($webi['wntr_mob_logo_image_alt']) && !empty($webi['wntr_mob_logo_image_alt']) ) ? $webi['wntr_mob_logo_image_alt'] : ''; ?>
							<?php if ($wntr_mob_logo_image != '') : ?>
								<span class="site-icon">
									<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="site-title">
										<img alt="<?php esc_html($wntr_mob_logo_image_alt); ?>" class="site-logo" src="<?php echo esc_url($wntr_mob_logo_image); ?>" />
									</a>
								</span><?php echo do_shortcode('[elementor-template id="5101"]'); ?>							
							<?php else: ?>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="site-title">
									<img alt="logo" src='<?php echo esc_url( home_url( '/' )) ?>wp-content/themes/technivo/images/webi/mob-logo.svg'>
								</a>
								<?php endif; ?>
							<?php if(!empty($webi['wntr_showsite_description']) && $webi['wntr_showsite_description'] == 'yes') : ?>
								<h2 class="site-description">
									<?php bloginfo( 'description' ); ?>
								</h2>
							<?php endif; // End wntr_showsite_description ?>
						</div>
					</div>		

					 <!-- #site-navigation -->
					 <nav id="site-navigation" class="navigation-bar main-navigation">
						<h3 class="menu-toggle"><?php esc_html_e( 'Menu', 'adorra_03' ); ?></h3>
						<a class="screen-reader-text skip-link" href="#content" title="<?php esc_attr_e( 'Skip to content', 'adorra_03' ); ?>"><?php esc_html_e( 'Skip to content', 'adorra_03' ); ?></a>
						<div class="mega-menu">
							<?php wp_nav_menu( array( 'theme_location' => 'primary','menu_class' => 'mega' ) ); ?>
						</div>
						<div class="mobile-menu">
							<h3 class="mob-toggle">Меню</h3><span class="close-menu"></span>
							<?php wp_nav_menu( array( 'theme_location' => 'primary','menu_class' => 'mobile-menu-inner') ); ?>
						</div>
				</nav>

					<div class="header-maintxt">
					<?php if ($webi['wntr_show_headerbottom_text'] == 'yes') : ?>
						<div class="wntr-firsttxt">
						<span class="hdr-call"><svg width="30px" height="32px"><use xlink:href="#seller"></use></svg></span>
						<div class="hdrtxt-main">
						<span class="hdr-time">best sellers</span>
						<div class="headerbottom-text"><?php echo esc_html(stripslashes($webi['wntr_headerbottom_text']))?>
						</div>
					</div>
					</div>
					<?php endif; ?>

					<div class="header-right ">					
						<div class="head-cart">
								<?php
									// Woo commerce Header Cart
								if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) && is_active_sidebar('header-widget') ) { ?>
									<div class="header-cart">
										<div class="cart-item togg">
											<?php global $woocommerce;
											ob_start();?>
											<div class="shopping_cart tog" title="<?php esc_attr_e('View your shopping cart', 'festive'); ?>">
												
												<div class="cart-qty">
													<span class="shopping-svg"><svg width="22px" height="26px"><use xlink:href="#cart"></use></svg></span>
													<div class="mycart"><a class="mycart">Корзина</a>
													<a class="cart-contents" href="<?php echo esc_url(wc_get_cart_url()); ?>" title="Ваша корзина">

													<span class="quanitity first_qty"><?php echo sprintf(_n('%d', '%d', $woocommerce->cart->cart_contents_count, 'festive'), $woocommerce->cart->cart_contents_count);?></span>
												<span class="cart-subt"><?php echo get_woocommerce_currency_symbol(); ?><?php echo $woocommerce->cart->get_subtotal() ?>.00</span>
												</a>
												</div>
												</div>
											</div>
											<?php global $woocommerce; ?>
											<?php wntr_get_widget('header-widget'); ?>
										</div>
									</div>
								<?php }else if(in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) )){ ?>
									<div class="header-cart">
										<div class="cart-item togg">
											<?php global $woocommerce;
											ob_start();?>
											<div class="shopping_cart tog" title="Ваша корзина">
												
												<div class="cart-qty">
													<span class="shopping-svg"><svg width="22px" height="26px"><use xlink:href="#cart"></use></svg></span>
													<div class="mycart"><a class="mycart">Корзина</a>
													<a class="cart-contents" href="<?php echo esc_url(wc_get_cart_url()); ?>" title="Ваша корзина">

													<span class="quanitity first_qty"><?php echo sprintf(_n('%d', '%d', $woocommerce->cart->cart_contents_count, 'festive'), $woocommerce->cart->cart_contents_count);?></span>
												<span class="cart-subt"><?php echo get_woocommerce_currency_symbol(); ?><?php echo $woocommerce->cart->get_subtotal() ?>.00</span>
												</a>
												</div>
												</div>
											</div>
											<?php global $woocommerce; ?>
											<?php wntr_get_widget('header-widget'); ?>
										</div>
									</div>
								<?php } ?>
							</div>
						</div>
					</div>

					</div>
			</div>
			<div class="header-bottom">

				<div class="<?php esc_html_e($webi['wntr_header_grid']);?>">
					<div class="wbbottom">

				<div class="hdr-category-main">
                        <div class="category-list">
                            <?php if (is_active_sidebar('home-category')) : ?>
                                <?php wntr_get_widget('home-category'); ?>
                            <?php endif; ?>
                        </div>

					<?php if ($webi['wntr_show_headerbottom_text'] == 'yes') : ?>
						<div class="wntr-sectxt">
						<span class="hdr-call"><svg width="28px" height="30px"><use xlink:href="#shop"></use></svg></span>
						<div class="wntr_headerbottom_sec_text"><?php echo esc_html(stripslashes($webi['wntr_headerbottom_sec_text']))?>
							<a href="shop-2-2">shop now</a>
						</div>
					</div>
					<?php endif; ?>
				</div>
                      <!-- search -->
					 <?php if (is_active_sidebar('header-search')) : ?>
					 <div class="header-search">
						 <div class="header-toggle"><li><svg width="20px" height="20px"><use xlink:href="#head_search"></use></svg></li></div>
						 
						 <?php wntr_get_widget('header-search');  ?>
						 
					 </div>
					 <?php else : 
					 if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ){?>
						 <?php if ($webi['wntr_show_search'] == '1') { ?>
						 <div class="header-search">
							 <div class="header-toggle"><li><svg width="20px" height="20px"><use xlink:href="#head_search"></use></svg></li></div>
							 <form method="get" class="woocommerce-product-search" action="<?php echo get_permalink( wc_get_page_id( 'shop' ) ); ?>">
							 <div class="product-search-widget">
								 <select class="orderby" name="product_cat">
								 <?php  	
								 
											 $taxonomy     = 'product_cat';
											   $orderby      = 'name';  
											   $show_count   = 0;      // 1 for yes, 0 for no
											   $pad_counts   = 0;      // 1 for yes, 0 for no
											   $hierarchical = 1;      // 1 for yes, 0 for no  
											   $title        = '';  
											   $empty        = 0;	
									 
											  $args = array(
												  'taxonomy'     => $taxonomy,
												  'orderby'      => $orderby,
												  'show_count'   => $show_count,
												  'pad_counts'   => $pad_counts,
												  'hierarchical' => $hierarchical,
												  'title_li'     => $title,
												  'hide_empty'   => $empty
										   );
											 $all_categories = get_categories( $args ); ?>
												 <option value="<?php echo esc_attr_e( '', 'fruitish4' );?>" selected="selected"><?php echo esc_attr_e( 'Brows All Categories', 'fruitish4' ); ?></option>
										 <?php foreach ($all_categories as $cat) {   ?>
												 <option value="<?php echo esc_html($cat->slug); ?>" <?php if(isset($_GET['product_cat']) && $_GET['product_cat'] == $cat->slug){ echo esc_html("selected='selected'");  } ?>><?php echo esc_html($cat->name);?></option>
										 <?php } ?>
								 </select>    
								 <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'hii&hellip;', 'placeholder', 'fruitish4' ); ?>" value="<?php echo esc_attr(get_search_query()); ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label', 'fruitish4' ); ?>" />
								 <input type="hidden" name="post_type" value="product" />
								 </div>
								 <input type="submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'fruitish4' ); ?>" />
							 </form>
						 </div>
 
					 <?php } ?>
					 <?php } ?>
				 
					 <?php endif; ?>
				</div>
		</div>
		</div>
		</div>	

	</div>
</header>
<?php
	$wntr_page_layout = wntr_page_layout();
	if( isset( $wntr_page_layout) && !empty( $wntr_page_layout ) ):
	$wntr_page_layout = $wntr_page_layout;
	else:
	$wntr_page_layout = '';
	endif;
?>
<?php
$shop = '0';
	if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) :
	if(is_shop())
		$wntr_page_layout = 'wide-page';
		$shop = '1';
	endif;
?>
<div id="main" class="site-main <?php if (get_option('wntr_show_topbar') == 'yes') echo "extra"; ?>">
	<div class="main_inner">
		<div class="theme-container">
		</div>
		<?php
			$wntr_page_layout = wntr_page_layout();
			if( isset( $wntr_page_layout) && !empty( $wntr_page_layout ) ):
			$wntr_page_layout = $wntr_page_layout;
			else:
			$wntr_page_layout = '';
			endif;
		if ( $wntr_page_layout == 'wide-page' ) : ?>
		<div class="main-content-inner-full">
			<?php else:
			if(is_archive() || is_tag() || is_404() || (is_front_page())) : ?>
			<div class="home-main-content">
				<?php else : ?>
				<div class="page-title">
				<div class="page-title-inner">
				<h1 class="entry-title-main">
				<?php	    
						if(wntr_is_blog())  
							esc_html_e($webi['wntr_blog_title'], 'technivo'); 
						elseif(is_search()) 
							printf( esc_html__( 'Search Results for: "%s"', 'technivo' ), get_search_query() ); 
							elseif ( is_tax( 'post_format', 'post-format-aside' ) ) 
								esc_html_e( 'Asides', 'technivo' );
							elseif ( is_tax( 'post_format', 'post-format-image' ) ) 
								esc_html_e( 'Images', 'technivo' );
							elseif ( is_tax( 'post_format', 'post-format-video' ) ) 
								esc_html_e( 'Videos', 'technivo' );
							elseif ( is_tax( 'post_format', 'post-format-audio' ) ) 
								esc_html_e( 'Audio', 'technivo' );
							elseif ( is_tax( 'post_format', 'post-format-quote' ) ) 
								esc_html_e( 'Quotes', 'technivo' );
							elseif ( is_tax( 'post_format', 'post-format-link' ) ) 
								esc_html_e( 'Links', 'technivo' );
							elseif ( is_tax( 'post_format', 'post-format-gallery' ) ) 
								esc_html_e( 'Galleries', 'technivo' );
							elseif(single_cat_title())
								printf( esc_html__( 'Category Archives: %s', 'technivo' ), single_cat_title( '', false ) ); 
							elseif(single_tag_title())
							printf( esc_html__( 'Tag Archives: %s', 'technivo' ), single_tag_title( '', false ) );
							else
								the_title();
							?>
				</h1>
				<?php wntr_breadcrumbs(); ?></div>
			</div>
		
		<div class="main-content-inner theme-container <?php echo esc_attr(wntr_sidebar_position()); ?>">
			<?php endif; ?>		
	<?php endif; ?>
			<?php if(is_front_page()){?>
			<div class="main-content-inner theme-container <?php echo esc_attr(wntr_sidebar_position()); ?>">
				<?php }