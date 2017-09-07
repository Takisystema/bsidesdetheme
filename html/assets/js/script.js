/*

	Conference JavaScript
	Version: 0.1
	Update Log: 0.1 6-sept

*/

$( document ).ready(function() {

    console.log("Pickle Rick!");

    // Toggle Mobile Menu
    $('.cf-mobile-menu-open').click(function(){
    	$('.cf-mobile-menu').fadeIn();
    });

    $('.cf-mobile-menu-close').click(function(){
    	$('.cf-mobile-menu').fadeOut();
    });

    
});