<?php

/**
 * Theme Functions
 * 
 * @package mytheme
 */

if (!defined('MYTHEME_DIR_PATH')) {
    define('MYTHEME_DIR_PATH', untrailingslashit(get_template_directory()));
}
// echo"<pre>";
// print_r(MYTHEME_DIR_PATH);
// wp_die;
// require_once MYTHEME_DIR_PATH . '/inc/helpers/autoloader.php';
function load_jquery_for_woocommerce() {
    // Register the script
    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.6.4.min.js', array(), null, true);

    // Enqueue the script
    wp_enqueue_script('jquery');
}

function mytheme_enqueue_scripts()
{
    // Register and enqueue styles
    wp_register_style('stylesheet', get_stylesheet_uri(), [], filemtime(get_template_directory() . '/style.css'), 'all');
    wp_register_style('bootstrap-style', get_template_directory_uri() . '/assets/src/library/css/bootstrap.min.css', [], false, 'all'); //true means on footer section if false then on header section 


    wp_enqueue_style('stylesheet');
    wp_enqueue_style('bootstrap-style');


    // Register and enqueue scripts
    wp_register_script('jsfile', get_template_directory_uri() . '/assets/main.js', [], filemtime(get_template_directory() . '/assets/main.js'), true); //true means on footer section if false then on header section 
    wp_register_script('bootstrap-jsfile', get_template_directory_uri() . '/assets/src/library/js/bootstrap.min.js', ['jquery'], false, true); //true means on footer section if false then on header section 


    wp_enqueue_script('jsfile');
    wp_enqueue_script('bootstrap-jsfile');
}


// Hook into WooCommerce
add_action('woocommerce_enqueue_styles', 'load_jquery_for_woocommerce');

add_action('wp_enqueue_scripts', 'mytheme_enqueue_scripts');

// Font family insertion
function enqueue_google_fonts()
{
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Poppins:300,400,500,700', array(), null);
}

add_action('wp_enqueue_scripts', 'enqueue_google_fonts');


function my_theme_support()
{
    // add dynamic title tag support
    add_theme_support('title_tag');
    add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'my_theme_support');


// Theme Options
add_theme_support('menus');

// Menus
register_nav_menus(
    array(
        'top-menu' => 'Top Menu',
        'mobile-menu' => 'mobile Menu',
        'footer-menu' => 'Footer Menu',
        'icons-menu' => 'icons'


    )
);


// widgets...............................


// sidebar widgets...........................

