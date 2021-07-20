<!-- #region Hero Slider: parallax -->
<section class="hero-slider-section">
  <div class="swiper-container hero-slider">
    <div class="swiper-wrapper">
    <?php 
    // the query
    $args = [
      'post_type' => 'hero_slides',
      'posts_per_page' => 5,
      'orderby' => 'date',
      'order' => 'DESC',
    ];
    $the_query = new WP_Query( $args ); ?>
    
    <?php if ( $the_query->have_posts() ) : ?>
    
        <!-- the loop -->
        <?php 
        while ( $the_query->have_posts() ) : 
        $the_query->the_post(); 
        $id = get_the_ID();
        ?>
        <div class="swiper-slide">
          <img class="hero-slide-img" src="<?php echo get_the_post_thumbnail_url() ?>">
          <div class="hero-slide-content">
            <h3><?php the_title() ?></h3>
            <?php the_content() ?>
          </div>
        </div>
        <?php
        endwhile;
        ?>
        <!-- end of the loop -->
    
        <?php wp_reset_postdata(); ?>
    
    <?php else : ?>
    <div class="swiper-slide">
      <img class="hero-slide-img" src="https://picsum.photos/seed/1/800/600">
      <div class="hero-slide-content">
        <h3>Lorem ipsum dolor sit</h3>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit.
          Incidunt voluptas, dolorem unde ipsum sunt quo iure officia!
          Inventore quibusdam laborum eius repellat, laudantium, eligendi
        </p>
      </div>
    </div>
    <?php endif; ?>
    </div>
    <div class="swiper-pagination"></div>

    <div class="hero-slider-timer"></div>
    <!-- <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div> -->
  </div>
  <div class="scroll-indicator"></div>
</section>
<!-- endregion Hero Slider: parallax -->
