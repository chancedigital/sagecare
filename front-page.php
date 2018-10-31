<?php
/**
 * The homepage template file.
 *
 * @package sagecare
 */

get_header();
?>

<div class="grid-container">
	<div class="grid-x grid-padding-x">

		<div class="medium-7 cell">

			<main id="main" class="page-front__main">
				<article class="page-front__primary-content">
					<?php
					if ( have_posts() ) :
						while ( have_posts() ) :
							the_post();
							get_template_part( 'parts/templates/page', 'content' );
						endwhile;
					endif;
					?>
				</article>
			</main>

		</div><!-- .cell -->

	</div><!-- .grid-x -->
</div><!-- .grid-container -->

<?php get_footer(); ?>
