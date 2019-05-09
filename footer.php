<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dnduy
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-footer-wrapper">
			<div  class="col-md-4  ">
				<div class="menu-footer-menu-container">
					<?php dynamic_sidebar( 'sidebar-2' ); ?>
				</div>
			</div>
			<div class="col-md-4 ">
								<ul id="site-social">
											<li class="site-social-item">
							<a href="https://www.facebook.com/nicehuehotel" title="facebook" target="_blank"><img src="<?php bloginfo( 'template_directory' );  ?>/images/social_icon_facebook_28.png" alt="Facebook"></a>
						</li>
																					<li class="site-social-item">
							<a href="#" title="" target="_blank"><img src="<?php bloginfo( 'template_directory' ); ?>/images/social_icon_google_28.png" alt=""></a>
						</li>
						<li class="site-social-item">
							<a href="#" title="" target="_blank"><img src="<?php bloginfo( 'template_directory' ); ?>/images/social_icon_twitter_28.png" alt=""></a>
						</li>
						<li class="site-social-item">
							<a href="https://www.tripadvisor.com.sg/Hotel_Review-g293926-d14957361-Reviews-Nice_Hue_Hotel-Hue_Thua_Thien_Hue_Province.html" title="" target="_blank"><img src="<?php bloginfo( 'template_directory' ); ?>/images/social_icon_trip_28.png" alt=""></a>
						</li>
									</ul>
			</div>

			<div class="col-md-4  ">
				<ul id="contact-mini">
										<li class="contact-mini-item">
						<img src="<?php bloginfo( 'template_directory' ); ?>/images/phone.png" alt="Phone">
						<a href="tel:+8493556 4556">(+84) 93556 4556</a>
					</li>
															<li class="contact-mini-item">
						<a href="mailto:info@nicehuehotel.com">Info@nicehuehotel.com</a>
					</li>
									</ul>
			</div>

		</div>  <!-- site-footer-wrapper -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
