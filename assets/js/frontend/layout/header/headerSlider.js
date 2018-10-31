import 'slick-carousel';

export default function() {
	const els = {
		$slider: $( '#js-header-slider' ),
		$sliderNav: $( '#js-header-slider__nav' ),
	};

	const { $slider, $sliderNav } = els;

	if ( $slider && $sliderNav ) {
		$slider.slick( {
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: false,
			dots: false,
			fade: true,
			autoplay: true,
			autoplaySpeed: 6000,
			asNavFor: '#js-header-slider__nav',
		} );
		$sliderNav.slick( {
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: false,
			dots: false,
			fade: true,
			asNavFor: '#js-header-slider',
			adaptiveHeight: Foundation.MediaQuery.is( 'medium up' ),
		} );
	}
}
