<?php
if(get_field('experience_section_enabled')) :
?>
<!-- #region Gallery Slider: Experience (subheading heading description slider) -->
<section class="xl" id="<?php echo $args['id'] ?>">
  <?php echo heading_func($args) ?>
  <?php 
    // the query
    $query = [
      'post_type' => 'experience_slides',
      'posts_per_page' => 10,
      'orderby' => 'date',
      'order' => 'DESC',
    ];
    $the_query = new WP_Query( $query ); ?>
    
    <?php if ( $the_query->have_posts() ) : ?>
      <!-- Gallery Slider -->
      <div class="container gallery-slider-container">
        <div class="swiper-container cabin-slider gallery-slider">
          <div class="swiper-wrapper">
            <?php 
            while ( $the_query->have_posts() ) : 
            $the_query->the_post(); 
            $id = get_the_ID();
            ?>
            <div class="swiper-slide">
              <div class="gallery-slide">
                <img src="<?php echo get_the_post_thumbnail_url() ?>">
                <h3><?php the_title() ?></h3>
              </div>
            </div>
            <?php
            endwhile;
            ?>
            <div class="swiper-slide"></div>
            <?php wp_reset_postdata(); ?>
          </div>
          <div class="swiper-pagination"></div>

          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
      </div>
    <?php endif; ?>
</section>
<!-- endregion -->
<?php
endif;