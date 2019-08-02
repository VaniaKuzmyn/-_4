<?php

    add_filter('show_admin_bar', '__return_false'); // hidden admin bar
    define('NEWTHEME_THEME_ROOT', get_template_directory_uri());
    define('NEWTHEME_CSS_DIR', NEWTHEME_THEME_ROOT . '/build/css');
    define('NEWTHEME_JS_DIR', NEWTHEME_THEME_ROOT . '/build/js');
    define('NEWTHEME_IMG_DIR', NEWTHEME_THEME_ROOT . '/build/images/');
    define('NEWTHEME_AJAX_DIR', NEWTHEME_THEME_ROOT . '/build/ajax/');
    
    
    add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
    function theme_name_scripts() {

        /* Css files */
        wp_enqueue_style( 'reset', NEWTHEME_CSS_DIR . '/reset.css');
        wp_enqueue_style( 'bootstrapcdn', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
        wp_enqueue_style( 'fontawesome5', 'https://use.fontawesome.com/releases/v5.8.1/css/all.css');
        wp_enqueue_style( 'fontawesome4', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
        wp_enqueue_style( 'slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
        wp_enqueue_style( 'cufonfonts', 'https://www.cufonfonts.com/cdn/webfont/georgia-2?token=z-tDnmDSPYg4kDT2BgxjmPdOiM1AG1hR');
        wp_enqueue_style( 'jquery-ui', NEWTHEME_CSS_DIR . '/jquery-ui.css');
        wp_enqueue_style( 'datepicker', NEWTHEME_CSS_DIR . '/datepicker.min.css');
        wp_enqueue_style( 'main', NEWTHEME_CSS_DIR . '/main.min.css');

        /* Js files */
        /* Jquery */
        wp_deregister_script( 'jquery' );
        wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.4.0.min.js');
        wp_enqueue_script( 'jquery');
        
        wp_enqueue_script( 'slick','https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js');
        wp_enqueue_script( 'datepicker', NEWTHEME_JS_DIR . '/datepicker.min.js');
        wp_enqueue_script( 'jquery-ui', 'https://code.jquery.com/ui/1.12.1/jquery-ui.js');
        wp_enqueue_script( 'jquery.ui.touch-punch', NEWTHEME_JS_DIR . '/jquery.ui.touch-punch.min.js');

        wp_enqueue_script( 'main', NEWTHEME_JS_DIR . '/main.min.js');
    }

    

    
    add_action( 'init', 'register_post_types' );
        add_theme_support('post-thumbnails');

        function register_post_types(){

            //Title header
            register_post_type('MainTitle', array(
                'labels' => array(
                    'name'               => 'Тайтл слайдер', // основное название для типа записи
                    'singular_name'      => 'Title slider', // название для одной записи этого типа
                    'add_new'            => 'Добавить -', // для добавления новой записи
                    'add_new_item'       => 'Добавление -', // заголовка у вновь создаваемой записи в админ-панели.
                    'edit_item'          => 'Редактирование -', // для редактирования типа записи
                    'new_item'           => 'Новое -', // текст новой записи
                    'view_item'          => 'Смотреть -', // для просмотра записи этого типа.
                    'search_items'       => 'Искать -', // для поиска по этим типам записи
                    'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
                    'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
                    'menu_name'          => 'Тайтл слайдер' // название меню
                ),
                'public'              => false,
                'show_ui'             => true, // зависит от public
                'menu_icon'           => 'dashicons-format-aside', 
                'supports'            => array('title') // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
                
            ) );

            /* Main section cards */
            register_post_type('MainCard', array(
                'labels' => array(
                    'name'               => 'Card', // основное название для типа записи
                    'singular_name'      => 'Main card', // название для одной записи этого типа
                    'add_new'            => 'Добавить -', // для добавления новой записи
                    'add_new_item'       => 'Добавление -', // заголовка у вновь создаваемой записи в админ-панели.
                    'edit_item'          => 'Редактирование -', // для редактирования типа записи
                    'new_item'           => 'Новое -', // текст новой записи
                    'view_item'          => 'Смотреть -', // для просмотра записи этого типа.
                    'search_items'       => 'Искать -', // для поиска по этим типам записи
                    'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
                    'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
                    'menu_name'          => 'Main cards' // название меню
                ),
                'public'              => false,
                'show_ui'             => true, // зависит от public
                'supports'            => array('title') // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
                
            ) );

    }

    //Title header
    function getMainTitle(){
        $args = array(
            'orderby'     => 'date',
            'order'       => 'ASC',
            'post_type'   => 'MainTitle'
        );
            $reviews = [];
            foreach(get_posts($args) as $post){
                $review = get_fields($post->ID);
                $reviews[] = $review;
            }
        return $reviews;
    }

    /* Main section cards */
    function getMainCard(){
        $args = array(
            'orderby'     => 'date',
            'order'       => 'ASC',
            'post_type'   => 'MainCard'
        );
            $reviews = [];
            foreach(get_posts($args) as $post){
                $review = get_fields($post->ID);
                $reviews[] = $review;
            }
        return $reviews;
    }