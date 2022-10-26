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
$posts_per_page = $args['posts_per_page'] ?? 6;
$the_query      = create_posts_query_by_category( $args['slug'], $posts_per_page );
?>
<section class="top-section top-section--nagatomo">
	<h2 class="heading heading--bold">長友になる</h2>
	<div class="about_container">
		<div class="about_container__item--w-100">
			<p>
				VLCNPではなが〜〜くお付き合いできるお友達、<b>「長友」</b>を募集中！
			</p>
			<p>
				Discordの中ではVLCNPの制作過程が公開されている他<br>
				長友からのご意見 ご感想を広く受け付けています！
			</p>
			<p class="mb-0">
				あなたの意見がVLCNPの未来を変えるカモ！？
			</p>
		</div>
	</div>
	<div class="callout mt-40">
		<a href="https://discord.gg/mAz7HAu9" target="_blank" class="callout__button"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/discord.png">コミュニティに参加する</a>
	</div>
</section>
