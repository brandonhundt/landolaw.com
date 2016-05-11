<?php
/**
 * Homepage
 *
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

	<div id="home-top" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<div class="entry-content">
						<?php the_content(); ?>
					</div><!-- .entry-content -->

			<?php endwhile; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

	<div id="home-mid" class="content-area">
		<div class="entry-content">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-3') ) ?>
		</div>
	</div>	
	<div id="home-bot" class="content-area">
		<div class="entry-content">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-4') ) ?>
		</div>
	</div>	

<?php get_footer(); ?>