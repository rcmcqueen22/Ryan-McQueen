			<footer class="footer" role="contentinfo">

				<div id="inner-footer" class="wrap cf">

					<nav role="navigation">
						<?php wp_nav_menu(array(
    					'container' => '',                              // remove nav container
    					'container_class' => 'footer-links cf',         // class of container (should you choose to use it)
    					'menu' => __( 'Footer Links', 'bonestheme' ),   // nav name
    					'menu_class' => 'nav footer-nav cf',            // adding custom nav class
    					'theme_location' => 'footer-links',             // where it's located in the theme
    					'before' => '',                                 // before the menu
        			'after' => '',                                  // after the menu
        			'link_before' => '',                            // before each link
        			'link_after' => '',                             // after each link
        			'depth' => 0,                                   // limit the depth of the nav
    					'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
						)); ?>
					</nav>

					<p class="source-org copyright left">&copy; <?php bloginfo( 'name' ); ?></p>
					<div class="right">
						<a href="http://instagram.com/mcqueenphoto" target="_blank"><img class="social" src="<?php bloginfo('template_directory'); ?>/library/images/insta16-white.png" alt="Ryan McQueen Photography Instagram"></a>
						<a href="http://ryanmcqueen.tumblr.com" target="_blank"><img class="social" src="<?php bloginfo('template_directory'); ?>/library/images/tumblr16-white.png" alt="Ryan McQueen Photography Tumblr"></a>
						<a href="https://www.facebook.com/pages/Ryan-McQueen-Photography-Design/125205737594415" target="_blank"><img class="social" src="<?php bloginfo('template_directory'); ?>/library/images/fb16-white.png" alt="Ryan McQueen Photography Facebook"></a>
					</div>

				</div>

			</footer>

		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html> <!-- end of site. what a ride! -->
