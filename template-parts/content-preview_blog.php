<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package draft_portfolio
 */

?>

<article id="post-<?php the_ID(); ?>" class="ut_container__item blog-entry2" itemprop="blogPost" itemscope itemtype="http://schema.org/BlogPosting">
	<?php the_blog_post(); ?>
	<div class='blog-entry2__thumbnail'>
		<a href="<?php the_permalink();?>" >
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail('draft-portfolio-thumbnail', [ 'class' => 'yhei-post__eyecatch' ] ); ?>
		<?php else: ?>
			<img class="yhei-post__eyecatch" width="800" height="640" src="<?php echo get_stylesheet_directory_uri(); ?>/img/yhei_web_design_catch-800x640.jpg" class="attachment-draft-portfolio-thumbnail size-draft-portfolio-thumbnail wp-post-image" alt="<?= $category_name ?>" />
		<?php endif; ?>
		</a>
	</div>
	<div class='post-title'>
		<?php the_title( '<h2 class="blog-entry2__title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
		
		<p class="blog-entry2__date">
			<?php the_time('Y.m.d'); ?>
		</p>
	</div>

<div class="overbox">
	<div class="tagline overtext"> <?php draft_portfolio_category();?> </div>
</div>

</article><!-- #post-## -->
