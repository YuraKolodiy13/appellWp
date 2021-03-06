<?php

add_action( 'wp_enqueue_scripts', 'theme_styles' );
add_action( 'wp_enqueue_scripts', 'theme_scripts' );
add_action( 'after_setup_theme', 'myMenu' );

add_action('init', 'register_post_types');
function register_post_types(){
	register_post_type('services', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'Сервіси', // основное название для типа записи
			'singular_name'      => 'Сервіс', // название для одной записи этого типа
			'add_new'            => 'Добавити сервіс', // для добавления новой записи
			'add_new_item'       => 'Добавити сервіси', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактування сервісу', // для редактирования типа записи
			'new_item'           => 'Новий сервіс', // текст новой записи
			'view_item'          => 'Дивитись сервіс', // для просмотра записи этого типа.
			'search_items'       => 'Пошук сервісу', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Сервіси', // название меню
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => true, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // по умолчанию значение show_in_menu
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_rest'        => true, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 4,
		'menu_icon'           => 'dashicons-format-gallery',
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => array('thumbnail', 'title','editor'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => array(),
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	) );
}

function myMenu(){
    register_nav_menu('topMenu', 'меню в шапці');
    add_theme_support('post-thumbnails', array('services'));
}

function theme_styles(){
    wp_enqueue_style('slick', get_template_directory_uri() . '/assets/css/slick.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css');
}

function theme_scripts(){
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js');
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/slick-min.js', ['jquery'], null, true );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', ['jquery'], null, true );
}

show_admin_bar(false);