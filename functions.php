<?php
/**
 * Feccawp functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Feccawp
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'feccawp_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function feccawp_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Feccawp, use a find and replace
		 * to change 'feccawp' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'feccawp', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'feccawp' ),
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
				'feccawp_custom_background_args',
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
add_action( 'after_setup_theme', 'feccawp_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function feccawp_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'feccawp_content_width', 640 );
}
add_action( 'after_setup_theme', 'feccawp_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function feccawp_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'feccawp' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'feccawp' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'feccawp_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function feccawp_scripts() {
	wp_enqueue_style( 'feccawp-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'feccawp-style', 'rtl', 'replace' );

	wp_enqueue_script( 'feccawp-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'feccawp_scripts' );

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

add_action( 'after_setup_theme', function() {

	add_theme_support ( 'menus' );
} );





function my_nav_menu( $args ) {

	$args = array_merge( [
		'container'       => '',
		'container_id'    => '',
		'container_class' => '',
		'menu_class'      => 'nav nav-pills col-8',
		'echo'            => false,
		'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
		'walker'          => new My_Walker_Nav_Menu()
	], $args );

	echo wp_nav_menu( $args );
}



// свой класс построения меню:
	class My_Walker_Nav_Menu extends Walker_Nav_menu {
        // контейнер меню
        function start_lvl( &$output, $depth = 0, $args = NULL){ //ul        
			   
            if ($depth > 0){                                                // если глубина больше 0, начальному контейнеру добавляем класс dropdown2
                $submenu = ' dropdown2';
				
            }
            elseif ($depth == 0) {                                          // если глубина 0 (меню на главной странице), начальному контейнеру добавляем класс dropdown
                $submenu = ' dropdown';
            }
            else{                                                           // в остальных случаях ничего не добавляется
                $submenu = '';
            }
            $output .= '<ul class="nav' . $submenu. '">';                       // определение вида kонтейнера меню
			
         }
        // контейнер содержимого 
        function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ){ //li a span
            //инициализация переменных
            $drop = '';
            $arrow = '';
			$nav_link = "nav-link";
            $url_icon = '';
            if( $depth && $args->walker->has_children) {                    // если глубина != 0 и есть дочерние элементы, добавляем контейнеру содержимого класс drop
                $drop = ' drop';
            } 
            elseif ($depth == 0 && $args->walker->has_children) {           // если глубина 0 и есть дочерние элементы, контейнеру добавляется класс main_drop
                $drop = ' nav-item ';
                $url_icon .= get_template_directory_uri() . '/img/nav-arrow.svg">';     // определение локального урл стрелки главного меню
                $arrow .= '<img class="nav-menu-icon" src="' . $url_icon;                        // формирование блока картинки стрелки
            }
           $attributes .= ! empty( $item->url ) ? ' href="' . esc_attr($item->url) . '"' : '';  // добавление ссылки, заданной из админки(если есть), в пункт меню
           $item_output .= '<a' . $attributes . 'class="' . $nav_link . '">' . $item->title . '</a>';                    // фориирование блока ссылки     
           $output .= "<li class='" .  implode(" ", $item->classes) . $drop . "'> $arrow $item_output ";    //формирование общего контейнера с содержимым
 
        }
        }

		add_action( 'init', 'create_post_types' );
		function create_post_types(){
			register_post_type( 'Users_review', [
				'label'  => null,
				'labels' => [
					'name'               => 'Отзывы', // основное название для типа записи
					'singular_name'      => 'Отзыв', // название для одной записи этого типа
					'add_new'            => 'Добавить отзыв', // для добавления новой записи
					'add_new_item'       => 'Добавление отзыва', // заголовка у вновь создаваемой записи в админ-панели.
					'edit_item'          => 'Редактирование отзыва', // для редактирования типа записи
					'new_item'           => 'Новой отзыв', // текст новой записи
					'view_item'          => 'Смотреть отзывы', // для просмотра записи этого типа.
					'search_items'       => 'Искать отзыв', // для поиска по этим типам записи
					'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
					'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
					'parent_item_colon'  => '', // для родителей (у древовидных типов)
					'menu_name'          => 'Отзывы', // название меню
				],
				'description'         => '',
				'public'              => true,
				// 'publicly_queryable'  => null, // зависит от public
				// 'exclude_from_search' => null, // зависит от public
				// 'show_ui'             => null, // зависит от public
				// 'show_in_nav_menus'   => null, // зависит от public
				'show_in_menu'        => null, // показывать ли в меню адмнки
				// 'show_in_admin_bar'   => null, // зависит от show_in_menu
				'show_in_rest'        => null, // добавить в REST API. C WP 4.7
				'rest_base'           => null, // $post_type. C WP 4.7
				'menu_position'       => null,
				'menu_icon'           => null,
				//'capability_type'   => 'post',
				//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
				//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
				'hierarchical'        => false,
				'supports'            => [ 'title' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
				'taxonomies'          => [],
				'has_archive'         => false,
				'rewrite'             => true,
				'query_var'           => true,
			] );
		}


