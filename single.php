<?php get_header(); ?>
<div class="container">
<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php while (have_posts()) : the_post(); ?>

            <?php wc_get_template_part('content', 'single-product'); ?>

        <?php endwhile; // end of the loop. ?>
 
    </main><!-- #main -->
</div><!-- #primary -->

</div>


<?php get_footer(); ?>

