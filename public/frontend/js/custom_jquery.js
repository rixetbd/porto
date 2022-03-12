(function($) {
	"use strict";
	function stop_videos() {
		var video = document.getElementById("video");
		if (video.paused !== true && video.ended !== true) {
			video.pause();
		}
		$('.youtube-video')[0].contentWindow.postMessage('{"event":"command","func":"' + 'pauseVideo' + '","args":""}', '*');
	}

	/*----------------------------------------------
	  Preloader
	----------------------------------------------*/

	$(window).on('load', function() {
		$('.vfx-loader').delay(400).fadeOut(500);
	});

	$(document).ready(function() {

		/* -----------------------------------------------------------
		    Stop Video
         ----------------------------------------------------------- */

		$('.slideshow nav span').on('click', function () {
			stop_videos();
		});

		/* -----------------------------------------------------------
		   After Page Loader
         ----------------------------------------------------------- */

		$(".revealator-delay1").addClass('no-transform');

		/* -----------------------------------------------------------
		    Portfolio Gallery
         ----------------------------------------------------------- */

		if ($('.grid').length) {
			new CBPGridGallery( document.getElementById( 'grid-gallery' ) );
		}

		/* -----------------------------------------------------------
		    Portfolio Slideshow Opened
         ----------------------------------------------------------- */

		$(".grid figure").on('click', function() {
			$("#navbar-collapse-toggle").addClass('hide-header');
		});

		/* -----------------------------------------------------------
		    Navebar
         ----------------------------------------------------------- */

		$(".nav-close").on('click', function() {
			$("#navbar-collapse-toggle").removeClass('hide-header');
		});
		$(".nav-prev").on('click', function() {
			if ($('.slideshow ul li:first-child').hasClass('current')) {
				$("#navbar-collapse-toggle").removeClass('hide-header');
			}
		});
		$(".nav-next").on('click', function() {
			if ($('.slideshow ul li:last-child').hasClass('current')) {
				$("#navbar-collapse-toggle").removeClass('hide-header');
			}
		});

		/* -----------------------------------------------------------
		    Portfolio Hover Effect
         ----------------------------------------------------------- */

		var item = $(".grid li figure");
		var elementsLength = item.length;
		for (var i = 0; i < elementsLength; i++) {
			$(item[i]).hoverdir();
		}

	});

	$(document).keyup(function(e) {

		/* -----------------------------------------------------------
			Portfolio Slideshow
		 ----------------------------------------------------------- */

		if (e.keyCode === 27) {
			stop_videos();
			$('.close-content').click();
			$("#navbar-collapse-toggle").removeClass('hide-header');
		}
		if ((e.keyCode === 37) || (e.keyCode === 39)) {
			stop_videos();
		}
	});

})(jQuery);
