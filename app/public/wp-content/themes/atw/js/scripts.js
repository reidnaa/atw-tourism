(function ($) {
	
	$(function () {
		
		'use strict';
		 jQuery('.sidebar-gallery a').fancybox();

		jQuery('.nav ul').slicknav();
		
		jQuery('.ul-slider').bxSlider({
			'auto': true,
			'autoControls': false,
			'stopAutoOnClick': true,
			'pager': true,
			'speed':700,
			'pause': 5000
		});

	});
	
})(jQuery, this);
