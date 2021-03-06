<?php get_header() ?>
<?php 
the_content();
/*
<?php get_template_part( 'templates/hero-slider' ) ?>
<?php get_template_part('templates/experience-slider') ?>


<?php get_template_part('templates/contentbox-slider') ?>
<?php get_template_part('templates/cta') ?>

*/ ?>
    <!-- tabs? -->

    <!-- #region Gallery Slider: Gallery -->
    <section class="xl" id="section-4">
      <!-- Heading + description -->
      <div class="container">
        <h4 class="subheading">Lorem ipsum dolor</h4>
        <h2>Lorem, ipsum.</h2>
        <p class="has-line line-before">
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic
          perspiciatis dicta corporis quis, a nostrum cum quo voluptatem,
          sapiente suscipit quaerat excepturi ducimus accusantium praesentium
          nulla doloribus amet itaque eligendi!
        </p>
      </div>
      <div class="container">
        <div class="swiper-container cabin-slider single-image-slider">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
              <img src="https://picsum.photos/seed/5/1200/800" alt="">
            </div>
            <div class="swiper-slide">
              <img src="https://picsum.photos/seed/6/1200/800" alt="">
            </div>
            <div class="swiper-slide">
              <img src="https://picsum.photos/seed/4/1200/800" alt="">
            </div>
          </div>
          <!-- If we need pagination -->
          <div class="swiper-pagination"></div>

          <!-- If we need navigation buttons -->
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
      </div>
    </section>
    <!-- endregion -->

<!-- #region *Feature: parallax* -->
<section class="feature">
  <img src="<?php echo get_field('parallax_image_2'); ?>" alt="parallax image" class="featured-parallax" data-rellax-percentage="0.5">
</section>
  <!-- endregion *Feature: parallax* -->

    <!-- #region Culture: *sticky title* content box  -->
    <section class="xl sticky" id="section-5">
      <div class="container sticky-container">
        <div class="sticky-header">
          <!-- Heading + description -->
          <h4 class="subheading">Lorem ipsum dolor</h4>
          <h2>Lorem, ipsum.</h2>
          <div class="sticky-progress"></div>
        </div>

        <div class="sticky-content contentbox-cta secondary">
          <!-- CTA 1 -->
          <div class="contentbox">
            <img src="https://picsum.photos/seed/8/1200/800" alt="parallax image">
            <div class="text">
              <h4>Lorem ipsum dolor Lorem ipsum dolor CTA 1</h4>
              <div class="divider"></div>
              <div class="text-content">
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit orem
                  ipsum dolor sit amet consectetur adipisicing elit orem ipsum
                  dolor sit amet consectetur adipisicing elit
                </p>
              </div>
              <div class="link">
                <a href="https://www.marriott.com/reservation/availability.mi?isSearch=false&propertyCode=vcexr" target="_blank" rel="noreferrer">
                  Reserve now
                </a>
              </div>
            </div>
          </div>
          <!-- CTA 2 -->
          <div class="contentbox">
            <img src="https://picsum.photos/seed/88/1200/800" alt="parallax image">
            <div class="text">
              <h4>Lorem ipsum dolor Lorem ipsum dolor CTA 2</h4>
              <div class="divider"></div>
              <div class="text-content">
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit orem
                  ipsum dolor sit amet consectetur adipisicing elit orem ipsum
                  dolor sit amet consectetur adipisicing elit
                </p>
              </div>
              <div class="link">
                <a href="https://www.marriott.com/reservation/availability.mi?isSearch=false&propertyCode=vcexr" target="_blank" rel="noreferrer">
                  Reserve now
                </a>
              </div>
            </div>
          </div>
          <!-- CTA 3 -->
          <div class="contentbox">
            <img src="https://picsum.photos/seed/888/1200/800" alt="parallax image">
            <div class="text">
              <h4>Lorem ipsum dolor Lorem ipsum dolor CTA 3</h4>
              <div class="divider"></div>
              <div class="text-content">
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit orem
                  ipsum dolor sit amet consectetur adipisicing elit orem ipsum
                  dolor sit amet consectetur adipisicing elit
                </p>
              </div>
              <div class="link">
                <a href="https://www.marriott.com/reservation/availability.mi?isSearch=false&propertyCode=vcexr" target="_blank" rel="noreferrer">
                  Reserve now
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- endregion -->

    <!-- marquee? -->
    <!-- Beauty and wellness CTA? -->

    <!-- #region Social: instagram wall -->
    <section class="xl social-media-wall" id="section-6">
      <div class="container">
        <!-- Heading + description -->
        <h4 class="subheading">Social</h4>
        <h2>Follow us on Instagram</h2>
        <div class="divider"></div>
        <h5>
          <a href="https://www.instagram.com/timberwolfcabin_kv/" target="_blank" rel="noreferrer" class="icon-link">
            <span>@timberwolfcabin_kv</span>
            <box-icon color="currentColor" type="logo" name="instagram"></box-icon>
          </a>
        </h5>
        <!-- END: Heading + description -->
        <div>
          <?php
            echo do_shortcode('[instagram-feed]');
          ?>
        </div>
      </div>
    </section>
    <!-- endregion -->
<?php get_footer(); ?>
