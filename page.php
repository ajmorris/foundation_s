<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package foundation_s
 * @since foundation_s 1.0
 */

get_header(); ?>

		<div id="primary" class="content-area row">
			<div id="content" class="site-content eight columns" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

					<?php comments_template( '', true ); ?>

				<?php endwhile; // end of the loop. ?>

			</div><!-- #content .site-content -->
            <div class="four columns">
                <?php get_sidebar(); ?>                
            </div>
		</div><!-- #primary .content-area -->
<?php get_footer(); ?>