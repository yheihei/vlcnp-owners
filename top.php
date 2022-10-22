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
					'slug'      => 'blogs',
					'title'     => 'VLCNPとは',
					'sub_title' => '思っていること 経験したこと',
				)
			);
		?>
		<?php
			get_template_part(
				'template-parts/index',
				'nagatomo',
				array(
					'slug'      => 'blogs',
					'title'     => 'VLCNPとは',
					'sub_title' => '思っていること 経験したこと',
				)
			);
		?>
		<?php
			get_template_part(
				'template-parts/index',
				'utilities',
				array(
					'slug'      => 'blogs',
					'title'     => 'VLCNPとは',
					'sub_title' => '思っていること 経験したこと',
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
