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
	   <h2>8-31-2012</h2>
	   <h1>Raspberry Vinaigrette</h1>
	<p>Recipe featured from<a href="http://wellnessmama.com/1531/seven-fast-and-healthy-salad-dressing-recipes/"> Wellness Mama</a>.</p>
	   <span class="left"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/raspberry_vinaigrette/raspberry_pour.png" alt="Raspberry Vinaigrette being poured over feta and fuji apple salad"/></span><p>Welcome to my first featured recipe. This one comes courtesy of a wonderful healthy food and healthy living site called <a href="http://wellnessmama.com/">Wellness Mama</a>. This recipe for raspberry vinaigrette is so refreshing and pairs perfectly with a salad topped with feta cheese and fuji apple slices. Not only is it delicious but the pink color adds a pop to the salad. I would recommend making this dressing for a summer party or, for even more cuteness, a baby girl baby shower. Click <a href="etched_dressing_bottle.html"> here</a> for a tutorial on how to make this super cute and versatile salad dressing bottle.</p>
	    <span class="center"><span class="right-padded"><span class="right-padded"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/raspberry_vinaigrette/rvinaigrette_ingredients.png" alt="Raspberry Vinaigrette Ingredients, frozen raspberries, white vinegar, olive oil, and Orange honey."/></span></span><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/raspberry_vinaigrette/rvinaigrette_supplies.png" alt="Blender, 1/4 cup dry measuring cup, liquid measure cup, measuring spoons"/></span>
	<div class="left">
		<h2>Ingredients:</h2>
		 <ul>
               		<li>1/2 cup White Vinegar</li>
           		<li>1/4 cup Olive Oil</li>
           		<li>1/4 cup fresh or frozen Raspberries</li>
               		<li>2 teaspoons Honey</li>
        	 </ul>
	</div>
	<div class="right right-margin">
		<h2>Supplies:</h2>
		<ul>
			<li>Blender</li>
			<li>Dry Measuring Cup</li>
			<li>Measuring Spoons</li>
			<li>Liquid Measuring Cup</li>
        </ul>
	</div>
    <div class="down-left"><h2>Directions:</h2></div>
	<ol>
		<li>If using a mixed bag of frozen fruit, pick out the raspberries. Measure out 1/4 cup of the frozen or fresh raspberries. Put the 1/4 cup of raspberries into the blender.</li>
	<span class="center"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/raspberry_vinaigrette/measured_raspberries.png" alt="Frozen raspberries measured out into a 1/4 cup." /></span>
		<li>Using your liquid measuring cup, measure out 1/2 cup white vinegar and pour it into the blender. Rinse the liquid measuring cup, use it to measure out 1/4 cup olive oil, and pour it into the blender.</li>
	<span class="center"><span class="right-padded"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/raspberry_vinaigrette/vinegar.png" alt="White vinegar in a liquid measuring cup, with vinegar bottle sitting beside it."/></span><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/raspberry_vinaigrette/olive_oil.png" alt="Olive oil in a liquid measure cup, with olive oil bottle sitting beside it."/></span>
		<li>Using the measuring spoons, measuring out 2 teaspoons of honey and add them to the blender.</li>
		<span class="center"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/raspberry_vinaigrette/honey.png" alt="1 teaspoon of honey"/></span>
		<li>Using a medium setting on the blender mix the raspberries, olive oil, and vinegar until fully combined. Pour into a <a href="etched_dressing_bottle.html"> salad bottle</a> and add to your salad. I used mine on a salad made with romaine and spinach, topped with feta cheese, fuji apple slices, and almonds.</li>
		
	<span class="center"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/raspberry_vinaigrette/vinaigrette_salad.png" alt="Raspberry vinaigrette being poured on romaine, spinach, apple, and feta cheese salad."/></span>
	<p>I hope you enjoy this recipe as much as I do…it really is Delicious! Click <a href="recipes.html"> here</a> for more great recipes!</p>
        </div> 
<?php get_sidebar(); ?>
<?php get_footer(); ?>
