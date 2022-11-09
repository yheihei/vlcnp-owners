<?php
/*
YARPP Template: Thumbnails
Description: Requires a theme which supports post thumbnails
Author: mitcho (Michael Yoshitaka Erlewine)
*/ ?>
<h3 class="heading yarpp-related--custom">Related Posts</h3>
<?php if (have_posts()):?>
	<section class="yarpp_container">
	<?php while (have_posts()) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" class="yarpp_container__item" itemprop="blogPost" itemscope itemtype="http://schema.org/BlogPosting">
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
			<div class='yarpp_container__titlearea'>
				<?php the_title( '<h4 class="yarpp_container__title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' ); ?>
				
				<p class="yarpp_container__date">
					<?php the_time('Y.m.d'); ?>
				</p>
			</div>
		</article><!-- #post-## -->
	<?php endwhile; ?>
	</section>
<?php else: ?>
<p>関連記事がありません</p>
<?php endif; ?>
