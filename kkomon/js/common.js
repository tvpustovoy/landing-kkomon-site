/**
 * Created by Pavel Kizernis on 16.09.2015.
 */

$(document).ready(function() {

    //slider
    $('.slider-tab').mouseover(function(){
        $('.slider-tab').removeClass('active');
        $(this).addClass('active');
        $('.slider-image img').removeClass('active');
        $('#' + $(this).data('target')).addClass('active');
    });

    //Vk.com widjet
	function VK_Widget_Init(){
		document.getElementById('vk_groups').innerHTML = "";
		var vk_width = document.getElementById('vk_tabpanel').clientWidth;
		var vk_height = "340";
		if(document.documentElement.clientWidth < 1024) {
			vk_height = "140";
		}
		VK.Widgets.Group("vk_groups", {
			mode: 0, 
			width: "auto", 
			height: vk_height,
			color1: 'FFFFFF', 
			color2: '2B587A', 
			color3: '006991'
			}, 76828460);
	};
	window.addEventListener('load', VK_Widget_Init, false);
	window.addEventListener('resize', VK_Widget_Init, false);

});