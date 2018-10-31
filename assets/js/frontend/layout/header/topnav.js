export default () => {
	const menuItems = document.querySelectorAll( '#js-topnav .topnav__menu > li' );
	menuItems.forEach( item => {
		const addAnimation = e => {
			console.log( e );
			item.classList.add( 'animate-ready' );

			// Remove the listener, no longer needed.
			item.removeEventListener( 'mouseover', addAnimation );
		};
		item.addEventListener( 'mouseover', addAnimation );
	} );
};
