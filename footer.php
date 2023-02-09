<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package draft_portfolio
 */

?>

	</div><!-- #content -->
	<img class="before_footer_verylong" src="<?php echo get_stylesheet_directory_uri(); ?>/img/vlcnp_footer.png">
	</div>
	</div>
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info footer_sns">
			<a class="footer_sns__icon" href="https://discord.gg/ninjadao" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/discord.png" alt=""></a>
			<a class="footer_sns__icon" href="https://opensea.io/collection/very-long-cnp" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/opensea.png" alt=""></a>
			<a class="footer_sns__icon" href="https://twitter.com/verylongcnp" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/twitter.png" alt=""></a>
		</div>

		<div class="site-info">
			Copyright &copy; 2022 Very Long CNP.
		</div><!-- .site-info -->
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
