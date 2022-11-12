<?php
/*
Template Name: トップページ
*/

get_header(); ?>

	<div id="primary" class="content-area">
		<?php
			get_template_part(
				'template-parts/index',
				'about',
				array(
					'description_1' => '国内で絶大な人気を誇る<br>Crypto Ninja Partners(CNP)と<br>Very Long Animals(VLA)が<br>タッグを組んだ！',
					'description_2' => '90種類の個性豊かなアニマルたちと<br>お馴染みのCNPファミリーが<br>ベリーロングになって再登場！',
					'description_3' => '総計11,111個のNFTコレクション！<br>なが〜〜〜く楽しめる<br>Discordコミュニティも稼働中！',
					'about_label' => 'VLCNPの歴史を見る',
					'call_out_label' => 'Openseaで見る',
				)
			);
		?>
		<?php
			get_template_part(
				'template-parts/index',
				'nagatomo',
				array(
					'title'      => '長友になる',
					'description_1' => 'VLCNPではなが〜〜くお付き合いできるお友達、<b>「長友」</b>を募集中！',
					'description_2' => 'Discordの中ではVLCNPの制作過程が公開されている他<br>長友からのご意見 ご感想を広く受け付けています！',
					'description_3' => 'あなたの意見がVLCNPの未来を変えるカモ！？',
					'call_out_label' => 'コミュニティに参加する',
				)
			);
		?>
		<?php
			get_template_part(
				'template-parts/index',
				'utilities',
				array(
					'title'     => 'ホルダー特典',
					'call_out_label' => 'もっと見る',
				)
			);
		?>

		<section class="top-section">
			<h2 class="heading heading--bold">Blog</h2>
			<main id="main" class="ut_container" role="main">

			<?php
			$the_query = new WP_Query( ['post_type' => 'post'] );
			if ( $the_query->have_posts() ) :
				/* Start the Loop */
				while ( $the_query->have_posts() ) : $the_query->the_post();

					/*
					* Include the Post-Format-specific template for the content.
					* If you want to override this in a child theme, then include a file
					* called content-___.php (where ___ is the Post Format name) and that will be used instead.
					*/
					get_template_part( 'template-parts/content','preview_blog' );

				endwhile; ?>



			<?php else :

				get_template_part( 'template-parts/content', 'none' );

			endif; ?>

			</main><!-- #main -->
			<div class="callout mt-40">
				<a href="/blog/" class="callout__button">もっと読む</a>
			</div>
		</section>
	</div><!-- #primary -->

<?php
get_template_part( 'pagination' ); 
get_footer();
