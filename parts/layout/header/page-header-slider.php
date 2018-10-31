<div class="page-header-slider" id="js-header-slider">
	<?php
	while ( have_rows( 'slides' ) ) :
		the_row();
		$img = get_sub_field( 'background_image' );
		?>
		<div
			class="page-header-slider__slide"
			role="img"
			style="background-image: url(<?php echo esc_url( $img['url'] ); ?>);"
		>
			<?php
			if ( $img['alt'] ) {
				printf(
					'<span class="screen-reader-text">%s</span>',
					esc_html( $img['alt'] )
				);
			}
			?>
		</div>
	<?php endwhile; ?>
</div>
