<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package draft_portfolio
 */

?>
<article id="post-<?php the_ID(); ?>"
<?php 
post_class( 'yhei-grid__item yhei-grid__item--primary yhei-post');
$direct_link = get_post_meta( get_the_ID(), 'direct_link', true );
$link = $direct_link ? $direct_link : get_permalink();
$description = get_post_meta( get_the_ID(), 'description_for_list', true );
var_dump($direct_link);
?> itemprop="blogPost" itemscope itemtype="http://schema.org/BlogPosting">
	<?php the_blog_post(); ?>
	<div class='post-thumb yhei-post__thumbnail'>
		<a href="<?php echo $link;?>" <?php if ($direct_link): echo 'target="_blank"'; endif; ?>>
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail('draft-portfolio-thumbnail', [ 'class' => 'yhei-post__eyecatch' ] ); ?>
		<?php else: ?>
			<img class="yhei-post__eyecatch" width="800" height="640" src="<?php echo get_stylesheet_directory_uri(); ?>/img/yhei_web_design_catch-800x640.jpg" class="attachment-draft-portfolio-thumbnail size-draft-portfolio-thumbnail wp-post-image" alt="<?= $category_name ?>" />
		<?php endif; ?>
		</a>
	</div>
	<div class='post-title'>
		<?php 
		if ($direct_link) :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( $link ) . '" rel="bookmark" target="_blank">', '</a></h2>' );
		else:
			the_title( '<h2 class="entry-title"><a href="' . esc_url( $link ) . '" rel="bookmark">', '</a></h2>' );
		endif;?>
		<p class="post-description">
			<?php echo $description ?>
		</p>
		<p class="date">
			<?php the_time('Y.m.d'); ?>
		</p>
	</div>

<div class="overbox">
	<div class="title overtext"> 
		<?php //the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
	</div>
	<div class="tagline overtext"> <?php draft_portfolio_category();?> </div>
</div>

</article><!-- #post-## -->