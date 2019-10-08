<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gcc-starterkit
 */

get_header();
?>

<section class="content-section bg-primary">
  
  <div class="container bg-white">
    
  <div class="row">

  <div class="my-5 w-100" data-aos="fade-down">

    <?php the_archive_title( '<h1 lass="text-center text-uppercase w-100 mb-4">', '</h1>' ); ?>

  </div>
       
<?php
  $args =  array (
  'post_type' => 'campus_tours',
  'meta_key'      => 'event_day',
  'orderby'     => 'meta_value',
  'order'   => 'ASC',
  'posts_per_page'=>-1,
  );
?>
 
<?php
      $query = new WP_Query( $args ); ?>
     
      <?php if ( $query->have_posts() ) : ?>
      <?php while ( $query->have_posts() ) : $query->the_post();?>

<div class="col-lg-4 d-inline-block" itemscope itemtype="http://schema.org/Event">    
        <div class="card-group mb-4">
          <div class="card">
            <div class="card-body text-center">

              <span class="fa fa-calendar fa-2x text-primary mb-2"></span>
             
                  <?php $date = get_field('event_date', false, false); ?>

                  <?php $date = new DateTime($date); ?>
                  
                  <meta itemprop="startDate" content="<?php echo $date->format('Y-m-d'); ?>">

                  <h2 class="m-0" itemprop="name" ><?php the_field( 'event_date' ); ?></h2>
                    
                    <hr class="my-4">
                  
                  <p><?php the_field( 'event_day' ); ?><br/><?php the_field( 'event_time_start' ); ?> - <?php the_field( 'event_time_end' ); ?></p>

                  <?php while ( have_rows( 'campus_center_location' ) ) : the_row(); ?>

                  <p itemprop="location" itemscope itemtype="http://schema.org/Place"><?php echo the_sub_field( 'location_text' ); ?><br/>
                    <?php echo the_sub_field( 'location_city' ); ?>
                  </p>

                  <?php endwhile; ?>

                  <a href="<?php the_permalink(); ?>" itemprop="url" id="">Register</a>

            </div>
          </div>
        
     </div>
</div>


      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
      <?php else : ?>
      <p><?php esc_html_e( 'Sorry, no posts matched your criteria.', 'gcc-wp-2018'); ?></p>
      <?php endif; ?>


   </div>
 </div>
</section>

<?php
get_footer();
