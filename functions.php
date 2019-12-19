<?php 

    function load_stylesheets(){
        // Bootsrap
        wp_register_style( "bootstrap", 
                           'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', 
                           array(), false, 'all' );
        wp_enqueue_style( "bootstrap");


        // Custom Styles
        wp_register_style( "custom_style", 
                           get_template_directory_uri() . '/assets/css/custom_styles.css' , 
                           array(), false, 'all' );
        wp_enqueue_style( "custom_style");


        //Font-Awesome
        wp_register_style( "font_awesome", 
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css' , 
                           array(), false, 'all' );
        wp_enqueue_style( "font_awesome");


        //Oxygen Google Font
        wp_register_style( "Oxygen", 
        'https://fonts.googleapis.com/css?family=Oxygen:400,700&display=swap' , 
                           array(), false, 'all' );
        wp_enqueue_style( "Oxygen");


        //AOS Styles
        wp_register_style( "aos_style", 
        'https://unpkg.com/aos@next/dist/aos.css' , 
                           array(), false, 'all' );
        wp_enqueue_style( "aos_style");



    }


    add_action( "wp_enqueue_scripts", 'load_stylesheets');





    function loadjs(){
        // jQuiry
        wp_register_script( 'jquiry', 'https://code.jquery.com/jquery-3.3.1.slim.min.js', array(), '3.3.1', true );
        wp_enqueue_script('jquiry');

        // Popper
        wp_register_script( 'popperjs', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array(), '1', true );
        wp_enqueue_script('popperjs');

        // Bootsrap JS
        wp_register_script( 'bootstrapjs', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array(), '4.3.1', true );
        wp_enqueue_script('bootstrapjs');

        // AOS
        wp_register_script( 'aos', 'https://unpkg.com/aos@next/dist/aos.js', array(), '1', false );
        wp_enqueue_script('aos');

        wp_register_script( 'aos_init', get_template_directory_uri() . '/assets/js/aos_init.js', array(), '1', true );
        wp_enqueue_script('aos_init');
    }


    add_action( "wp_enqueue_scripts", 'loadjs');





?>