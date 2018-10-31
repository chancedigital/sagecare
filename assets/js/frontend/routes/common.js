import initHamburger from '../components/hamburger';
import initMasthead from '../layout/header/masthead';
import initTopnav from '../layout/header/topnav';

export default {

	init() {
	}, // End init.

	finalize() {
		initHamburger();
		initMasthead();
		initTopnav();
	}, // End finalize.
};
