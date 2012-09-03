<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 */

get_header(); ?>


    <div id="site_content">
      <div id="sidebar_container">
        <div class="sidebar">
          <h1>Latest News</h1>
          <h2>Welcome to...</h2>
          <p>Sustenance Earth! Healthy recipes and upcycled projects and ideas to keep you and the planet nourished and full of life!</p> 
	  <p>Don't forget to click the Facebook button below then click the "Like" icon in the top right for the most up-to-date news on projects and recipes!</p>
        </div>
        <div class="sidebar">
          <h1>Follow Me</h1>
          <div class="center">
		<a href="http://facebook.com/sustenanceearth"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/facebook_icon.png"/></a>
	  	<a href="https://pinterest.com/sustenanceearth"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/pinterest_icon.png"/></a>
		<a href="https://twitter.com/SustEarth_Jenn"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/twitter_icon.png"/></a>
	  </div>
        </div>
      </div>
      <div id="content">
        <ul class="slideshow">
          <li class="show"><a href="shoestrap.html"><img width="706" height="316" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/finished_bracelet_home.png" alt="Upcycled Shoe Strap Wrap Bracelet" /></a></li>
	  <li><a href="artichokepizza.html"><img width="706" height="316" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/apizza_cooked_home.png" alt="Artichoke and Sun Dried Tomato Pizza Recipe"/></a></li>	  
	  <li><a href="gold_winebottle.html"><img width="706" height="316" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/decorative_vase_home.png" alt="Upcycled Wine Bottle Vase"/></a></li>
	  <li><a href="southern_french_crepe.html"><img width="706 height="316" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/crepe_home.png" alt="Strawberry filled crepe on a plate garnished with chocolate sauce"/></a></li>
	  <li><a href="purse_makeover.html"><img width="706" height="316" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/purse-makeover-home.png" alt="Drab to Fab Purse Makeover, Black Textured Purse"/></a></li>
	  <li><a href="raspberry_vinaigrette.html"><img width="706" height="316" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/rvinaigrette_homepage.png" alt="Raspberry Vinaigrette Recipe poured on Salad"/></a></li>

        </ul>
     	<div id="content_item">
		<div id="primary">
			<div id="content" role="main">

			<?php if ( have_posts() ) : ?>

				<?php twentyeleven_content_nav( 'nav-above' ); ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', get_post_format() ); ?>

				<?php endwhile; ?>

				<?php twentyeleven_content_nav( 'nav-below' ); ?>

			<?php else : ?>

				<article id="post-0" class="post no-results not-found">
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'Nothing Found', 'twentyeleven' ); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'twentyeleven' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-0 -->

			<?php endif; ?>

			</div><!-- #content -->
		</div><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
