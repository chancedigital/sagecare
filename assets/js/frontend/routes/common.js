import initHamburger from '../components/hamburger';
import initMasthead from '../layout/header/masthead';
import initTopnav from '../layout/header/topnav';
import initHeaderSlider from '../layout/header/headerSlider';

export default {

	init() {
	}, // End init.

	finalize() {
		initHamburger();
		initMasthead();
		initTopnav();
		initHeaderSlider();
	}, // End finalize.
};
