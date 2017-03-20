<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package EFCA_Notes
 */

?>

	</div><!-- #content -->
</div><!-- .site -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		
		<?php admin_url('post-new.php'); ?>
		<div class="site-info">
			<p>
				This resource lovingly made available by the EFCA Communications team. Send us your questions and feedback.
			</p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
