<?php
if(get_field('contentbox_slider_section_enabled')) :
?>
<!-- #region Content box (heading img description) slider -->
<section class="xl" id="<?php echo $args['id'] ?>">
  <?php echo heading_func($args) ?>
  <?php 
    // the query
    $query = [
      'post_type' => 'contentbox_slides',
      'posts_per_page' => 10,
      'orderby' => 'date',
      'order' => 'DESC',
    ];
    $the_query = new WP_Query( $query ); ?>
    
  <?php if ( $the_query->have_posts() ) : ?>
  <!-- Gallery Slider -->
  <div class="contentbox-slider-container container mt-5">
    <div class="swiper-container cabin-slider contentbox-slider">
      <div class="swiper-wrapper">
        <?php 
        while ( $the_query->have_posts() ) : 
        $the_query->the_post(); 
        $id = get_the_ID();
        ?>
        <div class="swiper-slide">
          <div class="contentbox">
            <img src="<?php echo get_the_post_thumbnail_url() ?>" />
            <div class="text">
              <h4><?php the_title() ?></h4>
              <div class="divider"></div>
              <div class="text-content">
                <?php the_content() ?>
              </div>
            </div>
          </div>
        </div>
        <?php endwhile; ?>
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