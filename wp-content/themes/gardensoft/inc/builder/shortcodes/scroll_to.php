<?php

// Shortcode to display a single product
add_ux_builder_shortcode( 'scroll_to', array(
    'name' => 'Scroll To',
    'category' => __( 'Elements' ),
    'thumbnail' =>  flatsome_ux_builder_thumbnail( 'scroll_to' ),
    'info' => '{{ title }}',
    'wrap' => false,

    'presets' => array(
        array(
            'name' => __( 'Default' ),
            'content' => '[scroll_to title="" link="" bullet="true"]'
        ),
    ),

    'options' => array(
        'title' => array(
            'type' => 'textfield',
            'heading' => 'Title',
            'default' => '',
        ),
        'link' => array(
            'type' => 'textfield',
            'heading' => 'Link',
            'default' => '',
            'description' => 'You can scroll to this by using #value as link'
        ),
    ),
) );
