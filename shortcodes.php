<?php
function load_template_part($template_name, $part_name=null, $data=null) {
  ob_start();
  get_template_part($template_name, $part_name, $data);
  $var = ob_get_contents();
  ob_end_clean();
  return $var;
}
// [heading subheading="" heading="" description=""]
add_shortcode( 'heading', 'heading_func' );
function heading_func( $atts ) {
  return load_template_part( 'templates/section-heading', null, $atts);
}
// [hero_slider]
add_shortcode( 'hero_slider', 'hero_slider_func' );
function hero_slider_func( $atts ) {
  return load_template_part( 'templates/hero-slider', null, $atts);
}

// [experience_slider_section]
add_shortcode( 'experience_slider_section', 'experience_slider_section_func' );
function experience_slider_section_func( $atts ) {
  return load_template_part( 'templates/experience-slider', null, $atts);
}

// [content_slider_section]
add_shortcode( 'contentbox_slider_section', 'contentbox_slider_section_func' );
function contentbox_slider_section_func( $atts ) {
  return load_template_part( 'templates/contentbox-slider', null, $atts);
}

// [parallax field="parallax_image_1"]
add_shortcode( 'parallax', 'parallax_func' );
function parallax_func( $atts ) {
  return load_template_part( 'templates/parallax', null, $atts);
}


// [cta_section]
add_shortcode( 'cta_section', 'cta_section_func' );
function cta_section_func( $atts ) {
  return load_template_part( 'templates/cta', null, $atts);
}