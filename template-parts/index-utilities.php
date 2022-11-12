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
	$call_out_label = $args['call_out_label'];
	$args = array(
		'post_type' => 'utility'
	);
	$custom_posts = get_posts($args);
	if($custom_posts) :
?>
		<section class="top-section full-width color-secondory">
			<h2 class="heading heading--bold"><?php echo wp_kses_post( $title ); ?></h2>
			<div class="ut_container">
				<?php
					foreach($custom_posts as $post) : setup_postdata( $post );
						$direct_link = get_post_meta( get_the_ID(), 'direct_link', true );
						$description = get_post_meta( get_the_ID(), 'description_for_list', true );
				?>
						<div class="ut_container__item blog-entry2">
							<div class="blog-entry2__thumbnail">
								<a href="<?php if ($direct_link) : echo $direct_link; else : the_permalink(); endif;?>"
									<?php if ($direct_link): echo 'target="_blank"'; endif; ?>
								>
									<?php the_post_thumbnail('draft-portfolio-thumbnail'); ?>
								</a>
							</div>
							<h3><a href="<?php if ($direct_link): echo $direct_link; else : the_permalink(); endif; ?>"
									<?php if ($direct_link): echo 'target="_blank"'; endif; ?>
								><?php the_title(); ?></a></h3>
							<?php if ($description) : ?>
								<p class="blog-entry2__description"><?php echo $description; ?></p>
							<?php endif; ?>
						</div>
				<?php endforeach; ?>
			</div>
			<div class="callout mt-40">
				<a href="/utility/" class="callout__button"><?php echo wp_kses_post( $call_out_label ); ?></a>
			</div>
		</section>
<?php
	endif;
	wp_reset_postdata();
?>
