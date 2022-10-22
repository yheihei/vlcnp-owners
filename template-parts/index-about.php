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
<section class="top-section">
	<h2 class="heading heading--bold">About Very Long CNP (VLCNP)</h2>
	<div class="about_container">
		<div class="about_container__item">
			<p>
				国内で絶大な人気を誇る<br>
				Crypto Ninja Partners(CNP)と<br>
				Very Long Animals(VLA)が<br>
				タッグを組んだ！
			</p>
			<p>
				90種類の個性豊かなアニマルたちと<br>
				お馴染みのCNPファミリーが<br>
				ベリーロングになって再登場！
			</p>
			<p style="margin-bottom:0;">
				総計11,111個のNFTコレクション！<br>
				なが〜〜〜く楽しめる<br>
				Discordコミュニティも稼働中！
			</p>
		</div>
		<div class="about_container__item"><img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/img/cnp_top.jpg" /></div>
		<div class="about_container__item"><img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/img/vla2.jpeg" /></div>
	</div>
	<div class="callout mt-40">
		<a href="/" class="callout__button">VLCNPの歴史を見る</a>
	</div>
</section>
<section class="top-section container full-width color-secondory">
	<h2 class="heading heading--bold">CNP met Very Long Animals...</h2>
	<div class="about_container">
		<div class="about_container__item"><img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/img/vlcnp1.webp" /></div>
		<div class="about_container__item"><img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/img/442.jpg" /></div>
		<div class="about_container__item"><img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/img/530.jpg" /></div>
		<div class="about_container__item mt-30"><img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/img/1678.jpg" /></div>
		<div class="about_container__item mt-30"><img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/img/2463.jpg" /></div>
		<div class="about_container__item mt-30"><img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/img/7571.jpg" /></div>
	</div>
	<div class="callout mt-40">
		<a href="https://opensea.io/collection/very-long-cnp" target="_blank" class="callout__button">Openseaで見る</a>
	</div>
</section>
