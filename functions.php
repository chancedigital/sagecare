<?php
/**
 * WP Theme constants and setup functions
 *
 * @package sagecare
 */

namespace Chancelight\Sagecare;

// Constants
require_once __DIR__ . '/inc/constants.php';

// Composer classes.
if ( file_exists( __DIR__ . '/vendor/autoload.php' ) ) {
	require_once __DIR__ . '/vendor/autoload.php';
}

// Require function files.
foreach ( [
	'util',
	'autoload',
	'core',
	'cleanup',
	'template',
	'foundation',
	'images',
	'icons',
	'post-types',
	'taxonomies',
] as $inc ) {
	$filename = SAGECARE_INC . "$inc/$inc.php";
	if ( file_exists( $filename ) ) {
		require_once $filename;
	}
}

// Run the setup functions.
Core\setup();
