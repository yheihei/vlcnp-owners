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
$title = $args['title'];
$description_1 = $args['description_1'];
$description_2 = $args['description_2'];
$description_3 = $args['description_3'];
$call_out_label = $args['call_out_label'];
?>
<section class="top-section top-section--nagatomo">
	<h2 class="heading heading--bold"><?php echo wp_kses_post( $title ); ?></h2>
	<div class="about_container">
		<div class="about_container__item--w-100">
			<p>
				<?php echo wp_kses_post( $description_1 ); ?>
			</p>
			<p>
				<?php echo wp_kses_post( $description_2 ); ?>
			</p>
			<p class="mb-0">
				<?php echo wp_kses_post( $description_3 ); ?>
			</p>
		</div>
	</div>
	<div class="callout mt-40">
		<a href="https://discord.gg/ninjadao" target="_blank" class="callout__button"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/discord.png"><?php echo wp_kses_post( $call_out_label ); ?></a>
	</div>
	<div class="callout mt-40">
		<a href="<?php echo get_permalink( 665 ) ?>" class="callout__button">Discordの歩き方</a>
	</div>
</section>
