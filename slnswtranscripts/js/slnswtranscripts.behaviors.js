(function ($) {
	$(document).ready(function() {
		function toggleNav() {
			var src = $("#main-menu-trigger img").attr('src');
			if (src.indexOf('close') > 0) {
				src = src.replace('-close', '');
			} else {
				src = src.replace('.png', '-close.png');
			}
			$("#main-menu-trigger img").attr('src', src);
			
			if ($('#page-wrapper').hasClass('show-nav')) {
				$('#page-wrapper').removeClass('show-nav');
			} else {
				$('#page-wrapper').addClass('show-nav');
			}
		}

		function initCommon() {
			// main menu trigger
			$('#main-menu-trigger').click(function(event){
				toggleNav();
				event.preventDefault();
				event.stopPropagation();
			});
			
			// close on page click
			$('body').click(function(event){
				var src = $("#main-menu-trigger img").attr('src');
				if (src.indexOf('close') > 0) {
					toggleNav();
				}
			});
			
			// stop close on menu click
			$('nav.main-menu').click(function(event){
				event.stopPropagation();
			});
			
			// main menu children toggle
			$('.sub-toggle').click(function(event){
				var src = $(this).attr('src');
				if (src.indexOf('up') > 0) {
					src = src.replace('up', 'down');
				} else {
					src = src.replace('down', 'up');
				}
				$(this).attr('src', src);
				$(this).parent().find('ul').toggleClass('active');
				event.preventDefault();
				event.stopPropagation();
			});
			
			// search bar
			$('#search input[type="text"]').click(function(event){
				$(this).attr('placeholder', '');
			});
			
			// breadcrumb
			$('.easy-breadcrumb').append('<span class="easy-breadcrumb_segment-separator"></span>');
		}
		
		initCommon();
	});
})(jQuery);