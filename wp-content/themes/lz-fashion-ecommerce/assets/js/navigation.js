/* global lz_fashion_ecommerceScreenReaderText */
/**
 * Theme functions file.
 *
 * Contains handlers for navigation and widget area.
 */

jQuery(function($){
	"use strict";
	jQuery('.main-menu-navigation > ul').superfish({
		delay: 500,                            
		animation: {opacity:'show',height:'show'},  
		speed: 'fast'                        
	});
});

function lz_fashion_ecommerce_open() {
	window.lz_fashion_ecommerce_mobileMenu=true;
	jQuery(".sidenav").addClass('show');
}
function lz_fashion_ecommerce_close() {
	window.lz_fashion_ecommerce_mobileMenu=false;
	jQuery(".sidenav").removeClass('show');
}

window.lz_fashion_ecommerce_currentfocus=null;
lz_fashion_ecommerce_checkfocusdElement();
var lz_fashion_ecommerce_body = document.querySelector('body');
lz_fashion_ecommerce_body.addEventListener('keyup', lz_fashion_ecommerce_check_tab_press);
var lz_fashion_ecommerce_gotoHome = false;
var lz_fashion_ecommerce_gotoClose = false;
window.lz_fashion_ecommerce_mobileMenu=false;
function lz_fashion_ecommerce_checkfocusdElement(){
 	if(window.lz_fashion_ecommerce_currentfocus=document.activeElement.className){
	 	window.lz_fashion_ecommerce_currentfocus=document.activeElement.className;
 	}
}
function lz_fashion_ecommerce_check_tab_press(e) {
	"use strict";
	// pick passed event or global event object if passed one is empty
	e = e || event;
	var activeElement;

	if(window.innerWidth < 999){
		if (e.keyCode == 9) {
			if(window.lz_fashion_ecommerce_mobileMenu){
				if (!e.shiftKey) {
					if(lz_fashion_ecommerce_gotoHome) {
						jQuery( "#resp-menu .main-menu-navigation ul:first li:first a:first-child" ).focus();
					}
				}
				if (jQuery("a.closebtn.responsive-menu").is(":focus")) {
					lz_fashion_ecommerce_gotoHome = true;
				} else {
					lz_fashion_ecommerce_gotoHome = false;
				}
			}else{
				if(window.lz_fashion_ecommerce_currentfocus=="mobiletoggle"){
					jQuery( "" ).focus();
				}
			}
		}
	}
	if (e.shiftKey && e.keyCode == 9) {
		if(window.innerWidth < 999){
			if(window.lz_fashion_ecommerce_currentfocus=="header-search"){
				jQuery(".mobiletoggle").focus();
			}else{
				if(window.lz_fashion_ecommerce_mobileMenu){
					if(lz_fashion_ecommerce_gotoClose){
						jQuery("a.closebtn.responsive-menu").focus();
					}
					if (jQuery( "#resp-menu .main-menu-navigation ul:first li:first a:first-child" ).is(":focus")) {
						lz_fashion_ecommerce_gotoClose = true;
					} else {
						lz_fashion_ecommerce_gotoClose = false;
					}
				
				}else{
					if(window.lz_fashion_ecommerce_mobileMenu){
					}
				}
			}
		}
	}
 	lz_fashion_ecommerce_checkfocusdElement();
}

(function( $ ) {

	$(document).ready(function(){
		$(".product-cat").hide();
	    $("button.product-btn").click(function(){
	        $(".product-cat").toggle();
	    });
	});	
	
})( jQuery );
