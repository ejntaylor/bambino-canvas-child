<?php
/**
 * Template Name: Home
 *

 *
 * @package WooFramework
 * @subpackage Template
 */

get_header();
global $woo_options;

?>
       
    <!-- #content Starts -->
	<?php woo_content_before(); ?>
    <div id="content" class="col-full entry">
    
    	<div id="main-sidebar-container">    

            <!-- #main Starts -->
            <?php woo_main_before(); ?>
            <section id="main">           
            



<?php
	woo_loop_before();

	if ( have_posts() ) { $count = 0;
		while ( have_posts() ) { the_post(); $count++;
			 //get_template_part('includes/template/home', 'top');

		}
	}

	woo_loop_after();
?>



      

           </section><!-- /#main -->
            <?php woo_main_after(); ?>
            
            
    
            <?php get_sidebar(); ?>

		</div><!-- /#main-sidebar-container -->         

		<?php get_sidebar( 'alt' ); ?>

    </div><!-- /#content -->
	<?php woo_content_after(); ?>


<?php get_footer(); ?>