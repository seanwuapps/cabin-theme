<!-- #region Rooms: Content box CTA -->
<section class="xl" id="<?php echo $args['id'] ?>">
<?php echo heading_func($args) ?>
<?php 
  // the query
  $query = [
    'post_type' => 'cta_boxes',
    'posts_per_page' => 10,
    'orderby' => 'date',
    'order' => 'DESC',
  ];
  $the_query = new WP_Query( $query ); ?>
  
  <?php if ( $the_query->have_posts() ) : ?>
  <div class="contentbox-cta alternating">
  <?php 
    while ( $the_query->have_posts() ) : 
    $the_query->the_post(); 
    $id = get_the_ID();
    ?>
    <!-- CTA 1 -->
    <div class="contentbox">
      <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="parallax image">
      <div class="text">
        <h4><?php the_title() ?></h4>
        <div class="divider"></div>
        <div class="text-content">
          <p>
            <?php the_content() ?>
          </p>
        </div>
        <div class="link">
          <a href="https://www.marriott.com/reservation/availability.mi?isSearch=false&propertyCode=vcexr" target="_blank" rel="noreferrer">
            Reserve now
          </a>
        </div>
      </div>
    </div>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
  </div>
  <?php endif; ?>
</section>
<!-- endregion -->
