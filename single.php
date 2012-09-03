<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>
<div id="sidebar_container">
<?php get_sidebar(); ?>
    <div id="content_item"> 
        <div id="primary">
            <div id="content" role="main">

                <?php while ( have_posts() ) : the_post(); ?>

                    <?php get_template_part( 'content', 'single' ); ?>

                    <?php comments_template( '', true ); ?>

                <?php endwhile; // end of the loop. ?>

            </div><!-- #content -->
        </div><!-- #primary -->
    </div><!-- #content_item -->
<?php get_footer(); ?>
