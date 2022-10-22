<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package draft_portfolio
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<?php if ( is_home() && ! is_paged() ) : ?>
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
		<?php endif; ?>

		<section class="top-section">
			<h2 class="heading heading--bold">Blog</h2>
			<main id="main" class="ut_container" role="main">

			<?php
			if ( have_posts() ) :

				if ( is_home() && ! is_front_page() ) : ?>
					<header>
						<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
					</header>

				<?php
				endif;

				/* Start the Loop */
				while ( have_posts() ) : the_post();

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
