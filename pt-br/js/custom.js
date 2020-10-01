$(document).ready(() => {
	$(window).scroll(() => {
		$('.hideme').each(function (i) {
			const bottom_of_object = $(this).offset().top + ($(this).outerHeight() / 3);
			const bottom_of_window = $(window).scrollTop() + $(window).height();
			if (bottom_of_window > bottom_of_object) {
				$(this).animate({ opacity: '1' }, 1300);
			}
		});

		$('.box').each(function (i) {
			const bottom_of_object = $(this).offset().top + ($(this).outerHeight() / 2);
			const bottom_of_window = $(window).scrollTop() + $(window).height();
			if (bottom_of_window > bottom_of_object) {
				$(this).animate({ width: '23%' }, 1600);
			}
		});
	});
});
