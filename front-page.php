<?php

/**
 * Main Template File
 * 
 * @package mytheme
 */
?>
<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <div class="content ">
            <div class="container">
                <!---------------------------------banner section ------------------------------------------------------------------------->
                <?php get_template_part('template-parts/content/banner'); ?>
                <!--------------------------------------------------------------------------------------------------------------------------->
                <br>
                <!---------------------------------client section ------------------------------------------------------------------------->
                <?php get_template_part('template-parts/content/client'); ?>
                <!--------------------------------------------------------------------------------------------------------------------------->
                <!---------------------------------productdetails section ------------------------------------------------------------------------->
                <?php get_template_part('template-parts/content/productdetails'); ?>
                
                

                <?php




                ?>
                <!--------------------------------------------------------------------------------------------------------------------------->
            </div>
            <!---------------------------------lastsection section ------------------------------------------------------------------------->
            <?php get_template_part('template-parts/content/lastsection'); ?>
            <!--------------------------------------------------------------------------------------------------------------------------->
            <?php
            if (have_posts()) :
                while (have_posts()) :
                    the_post();
            ?>
                    <div class="portfolio-item">
                        <!-- <h2 class="portfolio-title"><?php the_title(); ?></h2> -->
                        <div class="portfolio-content">
                            <?php the_content(); ?>
                        </div>
                    </div>
            <?php
                endwhile;
            else :
                echo '<p></p>';
            endif;
            ?>

            <!-- Your custom homepage content goes here -->

    </main>
</div>

<?php get_footer(); ?>