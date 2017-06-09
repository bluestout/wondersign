<?
require_once('inc/wp_bootstrap_navwalker.php');

// Add theme support
add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );

set_post_thumbnail_size( 150, 150 );
//add_image_size( 'img1920', 1920 );

//Options
/*if(function_exists("register_options_page"))
{
    register_options_page('Global');
}*/

//Shortcode
/*function h1_wide_title($atts, $content = null) {
    return '<div class="h1-wide-title">'.do_shortcode($content).'</div>';
}
add_shortcode('h1_wide_title', 'h1_wide_title');*/

/*add_action( 'init', 'create_post_type' );


//custom post types
function create_post_type() {
    register_post_type( 'charity-partners',
        array(
            'labels' => array(
                'name' => __( 'Charity partners' ),
                'singular_name' => __( 'Charity partner' )
            ),
            'public' => true,
            'has_archive' => false,
            'hierarchical' => false,
            'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'page-attributes' )
        )
    );
    flush_rewrite_rules( false ); //IMPORTANT
}*/

//ajax
/*
add_action('wp_head','pluginname_ajaxurl');
function pluginname_ajaxurl() { ?>
    <script type="text/javascript">
        var ajaxurl = '<?=admin_url('admin-ajax.php');?>';
    </script>
<?}

//get charity popup
function get_charity_partner() {
    $id = $_REQUEST['id'];

    if ( $id) { 
        global $post;
        $post = get_post($id);
        setup_postdata($post);
        get_template_part( 'inc/partnerModal' );
    }

    die();
}
add_action( 'wp_ajax_get_charity_partner', 'get_charity_partner' );
add_action( 'wp_ajax_nopriv_get_charity_partner', 'get_charity_partner' );
*/

//Disable Emojis
function disable_emojis() {
  remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
  remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
  remove_action( 'wp_print_styles', 'print_emoji_styles' );
  remove_action( 'admin_print_styles', 'print_emoji_styles' );  
  remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
  remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );  
  remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
}
add_action( 'init', 'disable_emojis' );


// Javascript
add_action( 'wp_enqueue_scripts', 'themeslug_enqueue_script' );
function themeslug_enqueue_script() {
    wp_deregister_script('jquery');

    wp_register_script('jquery', get_template_directory_uri().'/js/vendor/jquery-1.11.1.min.js', array(), false, false);
    wp_register_script('bootstrap', get_template_directory_uri().'/js/vendor/bootstrap.min.js', array('jquery'), false, true);
    wp_register_script('spinjs', get_template_directory_uri().'/js/vendor/spin.min.js', array('jquery'), false, true);
    wp_register_script('script', get_template_directory_uri().'/js/script.js', array('jquery'), false, true);

    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap');
    wp_enqueue_script('spinjs');
    wp_enqueue_script('script');
}