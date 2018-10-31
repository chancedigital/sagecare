<?php
use Chancelight\Sagecare\Nav\Walker_Nav_Menu_Bem;
use function Chancelight\Sagecare\Icons\get_svg;
?>

<section class="masthead" id="js-masthead">
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
				<div class="masthead__button-group">
					<button class="masthead__button masthead__button--search masthead__button--icon">
						<?php
						echo get_svg( [
							'icon'  => 'search',
							'title' => 'Search',
						] );
						?>
					</button>
					<button class="masthead__button masthead__button--translate">Translate</button>
					<button class="masthead__button masthead__button--accessibility masthead__button--icon">
						<?php
						echo get_svg( [
							'icon'  => 'accessibility',
							'title' => 'Accessibility options',
						] );
						?>
					</button>
					<button class="masthead__button masthead__button--phone">Call 214.295.5374</button>
				</div>
				<button id="js-topnav-toggle" class="masthead__hamburger">
					<?php get_template_part( 'parts/components/hamburger' ); ?>
				</button>
			</div>
		</div>
	</div>
</section>
