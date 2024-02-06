<?php

/*
 * Template Name: Blog
 */


get_header();
?>

<div id="primary" class="content-area">
    <div class="container mt-5">
        <main id="main" class="site-main">

            <?php
            // Check if WooCommerce is active
            if (class_exists('WooCommerce')) {

                // Check if it's the cart page
                if (is_cart()) {
                    ?> <div class="entry-content">
                    <?php
                    // wc_get_template('cart/cart.php');
                    the_content();
                    ?>
                </div> 
                <?php
                    

                }  else {
                    // Default content for other pages
                    while (have_posts()) : the_post();
            ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <header class="entry-header">
                                <?php
                                the_title('<h1 class="entry-title">', '</h1>');
                                ?>
                            </header>

                            <div class="entry-content">
                                <?php
                                the_content();
                                ?>
                            </div>

                            <footer class="entry-footer">
                                <?php edit_post_link(__('Edit', 'text-domain'), '<span class="edit-link">', '</span>'); ?>
                            </footer>
                        </article>
            <?php
                        if (comments_open() || get_comments_number()) :
                            comments_template();
                        endif;
                    endwhile;
                }
            } else {
                // Output a message if WooCommerce is not active
                echo '<p>Please activate WooCommerce to use this page template.</p>';
            }
            ?>

        </main>
    </div>
</div>

<?php get_footer(); ?>