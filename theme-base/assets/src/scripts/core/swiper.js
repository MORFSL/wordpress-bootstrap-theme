import {
	Swiper,
	Navigation,
	Pagination,
	Scrollbar,
	EffectCoverflow,
} from 'swiper';

Swiper.use([Navigation, Pagination, Scrollbar, EffectCoverflow]);

new Swiper('.swiper', {
	// Optional parameters
	direction: 'horizontal',
	centeredSlides: true,
	loop: true,

	autoplay: {
		delay: 2500,
		disableOnInteraction: false,
	},

	// If we need pagination
	pagination: {
		el: '.swiper-pagination',
		clickable: true,
	},
});
