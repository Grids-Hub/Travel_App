<?php
//CSS
function add_css()
{
    // Custom CSS
	wp_register_style('font', get_template_directory_uri() . './dist/css/main.min.css', false, '1.1', 'all');
	wp_enqueue_style('font');
    // Bootstrap CSS
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css');
    // MDB
	wp_enqueue_style('mdbootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.css');
    // Font Awesome 
	wp_enqueue_style('font-awesome-all', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css');
	wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
    // Bootstrap-Icon 
	wp_enqueue_style('bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css');
    // Animated 
	wp_enqueue_style('animated-links', 'https://www.w3schools.com/w3css/4/w3.css');
    // Google Fonts 
	wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Overpass+Mono:wght@300&display=swap', [], null);
}
add_action('wp_enqueue_scripts', 'add_css'); //hook function

function add_js()
{
	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', 'jquery', false, true);
	
	wp_enqueue_script('Bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', 'jquery', false, true);
	wp_enqueue_script('mdb-js', 'https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.js', 'jquery', false, true);
    wp_register_script('JS', get_template_directory_uri() . './dist/js/script.min.js', false, '1.1', 'all');
	wp_enqueue_script('JS');
}
add_action('wp_enqueue_scripts', 'add_js'); //hook function
// Featured Image
add_theme_support('post-thumbnails');




// Excerpt and Content classes
add_filter( "the_excerpt", "add_class_to_excerpt" );
function add_class_to_excerpt( $excerpt ) {
    return str_replace('<p', '<p class="card-text sectext2"', $excerpt);
}
add_filter( "the_content", "add_class_to_content" );
function add_class_to_content( $content ) {
    return str_replace('<p', '<p class="card-text sectext3"', $content);
}

//Register Navigation Bar
function add_nav_menu()
{
	register_nav_menus(array(
		"primary-menu" => __("Primary Menu", 'text_domain'),
		"secondary-menu" => __("Secondary Menu", 'text_domain'),
	));
}
add_action('init', 'add_nav_menu');
function add_link_atts($atts)
{
	$atts['class'] = 'nav-link ';
	return $atts;
}
add_filter('nav_menu_link_attributes', 'add_link_atts');
function add_list_atts($atts)
{
	$atts['class'] = 'nav-item';
	return $atts;
}
//Register Footer
function my_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Footer', 'travel'),
			'id'            => 'foot1',
			'description'   => esc_html__('Add widgets here to appear in your footer.', 'travel'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__('Desti', 'travel'),
			'id'            => 'foot2',
			'description'   => esc_html__('Add widgets here to appear in your footer.', 'travel'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__('shop', 'travel'),
			'id'            => 'foot3',
			'description'   => esc_html__('Add widgets here to appear in your footer.', 'travel'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'my_widgets_init');


add_action('init', 'create_custom_post_type');
function create_custom_post_type()
{
	$labels = array(
		'name' => _x('Slider', 'sliders'),
		'singular_name' => _x('sliders', 'sliders'),
		'add_new' => _x('Add New', 'sliders'),
		'add_new_item' => _x('Add New sliders', 'sliders'),
		'edit_item' => _x('Edit sliders', 'sliders'),
		'new_item' => _x('New sliders', 'sliders'),
		'view_item' => _x('View sliders', 'sliders'),
		'search_items' => _x('Search sliders', 'sliders'),
		'not_found' => _x('No sliders found', 'sliders'),
		'not_found_in_trash' => _x('No sliders found in Trash', 'sliders'),
		'parent_item_colon' => _x('Parent sliders:', 'sliders'),
		'menu_name' => _x('Slider', 'sliders'),
	);
	$args = array(
		'labels' => $labels,
		'hierarchical' => true,
		'description' => 'Hi, this is my custom post type.',
		'supports' => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'page-attributes'),
		'taxonomies' => array('category', 'post_tag', 'page-category'),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'publicly_queryable' => true,
		'exclude_from_search' => false,
		'has_archive' => true,
		'query_var' => true,
		'can_export' => true,
		'rewrite' => true,
		'capability_type' => 'post'
	);
	register_post_type('sliders', $args); // Register Post type
}
