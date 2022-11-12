<?php
/**
 * Template part for displaying posts on specific category.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package draft_portfolio
 */

?>

<?php
$description_1 = $args['description_1'];
$description_2 = $args['description_2'];
$description_3 = $args['description_3'];
$about_label = $args['about_label'];
$call_out_label = $args['call_out_label'];
?>
<section class="top-section">
	<h2 class="heading heading--bold">About Very Long CNP (VLCNP)</h2>
	<div class="about_container">
		<div class="about_container__item">
			<p>
				<?php
					echo wp_kses_post( $description_1 );
				?>
			</p>
			<p>
				<?php
					echo wp_kses_post( $description_2 );
				?>
			</p>
			<p style="margin-bottom:0;">
				<?php
					echo wp_kses_post( $description_3 );
				?>
			</p>
		</div>
		<div class="about_container__item--w-64"><img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/img/cnp_vla-min.png" /></div>
	</div>
	<div class="callout mt-40">
		<a href="/about/" class="callout__button"><?php echo wp_kses_post( $about_label ); ?></a>
	</div>
</section>
<section class="top-section container full-width color-secondory">
	<h2 class="heading heading--bold">CNP met Very Long Animals...</h2>
	<div class="about_container">
		<div class="about_container__item--w-100"><img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/img/about-min.png" /></div>
	</div>
	<div class="callout mt-40">
		<a href="https://opensea.io/collection/very-long-cnp" target="_blank" class="callout__button"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/opensea.png"><?php echo wp_kses_post( $call_out_label ); ?></a>
	</div>
</section>
