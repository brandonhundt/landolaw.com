<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

		</div><!-- #main -->
		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="container">
				<div class="footer-left">
				<?php get_sidebar( 'main' ); ?>
					<div class="site-info">
						<p class="copyright">&copy;<?php print date("Y")?> Lanners &amp; Olson, P.A. All Rights Reserved.</p>
					</div><!-- .site-info -->
				</div>
				<div class="footer-right">
					<a class="bbb" title="Click for the Business Review of Lanners &amp; Olson, PA, an Attorneys &amp; Lawyers in Plymouth MN" href="http://www.bbb.org/minnesota/business-reviews/attorneys/lanners-and-olson-pa-in-plymouth-mn-96089864#sealclick"><img alt="Click for the BBB Business Review of this Attorneys &amp; Lawyers in Plymouth MN" style="border: 0;" src="http://seal-minnesota.bbb.org/seals/blue-seal-96-50-lannersolsonpa-96089864.png"></a>
				</div>
			</div>
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>