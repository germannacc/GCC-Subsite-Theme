<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package gcc-starterkit
 */

get_header();
?>
<section id="about" class="about-section" >
  
  <div class="container bg-white">
    
    <div class="row d-block">

  <div class="col-sm-8">

  	  <div class="entry-content">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );


		endwhile; // End of the loop.
		?>
</div>
</div>

     <?php get_sidebar(); ?>

</div>
</div>
</section>

<?php

get_footer();
