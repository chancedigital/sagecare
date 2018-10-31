<header class="page-header" id="js-page-header">
	<?php
	$homepage_has_slides = have_rows( 'slides' ) && is_front_page();
	if ( $homepage_has_slides ) :
		get_template_part( 'parts/layout/header/page-header', 'slider' );
		get_template_part( 'parts/layout/header/page-header', 'slider-nav' );
	else :
		?>
		<div class="grid-container">
			<div class="grid-x grid-padding-x">
				<div class="cell">
					<?php get_template_part( 'parts/layout/header/page-header', 'content' ); ?>
				</div>
			</div>
		</div>
	<?php endif; ?>
</header>
