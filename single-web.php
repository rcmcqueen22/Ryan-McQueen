<?php
/*
 * CUSTOM POST TYPE TEMPLATE
 *
 * This is the custom post type post template. If you edit the post type name, you've got
 * to change the name of this template to reflect that name change.
 *
 * For Example, if your custom post type is "register_post_type( 'bookmarks')",
 * then your single template should be single-bookmarks.php
 *
 * Be aware that you should rename 'custom_cat' and 'custom_tag' to the appropiate custom
 * category and taxonomy slugs, or this template will not finish to load properly.
 *
 * For more info: http://codex.wordpress.org/Post_Type_Templates
*/
?>

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf">

					<div id="main" class="m-all t-2of3 d-5of7 cf detail-image" role="main">

						<h1><?php the_title(); ?></h1>

						<img class="detail" src="<?php the_field('detail_image'); ?>" />

					</div>

					<div id="main" class="m-all t-1of3 d-2of7 cf description" role="main">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article">

							<section class="entry-content cf">
								<h2>About the Project</h2>
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

								<h2>Contributions</h2>

								<?php the_field('contributions'); ?>
								<a href="<?php the_field('link'); ?>" target="_blank">Live site &raquo;</a>
							</section> <!-- end article section -->

						</article>

						<?php endwhile; ?>

						<?php else : ?>

								<article id="post-not-found" class="hentry cf">
									<header class="article-header">
										<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
									</header>
									<section class="entry-content">
										<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
									</section>
									<footer class="article-footer">
										<p><?php _e( 'This is the error message in the single-web.php template.', 'bonestheme' ); ?></p>
									</footer>
								</article>

						<?php endif; ?>

					</div>

				</div>

			</div>

<?php get_footer(); ?>
