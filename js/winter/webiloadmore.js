// JavaScript Document
// JS for calling load more for home page product
function loadmore() {
	"use strict";							 
  	var wb_sale = jQuery(".woosale .products li").size();
	var wb_new = jQuery(".woonew .products li").size();
	var wb_best = jQuery(".woobest .products li").size();
	var wb_feature = jQuery(".woofeature .products li").size();
					
	var wbcount=parseInt(php_var.wntr_loadmore);		
	var pro_sale=12;
	var pro_new=12;	
	var pro_best=12;
	var pro_fea=12;
	jQuery('.woosale .products li:lt('+pro_sale+')').addClass("product-show");
	jQuery('.woonew .products li:lt('+pro_new+')').addClass("product-show");
	jQuery('.woobest .products li:lt('+pro_best+')').addClass("product-show");
	jQuery('.woofeature .products li:lt('+pro_fea+')').addClass("product-show");
	    	
    jQuery('.woosale .woocount').on(function () {
	if(pro_sale==wb_sale){									 			
			 jQuery('.woosale .woocount').hide();
			 jQuery('.woosale .wntr-message').show();
	}else{
		pro_sale= (pro_sale+wbcount <= wb_sale) ? pro_sale+wbcount : wb_sale;	
        jQuery('.woosale .products li:lt('+pro_sale+')').addClass("product-show");			
	}
    });		    
	jQuery('.woonew .woocount').on(function () {
	if(pro_new==wb_new){									 
			jQuery('.woonew .woocount').hide();
			jQuery('.woonew .wntr-message').show();
	}else{
		pro_new= (pro_new+wbcount <= wb_new) ? pro_new+wbcount : wb_new;
        jQuery('.woonew .products li:lt('+pro_new+')').addClass("product-show");
	}
    });	   
	jQuery('.woobest .woocount').on(function () {
	if(pro_best==wb_best){									 
			jQuery('.woobest .woocount').hide();
			jQuery('.woobest .wntr-message').show();
	}else{
		pro_best= (pro_best+wbcount <= wb_best) ? pro_best+wbcount : wb_best;
        jQuery('.woobest .products li:lt('+pro_best+')').addClass("product-show");
	}
    });	
	jQuery('.woofeature .woocount').on(function () {
	if(pro_fea==wb_feature){									 
			jQuery('.woofeature .woocount').hide();
			jQuery('.woofeature .wntr-message').show();
	}else{
		pro_fea= (pro_fea+wbcount <= wb_feature) ? pro_fea+wbcount : wb_feature;
        jQuery('.woofeature .products li:lt('+pro_fea+')').addClass("product-show");
	}
    });	
}
jQuery(document).ready(function() {"use strict";loadmore()});
jQuery(window).resize(function() {"use strict";loadmore()});  