function custom_register_sidebar() {
    register_sidebar( array(
        'name'          => __( 'Home Page Sidebar', 'text_domain' ),
        'id'            => 'home_page_sidebar',
        'description'   => __( 'Widgets in this area will be shown on the home page.', 'text_domain' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
}
// if (is_front_page() ) {
//     add_action( 'widgets_init', 'custom_register_sidebar' );
// }
add_action( 'widgets_init', 'custom_register_sidebar' );



function add_custom_content_to_sidebar() {
    if ( is_page( 'productdetails.php' ) ) { // Change 'product.php' to the actual slug or ID of your product page
       echo '<div class="col-lg-4 productcol-4">';
       echo' <div class="browsecategories col float-left">
            <table class="table table-bordered browsetable">
                <thead class="thead theadbrowse">
                    <tr>
                        <th>Browse Categories</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><i class="fa-solid fa-house"></i> Home</td>
                    </tr>
                    <tr>
                        <td><i class="fa-brands fa-wordpress"></i> WordPress Themes</td>
                    </tr>
                    <tr>
                        <td><i class="fa-solid fa-cart-shopping"></i> eCommerce Templates</td>
                    </tr>
                    <tr>
                        <td><i class="fa-solid fa-tv"></i> Marketing Templates</td>
                    </tr>
                    <tr>
                        <td><i class="fa-solid fa-border-all"></i> CMS Templates</td>
                    </tr>
                    <tr>
                        <td><i class="fa-solid fa-desktop"></i> Site Templates</td>
                    </tr>
                    <tr>
                        <td> <i class="fa-regular fa-pen-to-square"></i> Blogging</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="subscribe col ">
            <h6>Subscribe Newsletter</h6>
            <p>Get all the latest information on Events, Sales and Offers.</p>
            <div class="input-group">
                <i class="far fa-envelope fa-lg"></i>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email address">
            </div>


            <button type="button" class="btn btn-info subscribe-btn">Subscribe</button>




        </div>
        <div class="pol col ">


            <img src="<?php echo get_template_directory_uri(); ?>/images/Circle.png" alt="polimg" class=" polimg">


            <h5>Monthly users in your site</h5>
            <h3>1.0286</h3>
            <small>We accompany you with our versatile expertise in digital marketing</small>



        </div>
        <div class="square col ">


            <img src="<?php echo get_template_directory_uri(); ?>/images/Image9.png" alt="sqrimg" class=" sqrimg">

            <p>Create your beautiful portfolio website with Squarespace. Start your free trial.</p>
            <a href=""><span>ads via Carbon</span></a>

        </div>';

        // Add your dynamic content here
        echo '</div>';
    }
}

// Hook the function to a suitable action
add_action( 'wp_footer', 'add_custom_content_to_sidebar' );



// footer widgets..............................
function register_custom_footer_widgets()
{
    register_sidebar(array(
        'name' => __('Footer Column 1', 'text-domain'),
        'id' => 'footer-col-1',
        'description' => __('Widget area for the first column in the footer.', 'text-domain'),
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h5 class="widget-title">',
        'after_title' => '</h5>',
    ));

    register_sidebar(array(
        'name' => __('Footer Column 2', 'text-domain'),
        'id' => 'footer-col-2',
        'description' => __('Widget area for the second column in the footer.', 'text-domain'),
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h5 class="widget-title">',
        'after_title' => '</h5>',
    ));

    register_sidebar(array(
        'name' => __('Footer Column 3', 'text-domain'),
        'id' => 'footer-col-3',
        'description' => __('Widget area for the third column in the footer.', 'text-domain'),
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h5 class="widget-title">',
        'after_title' => '</h5>',
    ));

    register_sidebar(array(
        'name' => __('Footer Column 4', 'text-domain'),
        'id' => 'footer-col-4',
        'description' => __('Widget area for the fourth column in the footer.', 'text-domain'),
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h5 class="widget-title">',
        'after_title' => '</h5>',
    ));
}

add_action('widgets_init', 'register_custom_footer_widgets');



// contact 7 from...........
// Disable Contact Form 7 auto <p> wrapping
add_filter('wpcf7_autop_or_not', '__return_false');




// woocommerce page customization theme support
function mytheme_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );




// function mytheme_add_woocommerce_support() {
// 	add_theme_support( 'woocommerce', array(
// 		'thumbnail_image_width' => 150,
// 		'single_image_width'    => 300,

//         'product_grid'          => array(
//             'default_rows'    => 3,
//             'min_rows'        => 2,
//             'max_rows'        => 8,
//             'default_columns' => 4,
//             'min_columns'     => 2,
//             'max_columns'     => 5,
//         ),
// 	) );
// }
// add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

// woocommerce my account menu
// Add extra item to WooCommerce My Account menu
function add_extra_menu_item($items) {
    // Define your extra menu item with a class
    // $extra_item = 'My Profile';
    $extra_item = 'My Profile';

    // Insert the extra item at the beginning of the menu
    array_unshift($items, $extra_item);

    return $items;
}
add_filter('woocommerce_account_menu_items', 'add_extra_menu_item');





// woocommerce cart page 
remove_action('woocommerce_before_cart', 'woocommerce_output_all_notices', 10);
remove_action('woocommerce_before_cart', 'woocommerce_cart_totals', 10);
remove_action('woocommerce_cart_collaterals', 'woocommerce_cart_totals', 10);




// shop page side bar 
// Register WooCommerce sidebar
function theme_register_woocommerce_sidebar() {
    register_sidebar(array(
        'name'          => __('WooCommerce Sidebar', 'your-theme-text-domain'),
        'id'            => 'woocommerce_sidebar',
        'description'   => __('Widgets in this area will be shown on WooCommerce pages.', 'your-theme-text-domain'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ));
}
add_action('widgets_init', 'theme_register_woocommerce_sidebar');


// woocommrece sidebar
// Custom function for WooCommerce sidebar
function custom_woocommerce_sidebar() {
    // Add your custom content here
    dynamic_sidebar('custom-woocommerce-sidebar');
}

// Hook the custom function to the woocommerce_sidebar action
add_action('woocommerce_sidebar', 'custom_woocommerce_sidebar', 10);


function register_custom_shop_sidebar() {
    register_sidebar(array(
        'name'          => esc_html__('Custom Shop Sidebar', 'your-theme-textdomain'),
        'id'            => 'custom-shop-sidebar',
        'description'   => esc_html__('Add widgets here to display in the custom shop sidebar.', 'your-theme-textdomain'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ));
}
add_action('widgets_init', 'register_custom_shop_sidebar');



// checkout page


// order status to COD
// Register new order status
function add_cod_order_status() {
    register_post_status('wc-cod', array(
        'label'                     => 'Cash on Delivery',
        'public'                    => true,
        'exclude_from_search'       => false,
        'show_in_admin_all_list'    => true,
        'show_in_admin_status_list' => true,
        'label_count'               => _n_noop('COD <span class="count">(%s)</span>', 'COD <span class="count">(%s)</span>'),
    ));
}
add_action('init', 'add_cod_order_status');


// Add custom order status to admin order list
function add_cod_to_order_statuses($order_statuses) {
    $new_order_statuses = array();

    // Add your custom order status after processing
    foreach ($order_statuses as $key => $status) {
        $new_order_statuses[$key] = $status;
        if ('wc-processing' === $key) {
            $new_order_statuses['wc-cod'] = 'Cash on Delivery';
        }
    }

    return $new_order_statuses;
}
add_filter('wc_order_statuses', 'add_cod_to_order_statuses');


function update_order_status_for_cod($order_id) {
    $order = wc_get_order($order_id);
    $payment_method = $order->get_payment_method();

    // Check if the payment method is COD
    if ('cod' === $payment_method) {
        // Update order status to COD
        $order->update_status('wc-cod');
    }
}
add_action('woocommerce_thankyou', 'update_order_status_for_cod', 10, 1);




