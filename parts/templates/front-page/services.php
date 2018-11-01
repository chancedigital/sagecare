<?php
use function Chancelight\Sagecare\Icons\get_svg;

$bg_img         = SAGECARE_IMG_URL . '/test.jpg';
$service_fields = [
	[
		'heading' => 'Pediatric Occupational Therapy (OT)',
		'content' => 'Orci purus consectetur massa quis sagittis id morbi pellentesque ac, proin sociis dignissim penatibus erat class montes hac justo, facilisi sollicitudin aliquet auctor vitae vel mi tempor. Vitae cursus gravida vulputate natoque.',
		'icon'    => 'bars',
	],
	[
		'heading' => 'Pediatric Physical Therapy (PT)',
		'content' => 'Orci purus consectetur massa quis sagittis id morbi pellentesque ac, proin sociis dignissim penatibus erat class montes hac justo, facilisi sollicitudin aliquet auctor vitae vel mi tempor. Vitae cursus gravida vulputate natoque.',
		'icon'    => 'bars',
	],
	[
		'heading' => 'Pediatric Speech Therapy (ST)',
		'content' => 'Orci purus consectetur massa quis sagittis id morbi pellentesque ac, proin sociis dignissim penatibus erat class montes hac justo, facilisi sollicitudin aliquet auctor vitae vel mi tempor. Vitae cursus gravida vulputate natoque.',
		'icon'    => 'bars',
	],
	[
		'heading' => 'Feeding Program',
		'content' => 'Orci purus consectetur massa quis sagittis id morbi pellentesque ac, proin sociis dignissim penatibus erat class montes hac justo, facilisi sollicitudin aliquet auctor vitae vel mi tempor. Vitae cursus gravida vulputate natoque.',
		'icon'    => 'bars',
	],
	[
		'heading' => 'Careers',
		'content' => 'Orci purus consectetur massa quis sagittis id morbi pellentesque ac, proin sociis dignissim penatibus erat class montes hac justo, facilisi sollicitudin aliquet auctor vitae vel mi tempor. Vitae cursus gravida vulputate natoque.',
		'icon'    => 'bars',
	],
	[
		'heading' => 'Advocacy',
		'content' => 'Orci purus consectetur massa quis sagittis id morbi pellentesque ac, proin sociis dignissim penatibus erat class montes hac justo, facilisi sollicitudin aliquet auctor vitae vel mi tempor. Vitae cursus gravida vulputate natoque.',
		'icon'    => 'bars',
	],
];
?>

<section class="front-page-services">
	<div
		class="front-page-services__img"
		role="img"
		style="background-image: url(<?php echo esc_url( $bg_img ) ?>);"
	>
		<span class="screen-reader-text">Alt Text</span>
	</div>
	<div class="front-page-services__content">
		<h2 class="screen-reader-text">Our Services</h2>
		<?php foreach ( $service_fields as $service ) : ?>
		<div class="front-page-services__service">
			<div class="front-page-services__service-icon">
				<?php echo get_svg( [ 'icon' => $service['icon'] ] ); ?>
			</div>
			<h3 class="front-page-services__service-heading h5">
				<?php echo esc_html( $service['heading'] ); ?>
			</h3>
			<p class="front-page-services__service-content">
				<?php echo esc_html( $service['content'] ); ?>
			</p>
		</div>
		<?php endforeach; ?>
	</div>
</section>
