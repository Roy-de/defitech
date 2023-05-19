<?php

    if( !function_exists('defitech_setup')):
        function defitech_setup(){
            add_theme_support( 'automatic-feed-links');
            /*
            Post thumbnails and featured images allow your users to choose an image to 
            represent their post. Your theme can decide how to display them, depending 
            on its design
            */
            add_theme_support( 'post-thumbnails' );
            /*
            Post formats allow users to format their posts in different ways. This is useful for allowing bloggers to choose different formats and templates based on the content of the post.
            add_theme_support() is also used for Post Formats. This is recommended.*/
            add_theme_support( 'post-formats',  array( 'aside', 'gallery', 'quote', 'image', 'video' ) );
        }
    endif;
    function load_css()
{
    wp_register_style('flowbite','https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css','tailwind','https://rsms.me/inter/inter.css',array(),false , 'all');
    wp_enqueue_style('flowbite','tailwind');
    }

    add_action('wp_enqueue_scripts','load_css');
    add_action( 'after_setup_theme', 'defitech_setup');
/*
Funtion to load js but it is not woking
    function load_js(){
        wp_register_script('flowbite','https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js','tailwind','https://cdn.tailwindcss.com',false,false,true);
        wp_enqueue_script( 'flowbite','tailwind');
    }
    add_action('wp_enqueue_scripts','load_js');

*/

?>