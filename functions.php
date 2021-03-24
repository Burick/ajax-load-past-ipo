<?php
/**
 * ipo.one functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ipo.one
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'ipo_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function ipo_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on ipo.one, use a find and replace
		 * to change 'ipo' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'ipo', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'ipo' ),
				'menu-2' => esc_html__( 'Новости', 'ipo' ),
				'menu-3' => esc_html__( 'Основное меню блог', 'ipo' ),
				'menu-4' => esc_html__( 'Глоссарий рус', 'ipo' ),
				'menu-5' => esc_html__( 'Глоссарий англ', 'ipo' ),
                'menu-6' => esc_html__( 'Блог', 'ipo' ),
                'menu-7' => esc_html__( 'Документы подвал', 'ipo' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'ipo_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'ipo_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ipo_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'ipo_content_width', 640 );
}
add_action( 'after_setup_theme', 'ipo_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ipo_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Контакты', 'ipo' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Добавить виджеты сюда', 'ipo' ),
			'before_widget' => '<div id="%1$s" class="b-contacts widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>',
		)
	);
    register_sidebar(
		array(
			'name'          => esc_html__( 'Подвал меню', 'ipo' ),
			'id'            => 'sidebar-2',
			'description'   => esc_html__( 'Добавить виджеты сюда', 'ipo' ),
			'before_widget' => '<div id="%1$s" class="foot-m widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2>',
			'after_title'   => '</h2>',
		)
	);
    register_sidebar(
		array(
			'name'          => esc_html__( 'Подвал соц. сети', 'ipo' ),
			'id'            => 'sidebar-3',
			'description'   => esc_html__( 'Добавить виджеты сюда', 'ipo' ),
			'before_widget' => '<div id="%1$s" class="foot-socs widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2>',
			'after_title'   => '</h2>',
		)
	);
    register_sidebar(
		array(
			'name'          => esc_html__( 'Подвал контакты', 'ipo' ),
			'id'            => 'sidebar-4',
			'description'   => esc_html__( 'Добавить виджеты сюда', 'ipo' ),
			'before_widget' => '<div id="%1$s" class="b-addr widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>',
		)
	);
    register_sidebar(
		array(
			'name'          => esc_html__( 'Подвал документы', 'ipo' ),
			'id'            => 'sidebar-5',
			'description'   => esc_html__( 'Добавить виджеты сюда', 'ipo' ),
			'before_widget' => '<div id="%1$s" class="b-addr widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>',
		)
	);
}
add_action( 'widgets_init', 'ipo_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function ipo_scripts() {

	wp_enqueue_style( 'ipo-reset-style', get_template_directory_uri() . '/assets/css/reset.css');

	wp_enqueue_style( 'ipo-jquery-ui-style', get_template_directory_uri() . '/assets/css/jquery-ui.min.css');

    wp_enqueue_style( 'ipo-main-style', get_template_directory_uri() . '/assets/css/style.css');
    
    wp_enqueue_style( 'ipo-style-css', get_stylesheet_uri(), array(), _S_VERSION );


	// wp_style_add_data( 'ipo-style', 'rtl', 'replace' );

	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.js', array(), '',true);
	wp_enqueue_script( 'jquery' );

	wp_enqueue_script( 'ipo-jquery-jscrollpane', get_template_directory_uri() . '/assets/js/jquery.jscrollpane.min.js', array('jquery'), '', true);

	wp_enqueue_script( 'ipo-slick', get_template_directory_uri() . '/assets/js/slick.js', array('jquery'), '', true);

	wp_enqueue_script( 'ipo-jquery-mousewheel', get_template_directory_uri() . '/assets/js/jquery.mousewheel.js', array('jquery'), '', true);

	wp_enqueue_script( 'ipo-jquery-mwheelIntent', get_template_directory_uri() . '/assets/js/mwheelIntent.js', array('jquery'), '', true);

	wp_enqueue_script( 'ipo-jquery-ikSelect', get_template_directory_uri() . '/assets/js/ikSelect.min.js', array('jquery'), '', true);

    wp_enqueue_script( 'ipo-jquery-jqueryui', get_template_directory_uri() . '/assets/js/jquery-ui.min.js', array('jquery'), '', true);

	wp_enqueue_script( 'ipo-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '', true);

	// wp_enqueue_script( 'ipo-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	// if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	// 	wp_enqueue_script( 'comment-reply' );
	// }
}
add_action( 'wp_enqueue_scripts', 'ipo_scripts' );




// Добавляем кастомные типы
add_action( 'init', 'obi_register_types' );

function obi_register_types(){

    register_post_type( 'newslist', [
        'labels' => [
            'name'               => 'Новости', // основное название для типа записи
            'singular_name'      => 'Новость', // название для одной записи этого типа
            'add_new'            => 'Добавить новую новость', // для добавления новой записи
            'add_new_item'       => 'Добавить новую новость', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактировать новость', // для редактирования типа записи
            'new_item'           => 'Новая новость', // текст новой записи
            'view_item'          => 'Смотреть новости', // для просмотра записи этого типа.
            'search_items'       => 'Искать новости', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Новости', // название меню
        ],
        'public'              => true,
        'menu_position'       => 8,
        'menu_icon'           => 'dashicons-format-aside', 
		'hierarchical'        => false,
		'taxonomies'		  => array( 'newslist_cat' ),
        'supports'            => ['title', 'editor', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'page-attributes', 'post-formats'],
        'has_archive' => true
	]);
	register_taxonomy('newslist_cat', ['newslist'], [
        'labels'                => [
            'name'              => 'Категория',
            'singular_name'     => 'Категории',
            'search_items'      => 'Найти категорию',
            'all_items'         => 'Все категории',
            'view_item '        => 'Посмотреть категорию',
            'edit_item'         => 'Редактировать категорию',
            'update_item'       => 'Обновить',
            'add_new_item'      => 'Добавить категорию',
            'new_item_name'     => 'Добавить категорию',
            'menu_name'         => 'Все категории',
        ],
        'description'           => '',
        'public'                => true,
        'hierarchical'          => true
	]);
	register_post_type( 'glossarij', [
        'labels' => [
            'name'               => 'Глоссарий', // основное название для типа записи
            'singular_name'      => 'Запись в глоссарии ', // название для одной записи этого типа
            'add_new'            => 'Добавить новую запись', // для добавления новой записи
            'add_new_item'       => 'Добавить новую запись', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактировать запись', // для редактирования типа записи
            'new_item'           => 'Новая запись в глоассарии', // текст новой записи
            'view_item'          => 'Смотреть записи в глоссарии', // для просмотра записи этого типа.
            'search_items'       => 'Искать записи в глоссарии', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Глоссарий', // название меню
        ],
        'public'              => true,
        'menu_position'       => 9,
        'menu_icon'           => 'dashicons-format-aside', 
		'hierarchical'        => false,
		'taxonomies'		  => array( 'glossarij_cat' ),
        'supports'            => ['title', 'editor', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'page-attributes', 'post-formats'],
        'has_archive' => true
	]);
	register_taxonomy('glossarij_cat', ['glossarij'], [
        'labels'                => [
            'name'              => 'Категория глоссария',
            'singular_name'     => 'Категории глоссария',
            'search_items'      => 'Найти категорию глоссария',
            'all_items'         => 'Все категории глоссария',
            'view_item '        => 'Посмотреть категорию глоссария',
            'edit_item'         => 'Редактировать категорию глоассария',
            'update_item'       => 'Обновить',
            'add_new_item'      => 'Добавить категорию в глоссарий',
            'new_item_name'     => 'Добавить категорию в глоссарий',
            'menu_name'         => 'Весь глоссарий',
        ],
        'description'           => '',
        'public'                => true,
        'hierarchical'          => true
	]);
	register_post_type( 'videos', [
        'labels' => [
            'name'               => 'Видео', // основное название для типа записи
            'singular_name'      => 'Видео ', // название для одной записи этого типа
            'add_new'            => 'Добавить новое видео', // для добавления новой записи
            'add_new_item'       => 'Добавить новое видео', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактировать видео', // для редактирования типа записи
            'new_item'           => 'Новое видео', // текст новой записи
            'view_item'          => 'Смотреть видео записи', // для просмотра записи этого типа.
            'search_items'       => 'Искать видео записи', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Видео', // название меню
        ],
        'public'              => true,
        'menu_position'       => 10,
        'menu_icon'           => 'dashicons-format-aside', 
		'hierarchical'        => false,
		'taxonomies'		  => array( 'videos_cat' ),
        'supports'            => ['title', 'editor', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'page-attributes', 'post-formats'],
        'has_archive' => true
	]);
	register_taxonomy('videos_cat', ['videos'], [
        'labels'                => [
            'name'              => 'Категория видео',
            'singular_name'     => 'Категории видео',
            'search_items'      => 'Найти категорию видео',
            'all_items'         => 'Все категории видео',
            'view_item '        => 'Посмотреть категорию видео',
            'edit_item'         => 'Редактировать категорию видео',
            'update_item'       => 'Обновить',
            'add_new_item'      => 'Добавить категорию в видео',
            'new_item_name'     => 'Добавить категорию в видео',
            'menu_name'         => 'Видео категории',
        ],
        'description'           => '',
        'public'                => true,
        'hierarchical'          => true
	]);
	register_post_type( 'studys', [
        'labels' => [
            'name'               => 'Курс', // основное название для типа записи
            'singular_name'      => 'Курс ', // название для одной записи этого типа
            'add_new'            => 'Добавить новый курс', // для добавления новой записи
            'add_new_item'       => 'Добавить новый курс', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактировать курс', // для редактирования типа записи
            'new_item'           => 'Новый курс', // текст новой записи
            'view_item'          => 'Смотреть записи курсов', // для просмотра записи этого типа.
            'search_items'       => 'Искать курсы', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Курсы', // название меню
        ],
        'public'              => true,
        'menu_position'       => 11,
        'menu_icon'           => 'dashicons-format-aside', 
		'hierarchical'        => false,
		'taxonomies'		  => array( 'studys_cat' ),
        'supports'            => ['title', 'editor', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'page-attributes', 'post-formats'],
        'has_archive' => true
	]);
	register_taxonomy('studys_cat', ['studys'], [
        'labels'                => [
            'name'              => 'Категория курса',
            'singular_name'     => 'Категории курсов',
            'search_items'      => 'Найти категорию курса',
            'all_items'         => 'Все категории курсов',
            'view_item '        => 'Посмотреть категорию курса',
            'edit_item'         => 'Редактировать категорию курса',
            'update_item'       => 'Обновить',
            'add_new_item'      => 'Добавить категорию в курсы',
            'new_item_name'     => 'Добавить категорию в курсы',
            'menu_name'         => 'Категории курсов',
        ],
        'description'           => '',
        'public'                => true,
        'hierarchical'          => true
    ]);
    register_post_type( 'company', [
        'labels' => [
            'name'               => 'Компания', // основное название для типа записи
            'singular_name'      => 'Компания ', // название для одной записи этого типа
            'add_new'            => 'Добавить новую компанию', // для добавления новой записи
            'add_new_item'       => 'Добавить новую компанию', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактировать компанию', // для редактирования типа записи
            'new_item'           => 'Новую компанию', // текст новой записи
            'view_item'          => 'Смотреть компании', // для просмотра записи этого типа.
            'search_items'       => 'Искать компании', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Компании', // название меню
        ],
        'public'              => true,
        'menu_position'       => 12,
        'menu_icon'           => 'dashicons-format-aside', 
		'hierarchical'        => false,
		'taxonomies'		  => array( 'company_cat' ),
        'supports'            => ['title', 'editor', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'page-attributes', 'post-formats'],
        'has_archive' => false
        
	]);
	register_taxonomy('company_cat', ['company'], [
        'labels'                => [
            'name'              => 'Категория компании',
            'singular_name'     => 'Категории компаний',
            'search_items'      => 'Найти категорию компании',
            'all_items'         => 'Все категории компаний',
            'view_item '        => 'Посмотреть категорию компании',
            'edit_item'         => 'Редактировать категорию компании',
            'update_item'       => 'Обновить',
            'add_new_item'      => 'Добавить категорию в компании',
            'new_item_name'     => 'Добавить категорию в компании',
            'menu_name'         => 'Категории компаний',
        ],
        'description'           => '',
        'public'                => true,
        'hierarchical'          => true
    ]);

}




/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

