<?php
/*
Template Name: トップページ(英語)
*/

get_header(); ?>

	<div id="primary" class="content-area">
		<?php
			get_template_part(
				'template-parts/index',
				'about',
				array(
					'description_1' => "Crypto Ninja Partners (CNP) and Very Long Animals (VLA), two of the country's most popular NFT projects, have teamed up!",
					'description_2' => '90 unique animals and the well-known CNP family become very long!',
					'description_3' => '11,111 NFT collections in total! Discord community is also up and running!',
					'about_label' => 'VLCNP History',
					'call_out_label' => 'OpenSea',
				)
			);
		?>
		<?php
			get_template_part(
				'template-parts/index',
				'nagatomo',
				array(
					'title'      => 'Join Our Very Long Community',
					'description_1' => 'Our community is looking for friends!',
					'description_2' => 'The process of creating VLCNP is open to the public in our Discord server.<br>We are widely open to feedback from our Very Long friends!',
					'description_3' => 'Your opinion may change the future of VLCNP!',
					'call_out_label' => 'Join us!',
				)
			);
		?>
		<?php
			get_template_part(
				'template-parts/index',
				'utilities',
				array(
					'title'     => 'ホルダー特典',
					'call_out_label' => 'More',
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
				<a href="/blog/" class="callout__button">More</a>
			</div>
		</section>
	</div><!-- #primary -->

<?php
get_template_part( 'pagination' ); 
get_footer();
