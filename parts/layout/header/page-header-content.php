<?php
$sagecareheading_tags = [
	'title'    => [
		'open'  => '<h1 class="page-header__title">',
		'close' => '</h1>',
	],
	'subtitle' => [
		'open'  => '<h2 class="page-header__subtitle">',
		'close' => '</h2>',
	],
];
if ( is_404() ) {
	$sagecaretitle = __( 'Page not found', 'sagecare' );
} elseif ( is_archive() ) {
	$sagecaretitle = get_the_archive_title();
} elseif ( is_page() && get_field( 'alternate_page_title' ) ) {
	$sagecaretitle = get_field( 'alternate_page_title' );
} else {
	$sagecaretitle = get_the_title();
}

if ( is_page() && get_field( 'page_subtitle' ) ) {
	$sagecaresubtitle = get_field( 'page_subtitle' );
}

// Print the title and subtitle to screen.
echo $sagecareheading_tags['title']['open'] .
	esc_html( $sagecaretitle ) .
	$sagecareheading_tags['title']['close']; // WPCS: XSS Ok.
if ( isset( $sagecaresubtitle ) && ! empty( $sagecaresubtitle ) ) {
	echo $sagecareheading_tags['subtitle']['open'] .
		esc_html( $sagecaresubtitle ) .
		$sagecareheading_tags['subtitle']['close']; // WPCS: XSS Ok.
}
