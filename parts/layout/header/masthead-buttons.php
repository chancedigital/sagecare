<?php use function Chancelight\Sagecare\Icons\get_svg; ?>

<div class="masthead-buttons">
	<button class="masthead-buttons__button masthead-buttons__button--search masthead-buttons__button--icon">
		<?php
		echo get_svg( [
			'icon'  => 'search',
			'title' => 'Search',
		] );
		?>
	</button>
	<button class="masthead-buttons__button masthead-buttons__button--translate">Translate</button>
	<button class="masthead-buttons__button masthead-buttons__button--accessibility masthead-buttons__button--icon">
		<?php
		echo get_svg( [
			'icon'  => 'accessibility',
			'title' => 'Accessibility options',
		] );
		?>
	</button>
	<button class="masthead-buttons__button masthead-buttons__button--phone">Call 214.295.5374</button>
</div>
