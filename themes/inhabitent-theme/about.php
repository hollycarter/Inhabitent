<?php
/**
 * The template for displaying all single posts.
 *
 * @package inhabitent_Theme
 * Template Name: About Template
 */

get_header(); ?>
<div class="about-page-wrapper">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
      <section class='about-header'>
			<div class="about-title"
				<h1>About</h1>
			</div>
      </section>
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div>
<?php get_footer(); ?>
