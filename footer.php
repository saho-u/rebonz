<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rebonz
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="footer-b">
				<span class="copyright">Copyright © 2021年
					<a href="<?php echo home_url(); ?>">株式会社Re.bonz</a>.
				</span>
				<span class="policy_link">
					<a class="privacy-policy-link" href="<?php echo home_url(); ?>/privacy/">プライバシーポリシー</a>
				</span>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
