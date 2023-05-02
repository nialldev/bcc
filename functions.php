<?php 

if ( ! function_exists( 'mscc_setup' ) ) :
/**
* Sets up theme defaults and registers support for various WordPress features
*
*  It is important to set up these functions before the init hook so that none of these
*  features are lost.
*
*  @since MyFirstTheme 1.0
*/
function mscc_setup() {
    add_theme_support( 'automatic-feed-links' );
    
    register_nav_menus( array(
    'primary'   => __( 'Primary Menu', 'mscc' ),
    'secondary' => __( 'Secondary Menu', 'mscc' )
) );
    
// add_theme_support( 'post-thumbnails' );
// set_post_thumbnail_size( 200, 200);

add_theme_support( 'custom-background' );

$defaults = array(
	
    'width'                  => 1200,
	'height'                 => 350,
//    'flex-width'             => true,
//    'flex-height'            => true,
    'uploads'                => true,
    'admin-head-callback'    => 'adminhead_cb',
    'admin-preview-callback'    => 'adminpreview_cb',
    'video'                  => false,
);
add_theme_support( 'custom-header', $defaults );
    
add_theme_support( 'custom-logo', array(
    'height'      => 100,
    'width'       => 100,
    'flex-height' => true,
    'flex-width' => true )
);

add_filter( 'get_custom_logo', 'change_logo_class' );


function change_logo_class( $html ) {

    $html = str_replace( 'custom-logo', 'logo', $html );

    return $html;
}
    

add_theme_support( 'title-tag' );
add_theme_support( 'post-formats',  array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );

register_sidebar( array(
        'name'          => __( 'Home Top', 'mscc' ),
        'id'            => 'widget-area-1',
        'description'   => __('The content area below the home banner/above Latest News', 'mscc'),
        'before_widget' => '<div id="%1$s" class="widget %2$s widget-area-1">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
) );
// register_sidebar( array(
//     'name'          => __( 'Mobile Home Bottom', 'mscc' ),
//     'id'            => 'widget-area-2',
//     'description'   => __('The content area below the latest news section on mobile', 'mscc'),
//     'before_widget' => '<div id="%1$s" class="widget %2$s widget-area-2">',
//     'after_widget'  => '</div>',
//     'before_title'  => '<h3>',
//     'after_title'   => '</h3>',
// ) ); 
register_sidebar( array(
    'name'          => __( 'Main Left', 'mscc' ),
    'id'            => 'widget-area-3',
    'description'   => __('The content area on the left beside the latest news section on desktop', 'mscc'),
    'before_widget' => '<div id="%1$s" class="widget %2$s widget-area-3">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>',
) );  
register_sidebar( array(
    'name'          => __( 'Top Footer Left', 'mscc' ),
    'id'            => 'widget-area-4',
    'description'   => __('The left content area on the top footer', 'mscc'),
    'before_widget' => '<div id="%1$s" class="widget %2$s widget-area-4">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>',
) ); 
register_sidebar( array(
    'name'          => __( 'Top Footer Middle', 'mscc' ),
    'id'            => 'widget-area-6',
    'description'   => __('The middle content area on the top footer', 'mscc'),
    'before_widget' => '<div id="%1$s" class="widget %2$s widget-area-6">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>',
) ); 
register_sidebar( array(
    'name'          => __( 'Top Footer Right', 'mscc' ),
    'id'            => 'widget-area-7',
    'description'   => __('The right content area on the top footer', 'mscc'),
    'before_widget' => '<div id="%1$s" class="widget %2$s widget-area-7">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>',
) ); 
register_sidebar( array(
    'name'          => __( 'Bottom Footer Left', 'mscc' ),
    'id'            => 'widget-area-8',
    'description'   => __('The left content area on the bottom footer', 'mscc'),
    'before_widget' => '<div id="%1$s" class="widget %2$s widget-area-8">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>',
) ); 
register_sidebar( array(
    'name'          => __( 'Bottom Footer Middle', 'mscc' ),
    'id'            => 'widget-area-9',
    'description'   => __('The middle content area on the bottom footer', 'mscc'),
    'before_widget' => '<div id="%1$s" class="widget %2$s widget-area-9">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>',
) ); 
register_sidebar( array(
    'name'          => __( 'Bottom Footer Right', 'mscc' ),
    'id'            => 'widget-area-10',
    'description'   => __('The right content area on the bottom footer', 'mscc'),
    'before_widget' => '<div id="%1$s" class="widget %2$s widget-area-10">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>',
) ); 
register_sidebar( array(
    'name'          => __( 'Contact Left', 'mscc' ),
    'id'            => 'widget-area-11',
    'description'   => __('The left content area at the top of the contact page', 'mscc'),
    'before_widget' => '<div id="%1$s" class="widget %2$s widget-area-11">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>',
) ); 
register_sidebar( array(
    'name'          => __( 'Contact Right', 'mscc' ),
    'id'            => 'widget-area-12',
    'description'   => __('The right content area at the top of the contact page', 'mscc'),
    'before_widget' => '<div id="%1$s" class="widget %2$s widget-area-12">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>',
) ); 
};

 endif;
