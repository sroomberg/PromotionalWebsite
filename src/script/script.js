

$(window)
	.ready(function() { // special case for smaller screen size on refresh before cookie is set
		var windowWidth = $(window).width();
		if (windowWidth <= 1024) {
			$('div.navigation').removeClass('col-md-4');
			$('div.info').removeClass('col-md-8');
			$('div.navigation ul').removeClass('col-md-4');

			// add new class for responsiveness
			$('div.navigation').addClass('responsive');
			$('div.info').addClass('responsive');
			$('div.container-fluid').addClass('responsive');
		}
	})
	.resize(function() {
		var windowWidth = $(window).width();
		if (windowWidth <= 1024) {
			$('div.navigation').removeClass('col-md-4');
			$('div.info').removeClass('col-md-8');
			$('div.navigation ul').removeClass('col-md-4');

			// add new class for responsiveness
			$('div.navigation').addClass('responsive');
			$('div.info').addClass('responsive');
			$('div.container-fluid').addClass('responsive');
		}
		else {
			if ($('div.navigation').hasClass('responsive')) {
				$('div.navigation').removeClass('responsive');
				$('div.navigation').addClass('col-md-4');
			}
			if ($('div.info').hasClass('responsive')) {
				$('div.info').removeClass('responsive');
				$('div.info').addClass('col-md-8');
			}
			if ($('div.container-fluid').hasClass('responsive')) {
				$('div.container-fluid').removeClass('responsive');
			}
			if (!$('div.navigation ul').hasClass('col-md-4')) {
				$('div.navigation ul').addClass('col-md-4');
			}
		}
	});