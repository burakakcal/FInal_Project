<?php

//Hook1: customize-register to define new Cutomizer panels, settings, controls
function mytheme_customize_register( $wp_customize ) {
   //All our sections, settings, and controls will be added here

   // Background Colour
   $wp_customize->add_setting( 'garden_backgroundColour' , array(
       'default'   => '#ffffff',
       'transport' => 'refresh',
   ) );


   $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'garden_backgroundColourControl', array(
   	'label'      => __( 'Background Colour', 'gardenTheme' ),
    'description' => 'Change the background Colour',
   	'section'    => 'colors',
   	'settings'   => 'garden_backgroundColour',
   ) ) );

   // Header and Footer garden_backgroundColour // Background Colour
    $wp_customize->add_setting( 'garden_headerFooterColour' , array(
        'default'   => '#000000',
        'transport' => 'refresh',
    ) );


    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'garden_headerFooterColourControl', array(
    	'label'      => __( 'Header and Footer Colour', 'gardenTheme' ),
     'description' => 'Change the Header and Footer Colour',
    	'section'    => 'colors',
    	'settings'   => 'garden_headerFooterColour',
    ) ) );


   // Footer Message
   $wp_customize->add_section( 'garden_footerSection' , array(
       'title'      => __( 'Footer Text', 'gardenTheme' ),
       'priority'   => 30,
   ));

   $wp_customize->add_setting( 'garden_footerMessage' , array(
       'default'   => 'Copyright © 2021 Burak Akcal',
       'transport' => 'refresh',
   ) );

   $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'garden_footerMessageControl', array(
     'label'      => __( 'Footer Text', 'gardenTheme' ),
     'section'    => 'garden_footerSection',
     'settings'   => 'garden_footerMessage',
   ) ) );

   // footer icon image

   $wp_customize->add_section( 'garden_footerIconImage' , array(
      'title'      => __( 'Footer Icon Image', 'gardenTheme' ),
      'priority'   => 45,
  ) );

  $wp_customize->add_setting( 'garden_footerIcon' , array(
      'default'   => get_template_directory_uri() . 'images/facebooklogo.png',
      'transport' => 'refresh',
  ) );

  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'garden_footerIconImageControl', array(
    'label'      => __( 'Footer Icon Image', 'gardenTheme' ),
    'section'    => 'garden_footerIconImage',
    'settings'   => 'garden_footerIcon',
  ) ) );





   }

 add_action( 'customize_register', 'mytheme_customize_register' );


//Hook2: wp_head to output custom-generated CSS
 function mytheme_customize_css()
 {
   ?>
    <style type="text/css">
    body {
            background-color: <?php echo get_theme_mod('garden_backgroundColour','#ffffff'); ?>!important;
         }
   .myTheme{
             background-color: <?php echo get_theme_mod('garden_headerFooterColour', '#000000'); ?>!important ;
           }


  </style>
<?php
}
add_action( 'wp_head', 'mytheme_customize_css');
