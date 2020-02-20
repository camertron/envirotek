<?php
/**
 * The template for displaying the footer.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package envirotek
 */
?>

	<div class="footer d-flex align-items-center">
		<div class="container">
			<div class="row pt-5 pb-5">
				<div class="col-lg-9 text-center text-md-left">
					<img src="<?php echo get_template_directory_uri(); ?>/img/footer-logo.png" class="logo" />
					<div class="d-inline-flex">
						<div>
							<div class="inc white poiret uppercase ml-md-4 d-none d-md-block">
								<div class="copyright">&copy; <?php echo date('Y'); ?> <?php echo get_bloginfo( 'name' ); ?></div>
							</div>
							<div class="location sans-serif white ml-md-4 d-none d-md-block">
								Alberta, Canada
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 d-flex align-items-center justify-content-center justify-content-lg-end">
					<img src="<?php echo get_template_directory_uri(); ?>/img/linkedin.png" class="social mt-5 mt-md-0" />
					<img src="<?php echo get_template_directory_uri(); ?>/img/twitter.png" class="social ml-2 mt-5 mt-md-0" />
					<img src="<?php echo get_template_directory_uri(); ?>/img/facebook.png" class="social ml-2 mt-5 mt-md-0" />
				</div>
			</div>
		</div>
	</div>

<?php wp_footer(); ?>

</body>
</html>
