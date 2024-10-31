jQuery(window).on('load', function()
{
  	document.querySelectorAll('.propertyhive-shortcode-carousel').forEach(slider => {
	    tns({
	        container: slider,
	        items: propertyhive_carousel_params.items,
	    	controlsPosition: propertyhive_carousel_params.controlsPosition,
	    	nav: propertyhive_carousel_params.nav,
	    	navPosition: propertyhive_carousel_params.navPosition,
	    	gutter: propertyhive_carousel_params.gutter,
	    	mouseDrag: propertyhive_carousel_params.mouseDrag,
	    	controlsText: propertyhive_carousel_params.controlsText,
	    	responsive: propertyhive_carousel_params.responsive,
	    	slideBy: "page"
	    });
	});
});