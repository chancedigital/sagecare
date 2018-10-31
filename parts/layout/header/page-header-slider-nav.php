<div class="page-header-slider__nav-wrapper">
	<div class="page-header-slider__nav" id="js-header-slider__nav">
		<?php
		while ( have_rows( 'slides' ) ) :
			the_row();
			$content = get_sub_field( 'slide_content' );
			if ( $content ) :
				?>
				<div class="page-header-slider__nav-slide">
					<?php echo wp_kses_post( $content ); ?>
				</div>
				<?php
			endif;
		endwhile;
		?>
	</div>
</div>
