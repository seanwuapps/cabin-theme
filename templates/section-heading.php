<?php if($args['heading']) : ?>
<!-- Heading + description -->
<div class="container">
  <h4 class="subheading"><?php echo strip_tags($args['subheading']) ?></h4>
  <h2><?php echo strip_tags($args['heading']) ?></h2>
  <p class="has-line line-before">
    <?php echo strip_tags($args['description']) ?>
  </p>
</div>
<!-- END: Heading + description -->
<?php endif;