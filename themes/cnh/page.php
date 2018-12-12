<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php 
    			if ( function_exists('yoast_breadcrumb') ) {
     			   yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
    			}
			?>

			<?php if ( has_post_thumbnail() ) : ?>
				<?php the_post_thumbnail( 'large' ); ?>
			<?php endif; ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

      <?php endwhile; // End of the loop. ?>

		</main><!-- #main -->


	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
