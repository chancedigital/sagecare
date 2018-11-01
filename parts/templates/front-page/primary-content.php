<div class="grid-container">
	<div class="grid-x grid-padding-x">
		<div class="medium-7 cell">
			<article class="front-page-primary-content">
				<?php
				if ( have_posts() ) :
					while ( have_posts() ) :
						the_post();
						get_template_part( 'parts/templates/page', 'content' );
					endwhile;
				endif;
				?>
			</article>
		</div>
	</div>
</div>
