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


<?php get_sidebar(); ?>
<?php get_footer(); ?>
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
		<a href="http://facebook.com/sustenanceearth"><img src="images/facebook_icon.png"/></a>
	  	<a href="https://pinterest.com/sustenanceearth"><img src="images/pinterest_icon.png"/></a>
		<a href="https://twitter.com/SustEarth_Jenn"><img src="images/twitter_icon.png"/></a>
	  </div>
        </div>
      </div>
      <div id="content">
        <ul class="slideshow">
          <li class="show"><a href="shoestrap.html"><img width="706" height="316" src="images/finished_bracelet_home.png" alt="Upcycled Shoe Strap Wrap Bracelet" /></a></li>
	  <li><a href="artichokepizza.html"><img width="706" height="316" src="images/apizza_cooked_home.png" alt="Artichoke and Sun Dried Tomato Pizza Recipe"/></a></li>	  
	  <li><a href="gold_winebottle.html"><img width="706" height="316" src="images/decorative_vase_home.png" alt="Upcycled Wine Bottle Vase"/></a></li>
	  <li><a href="southern_french_crepe.html"><img width="706 height="316" src="images/crepe_home.png" alt="Strawberry filled crepe on a plate garnished with chocolate sauce"/></a></li>
	  <li><a href="purse_makeover.html"><img width="706" height="316" src="images/purse-makeover-home.png" alt="Drab to Fab Purse Makeover, Black Textured Purse"/></a></li>
	  <li><a href="raspberry_vinaigrette.html"><img width="706" height="316" src="images/rvinaigrette_homepage.png" alt="Raspberry Vinaigrette Recipe poured on Salad"/></a></li>

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
	   <span class="left"><img src="images/raspberry_vinaigrette/raspberry_pour.png" alt="Raspberry Vinaigrette being poured over feta and fuji apple salad"/></span><p>Welcome to my first featured recipe. This one comes courtesy of a wonderful healthy food and healthy living site called <a href="http://wellnessmama.com/">Wellness Mama</a>. This recipe for raspberry vinaigrette is so refreshing and pairs perfectly with a salad topped with feta cheese and fuji apple slices. Not only is it delicious but the pink color adds a pop to the salad. I would recommend making this dressing for a summer party or, for even more cuteness, a baby girl baby shower. Click <a href="etched_dressing_bottle.html"> here</a> for a tutorial on how to make this super cute and versatile salad dressing bottle.</p>
	    <span class="center"><span class="right-padded"><span class="right-padded"><img src="images/raspberry_vinaigrette/rvinaigrette_ingredients.png" alt="Raspberry Vinaigrette Ingredients, frozen raspberries, white vinegar, olive oil, and Orange honey."/></span></span><img src="images/raspberry_vinaigrette/rvinaigrette_supplies.png" alt="Blender, 1/4 cup dry measuring cup, liquid measure cup, measuring spoons"/></span>
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
	<span class="center"><img src="images/raspberry_vinaigrette/measured_raspberries.png" alt="Frozen raspberries measured out into a 1/4 cup." /></span>
		<li>Using your liquid measuring cup, measure out 1/2 cup white vinegar and pour it into the blender. Rinse the liquid measuring cup, use it to measure out 1/4 cup olive oil, and pour it into the blender.</li>
	<span class="center"><span class="right-padded"><img src="images/raspberry_vinaigrette/vinegar.png" alt="White vinegar in a liquid measuring cup, with vinegar bottle sitting beside it."/></span><img src="images/raspberry_vinaigrette/olive_oil.png" alt="Olive oil in a liquid measure cup, with olive oil bottle sitting beside it."/></span>
		<li>Using the measuring spoons, measuring out 2 teaspoons of honey and add them to the blender.</li>
		<span class="center"><img src="images/raspberry_vinaigrette/honey.png" alt="1 teaspoon of honey"/></span>
		<li>Using a medium setting on the blender mix the raspberries, olive oil, and vinegar until fully combined. Pour into a <a href="etched_dressing_bottle.html"> salad bottle</a> and add to your salad. I used mine on a salad made with romaine and spinach, topped with feta cheese, fuji apple slices, and almonds.</li>
		
	<span class="center"><img src="images/raspberry_vinaigrette/vinaigrette_salad.png" alt="Raspberry vinaigrette being poured on romaine, spinach, apple, and feta cheese salad."/></span>
	<p>I hope you enjoy this recipe as much as I do…it really is Delicious! Click <a href="recipes.html"> here</a> for more great recipes!</p>
        </div> 
	<div id="content_item">
	   <h2>8-28-2012</h2>
	   <h1>Etched Glass Salad Dressing Bottle</h1>
	   <span class="left"><img src="images/salad_bottle/salad_bottle_upright.png" alt="Glass bottle filled with red liquid with the word salad etched on the side."/></span>
 		<p>My husband I and go through <i>a lot</i> of salad. I mean enough to buy the Costco sized packs of lettuce, cheese, and croutons. I was thinking about how neat it would be if I could learn to make my own salad dressing, which will be the focus in my next recipe post. In the mean time, I decided what I really needed an easy pour container to hold my homemade salad dressing. As luck would have it I just used the last of my Oil Olive which was held in a bottle with a fancy pour spout. So, in true upcycle fashion, I decided to spice up the bottle and give it a new life as my "salad dressing bottle". Enjoy, Be Inspired, and Create some Upcycled Beauty for yourself!</p>
	   <span class="center"><img src="images/salad_bottle/etching_supplies.png" alt="Contact Paper, Armour Etch, Glass Bottle, Exacto Knife, and Stickers"/></span>
		<h2>What You Will Need:</h2>
		 <ul>
                   <li>Old Olive Oil Bottle -OR - Any Bottle with a Pour Spout</li>
                   <li>Contact Paper</li>
	           <li>Letter Stickers</li>
                   <li>Exacto Knife</li>
                   <li>Armour Etch -OR- Glass Etching Cream</li>  
		   <li>Paint Brush</li>
                   <li>Protective Gloves</li>
		</ul>
		<h2>Directions:</h2>
                  <p>Remove any labeling and stickiness from your bottle. Once your bottle is clean and dry apply the contact paper to the side you will be etching. Be sure to press out any bubbles in the contact paper as best as you can so you don't get any leaks in the etch.</p>
	  <span class="left"><img src="images/salad_bottle/contact_bottle.png" alt="Stripped contact paper covering a bottle"/></span>
		  <p>Next apply the stickers to the contact paper. I choose to spell salad, but you could use any word you'd like.</p>
	  <span class="right"><img src="images/salad_bottle/stickers.png" alt="The word Salad spelled out with stickers in the side of a bottle covered with contact paper."/></span>	
	  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	  <p>Use your exacto knife to trace around the edges of the letters, essentially cutting the letters out of the contact paper. Once you've traced around the sticker you can remove it and use your exacto knife to lift the cut out letters.</p>
	 <span class="center"><img src="images/salad_bottle/salad_cut.png" alt="The word salad cut out of contact paper on glass bottle."/></span>       
	<p>Now it's time to use the Armour Etch. <strong>Note:</strong> Please follow all the safety precautions and directions on the Armour Etch or any glass etching cream you use. Following the directions on the armour etch, put on safety gloves and use the paint brush to apply a liberal amount of etching cream, covering the letters. Rinse off the paint brush and allow the cream to set for 60 <i>seconds</i>. Immediately rinse the entire bottle off in the sink. Wipe the bottle dry and remove the contact paper.</p>
	 <span class="center"><span class="right-padded"><img src="images/salad_bottle/etching_cream.png" alt="Etching cream on bottle."/></span><img src="images/salad_bottle/final_etch.png" 		       alt="The word Salad etched on to the side of a glass bottle."/></span>
	 <p>Bringing new life to old and would-be discarded items always makes my day just a little bit brighter! Enjoy your new bottle, and get geared up for my first ever salad dressing recipe!</p>
	<span class="center"><img src="images/salad_bottle/finished_bottle.png" alt="Glass bottle filled with red liquid with the word Salad etched on the side."/></span>
        <p>Click <a href="crafts.html">Here</a> for more great craft ideas!</p>
        </div>
	<div id="content_item">
	   <h2>8-26-2012</h2>
	   <h1>Authentic Southern French Crepe</h1>
	   <span class="left"><img src="images/crepe/crepe_small.png" alt="Strawberry and Whipped Cream Crepe on a Garnished Plate"/></span>
 		<p>Bojour! About a month ago our family hosted a young man named Jules from Nantes, France. In his home town he lived above a creperie and as a thank you he cooked and shared with us this recipe for French Crepes.  This recipe is definitely an indulgence, but even the healthiest of us need those every now and then. Whether you prefer to add sweet fillings, my favorite being fresh strawberries and whipped cream, or savory fillings, such as smoked salmon and feta cheese, this is a delicious recipe for Sunday Brunch or any day of the week. Bon Appetit!
		<p> <strong>Note:</strong> This recipe makes roughly 10 - 12 crepes.</p>
	    <span class="center"><span class="right-padded"><img src="images/crepe/crepe_ingredients.png" alt="Ingredients crepe, Flour, Fresh Strawberries, Fat Free Milk, Salt, Vanilla Extract, Eggs, and Captian Morgan's Rum"/></span><img src="images/crepe/crepe_supplies.png" alt="Bowl, Measure cups, Spatula, Whisk, and Skillet"/></span>
	<div class="left">
		<h2>Ingredients:</h2>
		 <ul>
               		<li>1 1/4 cup Flour</li>
           		<li>3 Eggs</li>
           		<li>2 cups Milk</li>
               		<li>Pinch of Salt</li>
              		<li>1 capful of Vanilla Extract</li>
			<li>Butter (for rubbing on skillet)</li>
			<li><strong>Optional:</strong> 1 capful of Rum</li>
        	 </ul>
	</div>
	<div class="right right-margin">
		<h2>Supplies:</h2>
		<ul>
			<li>Medium Bowl</li>
			<li>Dry Measuring Cups</li>
			<li>Liquid Measuring Cup</li>
			<li>Whisk</li>
			<li>Plastic Wrap</li>
			<li>Skillet</li>
			<li>Spatula</li>
        </ul>
	</div>
    <div class="down-left"><h2>Directions:</h2></div>
	<ol>
		<li>Measure out the flour and place into a medium bowl. Use your hands to make a large crater in the center of the flour.</li>
	<span class="center"><img src="images/crepe/flour_crater.png" alt="Flour shaped into a crater inside a teal bowl." /></span>
		<li>Crack the 3 eggs into the center of the flour crater. Next, add only a little bit of milk to the eggs in the center of the flour crater.</li>
	<span class="center"><span class="right-padded"><img src="images/crepe/eggs_in_flour.png" alt="Three eggs, yolks and whites, inside flour crater in teal bowl."/></span><img src="images/crepe/milk_eggs.png" alt="Eggs and Milk inside flour crater"/></span>
		<li>Using your whisk pop the egg yolks. Start by mixing just the center contents of the crater. As that starts to thicken, add a little more milk and flour from the sides of the crater and 	continue to whisk. Continue adding milk and taking flour from the sides of the crater until all of the milk and flour is throughly whisked in. Be forewarned that this will be a whisking frenzy!</li>
		<span class="right"><img src="images/crepe/addingsalt.png" alt="Hand holding a pinch of salt over a bowl of crepe mix"/></span>
		<li>Once you've finished whisking the flour/egg/milk mixture add a pinch of salt, capful of vanilla, and, if you choose, capful of rum. Whisk to fully combine these ingredients.</li>
		<span class="left"><img src="images/crepe/rum.png" alt="Pouring a capful of rum into a crepe mixture"/></span>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		<li>Cover your crepe batter with plastic wrap and stick in the fridge for a minimum of 30 minutes. This batter could be mixed the night before and stored in the fridge overnight.</li>
		<li>To cook your crepes, set your burner on a medium to medium-low temperature. Very lightly butter the skillet. Pour about a half a cup of batter into your skillet and swirl the skillet to get a thin even coat. <strong>Note:</strong> the first crepe <i>always</i> turns out badly.</li>
		<li>The edges of the crepe will start to lift slightly from the pan, at this point you should flip your crepe. You only need to briefly cook the second side of the crepe. Remove crepe from skillet and keep warm as you continue to make the rest of the crepes.</li>
		<span class="center"><span class="right-padded"><img src="images/crepe/start_crepe.png" alt="Crepe cooking in skillet"/></span><img src="images/crepe/crepe_flip.png" alt="flipped crepe in skillet"/></span>
	</ol>
	<p>Enjoy your crepes with an assortment of delicious fillings. We choose to have a very indulgent brunch and had strawberries, whipped cream, nutella, chocolate sauce, and maple syrup.</p>
	<span class="center"><img src="images/crepe/toppings.png" alt="Crepes, strawberries, whipped cream, chocolate sauce, maple syrup, nutella, and a plate sitting on top of a brown table"/></span>
	<p>I hope that you enjoy this recipe as much as my family does! Like me on<a href="http://facebook.com/sustenanceearth"> FaceBook</a> and tell me what your favorite fillings and toppings are! 
	<span class="center"><img src="images/crepe/strawberry_crepe.png" alt="Crepe filled with strawberries and topped with whipped cream and more strawberries sitting on a plate garnished with chocolate sauce."/></span>
	<p>Click <a href="recipes.html"> here</a> for more great recipes!</p>
        </div>     
      </div>
    </div>
