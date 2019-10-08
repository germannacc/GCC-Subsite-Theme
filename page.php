<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gcc-starterkit
 */

get_header();
?>
<section id="about" class="about-section bg-light"> 
  <div class="container bg-white pt-lg-5 p-4">
    
    <div class="row">

   	<?php get_sidebar(); ?>

     <div class="col-sm-8">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );
		endwhile; // End of the loop.
		?>

	</div>

</div>
</div>
</section>

<?php
get_footer();