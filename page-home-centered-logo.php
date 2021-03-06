<?php
/*
 Template Name: Homepage Centered Logo

 *
 * This is your custom page template. You can create as many of these as you need.
 * Simply name is "page-whatever.php" and in add the "Template Name" title at the
 * top, the same way it is here.
 *
 * When you create your page, you can just select the template and viola, you have
 * a custom page template to call your very own. Your mother would be so proud.
 *
 * For more info: http://codex.wordpress.org/Page_Templates
*/
?>

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf">

						<div id="main" class="m-all t-all d-all cf" role="main">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<section class="entry-content cf" itemprop="articleBody">

									<!-- Centered Logo -->
									<div class="logo">
										<img src="<?php bloginfo('template_directory'); ?>/library/images/ryanmcqueen-logo-white-155.png" alt="Ryan McQueen Photography | Design">
										<a id="more" href="#home-content">More</a>
									</div>

									<!-- RevSlider -->
									<?php putRevSlider("homepage") ?>

									<div id="home-content">
										
									</div>
										<div id="nav" class="wrap home-header cf">

											<?php// to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> ?>
											<a href="<?php echo home_url(); ?>" rel="nofollow"><img id="logo" src="<?php bloginfo('template_directory'); ?>/library/images/ryanmcqueen-logo-black-155.png" alt="Ryan McQueen Photography | Design"></a>

											<?php // if you'd like to use the site description you can un-comment it below ?>
											<?php // bloginfo('description'); ?>


											<nav role="navigation">
												<?php wp_nav_menu(array(
						    					'container' => false,                           // remove nav container
						    					'container_class' => 'menu cf',                 // class of container (should you choose to use it)
						    					'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
						    					'menu_class' => 'nav top-nav cf',               // adding custom nav class
						    					'theme_location' => 'main-nav',                 // where it's located in the theme
						    					'before' => '',                                 // before the menu
						        			'after' => '',                                  // after the menu
						        			'link_before' => '',                            // before each link
						        			'link_after' => '',                             // after each link
						        			'depth' => 0,                                   // limit the depth of the nav
						    					'fallback_cb' => ''                             // fallback function (if there is one)
												)); ?>

											</nav>

										</div>

									<?php
										// the content (pretty self explanatory huh)
										the_content();

										/*
										 * Link Pages is used in case you have posts that are set to break into
										 * multiple pages. You can remove this if you don't plan on doing that.
										 *
										 * Also, breaking content up into multiple pages is a horrible experience,
										 * so don't do it. While there are SOME edge cases where this is useful, it's
										 * mostly used for people to get more ad views. It's up to you but if you want
										 * to do it, you're wrong and I hate you. (Ok, I still love you but just not as much)
										 *
										 * http://gizmodo.com/5841121/google-wants-to-help-you-avoid-stupid-annoying-multiple-page-articles
										 *
										*/
										wp_link_pages( array(
											'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'bonestheme' ) . '</span>',
											'after'       => '</div>',
											'link_before' => '<span>',
											'link_after'  => '</span>',
										) );
									?>
								</section>

							</article>

							<?php endwhile; else : ?>

									<article id="post-not-found" class="hentry cf">
											<header class="article-header">
												<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
											<section class="entry-content">
												<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the page-custom.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>

						</div>
						
				</div>

			</div>


<?php get_footer(); ?>
