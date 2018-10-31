<?php use Chancelight\Sagecare\Nav\Walker_Nav_Menu_Bem; ?>

<section tabindex="0" class="masthead" id="js-masthead">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="cell medium-2 masthead__col masthead__col--logo">
				<?php the_custom_logo(); ?>
			</div>
			<div class="cell medium-10 masthead__col masthead__col--nav">
				<?php
				wp_nav_menu( [
					'menu_class'      => 'topnav__menu',
					'container'       => 'nav',
					'container_id'    => 'js-topnav',
					'container_class' => 'topnav',
					'theme_location'  => 'main-navigation',
					'walker'          => new Walker_Nav_Menu_Bem(),
				] );
				?>

				<?php get_template_part( 'parts/layout/header/masthead-buttons' ); ?>

				<button id="js-topnav-toggle" class="masthead__hamburger">
					<?php get_template_part( 'parts/components/hamburger' ); ?>
				</button>
			</div>
		</div>
	</div>
</section>
