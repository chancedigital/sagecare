<?php
/**
 * The homepage template file.
 *
 * @package sagecare
 */

get_header();
?>
<main id="main" class="front-page__main">
	<?php get_template_part( 'parts/templates/front-page/primary-content' ); ?>
	<?php get_template_part( 'parts/templates/front-page/services' ); ?>
	<?php get_template_part( 'parts/templates/front-page/column-section' ); ?>
	<?php get_template_part( 'parts/templates/front-page/success-stories' ); ?>

</main>

<?php get_footer(); ?>
