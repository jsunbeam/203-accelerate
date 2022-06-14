<?php
/**
 * Template Name: About Page
 * Custom template
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */


get_header(); ?>
<div id="primary" class="home-page hero-content">
		<div class="main-content" role="main">
			<p id="about-header">Accelerate is a strategy and marketing agency located in the heart of NYC. Our goal is to build businesses by making our clients visible and making their customers smile.</p>
		</div><!-- .main-content -->
	</div><!-- #primary -->

	<div id="primary" class="site-content sidebar">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
                <h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->


	</div><!-- #primary -->

	<div id="primary">
		<div id="about-page-contact" class="main-content" role="main">
				<h2>Interested in working with us?</h2>
				<a class="button" href="<?php echo site_url() ?>">Contact Us</a>
		</div><!-- .main-content -->
	</div>
<?php get_footer(); ?>