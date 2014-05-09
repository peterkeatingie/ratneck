/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function() {
    $('.fancybox').fancybox();

	resizeFeaturedPanel();
	
	$(window).resize(function(){
		resizeFeaturedPanel();
	});
	
});

function openFancyBox(){
    $('.fancybox').open();
}

function resizeFeaturedPanel(){
	// Make the featured item body at least the height of the banner panel body
	var panelBannerHeight = $('#panel-banner').height();
	$('#panel-featured').css('min-height', panelBannerHeight);
	console.log(panelBannerHeight);
}