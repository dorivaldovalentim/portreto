<?php

    if (! function_exists( 'portreto_setup' ) ) {
        
        function portreto_setup()
        {
            /** ********** ********** ********** ********** **********
             *                  Adição de suportes 
             ********** ********** ********** ********** ********** */

            /**
             * Automatic Feed Links
             * 
             * Automatic feed links enables post and comment RSS feeds by default.
             * These feeds will be displayed in <head> automatically.
             */

            add_theme_support( 'automatic-feed-links' );

            /**
             * Post Thumbnails
             * 
             * Post thumbnails and featured images allow your users to choose an image
             * to represent their post. Your theme can decide how to display them,
             * depending on its design.
             */

            add_theme_support( 'post-thumbnails' );

            /**
             * Post Formats
             * 
             * Post formats allow users to format their posts in different ways. This is
             * useful for allowing bloggers to choose different formats and templates
             * based on the content of the post.
             */

            add_theme_support( 'post-formats',  array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );

            /** ********** ********** ********** ********** **********
             *                  Adição de menus
             ********** ********** ********** ********** ********** */

            /**
             * Navigation Menus
             * 
             * Custom navigation menus allow users to edit and customize menus in the Menus
             * admin panel, giving users a drag-and-drop interface to edit the various menus
             * in their theme.
             * 
             * You can set up multiple menus in functions.php. They can be added using
             * register_nav_menus() and inserted into a theme using wp_nav_menu(), as discussed
             * later in this handbook. If your theme will allow more than one menu, you should
             * use an array. While some themes will not have custom navigation menus, it is
             * recommended that you allow this feature for easy customization.
             */

            register_nav_menu( 'primary', __('Primary Menu', 'portreto') );

            /** ********** ********** ********** ********** **********
             *                  Adição de assets
             ********** ********** ********** ********** ********** */

             /**
              * Stylesheets
              */

            wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', [], 1.0, 'all' );

            /**
             * Scripts
             */

            wp_enqueue_script( 'script', get_template_directory_uri() . '/script.js', [], 1.0, false );
        }


    }

    add_action( 'init', 'portreto_setup' );

?>