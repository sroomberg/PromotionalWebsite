

$(window)
	.ready(function() { // special case for smaller screen size on refresh before cookie is set
		var windowWidth = $(window).width();
		if (document.cookie == "mobile=0" && windowWidth <= 1024) {
			$('div.navigation').removeClass('col-md-4');
			$('div.info').removeClass('col-md-8');

			// add new class for responsiveness
			$('div.navigation').addClass('responsive');
			$('div.info').addClass('responsive');
			$('div.container-fluid').addClass('responsive');
		}
	})
	.resize(function() {
		var windowWidth = $(window).width();
		if (document.cookie == "mobile=0" && windowWidth <= 1024) {
			$('div.navigation').removeClass('col-md-4');
			$('div.info').removeClass('col-md-8');

			// add new class for responsiveness
			$('div.navigation').addClass('responsive');
			$('div.info').addClass('responsive');
			$('div.container-fluid').addClass('responsive');
		}
	});