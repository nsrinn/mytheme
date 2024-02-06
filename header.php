<?php

/**
 * header template
 * 
 * @package mytheme
 */

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/b444131a05.js" crossorigin="anonymous"></script>
    <title>My Theme</title>
    <?php wp_head(); ?>
</head>

<body <?php body_class();  ?>>


    <?php wp_body_open(); ?>
    <div class="site" id="page">
        <header id="masthead" class="site-header" role="banner">
            <div class="container">

                <nav class="navbar navbar-expand-lg navbar-light bg-light container">
                    <div class="site-branding">
                        <?php if (has_custom_logo()) : ?>
                            <div class="site-logo"><?php the_custom_logo(); ?></div>
                        <?php else : ?>
                            <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
                            <p class="site-description"><?php bloginfo('description'); ?></p>
                        <?php endif; ?>
                    </div>




                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>


                    <!-- <img src="Logo.png" alt="Logo" width="30" height="30" class="d-inline-block align-top"> -->
                    <!-- <img src="<?php echo get_template_directory_uri(); ?>/Logo.png" alt="Logo" width="30" height="30" class="d-inline-block align-top"> -->




                    <div class="collapse navbar-collapse" id="navbarSupportedContent">

                        <div class="col-md-5  text-center">
                            <?php
                            wp_nav_menu(
                                array(
                                    'menu' => 'top-menu',
                                    'container' => '',
                                    'theme_location' => 'top-menu',
                                    'items_wrap' => '<ul id="%1$s" class="%2$s navbar-nav mr-auto navsec1">%3$s</ul>',
                                    'menu_class' => 'navbar-nav mr-auto text-dark', // Bootstrap classes
                                    'menu_id' => 'wp_menu', // Add your custom menu ID here
                                    // 'walker' => new Bootstrap_Walker_Nav_Menu(),/
                                )
                            );

                            //    get_template_part('template-parts/header/nav');
                            ?>
                            

                        </div>

                        <div class="col-md-3"></div>

                        <div class=" col">
                            <ul class="navbar-nav mr-auto d-flex flex-row justify-content-center ">
                                <li class="nav-item active pr-3 ">
                                    <a class="nav-link" href=""><i class="fa-solid fa-magnifying-glass"></i></a>
                                </li>
                                <!-- <li class="nav-item active pr-3">
                                    <a class="nav-link" href="<?php echo esc_url(home_url('/')); ?>"><?php echo do_shortcode('[fibosearch]'); ?></a>
                                </li> -->
                                <li class="nav-item pr-3">
                                    <a class="nav-link text-dark" href="http://localhost/test8/wishlist/"><i class="fa-regular fa-heart"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-dark" href="<?php echo esc_url(wc_get_cart_url()); ?>">
                                        <i class="fa-solid fa-bag-shopping">
                                        
                                        <sup>
                                        <?php
                                        $cart_count = WC()->cart->get_cart_contents_count();
                                        if ($cart_count > 0) {
                                            echo '<span class="cart-count">' . esc_html($cart_count) . '</span>';
                                        }
                                        ?>
                                        </sup>
                                        </i>
                                        
                                    </a>
                                </li>


                            </ul>

                        </div>
                        <div class="col"><a class="nav-link text-dark text-center" href="<?php echo esc_url(wc_get_account_endpoint_url('')); ?>"><button type="button" class="btn btn-primary btn-acnt">Account</button></a></div>







                    </div>
            </div>
            </nav>
    </div>

    </header>