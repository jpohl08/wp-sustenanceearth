<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>
<div id="sidebar_container">
  <div class="sidebar">
    <h2>
      <?php $side_title = get_post_meta($post->ID, 'sidebar_title', true);
          echo $side_title
      ?>
    </h2>
      <p>
        <?php $side_para = get_post_meta($post->ID, 'sidebar_paragraph', true);
            echo $side_para
        ?>
     </p>
  </div>
<?php get_sidebar(); ?>

    <div id="content_item">
		<div id="primary">
			<div id="content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->
    </div><!-- #content_item -->

<?php get_footer(); ?>
