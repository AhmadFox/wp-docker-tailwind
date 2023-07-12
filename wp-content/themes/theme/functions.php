<?php

    /*
    ** Function for add custom thumbnails to theme
    ** created by: Ahmad Gharaibeh [ Github ] : @ahmadFox
    ** wp_enqueue_style()
    */
    add_theme_support('post-thumbnails');

        /*
    ** Function for add custom Title to theme
    ** created by: Ahmad Gharaibeh [ Github ] : @ahmadFox
    ** wp_enqueue_style()
    */
    add_theme_support('title-tag');

    
    /*
    ** Function for add custom logo brand to theme
    ** created by: Ahmad Gharaibeh [ Github ] : @ahmadFox
    ** wp_enqueue_style()
    */
    add_theme_support( 'custom-logo' );

    function themename_custom_logo_setup() {
        $defaults = array(
            // 'height'      => 200,
            // 'width'       => 400,
            'flex-height' => true,
            'flex-width'  => true,
            'header-text' => array( 'site-title', 'site-description' ),
        );
        add_theme_support( 'custom-logo', $defaults );
    }

    add_action( 'after_setup_theme', 'themename_custom_logo_setup' );  


    /*
    ** Function for add custom style to theme
    ** created by: Ahmad Gharaibeh [ Github ] : @ahmadFox
    ** wp_enqueue_style()
    */
    function theme_add_styles() {
        
        wp_enqueue_style('style', get_template_directory_uri() . '/dist/css/main.css');
        
    }

    function dm_remove_wp_block_library_css(){
        wp_dequeue_style( 'wp-block-library' );
    }
    add_action( 'wp_enqueue_scripts', 'dm_remove_wp_block_library_css' );
    
    
    /*
    ** Function for add custom script to theme
    ** created by: Ahmad Gharaibeh [ Github ] : @ahmadFox
    ** wp_enqueue_script()
    */
    function theme_add_scripts() {
        
        wp_enqueue_script('main', get_template_directory_uri() . '/dist/js/main.js', array(), false, true);

    }

    /*
    ** Function for disable Classic theme css
    ** created by: Ahmad Gharaibeh [ Github ] : @ahmadFox
    ** Disable the emoji's
    */
    add_action( 'wp_enqueue_scripts', 'mywptheme_child_deregister_styles', 20 );
    function mywptheme_child_deregister_styles() {

        wp_dequeue_style( 'classic-theme-styles' );

    }


    /*
    ** Function for disable unnessesry scripts
    ** created by: Ahmad Gharaibeh [ Github ] : @ahmadFox
    ** Disable the emoji's
    */
    function disable_emojis() {
        remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
        remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
        remove_action( 'wp_print_styles', 'print_emoji_styles' );
        remove_action( 'admin_print_styles', 'print_emoji_styles' );	
        remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
        remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );	
        remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
        
        // Remove from TinyMCE
        add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
    }
    add_action( 'init', 'disable_emojis' );


    /*
     * Filter out the tinymce emoji plugin.
     */
    function disable_emojis_tinymce( $plugins ) {
        if ( is_array( $plugins ) ) {
            return array_diff( $plugins, array( 'wpemoji' ) );
        } else {
            return array();
        }
    }
    
    
    /*
    ** Add custom menue support
    ** created by: Ahmad Gharaibeh [ Github ] : @ahmadFox
    ** register_nav_menu()
    */
    function theme_register_custom_menu() {
        
        register_nav_menu('theme-menue', __('Navegation Bar'));
        
    }

    function theme_theme_menu() {
        
        wp_nav_menu();

    }


    /*
    ** Add custom menue support
    ** created by: Ahmad Gharaibeh [ Github ] : @ahmadFox
    ** register_nav_menu()
    */
    // Register Menus
    register_nav_menus(array(

    'primary-menu' => __('Primary Menu'),
    
    'mobile-menu' => __('Mobile Menu'),

    'footer-menu' => __('Footer Menu'),

    'footer-bootom-menu' => __('Footer Bottom Menu'),


    ));

    

    /*
    ** Function add class on menu link
    ** created by: Ahmad Gharaibeh [ Github ] : @ahmadFox
    */
    /* Add class for <li> in menus */
    function add_additional_class_on_li($classes, $item, $args) {
        if(isset($args->add_li_class)) {
            $classes[] = $args->add_li_class;
        }
        return $classes;
    }
    add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);
    
    /* Add class for <a> in menus and current page item */
    function add_additional_class_on_a($classes, $item, $args) {
        if (isset($args->add_link_class)) {
            $classes['class'] = $args->add_link_class;
        }
        if( in_array('current-menu-item', $item->classes )){
            $classes['class'] = $args->active_class;
        }
        return $classes;
    }
    add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 1, 3);

    /* Remove [after] '<span>|<span>' in last item in menus */
    function replace_last_nav_item($items, $args) {
        return substr_replace($items, '', strrpos($items, $args->after), strlen($args->after));
    }
    add_filter('wp_nav_menu','replace_last_nav_item',100,2);
    
    
    /*
    ** Function add actions
    ** created by: Ahmad Gharaibeh [ Github ] : @ahmadFox
    ** add_action()
    */
   add_action('wp_enqueue_scripts', 'theme_add_styles');
   add_action('wp_enqueue_scripts', 'theme_add_scripts');
   add_action('init', 'theme_register_custom_menu');


    /*
    ** Function add SVG support
    ** created by: Ahmad Gharaibeh [ Github ] : @ahmadFox
    ** add_action()
    */
    function cc_mime_types($mimes) {
        $mimes['svg'] = 'image/svg+xml';
        return $mimes;
    }

    add_filter('upload_mimes', 'cc_mime_types');



    /*
    ** Function add Woocommerce Support
    ** created by: Ahmad Gharaibeh [ Github ] : @ahmadFox
    ** add_action()
    */
    function woocommerce_support() {
        add_theme_support( 'woocommerce' );
    }
    add_action( 'after_setup_theme', 'woocommerce_support' );


    /*
    ** Function add actions
    ** created by: Ahmad Gharaibeh [ Github ] : @ahmadFox
    ** Remove <span> from ContactForm7
    */
    add_filter('wpcf7_form_elements', function($content) {
        $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);
        $content = str_replace('<br />', '', $content);
        return $content;
    });

?>