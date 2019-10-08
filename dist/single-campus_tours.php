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
<?php
    while ( have_posts() ) :
the_post();  ?>

<section class="content-section bg-primary">
  
  <div class="container bg-white">
    
    <div class="row">
      
      <div class="col-lg-12" itemscope itemtype="http://schema.org/Event">
        
        <h1 class="mx-auto mt-4 mb-4 text-primary"  itemprop="name">

          <?php _e('Campus Tours: ', 'gcc-starterkit' ); ?>
          

          <?php $date = get_field('event_date', false, false); ?>

                  <?php $date = new DateTime($date); ?>
                  
                  <meta itemprop="startDate" content="<?php echo $date->format('Y-m-d'); ?>">

                  <?php the_field( 'event_date' ); ?>

      </h1>

          <hr class="my-4">

          <div class="entry-content">
                  
                  <p><?php the_field( 'event_day' ); ?><br/><?php the_field( 'event_time_start' ); ?> - <?php the_field( 'event_time_end' ); ?></p>
        
                  <p itemprop="location" itemscope itemtype="http://schema.org/Place">
                    
                    <strong><?php the_field( 'campus_center_location' ); ?></strong><br/>
                    <?php the_field( 'location_city' ); ?><br/>

                  </p>    

                  <p><?php the_field( 'room_location' ); ?> </p>

                  <h2><?php _e('Register', 'gcc-starterkit'); ?></h2>

                  <?php the_field('event_details'); ?>

        </div> 

      </div>             
    </div>

  </div>
</section>

<?php
    endwhile; // End of the loop.
?>

<?php
get_footer();