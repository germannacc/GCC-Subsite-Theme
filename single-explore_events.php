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
<!-- About Section -->
<section id="about" class="about-section" >
  
  <div class="container">
    
    <div class="row">
      
      <div class="col-lg-8" itemscope itemtype="http://schema.org/Event">
        
        <h1 class="mx-auto mt-4 mb-4 text-capitalize text-white"  itemprop="name"><?php _e('Experience Germanna', 'gcc-starterkit' ); ?>

        <br/>

        <span class="h3 text-capitalize"><?php the_title(); ?></span></h1>
        
        <div class="text-white mx-auto mb-4">

           <?php the_field( 'explore_description_text', 'options' ); ?>
          
        </div>

        <?php $audience = get_field('event_audience_text'); ?>

        <?php if(!empty($audience)) : ?>
       
          <h2 class="text-white mb-4">
          
            <?php _e('Audience:', 'gcc-starterkit'); ?>

            <?php the_field( 'event_audience_text' ); ?>
          
          </h2>

      <?php endif; ?>
        
        <div class="card-deck mb-2">
          <div class="card">
            <div class="card-body text-center">
              <i class="fa fa-calendar fa-2x text-primary mb-2"></i>
              <h4 class="text-uppercase m-0"><?php _e('Event Date', 'gcc-starterkit'); ?></h4>
              <hr class="my-4">
              <div class="text-black"><?php the_field( 'event_day' ); ?></div>

              <?php $date = get_field('event_day', false, false); ?>

              <?php $date = new DateTime($date); ?>
            
              <meta itemprop="startDate" content="<?php echo $date->format('Y-m-d'); ?>">

              <div class="text-black">
                
                <?php $dateformatstring = "F d, Y";
                
                $unixtimestamp = strtotime(get_field('event_date'));
                echo date_i18n($dateformatstring, $unixtimestamp); ?>
              </div>
              <div class="text-black"><?php the_field( 'event_time_start' ); ?> - <?php the_field( 'event_time_end' ); ?></div>
            </div>
          </div>
        </div>
        
        <div class="card-deck mb-2">
          <div class="card">
            <div class="card-body text-center">
              <i class="fa fa-map-marker fa-2x text-primary mb-2"></i>
              <h4 class="text-uppercase m-0"><?php _e('Event Locations', 'gcc-starterkit'); ?></h4>
              <hr class="my-4">

              <?php if ( have_rows( 'campus_center_location' ) ) : ?>
                
                <div class="text-black">

                  <?php while ( have_rows( 'campus_center_location' ) ) : the_row(); ?>


                  <p itemprop="location" itemscope itemtype="http://schema.org/Place"><?php echo the_sub_field( 'location_text' ); ?>
                  <br/>
                  
                  <?php echo the_sub_field( 'city_text' ); ?>
                 </p>

                <p>
                  <?php echo the_sub_field( 'room_number' ); ?>
                </p>
                 
                   <p><a href="<?php echo the_sub_field('location_directions_url'); ?>">
                    <?php _e('Get Directions', 'gcc-starterkit'); ?>
                   </a></p>

                  <?php endwhile; ?>
                </div>

              <?php endif; ?>
    
            </div>
          </div>
        </div>
        
      </div>
      
      <div class="col-lg-4 mt-4 event-form text-white">
        
        <div data-aos="fade-right">
          
          <h2 class="text-white mb-4"><?php the_field( 'sign_up_text' ); ?></h2>
          
          <?php
          $idcode = get_field('form_id');
          // Use shortcode in a PHP file (outside the post editor).
          echo do_shortcode( '[wpforms id="'.$idcode.'" title="false" description="false"]' );
          ?>
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