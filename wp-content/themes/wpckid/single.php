<?php
/**
 * The template for displaying all single posts.
 *
 * @package wpckid
 */

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) :
			the_post();

			do_action( 'wpckid_single_post_before' );

			get_template_part( 'content', 'single' );

			do_action( 'wpckid_single_post_after' );

		endwhile; // End of the loop.
		?>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php
do_action( 'wpckid_sidebar' );
get_footer();
