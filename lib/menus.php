<?php

/**
 * Add configuration option for hero splash image
 */
add_action('customize_register', function ($wp_customize) {
   $wp_customize->add_section('grayskull14_section_frontpage_hero', array(
     'title' => __('Frontpage Carousel Images', 'grayskull14'),
     'priority' => 20
   ));


   for ($i=1; $i<=20; $i++) {

     $wp_customize->add_setting("grayskull14_carousel_image_$i", array(
       'default'        => ''
     ));

     $wp_customize->add_control( new WP_Customize_Cropped_Image_Control( $wp_customize, "grayskull14_carousel_image_$i", array(
         'section'     => 'grayskull14_section_frontpage_hero',
         'label'       => __("Image $i"),
         'flex_width'  => false, // Allow any width, making the specified value recommended. False by default.
         'flex_height' => false, // Require the resulting image to be exactly as tall as the height attribute (default).
         'width'       => 1140,
         'height'      => 641
     ) ) );
   }
});
