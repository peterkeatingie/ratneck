/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

window.onload = function(){
    resizeFeaturedPanel();
}

$(document).ready(function() {
	
    $(window).resize(function(){
            resizeFeaturedPanel();
    });
	
	if(splash){
		$('#splash').click();
	}
});

function resizeFeaturedPanel(){
	// Make the featured item body at least the height of the banner panel body
	var panelBannerHeight = $('#panel-banner').height();
	$('#panel-featured').css('min-height', panelBannerHeight);
	console.log(panelBannerHeight);
}

$(function(){
	console.log('function');
});