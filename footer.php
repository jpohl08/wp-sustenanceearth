<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

    <p>&nbsp;</p>
    <p>&nbsp;</p>

    </div><!-- #main -->

</div><!-- #page -->

<footer id="main-footer">
    <p><a href="<?php echo esc_url( home_url() ); ?>">Home</a> |
         <a href="<?php echo esc_url( home_url() ); ?>/upcycled-crafts">Upcycled Crafts</a> |
         <a href="<?php echo esc_url( home_url() ); ?>/recipes">Recipes</a> |
         <a href="<?php echo esc_url( home_url() ); ?>/featured">Featured</a> |
         <a href="<?php echo esc_url( home_url() ); ?>/about">About</a> |
         <a href="<?php echo esc_url( home_url() ); ?>/contact">Contact Me</a>
      </p>
      <p>Copyright &copy; CSS3_design_two |
         Design: <a href="http://takeflightsites.com">Take Flight Sites</a> | 
         Template: <a href="http://www.css3templates.co.uk">css3templates.co.uk</a>
      </p>
</footer>

  </div>
  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.js"></script>
  <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.easing-sooper.js"></script>
  <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.sooperfish.js"></script>
  <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/image_fade.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('ul.sf-menu').sooperfish();
    });
  </script>

</body>
</html>