add_action( 'after_setup_theme', 'mscc_setup' );


function my_theme_scripts(){
wp_enqueue_style( 'style', get_stylesheet_uri() );
wp_enqueue_style( 'animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );
wp_enqueue_script( 'functions', get_template_directory_uri() . '/js/functions.js', array(), '1.1', true );
};

add_action( 'wp_enqueue_scripts', 'my_theme_scripts' );

/**
 * Filter the "read more" excerpt string link to the post.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
//function wpdocs_excerpt_more( $more ) {
//    if ( ! is_single() ) {
//        $more = sprintf( '<a class="read-more" href="%1$s">%2$s</a>',
//            get_permalink( get_the_ID() ),
//            __( 'Read More', 'textdomain' )
//        );
//    }
// 
//    return $more;
//}
//add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );


/*
Change the comment form field values
*/
// function comment_form_text ($fields) {
//     $fields['label_submit'] = 'Post Comment';
//     $fields['title_reply'] = 'Leave a comment';
    
//     return $fields;
    
// }

//add_filter('comment_form_defaults', 'comment_form_text');
//
///*
//Change the comment form fields to remove the url
//*/
//
//function comment_form_fields ($fields) {
//    $fields['url'] = '';
//    
//    
//    return $fields;
//}
//
//add_filter('comment_form_default_fields', 'comment_form_fields');


//allow html in excerpts

function new_wp_trim_excerpt($text) {
    $raw_excerpt = $text;
    if ( '' == $text ) {
        $text = get_the_content('');

        $text = strip_shortcodes( $text );

        $text = apply_filters('the_content', $text);
        $text = str_replace(']]>', ']]>', $text);

        $text = strip_tags($text, '<table><tbody><tr><th><td><blockquote><q> 
    <cite><a><strong><em><br><ol><ul><li><img><figure><figcaption>');  
        
        $excerpt_length = apply_filters('excerpt_length', 55);
        
        $excerpt_more = apply_filters('excerpt_more', '');
        
        $words = preg_split('/[\n|\r|\t|\s]/', $text, $excerpt_length 
    + 1, PREG_SPLIT_NO_EMPTY|PREG_SPLIT_DELIM_CAPTURE );
        if ( count($words) > $excerpt_length ) {
            array_pop($words);
            $text = implode(' ', $words);
            $text = force_balance_tags( $text );
            $text = $text . $excerpt_more;
        } else {
            $text = implode(' ', $words);
        }
    }
    
    return apply_filters('new_wp_trim_excerpt', $text, $raw_excerpt);

}
remove_filter('get_the_excerpt', 'wp_trim_excerpt');
add_filter('get_the_excerpt', 'new_wp_trim_excerpt');

if ( ! function_exists( 'custom_add_excerpts_get_more_link' ) ) {

function custom_add_excerpts_get_more_link( $post_excerpt ) {
    if ( ! is_admin() ) {
        $dots = '...';
        $post_excerpt = $post_excerpt . $dots . '<p><a class="btn btn-secondary" href="' . esc_url( get_permalink( get_the_ID() ) ) . '">Read More</a></p>';
    }
    return $post_excerpt;
}
}
add_filter( 'excerpt_more', 'custom_add_excerpts_get_more_link' );

?>